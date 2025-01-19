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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Roof Pitch Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="roofPitchCalculatorForm">
                      <!-- Rise -->
                      <div class="form-group mb-3">
                        <label for="rise">Rise (in inches):</label>
                        <input type="number" class="form-control" id="rise" required>
                      </div>

                      <!-- Run -->
                      <div class="form-group mb-3">
                        <label for="run">Run (in inches):</label>
                        <input type="number" class="form-control" id="run" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateRoofPitch()">Calculate Pitch</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Pitch</th>
                            <th>Angle (degrees)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="pitchValue">0:12</td>
                            <td id="angleValue">0.00°</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateRoofPitch() {
                  const rise = parseFloat(document.getElementById('rise').value);
                  const run = parseFloat(document.getElementById('run').value);

                  // Validate input
                  if (run <= 0) {
                    alert("Run must be greater than zero.");
                    return;
                  }

                  // Calculate pitch and angle
                  const pitch = rise / run;
                  const angle = Math.atan(pitch) * (180 / Math.PI); // Convert to degrees

                  // Format pitch for display (e.g., "rise:run")
                  const pitchDisplay = `${rise}:${run}`;

                  // Display results
                  displayResults(pitchDisplay, angle);
                }

                function displayResults(pitchDisplay, angle) {
                  document.getElementById('pitchValue').innerText = pitchDisplay;
                  document.getElementById('angleValue').innerText = `${angle.toFixed(2)}°`;
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