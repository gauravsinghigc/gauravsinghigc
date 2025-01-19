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
                    <h3>Deck Material Calculator</h3>
                    <hr>
                    <form id="deckCalculatorForm">
                      <!-- Deck Length -->
                      <div class="form-group mb-3">
                        <label for="deckLength">Deck Length (feet):</label>
                        <input type="number" class="form-control" id="deckLength" required>
                      </div>

                      <!-- Deck Width -->
                      <div class="form-group mb-3">
                        <label for="deckWidth">Deck Width (feet):</label>
                        <input type="number" class="form-control" id="deckWidth" required>
                      </div>

                      <!-- Material Price -->
                      <div class="form-group mb-3">
                        <label for="materialPrice">Material Price (per square foot in Rupees):</label>
                        <input type="number" class="form-control" id="materialPrice" required>
                      </div>

                      <!-- Estimate Deck Material Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateDeckMaterial()">Estimate Deck Material</button>
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
                              <th>Total Square Feet</th>
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
                function calculateDeckMaterial() {
                  const deckLength = parseFloat(document.getElementById('deckLength').value);
                  const deckWidth = parseFloat(document.getElementById('deckWidth').value);
                  const materialPrice = parseFloat(document.getElementById('materialPrice').value);

                  if (isNaN(deckLength) || isNaN(deckWidth) || isNaN(materialPrice)) {
                    alert("Please enter valid numbers.");
                    return;
                  }

                  // Formula for calculating the total square footage
                  const totalSquareFeet = deckLength * deckWidth;

                  // Calculating the total cost in Rupees
                  const totalCost = totalSquareFeet * materialPrice;

                  // Displaying results
                  displayResults(totalSquareFeet.toFixed(2), totalCost.toFixed(2));
                }

                function displayResults(totalSquareFeet, totalCost) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  const row = `
        <tr>
          <td>${totalSquareFeet} sq. feet</td>
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