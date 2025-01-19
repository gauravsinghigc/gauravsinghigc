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
              <h4 class="app-sub-heading"><i class="fa fa-calculator text-warning"></i> Home Value Estimator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="homeValueEstimatorForm">
                      <!-- Home Size -->
                      <div class="form-group mb-3">
                        <label for="homeSize">Home Size (in square feet):</label>
                        <input type="number" class="form-control" id="homeSize" required>
                      </div>

                      <!-- Location Multiplier -->
                      <div class="form-group mb-3">
                        <label for="location">Location Multiplier (1-3):</label>
                        <select class="form-control" id="location" required>
                          <option value="">Select Location</option>
                          <option value="1">Low Demand Area</option>
                          <option value="2">Average Demand Area</option>
                          <option value="3">High Demand Area</option>
                        </select>
                      </div>

                      <!-- Number of Bedrooms -->
                      <div class="form-group mb-3">
                        <label for="bedrooms">Number of Bedrooms:</label>
                        <input type="number" class="form-control" id="bedrooms" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateHomeValue()">Estimate Home Value</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Estimated Home Value (in Rupees)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="homeValueResult">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateHomeValue() {
                  const homeSize = parseFloat(document.getElementById('homeSize').value);
                  const locationMultiplier = parseFloat(document.getElementById('location').value);
                  const bedrooms = parseFloat(document.getElementById('bedrooms').value);

                  // Validate input
                  if (homeSize <= 0 || locationMultiplier < 1 || locationMultiplier > 3 || bedrooms < 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Base price per square foot (can vary by region)
                  const basePricePerSquareFoot = 1500; // Example value in Rupees

                  // Calculate Estimated Home Value
                  const estimatedValue = (homeSize * basePricePerSquareFoot * locationMultiplier) + (bedrooms * 200000); // Additional value per bedroom

                  // Display results
                  displayResults(estimatedValue);
                }

                function displayResults(estimatedValue) {
                  document.getElementById('homeValueResult').innerText = estimatedValue.toFixed(2);
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