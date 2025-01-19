<?php
$Dir = "../../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';


$PageActiveKey = IfRequested("GET", "key", IfSessionExists("key", key(TOOLS_MENU)), false);
$PageHeading = IfRequested("GET", "v", IfSessionExists("v", TOOLS_MENU["$PageActiveKey"]["name"]), false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PageHeading; ?> @ <?php echo APP_NAME; ?></title>
  <?php include $Dir . "/assets/HeaderFiles.php"; ?>
  <script type="text/javascript">
    function SidebarActive() {
      document.getElementById("Tools").classList.add("active");
      document.getElementById("<?php echo $PageActiveKey; ?>").classList.add("active");
    }
    window.onload = SidebarActive;
  </script>
</head>

<body>
  <div class="wrapper">
    <?php include $Dir . "/include/common/TopHeader.php"; ?>

    <div class="content-wrapper">
      <?php include $Dir . "/include/common/MainNavbar.php"; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="flex-s-b">
              <h4 class="app-heading w-100 mb-0"><i class='fa fa-calculator text-warning'></i> <?php echo $PageHeading; ?> </h4>
            </div>
          </div>
        </div>
        <div class="row">
          <?php include $Dir . "/include/components/CalculatorMenus.php"; ?>
          <div class="col-md-9 col-lg-9 col-sm-12 col-12">
            <div class="shadow-sm p-3 b-r-1">
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> <?php echo $PageHeading; ?>
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="loadCalculatorForm">
                      <div id="deviceInputs">
                        <!-- Appliance Inputs -->
                        <div class="device-input mb-3">
                          <div class="row">
                            <div class="col">
                              <label for="appliance">Appliance Name:</label>
                              <input type="text" class="form-control" required>
                            </div>
                            <div class="col">
                              <label for="powerRating">Power Rating (Watts):</label>
                              <input type="number" class="form-control" required>
                            </div>
                            <div class="col">
                              <label for="usageHours">Usage Per Day (Hours):</label>
                              <input type="number" class="form-control" required oninput="showAddDeviceButton()">
                            </div>
                            <div class="col">
                              <label for="deviceQty">Quantity:</label>
                              <input type="number" class="form-control" min="1" value="1" required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Add Device Button -->
                      <button type="button" class="btn btn-secondary mb-3" id="addDeviceButton" onclick="addDeviceInput()" style="display:none;">Add Another Device</button>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateLoad()">Calculate Load</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Appliance</th>
                              <th>Power (kWh)</th>
                              <th>Units Per Day (kWh)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody"></tbody>
                          <tfoot>
                            <tr>
                              <th>Total Devices</th>
                              <th id="totalDeviceCount">0</th>
                              <th></th>
                            </tr>
                            <tr>
                              <th>Total</th>
                              <th id="totalPowerConsumption">0.00 kWh</th>
                              <th id="totalUnitsConsumed">0.00 Units</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function showAddDeviceButton() {
                  document.getElementById('addDeviceButton').style.display = 'block';
                }

                function addDeviceInput() {
                  const deviceInputs = document.getElementById('deviceInputs');
                  const newDeviceInput = `
        <div class="device-input mb-3">
          <div class="row">
            <div class="col">
              <label for="appliance">Appliance Name:</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="col">
              <label for="powerRating">Power Rating (Watts):</label>
              <input type="number" class="form-control" required>
            </div>
            <div class="col">
              <label for="usageHours">Usage Per Day (Hours):</label>
              <input type="number" class="form-control" required oninput="showAddDeviceButton()">
            </div>
            <div class="col">
              <label for="deviceQty">Quantity:</label>
              <input type="number" class="form-control" min="1" value="1" required>
            </div>
          </div>
        </div>
      `;
                  deviceInputs.insertAdjacentHTML('beforeend', newDeviceInput);
                  // Hide the button after adding a device
                  document.getElementById('addDeviceButton').style.display = 'none';
                }

                function calculateLoad() {
                  const results = [];
                  const deviceInputs = document.querySelectorAll('.device-input');

                  let totalPowerConsumption = 0;
                  let totalUnitsConsumed = 0;
                  let totalDeviceCount = 0; // Initialize device count

                  deviceInputs.forEach(input => {
                    const appliance = input.querySelector('input[type="text"]').value;
                    const powerRating = parseFloat(input.querySelector('input[type="number"]').value);
                    const usageHours = parseFloat(input.querySelectorAll('input[type="number"]')[1].value);
                    const quantity = parseFloat(input.querySelectorAll('input[type="number"]')[2].value);

                    if (isNaN(powerRating) || isNaN(usageHours) || isNaN(quantity) || powerRating <= 0 || usageHours <= 0 || quantity <= 0) {
                      alert("Please enter valid numbers for all devices.");
                      return;
                    }

                    // Convert Power Rating from Watts to Kilowatts (1 kW = 1000 Watts)
                    const powerConsumption = powerRating / 1000;

                    // Calculate Units Consumed Per Day (kWh)
                    const unitsConsumed = powerConsumption * usageHours * quantity;

                    // Store results
                    results.push({
                      appliance,
                      powerConsumption,
                      unitsConsumed
                    });

                    // Update totals
                    totalPowerConsumption += powerConsumption * quantity; // Multiply by quantity for total power
                    totalUnitsConsumed += unitsConsumed; // Total units consumed
                    totalDeviceCount += quantity; // Count total devices
                  });

                  // Displaying results
                  displayResults(results, totalPowerConsumption, totalUnitsConsumed, totalDeviceCount);
                }

                function displayResults(results, totalPowerConsumption, totalUnitsConsumed, totalDeviceCount) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  resultTableBody.innerHTML = ''; // Clear previous results

                  results.forEach(result => {
                    const row = `
          <tr>
            <td>${result.appliance}</td>
            <td>${result.powerConsumption.toFixed(2)} kWh</td>
            <td>${result.unitsConsumed.toFixed(2)} Units</td>
          </tr>
        `;
                    resultTableBody.insertAdjacentHTML('beforeend', row);
                  });

                  // Update total values
                  document.getElementById('totalPowerConsumption').innerText = `${totalPowerConsumption.toFixed(2)} kWh`;
                  document.getElementById('totalUnitsConsumed').innerText = `${totalUnitsConsumed.toFixed(2)} Units`;
                  document.getElementById('totalDeviceCount').innerText = totalDeviceCount; // Update total device count
                }
              </script>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>