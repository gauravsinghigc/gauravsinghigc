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
                <i class="fa fa-calculator text-warning"></i> Plant Spacing Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="plantSpacingForm">
                      <div class="mb-3">
                        <label for="areaLength">Area Length (in feet):</label>
                        <input type="number" class="form-control" id="areaLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="areaWidth">Area Width (in feet):</label>
                        <input type="number" class="form-control" id="areaWidth" required>
                      </div>
                      <div class="mb-3">
                        <label for="plantSpacing">Desired Plant Spacing (in inches):</label>
                        <input type="number" class="form-control" id="plantSpacing" required>
                      </div>
                      <div class="mb-3">
                        <label for="gapBetweenPlants">Gap Between Plants (in inches):</label>
                        <input type="number" class="form-control" id="gapBetweenPlants" required>
                      </div>
                      <div class="mb-3">
                        <label for="spaceFromBoundary">Space from Boundary (in inches):</label>
                        <input type="number" class="form-control" id="spaceFromBoundary" required>
                      </div>
                      <div class="mb-3">
                        <label for="numberOfRows">Number of Plant Rows from Boundaries:</label>
                        <input type="number" class="form-control" id="numberOfRows" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePlantSpacing()">Calculate Plant Spacing</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <h5>Results</h5>
                      <hr>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Area (sq. ft.)</th>
                            <th>Total Plants Possible</th>
                            <th>Empty Space Area (sq. ft.)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalArea">0 sq. ft.</td>
                            <td id="totalPlants">0 Plants</td>
                            <td id="emptySpace">0 sq. ft.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePlantSpacing() {
                  // Get user inputs
                  const areaLength = parseFloat(document.getElementById('areaLength').value);
                  const areaWidth = parseFloat(document.getElementById('areaWidth').value);
                  const plantSpacing = parseFloat(document.getElementById('plantSpacing').value); // in inches
                  const gapBetweenPlants = parseFloat(document.getElementById('gapBetweenPlants').value); // in inches
                  const spaceFromBoundary = parseFloat(document.getElementById('spaceFromBoundary').value); // in inches
                  const numberOfRows = parseFloat(document.getElementById('numberOfRows').value); // number of rows from boundaries

                  // Validate inputs
                  if (isNaN(areaLength) || isNaN(areaWidth) || isNaN(plantSpacing) || isNaN(gapBetweenPlants) || isNaN(spaceFromBoundary) || isNaN(numberOfRows) ||
                    areaLength <= 0 || areaWidth <= 0 || plantSpacing <= 0 || gapBetweenPlants < 0 || spaceFromBoundary < 0 || numberOfRows < 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Convert area dimensions to square feet
                  const totalArea = areaLength * areaWidth;

                  // Convert measurements from inches to feet
                  const spacingInFeet = (plantSpacing + gapBetweenPlants) / 12; // total spacing in feet between plants
                  const boundaryInFeet = spaceFromBoundary / 12; // space from boundary in feet

                  // Calculate usable planting area dimensions
                  const usableLength = areaLength - (2 * boundaryInFeet);
                  const usableWidth = areaWidth - (2 * boundaryInFeet) - (numberOfRows * spacingInFeet); // accounting for rows from boundaries

                  // Calculate the number of plants possible
                  const plantsPerRow = Math.floor(usableWidth / spacingInFeet);
                  const rows = Math.floor(usableLength / spacingInFeet);
                  const totalPlants = plantsPerRow * rows;

                  // Calculate empty space area
                  const emptySpaceArea = totalArea - (totalPlants * spacingInFeet * spacingInFeet);

                  // Display results
                  displayResults(totalArea.toFixed(2), totalPlants, emptySpaceArea.toFixed(2));
                }

                function displayResults(totalArea, totalPlants, emptySpaceArea) {
                  document.getElementById('totalArea').innerText = `${totalArea} sq. ft.`;
                  document.getElementById('totalPlants').innerText = `${totalPlants} Plants`;
                  document.getElementById('emptySpace').innerText = `${emptySpaceArea} sq. ft.`;
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