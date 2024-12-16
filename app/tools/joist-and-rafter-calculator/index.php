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
                <i class="fa fa-calculator text-warning"></i> Joist and Rafter Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="joistRafterCalculatorForm">
                      <div class="mb-3">
                        <label for="length">Length of the Area (ft):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>
                      <div class="mb-3">
                        <label for="width">Width of the Area (ft):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>
                      <div class="mb-3">
                        <label for="spacing">Spacing Between Joists/Rafters (inches):</label>
                        <input type="number" class="form-control" id="spacing" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateJoistsAndRafters()">Calculate Joists and Rafters</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Joists</th>
                              <th>Total Rafters</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalJoists">0</td>
                              <td id="totalRafters">0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateJoistsAndRafters() {
                  // Get user inputs
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const spacing = parseFloat(document.getElementById('spacing').value);

                  if (isNaN(length) || length <= 0 || isNaN(width) || width <= 0 || isNaN(spacing) || spacing <= 0) {
                    alert("Please enter valid values for length, width, and spacing.");
                    return;
                  }

                  // Convert spacing from inches to feet
                  const spacingFeet = spacing / 12;

                  // Calculate total joists and rafters needed
                  const totalJoists = Math.ceil(length / spacingFeet);
                  const totalRafters = Math.ceil(width / spacingFeet);

                  // Display results
                  displayResults(totalJoists, totalRafters);
                }

                function displayResults(totalJoists, totalRafters) {
                  document.getElementById('totalJoists').innerText = totalJoists;
                  document.getElementById('totalRafters').innerText = totalRafters;
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