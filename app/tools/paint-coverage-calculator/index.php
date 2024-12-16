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
                <i class="fa fa-calculator text-warning"></i> Paint Coverage and Quantity Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="paintCoverageForm">
                      <div class="mb-3">
                        <label for="roomLength">Room Length (in feet):</label>
                        <input type="number" class="form-control" id="roomLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="roomWidth">Room Width (in feet):</label>
                        <input type="number" class="form-control" id="roomWidth" required>
                      </div>
                      <div class="mb-3">
                        <label for="roomHeight">Room Height (in feet):</label>
                        <input type="number" class="form-control" id="roomHeight" required>
                      </div>
                      <div class="mb-3">
                        <label for="numberOfCoats">Number of Coats:</label>
                        <input type="number" class="form-control" id="numberOfCoats" value="2" required>
                      </div>
                      <div class="mb-3">
                        <label for="paintCoverage">Paint Coverage (sq. ft. per liter):</label>
                        <input type="number" class="form-control" id="paintCoverage" value="350" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePaintCoverage()">Calculate Paint Quantity</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <h5>Results</h5>
                      <hr>
                      <p id="resultText"></p> <!-- Textual description of results -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Wall Area (sq. ft.)</th>
                            <th>Paint Required (Liters)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalWallArea">0 sq. ft.</td>
                            <td id="paintRequired">0 Liters</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePaintCoverage() {
                  // Get user inputs
                  const roomLength = parseFloat(document.getElementById('roomLength').value);
                  const roomWidth = parseFloat(document.getElementById('roomWidth').value);
                  const roomHeight = parseFloat(document.getElementById('roomHeight').value);
                  const numberOfCoats = parseFloat(document.getElementById('numberOfCoats').value);
                  const paintCoverage = parseFloat(document.getElementById('paintCoverage').value); // in sq. ft. per liter

                  if (isNaN(roomLength) || isNaN(roomWidth) || isNaN(roomHeight) || isNaN(numberOfCoats) || isNaN(paintCoverage) || roomLength <= 0 || roomWidth <= 0 || roomHeight <= 0 || numberOfCoats <= 0 || paintCoverage <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate total wall area (assuming 4 walls, without ceiling)
                  const totalWallArea = 2 * (roomLength + roomWidth) * roomHeight;

                  // Calculate paint required in liters
                  const paintRequired = (totalWallArea * numberOfCoats) / paintCoverage;

                  // Display results
                  displayResults(totalWallArea.toFixed(2), paintRequired.toFixed(2));
                }

                function displayResults(totalWallArea, paintRequired) {
                  document.getElementById('totalWallArea').innerText = `${totalWallArea} sq. ft.`;
                  document.getElementById('paintRequired').innerText = `${paintRequired} Liters`;

                  // Display the results in a descriptive text format
                  const resultText = `
        For a room with a total wall area of ${totalWallArea} square feet, 
        and applying ${document.getElementById('numberOfCoats').value} coats of paint, 
        you will need approximately ${paintRequired} liters of paint. 
        This is based on a paint coverage rate of ${document.getElementById('paintCoverage').value} sq. ft. per liter.
      `;
                  document.getElementById('resultText').innerText = resultText;
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