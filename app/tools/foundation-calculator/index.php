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
                <i class="fa fa-building text-warning"></i> Foundation Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="foundationCalculatorForm">
                      <div class="mb-3">
                        <label for="length">Foundation Length (ft):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>
                      <div class="mb-3">
                        <label for="width">Foundation Width (ft):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>
                      <div class="mb-3">
                        <label for="depth">Foundation Depth (ft):</label>
                        <input type="number" class="form-control" id="depth" required>
                      </div>
                      <div class="mb-3">
                        <label for="materialType">Type of Material:</label>
                        <select class="form-control" id="materialType" required>
                          <option value="" disabled selected>Select Material</option>
                          <option value="concrete">Concrete - ₹100/cubic ft</option>
                          <option value="brick">Brick - ₹150/cubic ft</option>
                          <option value="stone">Stone - ₹200/cubic ft</option>
                        </select>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateFoundation()">Calculate Foundation</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Volume (cubic ft)</th>
                              <th>Approximate Cost (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalVolume">0</td>
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
                function calculateFoundation() {
                  // Get user inputs
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const depth = parseFloat(document.getElementById('depth').value);
                  const materialType = document.getElementById('materialType').value;

                  if (isNaN(length) || length <= 0 || isNaN(width) || width <= 0 || isNaN(depth) || depth <= 0) {
                    alert("Please enter valid dimensions for length, width, and depth.");
                    return;
                  }

                  // Calculate total volume
                  const totalVolume = length * width * depth;

                  // Estimate cost based on material type
                  let costPerCubicFt;
                  switch (materialType) {
                    case 'concrete':
                      costPerCubicFt = 100;
                      break;
                    case 'brick':
                      costPerCubicFt = 150;
                      break;
                    case 'stone':
                      costPerCubicFt = 200;
                      break;
                    default:
                      alert("Please select a material type.");
                      return;
                  }
                  const totalCost = totalVolume * costPerCubicFt;

                  // Display results
                  displayResults(totalVolume, totalCost);
                }

                function displayResults(totalVolume, approxCost) {
                  document.getElementById('totalVolume').innerText = `${totalVolume.toFixed(2)} cubic ft`;
                  document.getElementById('approxCost').innerText = `₹${approxCost.toFixed(2)}`;
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