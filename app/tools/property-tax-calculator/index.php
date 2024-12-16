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
                <i class="fa fa-calculator text-warning"></i> Property Tax Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <form id="propertyTaxForm">
                      <div class="mb-3">
                        <label for="propertyValue">Property Value (in Rupees):</label>
                        <input type="number" class="form-control" id="propertyValue" required>
                      </div>
                      <div class="mb-3">
                        <label for="taxRate">Tax Rate (as a percentage):</label>
                        <input type="number" class="form-control" id="taxRate" required>
                      </div>
                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculatePropertyTax()">Calculate Tax</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <h5>Results</h5>
                      <hr>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Property Value (in Rupees)</th>
                            <th>Tax Rate (%)</th>
                            <th>Property Tax (in Rupees)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody">
                          <tr>
                            <td id="resultPropertyValue">0</td>
                            <td id="resultTaxRate">0</td>
                            <td id="propertyTaxResult">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculatePropertyTax() {
                  // Get user inputs
                  const propertyValue = parseFloat(document.getElementById('propertyValue').value); // Property Value
                  const taxRate = parseFloat(document.getElementById('taxRate').value); // Tax Rate

                  // Validate inputs
                  if (isNaN(propertyValue) || isNaN(taxRate) || propertyValue <= 0 || taxRate < 0) {
                    alert("Please enter valid values for Property Value and Tax Rate.");
                    return;
                  }

                  // Calculate Property Tax
                  const propertyTax = (propertyValue * (taxRate / 100)).toFixed(2);

                  // Display results
                  displayResults(propertyValue, taxRate, propertyTax);
                }

                function displayResults(propertyValue, taxRate, propertyTax) {
                  document.getElementById('resultPropertyValue').innerText = propertyValue.toFixed(2);
                  document.getElementById('resultTaxRate').innerText = taxRate.toFixed(2);
                  document.getElementById('propertyTaxResult').innerText = propertyTax;
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