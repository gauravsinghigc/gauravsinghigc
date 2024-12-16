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
  <?php include $Dir . "/assets/app/HeaderFiles.php"; ?>
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
          <?php include $Dir . "/include/app/CalculatorMenus.php"; ?>
          <div class="col-md-9 col-lg-9 col-sm-12 col-12">
            <div class="shadow-sm p-3 b-r-1 mt-3">
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> Plumbing Pipe Sizing Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="pipeSizingForm">
                      <div class="mb-3">
                        <label for="flowRate">Flow Rate (in gallons per minute):</label>
                        <input type="number" class="form-control" id="flowRate" required>
                      </div>
                      <div class="mb-3">
                        <label for="pipeLength">Pipe Length (in feet):</label>
                        <input type="number" class="form-control" id="pipeLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="frictionLoss">Friction Loss (in feet):</label>
                        <input type="number" class="form-control" id="frictionLoss" required>
                      </div>
                      <div class="mb-3">
                        <label for="pipeType">Type of Pipe:</label>
                        <select class="form-control" id="pipeType" required>
                          <option value="PVC">PVC</option>
                          <option value="Copper">Copper</option>
                          <option value="Galvanized">Galvanized</option>
                          <option value="CPVC">CPVC</option>
                        </select>
                      </div>
                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePipeSize()">Calculate Pipe Size</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <h5>Results</h5>
                      <hr>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Pipe Diameter (inches)</th>
                            <th>Pressure Loss (psi)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="pipeDiameter">0 inches</td>
                            <td id="pressureLoss">0 psi</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePipeSize() {
                  // Get user inputs
                  const flowRate = parseFloat(document.getElementById('flowRate').value); // gallons per minute
                  const pipeLength = parseFloat(document.getElementById('pipeLength').value); // feet
                  const frictionLoss = parseFloat(document.getElementById('frictionLoss').value); // feet
                  const pipeType = document.getElementById('pipeType').value; // pipe type

                  // Validate inputs
                  if (isNaN(flowRate) || isNaN(pipeLength) || isNaN(frictionLoss) ||
                    flowRate <= 0 || pipeLength <= 0 || frictionLoss < 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate pipe diameter and pressure loss
                  const pipeDiameter = calculateDiameter(flowRate, pipeLength, frictionLoss, pipeType);
                  const pressureLoss = calculatePressureLoss(flowRate, pipeLength, pipeType);

                  // Display results
                  displayResults(pipeDiameter, pressureLoss);
                }

                function calculateDiameter(flowRate, pipeLength, frictionLoss, pipeType) {
                  // Simple example formula for diameter calculation (adjust as necessary)
                  return (flowRate / (pipeLength * frictionLoss)).toFixed(2);
                }

                function calculatePressureLoss(flowRate, pipeLength, pipeType) {
                  // Simple example calculation for pressure loss (adjust as necessary)
                  return (flowRate * pipeLength / 100).toFixed(2);
                }

                function displayResults(pipeDiameter, pressureLoss) {
                  document.getElementById('pipeDiameter').innerText = `${pipeDiameter} inches`;
                  document.getElementById('pressureLoss').innerText = `${pressureLoss} psi`;
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
  include $Dir . "/assets/app/FooterFiles.php";
  ?>
</body>

</html>