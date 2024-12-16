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
                <i class="fa fa-th-large text-warning"></i> Flooring Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="flooringCalculatorForm">
                      <div class="mb-3">
                        <label for="length">Room Length (ft):</label>
                        <input type="number" class="form-control" id="length" required>
                      </div>
                      <div class="mb-3">
                        <label for="width">Room Width (ft):</label>
                        <input type="number" class="form-control" id="width" required>
                      </div>
                      <div class="mb-3">
                        <label for="flooringType">Type of Flooring:</label>
                        <select class="form-control" id="flooringType" required>
                          <option value="" disabled selected>Select Flooring Type</option>
                          <option value="laminate">Laminate - ₹50/sq ft</option>
                          <option value="hardwood">Hardwood - ₹100/sq ft</option>
                          <option value="tile">Tile - ₹80/sq ft</option>
                          <option value="carpet">Carpet - ₹60/sq ft</option>
                        </select>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateFlooring()">Calculate Flooring</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Area (sq ft)</th>
                              <th>Approximate Cost (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="totalArea">0</td>
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
                function calculateFlooring() {
                  // Get user inputs
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const flooringType = document.getElementById('flooringType').value;

                  if (isNaN(length) || length <= 0 || isNaN(width) || width <= 0) {
                    alert("Please enter valid dimensions for length and width.");
                    return;
                  }

                  // Calculate total area
                  const totalArea = length * width;

                  // Estimate cost based on flooring type
                  let costPerSqFt;
                  switch (flooringType) {
                    case 'laminate':
                      costPerSqFt = 50;
                      break;
                    case 'hardwood':
                      costPerSqFt = 100;
                      break;
                    case 'tile':
                      costPerSqFt = 80;
                      break;
                    case 'carpet':
                      costPerSqFt = 60;
                      break;
                    default:
                      alert("Please select a flooring type.");
                      return;
                  }
                  const totalCost = totalArea * costPerSqFt;

                  // Display results
                  displayResults(totalArea, totalCost);
                }

                function displayResults(totalArea, approxCost) {
                  document.getElementById('totalArea').innerText = `${totalArea.toFixed(2)} sq ft`;
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
  include $Dir . "/assets/app/FooterFiles.php";
  ?>
</body>

</html>