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
                <i class="fa fa-calculator text-warning"></i> Paver Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="paverCalculatorForm">
                      <div class="mb-3">
                        <label for="patioLength">Patio Length (in feet):</label>
                        <input type="number" class="form-control" id="patioLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="patioWidth">Patio Width (in feet):</label>
                        <input type="number" class="form-control" id="patioWidth" required>
                      </div>
                      <div class="mb-3">
                        <label for="paverSize">Paver Size (in square inches):</label>
                        <input type="number" class="form-control" id="paverSize" value="144" required>
                        <small class="text-muted">Example: A 12x12 inch paver = 144 square inches</small>
                      </div>
                      <div class="mb-3">
                        <label for="paverGap">Gap Between Pavers (in inches):</label>
                        <input type="number" class="form-control" id="paverGap" value="0.25" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePavers()">Calculate Paver Quantity</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <h5>Results</h5>
                      <hr>
                      <p id="resultText"></p> <!-- Textual description of results -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Patio Area (sq. ft.)</th>
                            <th>Pavers Required</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalPatioArea">0 sq. ft.</td>
                            <td id="paversRequired">0 Pavers</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePavers() {
                  // Get user inputs
                  const patioLength = parseFloat(document.getElementById('patioLength').value);
                  const patioWidth = parseFloat(document.getElementById('patioWidth').value);
                  const paverSize = parseFloat(document.getElementById('paverSize').value); // in square inches
                  const paverGap = parseFloat(document.getElementById('paverGap').value); // in inches

                  // Validate inputs
                  if (isNaN(patioLength) || isNaN(patioWidth) || isNaN(paverSize) || isNaN(paverGap) || patioLength <= 0 || patioWidth <= 0 || paverSize <= 0 || paverGap < 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Convert patio dimensions to square feet
                  const totalPatioArea = patioLength * patioWidth;

                  // Convert paver size to square feet (1 sq. ft. = 144 sq. inches)
                  const paverSizeInSqFt = paverSize / 144;

                  // Calculate the number of pavers required, considering gaps
                  const paverGapInFeet = paverGap / 12; // Convert gap from inches to feet
                  const adjustedPaverSize = (Math.sqrt(paverSizeInSqFt) + paverGapInFeet) ** 2;
                  const paversRequired = totalPatioArea / adjustedPaverSize;

                  // Display results
                  displayResults(totalPatioArea.toFixed(2), Math.ceil(paversRequired));
                }

                function displayResults(totalPatioArea, paversRequired) {
                  document.getElementById('totalPatioArea').innerText = `${totalPatioArea} sq. ft.`;
                  document.getElementById('paversRequired').innerText = `${paversRequired} Pavers`;

                  // Display the results in a descriptive text format
                  const resultText = `
        For a patio with an area of ${totalPatioArea} square feet, you will need approximately ${paversRequired} pavers. 
        This is calculated based on a paver size of ${document.getElementById('paverSize').value} square inches with a 
        ${document.getElementById('paverGap').value} inch gap between each paver.
      `;
                  document.getElementById('resultText').innerText = resultText;
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