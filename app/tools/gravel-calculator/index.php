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
                <i class="fa fa-calculator text-warning"></i> Gravel Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="gravelCalculatorForm">
                      <div class="mb-3">
                        <label for="length">Length of Area (ft):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>
                      <div class="mb-3">
                        <label for="width">Width of Area (ft):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>
                      <div class="mb-3">
                        <label for="depth">Depth of Gravel (inches):</label>
                        <input type="number" class="form-control" id="depth" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateGravel()">Calculate Gravel</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Gravel Needed (Cubic Yards)</th>
                              <th>Total Cost (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalGravel">0</td>
                              <td id="totalCost">0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateGravel() {
                  // Get user inputs
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const depth = parseFloat(document.getElementById('depth').value) / 12; // Convert depth from inches to feet

                  if (isNaN(length) || length <= 0 || isNaN(width) || width <= 0 || isNaN(depth) || depth <= 0) {
                    alert("Please enter valid dimensions for length, width, and depth.");
                    return;
                  }

                  // Calculate the volume in cubic feet
                  const volumeCubicFeet = length * width * depth;

                  // Convert volume to cubic yards (1 cubic yard = 27 cubic feet)
                  const volumeCubicYards = volumeCubicFeet / 27;

                  // Estimate the cost (Assuming a cost of ₹1000 per cubic yard of gravel)
                  const costPerCubicYard = 1000;
                  const totalCost = volumeCubicYards * costPerCubicYard;

                  // Display results
                  displayResults(volumeCubicYards.toFixed(2), totalCost.toFixed(2));
                }

                function displayResults(totalGravel, totalCost) {
                  document.getElementById('totalGravel').innerText = totalGravel;
                  document.getElementById('totalCost').innerText = `₹${totalCost}`;
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