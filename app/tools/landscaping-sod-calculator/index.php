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
                <i class="fa fa-calculator text-warning"></i> Landscaping Sod Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="sodCalculatorForm">
                      <div class="mb-3">
                        <label for="areaLength">Area Length (in meters):</label>
                        <input type="number" class="form-control" id="areaLength" required>
                      </div>
                      <div class="mb-3">
                        <label for="areaWidth">Area Width (in meters):</label>
                        <input type="number" class="form-control" id="areaWidth" required>
                      </div>
                      <div class="mb-3">
                        <label for="sodPrice">Price Per Square Meter of Sod (₹):</label>
                        <input type="number" class="form-control" id="sodPrice" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateSod()">Calculate</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Sod Area</th>
                              <th>Cost of Sod</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalSodArea">0 sq. meters</td>
                              <td id="totalSodCost">₹0.00</td>
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
                function calculateSod() {
                  // Get user inputs
                  const areaLength = parseFloat(document.getElementById('areaLength').value);
                  const areaWidth = parseFloat(document.getElementById('areaWidth').value);
                  const sodPrice = parseFloat(document.getElementById('sodPrice').value);

                  if (isNaN(areaLength) || isNaN(areaWidth) || isNaN(sodPrice) || areaLength <= 0 || areaWidth <= 0 || sodPrice <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate total area and total cost
                  const totalSodArea = areaLength * areaWidth; // in square meters
                  const totalSodCost = totalSodArea * sodPrice; // total cost of sod

                  // Display results
                  displayResults(totalSodArea, totalSodCost);
                }

                function displayResults(totalSodArea, totalSodCost) {
                  // Display total area and total cost
                  document.getElementById('totalSodArea').innerText = totalSodArea.toFixed(2) + ' sq. meters';
                  document.getElementById('totalSodCost').innerText = '₹' + totalSodCost.toFixed(2);

                  // Display relative details
                  const relativeDetails = `For an area of ${totalSodArea.toFixed(2)} square meters, the total cost of sod at ₹${document.getElementById('sodPrice').value} per square meter is ₹${totalSodCost.toFixed(2)}.`;
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
  include $Dir . "/assets/app/FooterFiles.php";
  ?>
</body>

</html>