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
                <i class="fa fa-fire text-warning"></i> Firewood Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="firewoodCalculatorForm">
                      <div class="mb-3">
                        <label for="areaSize">Area Size (sq ft):</label>
                        <input type="number" class="form-control" id="areaSize" required>
                      </div>
                      <div class="mb-3">
                        <label for="woodType">Type of Wood:</label>
                        <select class="form-control" id="woodType" required>
                          <option value="" disabled selected>Select Wood Type</option>
                          <option value="softwood">Softwood</option>
                          <option value="hardwood">Hardwood</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="duration">Duration (Days):</label>
                        <input type="number" class="form-control" id="duration" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateFirewood()">Calculate Firewood</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Firewood Needed (Cords)</th>
                              <th>Approximate Cost (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalFirewood">0</td>
                              <td id="approxCost">0</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateFirewood() {
                  // Get user inputs
                  const areaSize = parseFloat(document.getElementById('areaSize').value);
                  const woodType = document.getElementById('woodType').value;
                  const duration = parseFloat(document.getElementById('duration').value);

                  if (isNaN(areaSize) || areaSize <= 0 || isNaN(duration) || duration <= 0) {
                    alert("Please enter valid numbers for area size and duration.");
                    return;
                  }

                  // Estimate firewood required in cords based on wood type and area size
                  let firewoodNeeded;
                  const cordsPerSquareFoot = woodType === 'softwood' ? 0.15 : 0.10; // Example values
                  firewoodNeeded = (areaSize * cordsPerSquareFoot * duration) / 100;

                  // Estimate cost (assuming cost per cord is 4000 INR)
                  const costPerCord = 4000; // Example cost per cord
                  const totalCost = firewoodNeeded * costPerCord;

                  // Display results
                  displayResults(firewoodNeeded.toFixed(2), totalCost.toFixed(2));
                }

                function displayResults(totalFirewood, approxCost) {
                  document.getElementById('totalFirewood').innerText = `${totalFirewood} cords`;
                  document.getElementById('approxCost').innerText = `₹${approxCost}`;
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