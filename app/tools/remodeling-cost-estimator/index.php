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
            <div class="shadow-sm p-3 b-r-1 mt-3">
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Remodeling Cost Estimator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="remodelingCostEstimatorForm">
                      <!-- Total Area -->
                      <div class="form-group mb-3">
                        <label for="totalArea">Total Area (sq. meters):</label>
                        <input type="number" class="form-control" id="totalArea" required>
                      </div>

                      <!-- Kitchen Remodeling Cost -->
                      <div class="form-group mb-3">
                        <label for="kitchenCost">Kitchen Remodeling Cost (in Rs):</label>
                        <input type="number" class="form-control" id="kitchenCost" required>
                      </div>

                      <!-- Bathroom Remodeling Cost -->
                      <div class="form-group mb-3">
                        <label for="bathroomCost">Bathroom Remodeling Cost (in Rs):</label>
                        <input type="number" class="form-control" id="bathroomCost" required>
                      </div>

                      <!-- Living Room Remodeling Cost -->
                      <div class="form-group mb-3">
                        <label for="livingRoomCost">Living Room Remodeling Cost (in Rs):</label>
                        <input type="number" class="form-control" id="livingRoomCost" required>
                      </div>

                      <!-- Bedroom Remodeling Cost -->
                      <div class="form-group mb-3">
                        <label for="bedroomCost">Bedroom Remodeling Cost (in Rs):</label>
                        <input type="number" class="form-control" id="bedroomCost" required>
                      </div>

                      <!-- Other Remodeling Costs -->
                      <div class="form-group mb-3">
                        <label for="otherCost">Other Remodeling Cost (in Rs):</label>
                        <input type="number" class="form-control" id="otherCost" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateRemodelingCosts()">Calculate Costs</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Cost Type</th>
                            <th>Total Cost (Rs)</th>
                            <th>Per Unit Area (Rs/sq.m)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody"></tbody>
                        <tfoot>
                          <tr>
                            <th>Total</th>
                            <th id="totalCost">0.00 Rs</th>
                            <th id="perUnitAreaCost">0.00 Rs/sq.m</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateRemodelingCosts() {
                  const totalArea = parseFloat(document.getElementById('totalArea').value);
                  const kitchenCost = parseFloat(document.getElementById('kitchenCost').value);
                  const bathroomCost = parseFloat(document.getElementById('bathroomCost').value);
                  const livingRoomCost = parseFloat(document.getElementById('livingRoomCost').value);
                  const bedroomCost = parseFloat(document.getElementById('bedroomCost').value);
                  const otherCost = parseFloat(document.getElementById('otherCost').value);

                  // Total cost calculation
                  const totalCost = kitchenCost + bathroomCost + livingRoomCost + bedroomCost + otherCost;

                  // Per unit area calculation
                  const perUnitAreaCost = totalCost / totalArea;

                  // Display results
                  displayResults(totalCost, perUnitAreaCost);
                }

                function displayResults(totalCost, perUnitAreaCost) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  resultTableBody.innerHTML = ''; // Clear previous results

                  const costTypes = [{
                      type: "Kitchen Remodeling Cost",
                      amount: parseFloat(document.getElementById('kitchenCost').value)
                    },
                    {
                      type: "Bathroom Remodeling Cost",
                      amount: parseFloat(document.getElementById('bathroomCost').value)
                    },
                    {
                      type: "Living Room Remodeling Cost",
                      amount: parseFloat(document.getElementById('livingRoomCost').value)
                    },
                    {
                      type: "Bedroom Remodeling Cost",
                      amount: parseFloat(document.getElementById('bedroomCost').value)
                    },
                    {
                      type: "Other Remodeling Cost",
                      amount: parseFloat(document.getElementById('otherCost').value)
                    },
                  ];

                  costTypes.forEach(cost => {
                    const row = `
                <tr>
                    <td>${cost.type}</td>
                    <td>${cost.amount.toFixed(2)} Rs</td>
                    <td>${(cost.amount / parseFloat(document.getElementById('totalArea').value)).toFixed(2)} Rs/sq.m</td>
                </tr>
                `;
                    resultTableBody.insertAdjacentHTML('beforeend', row);
                  });

                  // Update total values
                  document.getElementById('totalCost').innerText = `${totalCost.toFixed(2)} Rs`;
                  document.getElementById('perUnitAreaCost').innerText = `${perUnitAreaCost.toFixed(2)} Rs/sq.m`;
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