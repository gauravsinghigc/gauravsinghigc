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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Stud Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="studCalculatorForm">
                      <!-- Length of the Wall -->
                      <div class="form-group mb-3">
                        <label for="wallLength">Length of Wall (in feet):</label>
                        <input type="number" class="form-control" id="wallLength" required>
                      </div>

                      <!-- Spacing Between Studs -->
                      <div class="form-group mb-3">
                        <label for="studSpacing">Spacing Between Studs (in inches):</label>
                        <input type="number" class="form-control" id="studSpacing" value="16" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateStuds()">Calculate Studs</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Studs Required</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalStuds">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateStuds() {
                  const wallLength = parseFloat(document.getElementById('wallLength').value);
                  const studSpacing = parseFloat(document.getElementById('studSpacing').value);

                  // Validate input
                  if (wallLength <= 0 || studSpacing <= 0) {
                    alert("Please enter valid positive numbers for all fields.");
                    return;
                  }

                  // Convert wall length from feet to inches
                  const wallLengthInches = wallLength * 12;

                  // Calculate the number of studs needed
                  const totalStuds = Math.ceil(wallLengthInches / studSpacing) + 1; // Add 1 for the end stud

                  // Display results
                  displayResults(totalStuds);
                }

                function displayResults(totalStuds) {
                  document.getElementById('totalStuds').innerText = totalStuds;
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