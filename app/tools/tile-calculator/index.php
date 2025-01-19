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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Tile Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="tileCalculatorForm">
                      <!-- Area Length -->
                      <div class="form-group mb-3">
                        <label for="areaLength">Length of Area (in feet):</label>
                        <input type="number" class="form-control" id="areaLength" required>
                      </div>

                      <!-- Area Width -->
                      <div class="form-group mb-3">
                        <label for="areaWidth">Width of Area (in feet):</label>
                        <input type="number" class="form-control" id="areaWidth" required>
                      </div>

                      <!-- Tile Size -->
                      <div class="form-group mb-3">
                        <label for="tileSize">Tile Size (in square feet):</label>
                        <input type="number" class="form-control" id="tileSize" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateTiles()">Calculate Tiles</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Tiles Required</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalTiles">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateTiles() {
                  const areaLength = parseFloat(document.getElementById('areaLength').value);
                  const areaWidth = parseFloat(document.getElementById('areaWidth').value);
                  const tileSize = parseFloat(document.getElementById('tileSize').value);

                  // Validate input
                  if (areaLength <= 0 || areaWidth <= 0 || tileSize <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Calculate the area of the space to be tiled
                  const area = areaLength * areaWidth;

                  // Calculate the number of tiles required
                  const totalTiles = Math.ceil(area / tileSize); // Round up to the nearest whole number

                  // Display results
                  displayResults(totalTiles);
                }

                function displayResults(totalTiles) {
                  document.getElementById('totalTiles').innerText = totalTiles;
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