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
              <h4 class="app-sub-heading"><i class="fa fa-calculator text-warning"></i> Window Efficiency Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="windowEfficiencyCalculatorForm">
                      <!-- Window Size -->
                      <div class="form-group mb-3">
                        <label for="windowArea">Window Area (in square feet):</label>
                        <input type="number" class="form-control" id="windowArea" required>
                      </div>

                      <!-- U-Value -->
                      <div class="form-group mb-3">
                        <label for="uValue">U-Value (BTU/hr·ft²·°F):</label>
                        <input type="number" class="form-control" id="uValue" step="0.01" required>
                      </div>

                      <!-- Temperature Difference -->
                      <div class="form-group mb-3">
                        <label for="temperatureDifference">Temperature Difference (in °F):</label>
                        <input type="number" class="form-control" id="temperatureDifference" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateWindowEfficiency()">Calculate Window Efficiency</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Heat Loss (BTU/hr)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="heatLossResult">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateWindowEfficiency() {
                  const windowArea = parseFloat(document.getElementById('windowArea').value);
                  const uValue = parseFloat(document.getElementById('uValue').value);
                  const temperatureDifference = parseFloat(document.getElementById('temperatureDifference').value);

                  // Validate input
                  if (windowArea <= 0 || uValue <= 0 || temperatureDifference <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Calculate Heat Loss using the formula
                  const heatLoss = uValue * windowArea * temperatureDifference;

                  // Display results
                  displayResults(heatLoss);
                }

                function displayResults(heatLoss) {
                  document.getElementById('heatLossResult').innerText = heatLoss.toFixed(2);
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