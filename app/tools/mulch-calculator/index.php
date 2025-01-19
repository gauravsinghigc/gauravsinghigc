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
                <i class="fa fa-calculator text-warning"></i> Mulch Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="mulchCalculatorForm">
                      <div class="mb-3">
                        <label for="length">Length of Area (feet):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>
                      <div class="mb-3">
                        <label for="width">Width of Area (feet):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>
                      <div class="mb-3">
                        <label for="depth">Mulch Depth (inches):</label>
                        <input type="number" class="form-control" id="depth" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateMulch()">Calculate Mulch</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Area (sq ft)</th>
                              <th>Total Mulch (cubic feet)</th>
                              <th>Total Mulch (cubic yards)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalArea">0 sq ft</td>
                              <td id="totalMulchCubicFeet">0 cubic feet</td>
                              <td id="totalMulchCubicYards">0 cubic yards</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateMulch() {
                  // Get user inputs
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const depth = parseFloat(document.getElementById('depth').value);

                  if (isNaN(length) || isNaN(width) || isNaN(depth) || length <= 0 || width <= 0 || depth <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate total area in square feet
                  const totalArea = length * width;

                  // Convert depth from inches to feet (12 inches = 1 foot)
                  const depthInFeet = depth / 12;

                  // Calculate the total volume of mulch in cubic feet
                  const totalMulchCubicFeet = totalArea * depthInFeet;

                  // Convert cubic feet to cubic yards (1 cubic yard = 27 cubic feet)
                  const totalMulchCubicYards = totalMulchCubicFeet / 27;

                  // Display results
                  displayResults(totalArea, totalMulchCubicFeet, totalMulchCubicYards);
                }

                function displayResults(totalArea, totalMulchCubicFeet, totalMulchCubicYards) {
                  document.getElementById('totalArea').innerText = `${totalArea.toFixed(2)} sq ft`;
                  document.getElementById('totalMulchCubicFeet').innerText = `${totalMulchCubicFeet.toFixed(2)} cubic feet`;
                  document.getElementById('totalMulchCubicYards').innerText = `${totalMulchCubicYards.toFixed(2)} cubic yards`;
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