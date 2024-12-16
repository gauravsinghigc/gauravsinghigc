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
              <h4 class="app-sub-heading"><i class="fa fa-calculator text-warning"></i> ROI Calculator for Home Improvements</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="roiCalculatorForm">
                      <!-- Improvement Cost -->
                      <div class="form-group mb-3">
                        <label for="improvementCost">Cost of Improvement (in Rupees):</label>
                        <input type="number" class="form-control" id="improvementCost" required>
                      </div>

                      <!-- Estimated Increase in Home Value -->
                      <div class="form-group mb-3">
                        <label for="valueIncrease">Estimated Increase in Home Value (in Rupees):</label>
                        <input type="number" class="form-control" id="valueIncrease" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateROI()">Calculate ROI</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ROI (%)</th>
                            <th>Return Amount (in Rupees)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="roiResult">0.00</td>
                            <td id="returnAmount">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateROI() {
                  const improvementCost = parseFloat(document.getElementById('improvementCost').value);
                  const valueIncrease = parseFloat(document.getElementById('valueIncrease').value);

                  // Validate input
                  if (improvementCost <= 0 || valueIncrease <= 0) {
                    alert("Please enter valid positive numbers for both fields.");
                    return;
                  }

                  // Calculate ROI
                  const returnAmount = valueIncrease - improvementCost;
                  const roi = (returnAmount / improvementCost) * 100;

                  // Display results
                  displayResults(roi, returnAmount);
                }

                function displayResults(roi, returnAmount) {
                  document.getElementById('roiResult').innerText = roi.toFixed(2);
                  document.getElementById('returnAmount').innerText = returnAmount.toFixed(2);
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