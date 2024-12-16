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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Sewage Pipe Size Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="sewagePipeCalculatorForm">
                      <!-- Flow Rate -->
                      <div class="form-group mb-3">
                        <label for="flowRate">Flow Rate (in gallons per minute):</label>
                        <input type="number" class="form-control" id="flowRate" required>
                      </div>

                      <!-- Pipe Material -->
                      <div class="form-group mb-3">
                        <label for="pipeMaterial">Type of Fluid:</label>
                        <select class="form-control" id="pipeMaterial">
                          <option value="water">Water</option>
                          <option value="sewage">Sewage</option>
                          <option value="stormwater">Stormwater</option>
                        </select>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePipeSize()">Calculate Pipe Size</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Recommended Pipe Size (in inches)</th>
                            <th>Velocity (ft/s)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="pipeSize">0.00 in</td>
                            <td id="velocity">0.00 ft/s</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePipeSize() {
                  const flowRate = parseFloat(document.getElementById('flowRate').value);
                  const pipeMaterial = document.getElementById('pipeMaterial').value;

                  // Validate input
                  if (flowRate <= 0) {
                    alert("Please enter a valid positive flow rate.");
                    return;
                  }

                  let pipeSize, velocity;

                  // Basic calculation for recommended pipe size based on flow rate
                  // Note: Actual formulas may vary based on standards and engineering practices
                  if (pipeMaterial === "water") {
                    pipeSize = flowRate / 7.48; // Simplified for example; use a correct formula in practice
                    velocity = 2.5; // Example velocity for water
                  } else if (pipeMaterial === "sewage") {
                    pipeSize = flowRate / 5; // Simplified for sewage
                    velocity = 2.0; // Example velocity for sewage
                  } else {
                    pipeSize = flowRate / 10; // Simplified for stormwater
                    velocity = 3.0; // Example velocity for stormwater
                  }

                  // Display results
                  displayResults(pipeSize, velocity);
                }

                function displayResults(pipeSize, velocity) {
                  document.getElementById('pipeSize').innerText = `${pipeSize.toFixed(2)} in`;
                  document.getElementById('velocity').innerText = `${velocity.toFixed(2)} ft/s`;
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