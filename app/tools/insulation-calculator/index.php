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
                <i class="fa fa-calculator text-warning"></i> Insulation Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="insulationCalculatorForm">
                      <div class="mb-3">
                        <label for="area">Area to be Insulated (sq. ft):</label>
                        <input type="number" class="form-control" id="area" required>
                      </div>
                      <div class="mb-3">
                        <label for="tempDifference">Desired Temperature Difference (°F):</label>
                        <input type="number" class="form-control" id="tempDifference" required>
                      </div>
                      <div class="mb-3">
                        <label for="rValue">Insulation Material R-value:</label>
                        <input type="number" class="form-control" id="rValue" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateInsulation()">Calculate Insulation Required</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Heat Loss (BTU/hr)</th>
                              <th>Insulation Thickness (inches)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="heatLoss">0</td>
                              <td id="insulationThickness">0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateInsulation() {
                  // Get user inputs
                  const area = parseFloat(document.getElementById('area').value);
                  const tempDifference = parseFloat(document.getElementById('tempDifference').value);
                  const rValue = parseFloat(document.getElementById('rValue').value);

                  if (isNaN(area) || area <= 0 || isNaN(tempDifference) || tempDifference <= 0 || isNaN(rValue) || rValue <= 0) {
                    alert("Please enter valid values for area, temperature difference, and R-value.");
                    return;
                  }

                  // Calculate heat loss (BTU/hr) using the formula: BTU/hr = (Area * Temperature Difference) / R-value
                  const heatLoss = (area * tempDifference) / rValue;

                  // Calculate the insulation thickness in inches
                  const insulationThickness = rValue * 0.5; // Example: 0.5 inch of insulation per R-value

                  // Display results
                  displayResults(heatLoss.toFixed(2), insulationThickness.toFixed(2));
                }

                function displayResults(heatLoss, insulationThickness) {
                  document.getElementById('heatLoss').innerText = heatLoss;
                  document.getElementById('insulationThickness').innerText = insulationThickness;
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