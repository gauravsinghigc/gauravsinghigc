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
              <h4 class="app-sub-heading"><i class="fa fa-calculator text-warning"></i> Home Insurance Coverage Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="homeInsuranceCalculatorForm">
                      <!-- Home Value -->
                      <div class="form-group mb-3">
                        <label for="homeValue">Estimated Home Value (in Rupees):</label>
                        <input type="number" class="form-control" id="homeValue" required>
                      </div>

                      <!-- Personal Property Value -->
                      <div class="form-group mb-3">
                        <label for="personalPropertyValue">Estimated Value of Personal Property (in Rupees):</label>
                        <input type="number" class="form-control" id="personalPropertyValue" required>
                      </div>

                      <!-- Liability Coverage -->
                      <div class="form-group mb-3">
                        <label for="liabilityCoverage">Liability Coverage (in Rupees):</label>
                        <input type="number" class="form-control" id="liabilityCoverage" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateInsuranceCoverage()">Calculate Insurance Coverage</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Coverage Needed (in Rupees)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalCoverageResult">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateInsuranceCoverage() {
                  const homeValue = parseFloat(document.getElementById('homeValue').value);
                  const personalPropertyValue = parseFloat(document.getElementById('personalPropertyValue').value);
                  const liabilityCoverage = parseFloat(document.getElementById('liabilityCoverage').value);

                  // Validate input
                  if (homeValue <= 0 || personalPropertyValue < 0 || liabilityCoverage < 0) {
                    alert("Please enter valid positive numbers for home value and non-negative numbers for personal property and liability coverage.");
                    return;
                  }

                  // Calculate Total Coverage Needed
                  const totalCoverage = homeValue + personalPropertyValue + liabilityCoverage;

                  // Display results
                  displayResults(totalCoverage);
                }

                function displayResults(totalCoverage) {
                  document.getElementById('totalCoverageResult').innerText = totalCoverage.toFixed(2);
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