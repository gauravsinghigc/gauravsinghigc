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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Solar Panel Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="solarPanelCalculatorForm">
                      <!-- Daily Energy Consumption -->
                      <div class="form-group mb-3">
                        <label for="dailyConsumption">Daily Energy Consumption (in kWh):</label>
                        <input type="number" class="form-control" id="dailyConsumption" required>
                      </div>

                      <!-- Solar Panel Wattage -->
                      <div class="form-group mb-3">
                        <label for="panelWattage">Solar Panel Wattage (in Watts):</label>
                        <input type="number" class="form-control" id="panelWattage" required>
                      </div>

                      <!-- Average Sunlight Hours -->
                      <div class="form-group mb-3">
                        <label for="sunlightHours">Average Sunlight Hours per Day:</label>
                        <input type="number" class="form-control" id="sunlightHours" value="5" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateSolarPanels()">Calculate Solar Panels</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Panels Required</th>
                            <th>Total Energy Production (kWh)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalPanels">0</td>
                            <td id="totalProduction">0.00 kWh</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateSolarPanels() {
                  const dailyConsumption = parseFloat(document.getElementById('dailyConsumption').value);
                  const panelWattage = parseFloat(document.getElementById('panelWattage').value);
                  const sunlightHours = parseFloat(document.getElementById('sunlightHours').value);

                  // Validate input
                  if (dailyConsumption <= 0 || panelWattage <= 0 || sunlightHours <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Calculate the total energy produced by one panel per day in kWh
                  const energyPerPanel = (panelWattage / 1000) * sunlightHours; // Convert Watts to kW

                  // Calculate the number of panels required
                  const totalPanels = Math.ceil(dailyConsumption / energyPerPanel);

                  // Calculate total energy production for the number of panels
                  const totalProduction = totalPanels * energyPerPanel;

                  // Display results
                  displayResults(totalPanels, totalProduction);
                }

                function displayResults(totalPanels, totalProduction) {
                  document.getElementById('totalPanels').innerText = totalPanels;
                  document.getElementById('totalProduction').innerText = `${totalProduction.toFixed(2)} kWh`;
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