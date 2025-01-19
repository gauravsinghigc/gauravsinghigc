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
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> HVAC Load Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="hvacCalculatorForm">
                      <div class="mb-3">
                        <label for="area">Area to be Cooled (sq. ft):</label>
                        <input type="number" class="form-control" id="area" required>
                      </div>
                      <div class="mb-3">
                        <label for="insulation">Insulation Factor (R-value):</label>
                        <input type="number" class="form-control" id="insulation" required>
                      </div>
                      <div class="mb-3">
                        <label for="usageHours">Usage Per Day (Hours):</label>
                        <input type="number" class="form-control" id="usageHours" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateHVACLoad()">Calculate Load</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total HVAC Load (BTU/hr)</th>
                              <th>Units Consumed Per Day (kWh)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalHVACLoad">0</td>
                              <td id="totalUnitsConsumed">0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateHVACLoad() {
                  // Get user inputs
                  const area = parseFloat(document.getElementById('area').value);
                  const insulation = parseFloat(document.getElementById('insulation').value);
                  const usageHours = parseFloat(document.getElementById('usageHours').value);

                  if (isNaN(area) || area <= 0 || isNaN(insulation) || insulation <= 0 || isNaN(usageHours) || usageHours <= 0) {
                    alert("Please enter valid values for area, insulation, and usage hours.");
                    return;
                  }

                  // Calculate total HVAC load (BTU/hr) - A rough estimate formula
                  const btuPerSqFt = 20; // Approximate BTU required per sq ft
                  const totalHVACLoad = area * btuPerSqFt / insulation; // Adjusted by insulation factor

                  // Calculate units consumed per day (kWh)
                  const hoursPerDay = 24; // Assume the HVAC system runs for this many hours in a day
                  const powerConsumption = totalHVACLoad / 1000; // Convert BTU/hr to kW
                  const totalUnitsConsumed = powerConsumption * usageHours; // kWh

                  // Display results
                  displayResults(totalHVACLoad.toFixed(2), totalUnitsConsumed.toFixed(2));
                }

                function displayResults(totalHVACLoad, totalUnitsConsumed) {
                  document.getElementById('totalHVACLoad').innerText = totalHVACLoad;
                  document.getElementById('totalUnitsConsumed').innerText = totalUnitsConsumed;
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