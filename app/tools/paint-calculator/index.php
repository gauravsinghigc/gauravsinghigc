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
                <i class="fa fa-calculator text-warning"></i> Paint Quantity, Labour Charges, and Time Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="paintCalculatorForm">
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
                        <label for="paintCoverage">Paint Coverage (in sq. ft. per liter):</label>
                        <input type="number" class="form-control" id="paintCoverage" value="350" required>
                      </div>
                      <div class="mb-3">
                        <label for="laborRate">Labor Rate (per sq. ft.):</label>
                        <input type="number" class="form-control" id="laborRate" value="12" required>
                      </div>
                      <div class="mb-3">
                        <label for="laborEfficiency">Painter Efficiency (sq. ft. per hour):</label>
                        <input type="number" class="form-control" id="laborEfficiency" value="100" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePaintAndLabour()">Calculate</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Paint Required (Liters)</th>
                            <th>Total Labour Cost (INR)</th>
                            <th>Estimated Time (Hours)</th>
                            <th>Estimated Days</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="paintRequired">0 Liters</td>
                            <td id="labourCost">0 INR</td>
                            <td id="estimatedHours">0 Hours</td>
                            <td id="estimatedDays">0 Days</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePaintAndLabour() {
                  // Get user inputs
                  const roomLength = parseFloat(document.getElementById('roomLength').value);
                  const roomWidth = parseFloat(document.getElementById('roomWidth').value);
                  const roomHeight = parseFloat(document.getElementById('roomHeight').value);
                  const numberOfCoats = parseFloat(document.getElementById('numberOfCoats').value);
                  const paintCoverage = parseFloat(document.getElementById('paintCoverage').value); // in sq. ft. per liter
                  const laborRate = parseFloat(document.getElementById('laborRate').value); // INR per sq. ft.
                  const laborEfficiency = parseFloat(document.getElementById('laborEfficiency').value); // sq. ft. per hour

                  if (isNaN(roomLength) || isNaN(roomWidth) || isNaN(roomHeight) || isNaN(numberOfCoats) || isNaN(paintCoverage) || isNaN(laborRate) || isNaN(laborEfficiency) || roomLength <= 0 || roomWidth <= 0 || roomHeight <= 0 || numberOfCoats <= 0 || paintCoverage <= 0 || laborRate <= 0 || laborEfficiency <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate wall area (assuming 4 walls, without ceiling)
                  const wallArea = 2 * (roomLength + roomWidth) * roomHeight;

                  // Calculate paint required in liters
                  const paintRequired = (wallArea * numberOfCoats) / paintCoverage;

                  // Calculate labour cost
                  const labourCost = wallArea * laborRate;

                  // Calculate estimated time in hours based on labor efficiency
                  const estimatedHours = wallArea / laborEfficiency;

                  // Calculate estimated days (assuming 8 hours per day)
                  const estimatedDays = estimatedHours / 8;

                  // Display results
                  displayResults(paintRequired.toFixed(2), labourCost.toFixed(2), estimatedHours.toFixed(2), estimatedDays.toFixed(2));
                }

                function displayResults(paintRequired, labourCost, estimatedHours, estimatedDays) {
                  document.getElementById('paintRequired').innerText = `${paintRequired} Liters`;
                  document.getElementById('labourCost').innerText = `${labourCost} INR`;
                  document.getElementById('estimatedHours').innerText = `${estimatedHours} Hours`;
                  document.getElementById('estimatedDays').innerText = `${estimatedDays} Days`;
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