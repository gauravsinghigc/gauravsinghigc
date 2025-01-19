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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Water Flow Rate Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="flowRateCalculatorForm">
                      <!-- Pipe Diameter -->
                      <div class="form-group mb-3">
                        <label for="pipeDiameter">Pipe Diameter (in inches):</label>
                        <input type="number" class="form-control" id="pipeDiameter" required>
                      </div>

                      <!-- Water Velocity -->
                      <div class="form-group mb-3">
                        <label for="waterVelocity">Water Velocity (in feet per second):</label>
                        <input type="number" class="form-control" id="waterVelocity" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateFlowRate()">Calculate Flow Rate</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Flow Rate (Gallons per Minute)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="flowRateResult">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateFlowRate() {
                  const pipeDiameter = parseFloat(document.getElementById('pipeDiameter').value);
                  const waterVelocity = parseFloat(document.getElementById('waterVelocity').value);

                  // Validate input
                  if (pipeDiameter <= 0 || waterVelocity <= 0) {
                    alert("Please enter valid positive numbers for both fields.");
                    return;
                  }

                  // Convert diameter from inches to feet
                  const diameterInFeet = pipeDiameter / 12;

                  // Calculate the area of the pipe (in square feet)
                  const area = Math.PI * Math.pow(diameterInFeet / 2, 2);

                  // Calculate flow rate in cubic feet per second
                  const flowRateCubicFeetPerSecond = area * waterVelocity;

                  // Convert flow rate to gallons per minute (1 cubic foot = 7.48 gallons)
                  const flowRateGPM = flowRateCubicFeetPerSecond * 7.48 * 60;

                  // Display results
                  displayResults(flowRateGPM);
                }

                function displayResults(flowRateGPM) {
                  document.getElementById('flowRateResult').innerText = flowRateGPM.toFixed(2);
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