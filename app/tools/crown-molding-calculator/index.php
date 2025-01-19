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
            <div class="shadow-sm p-3 b-r-1">
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> <?php echo $PageHeading; ?>
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Crown Molding Calculator</h3>
                    <hr>
                    <form id="moldingCalculatorForm">
                      <!-- Room Length -->
                      <div class="form-group mb-3">
                        <label for="roomLength">Room Length (feet):</label>
                        <input type="number" class="form-control" id="roomLength" required>
                      </div>

                      <!-- Room Width -->
                      <div class="form-group mb-3">
                        <label for="roomWidth">Room Width (feet):</label>
                        <input type="number" class="form-control" id="roomWidth" required>
                      </div>

                      <!-- Molding Price -->
                      <div class="form-group mb-3">
                        <label for="moldingPrice">Molding Price (per foot in Rupees):</label>
                        <input type="number" class="form-control" id="moldingPrice" required>
                      </div>

                      <!-- Estimate Crown Molding Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateCrownMolding()">Estimate Crown Molding</button>
                    </form>
                  </div>

                  <div class="col-md-4">
                    <div class="result-section mt-4" id="resultSection">
                      <h6 class="bold">Results</h6>
                      <hr>
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Total Linear Feet</th>
                              <th>Total Cost (in ₹)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateCrownMolding() {
                  const roomLength = parseFloat(document.getElementById('roomLength').value);
                  const roomWidth = parseFloat(document.getElementById('roomWidth').value);
                  const moldingPrice = parseFloat(document.getElementById('moldingPrice').value);

                  if (isNaN(roomLength) || isNaN(roomWidth) || isNaN(moldingPrice)) {
                    alert("Please enter valid numbers.");
                    return;
                  }

                  // Formula for calculating the total linear feet
                  const totalFeet = (2 * roomLength) + (2 * roomWidth);

                  // Calculating the total cost in Rupees
                  const totalCost = totalFeet * moldingPrice;

                  // Displaying results
                  displayResults(totalFeet.toFixed(2), totalCost.toFixed(2));
                }

                function displayResults(totalFeet, totalCost) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  const row = `
        <tr>
          <td>${totalFeet} feet</td>
          <td>₹${totalCost}</td>
        </tr>
      `;
                  resultTableBody.innerHTML = row;
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