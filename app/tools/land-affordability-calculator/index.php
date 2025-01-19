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
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> Land Affordability Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="landAffordabilityForm">
                      <div class="mb-3">
                        <label for="budget">Your Budget (₹):</label>
                        <input type="number" class="form-control" id="budget" required>
                      </div>
                      <div class="mb-3">
                        <label for="pricePerUnit">Price Per Unit (₹ per sq. meter or sq. foot):</label>
                        <input type="number" class="form-control" id="pricePerUnit" required>
                      </div>

                      <!-- Area Unit -->
                      <div class="mb-3">
                        <label for="unit">Choose Unit:</label>
                        <select class="form-control" id="unit" required>
                          <option value="meter">Square Meter</option>
                          <option value="foot">Square Foot</option>
                        </select>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateLandAffordability()">Calculate</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Land You Can Afford</th>
                              <th>Unit</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalLand">0</td>
                              <td id="landUnit">sq. meters</td>
                            </tr>
                          </tbody>
                        </table>
                        <p id="relativeDetails"></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateLandAffordability() {
                  // Get user inputs
                  const budget = parseFloat(document.getElementById('budget').value);
                  const pricePerUnit = parseFloat(document.getElementById('pricePerUnit').value);
                  const unit = document.getElementById('unit').value;

                  if (isNaN(budget) || budget <= 0 || isNaN(pricePerUnit) || pricePerUnit <= 0) {
                    alert("Please enter valid values for budget and price.");
                    return;
                  }

                  // Calculate land affordability
                  const totalLand = budget / pricePerUnit;

                  // Display results
                  displayResults(totalLand, unit);
                }

                function displayResults(totalLand, unit) {
                  document.getElementById('totalLand').innerText = totalLand.toFixed(2);
                  document.getElementById('landUnit').innerText = unit === 'meter' ? 'sq. meters' : 'sq. feet';

                  // Relative details
                  const relativeDetails = `With a budget of ₹${document.getElementById('budget').value}, you can afford ${totalLand.toFixed(2)} ${unit === 'meter' ? 'square meters' : 'square feet'} of land at the current price of ₹${document.getElementById('pricePerUnit').value} per ${unit === 'meter' ? 'sq. meter' : 'sq. foot'}.`;
                  document.getElementById('relativeDetails').innerText = relativeDetails;
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