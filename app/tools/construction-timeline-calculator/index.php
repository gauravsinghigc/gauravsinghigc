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
            <div class="shadow-sm p-3 b-r-1">
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> <?php echo $PageHeading; ?></h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Construction Estimate Time Calculator</h3>
                    <hr>
                    <form id="timeCalculatorForm">
                      <!-- Total Construction Area -->
                      <div class="form-group mb-3">
                        <label for="totalArea">Total Construction Area (sq. meters):</label>
                        <input type="number" class="form-control" id="totalArea" required>
                      </div>

                      <!-- Daily Work Rate -->
                      <div class="form-group mb-3">
                        <label for="dailyRate">Work Done Per Day (sq. meters/day):</label>
                        <input type="number" class="form-control" id="dailyRate" required>
                      </div>

                      <!-- Total Workforce -->
                      <div class="form-group mb-3">
                        <label for="workforce">Total Workforce (number of workers):</label>
                        <input type="number" class="form-control" id="workforce" required>
                      </div>

                      <!-- Estimate Time Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateEstimateTime()">Estimate Time</button>
                    </form>
                  </div>

                  <div class="col-md-4">
                    <div class="result-section mt-4" id="resultSection">
                      <h6 class="bold">Results</h6>
                      <hr>
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Days</th>
                              <th>Total Weeks</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateEstimateTime() {
                  const totalArea = parseFloat(document.getElementById('totalArea').value);
                  const dailyRate = parseFloat(document.getElementById('dailyRate').value);
                  const workforce = parseFloat(document.getElementById('workforce').value);

                  if (isNaN(totalArea) || isNaN(dailyRate) || isNaN(workforce) || dailyRate === 0 || workforce === 0) {
                    alert("Please enter valid numbers.");
                    return;
                  }

                  // Formula for calculating estimated time
                  const totalWorkPerDay = dailyRate * workforce; // Total area covered by all workers in a day
                  const totalDays = totalArea / totalWorkPerDay;
                  const totalWeeks = totalDays / 7;

                  // Displaying results
                  displayResults(totalDays.toFixed(2), totalWeeks.toFixed(2));
                }

                function displayResults(totalDays, totalWeeks) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  const row = `
        <tr>
          <td>${totalDays} days</td>
          <td>${totalWeeks} weeks</td>
        </tr>
      `;
                  resultTableBody.innerHTML = row;
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