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
            <div class="shadow-sm p-3 b-r-1">
              <h4 class="app-sub-heading">
                <i class="fa fa-wrench text-warning"></i> Framing Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="framingCalculatorForm">
                      <div class="mb-3">
                        <label for="wallLength">Wall Length (ft):</label>
                        <input type="number" class="form-control" id="wallLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="wallHeight">Wall Height (ft):</label>
                        <input type="number" class="form-control" id="wallHeight" required>
                      </div>
                      <div class="mb-3">
                        <label for="studSpacing">Stud Spacing (inches):</label>
                        <input type="number" class="form-control" id="studSpacing" required>
                      </div>
                      <div class="mb-3">
                        <label for="numDoors">Number of Doors:</label>
                        <input type="number" class="form-control" id="numDoors" value="0" required>
                      </div>
                      <div class="mb-3">
                        <label for="numWindows">Number of Windows:</label>
                        <input type="number" class="form-control" id="numWindows" value="0" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateFraming()">Calculate Framing</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <h6 class="bold">Results</h6>
                      <hr>
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Studs Required</th>
                              <th>Total Material Cost (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalStuds">0</td>
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
                function calculateFraming() {
                  // Get user inputs
                  const wallLength = parseFloat(document.getElementById('wallLength').value);
                  const wallHeight = parseFloat(document.getElementById('wallHeight').value);
                  const studSpacing = parseFloat(document.getElementById('studSpacing').value) / 12; // Convert to feet
                  const numDoors = parseInt(document.getElementById('numDoors').value) || 0;
                  const numWindows = parseInt(document.getElementById('numWindows').value) || 0;

                  if (isNaN(wallLength) || wallLength <= 0 || isNaN(wallHeight) || wallHeight <= 0 || isNaN(studSpacing) || studSpacing <= 0) {
                    alert("Please enter valid dimensions for wall length, height, and stud spacing.");
                    return;
                  }

                  // Calculate the total area of the wall
                  const wallArea = wallLength * wallHeight;

                  // Estimate the total number of studs required
                  const totalStuds = Math.ceil(wallLength / studSpacing) + 1; // Plus one for the end stud

                  // Calculate the total area to subtract for doors and windows
                  const doorArea = numDoors * 21; // Assuming 3x7 ft door
                  const windowArea = numWindows * 15; // Assuming 3x5 ft window

                  const adjustedArea = wallArea - (doorArea + windowArea);
                  const totalStudsAdjusted = Math.ceil(adjustedArea / (studSpacing * wallHeight)) + 1;

                  // Estimate the cost
                  const costPerStud = 150; // Example cost per stud
                  const totalCost = totalStudsAdjusted * costPerStud;

                  // Display results
                  displayResults(totalStudsAdjusted, totalCost);
                }

                function displayResults(totalStuds, totalCost) {
                  document.getElementById('totalStuds').innerText = totalStuds;
                  document.getElementById('totalCost').innerText = `₹${totalCost.toFixed(2)}`;
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