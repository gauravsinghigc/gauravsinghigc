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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Shingle Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="shingleCalculatorForm">
                      <!-- Roof Length -->
                      <div class="form-group mb-3">
                        <label for="roofLength">Roof Length (in feet):</label>
                        <input type="number" class="form-control" id="roofLength" required>
                      </div>

                      <!-- Roof Width -->
                      <div class="form-group mb-3">
                        <label for="roofWidth">Roof Width (in feet):</label>
                        <input type="number" class="form-control" id="roofWidth" required>
                      </div>

                      <!-- Roof Pitch -->
                      <div class="form-group mb-3">
                        <label for="roofPitch">Roof Pitch (in ratio, e.g., 4/12):</label>
                        <input type="text" class="form-control" id="roofPitch" placeholder="e.g., 4/12" required>
                      </div>

                      <!-- Square Feet per Bundle -->
                      <div class="form-group mb-3">
                        <label for="sqftPerBundle">Square Feet Covered per Bundle:</label>
                        <input type="number" class="form-control" id="sqftPerBundle" value="33.3" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateShingles()">Calculate Shingles</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Area (sq ft)</th>
                            <th>Bundles Required</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalArea">0.00 sq ft</td>
                            <td id="bundlesRequired">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateShingles() {
                  const roofLength = parseFloat(document.getElementById('roofLength').value);
                  const roofWidth = parseFloat(document.getElementById('roofWidth').value);
                  const roofPitch = document.getElementById('roofPitch').value;
                  const sqftPerBundle = parseFloat(document.getElementById('sqftPerBundle').value);

                  // Validate input
                  if (roofLength <= 0 || roofWidth <= 0 || sqftPerBundle <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Calculate the total area of the roof
                  const pitchRatio = roofPitch.split('/');
                  const rise = parseFloat(pitchRatio[0]);
                  const run = parseFloat(pitchRatio[1]);
                  const roofArea = (roofLength * roofWidth) * Math.sqrt((rise * rise) + (run * run)) / run;

                  // Calculate the number of bundles required
                  const bundlesRequired = Math.ceil(roofArea / sqftPerBundle);

                  // Display results
                  displayResults(roofArea, bundlesRequired);
                }

                function displayResults(roofArea, bundlesRequired) {
                  document.getElementById('totalArea').innerText = `${roofArea.toFixed(2)} sq ft`;
                  document.getElementById('bundlesRequired').innerText = bundlesRequired;
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