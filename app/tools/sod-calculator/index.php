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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Sod Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="sodCalculatorForm">
                      <!-- Area Length -->
                      <div class="form-group mb-3">
                        <label for="areaLength">Area Length (in feet):</label>
                        <input type="number" class="form-control" id="areaLength" required>
                      </div>

                      <!-- Area Width -->
                      <div class="form-group mb-3">
                        <label for="areaWidth">Area Width (in feet):</label>
                        <input type="number" class="form-control" id="areaWidth" required>
                      </div>

                      <!-- Sod Coverage Area -->
                      <div class="form-group mb-3">
                        <label for="sodCoverage">Sod Coverage Area (in square feet per roll):</label>
                        <input type="number" class="form-control" id="sodCoverage" value="10" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateSod()">Calculate Sod</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Area (sq ft)</th>
                            <th>Rolls Required</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalArea">0.00 sq ft</td>
                            <td id="rollsRequired">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateSod() {
                  const areaLength = parseFloat(document.getElementById('areaLength').value);
                  const areaWidth = parseFloat(document.getElementById('areaWidth').value);
                  const sodCoverage = parseFloat(document.getElementById('sodCoverage').value);

                  // Validate input
                  if (areaLength <= 0 || areaWidth <= 0 || sodCoverage <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Calculate the total area
                  const totalArea = areaLength * areaWidth;

                  // Calculate the number of rolls required
                  const rollsRequired = Math.ceil(totalArea / sodCoverage);

                  // Display results
                  displayResults(totalArea, rollsRequired);
                }

                function displayResults(totalArea, rollsRequired) {
                  document.getElementById('totalArea').innerText = `${totalArea.toFixed(2)} sq ft`;
                  document.getElementById('rollsRequired').innerText = rollsRequired;
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