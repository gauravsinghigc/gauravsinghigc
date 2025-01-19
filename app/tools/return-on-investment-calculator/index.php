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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Return on Investment (ROI) Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="roiCalculatorForm">
                      <!-- Initial Investment -->
                      <div class="form-group mb-3">
                        <label for="initialInvestment">Initial Investment (in Rs):</label>
                        <input type="number" class="form-control" id="initialInvestment" required>
                      </div>

                      <!-- Final Value -->
                      <div class="form-group mb-3">
                        <label for="finalValue">Final Value (in Rs):</label>
                        <input type="number" class="form-control" id="finalValue" required>
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
                            <th>Profit (Rs)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="roiPercentage">0.00%</td>
                            <td id="profitAmount">0.00 Rs</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateROI() {
                  const initialInvestment = parseFloat(document.getElementById('initialInvestment').value);
                  const finalValue = parseFloat(document.getElementById('finalValue').value);

                  // ROI calculation
                  const profit = finalValue - initialInvestment;
                  const roiPercentage = (profit / initialInvestment) * 100;

                  // Display results
                  displayResults(roiPercentage, profit);
                }

                function displayResults(roiPercentage, profit) {
                  document.getElementById('roiPercentage').innerText = `${roiPercentage.toFixed(2)}%`;
                  document.getElementById('profitAmount').innerText = `${profit.toFixed(2)} Rs`;
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