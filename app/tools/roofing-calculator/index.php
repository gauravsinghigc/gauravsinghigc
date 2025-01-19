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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> Roofing Calculator</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="roofingCalculatorForm">
                      <!-- Length -->
                      <div class="form-group mb-3">
                        <label for="length">Length of Roof (in feet):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>

                      <!-- Width -->
                      <div class="form-group mb-3">
                        <label for="width">Width of Roof (in feet):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>

                      <!-- Price per Square Foot -->
                      <div class="form-group mb-3">
                        <label for="pricePerSqFt">Price per Square Foot (in ₹):</label>
                        <input type="number" class="form-control" id="pricePerSqFt" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateRoofing()">Calculate Roofing Needs</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Total Area (sq ft)</th>
                            <th>Total Cost (₹)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="totalArea">0.00 sq ft</td>
                            <td id="totalCost">₹ 0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateRoofing() {
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const pricePerSqFt = parseFloat(document.getElementById('pricePerSqFt').value);

                  // Validate inputs
                  if (length <= 0 || width <= 0 || pricePerSqFt < 0) {
                    alert("Please enter valid positive numbers for all inputs.");
                    return;
                  }

                  // Calculate total area
                  const totalArea = length * width; // in square feet

                  // Calculate total cost
                  const totalCost = totalArea * pricePerSqFt; // in currency

                  // Display results
                  displayResults(totalArea, totalCost);
                }

                function displayResults(totalArea, totalCost) {
                  document.getElementById('totalArea').innerText = `${totalArea.toFixed(2)} sq ft`;
                  document.getElementById('totalCost').innerText = `₹ ${totalCost.toFixed(2)}`;
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