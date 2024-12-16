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
                <i class="fa fa-calculator text-warning"></i> Mortgage Insurance Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="insuranceCalculatorForm">
                      <div class="mb-3">
                        <label for="loanAmount">Loan Amount (INR):</label>
                        <input type="number" class="form-control" id="loanAmount" required>
                      </div>
                      <div class="mb-3">
                        <label for="downPayment">Down Payment (INR):</label>
                        <input type="number" class="form-control" id="downPayment" required>
                      </div>
                      <div class="mb-3">
                        <label for="loanTerm">Loan Term (years):</label>
                        <input type="number" class="form-control" id="loanTerm" required>
                      </div>
                      <div class="mb-3">
                        <label for="interestRate">Interest Rate (% per annum):</label>
                        <input type="number" step="0.01" class="form-control" id="interestRate" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateInsurance()">Calculate Insurance</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Monthly Insurance (INR)</th>
                              <th>Total Insurance (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="monthlyInsurance">0 INR</td>
                              <td id="totalInsurance">0 INR</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateInsurance() {
                  // Get user inputs
                  const loanAmount = parseFloat(document.getElementById('loanAmount').value);
                  const downPayment = parseFloat(document.getElementById('downPayment').value);
                  const loanTerm = parseFloat(document.getElementById('loanTerm').value);
                  const interestRate = parseFloat(document.getElementById('interestRate').value) / 100;

                  if (isNaN(loanAmount) || isNaN(downPayment) || isNaN(loanTerm) || isNaN(interestRate) || loanAmount <= 0 || downPayment < 0 || loanTerm <= 0 || interestRate <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate loan-to-value ratio (LTV)
                  const loanToValue = (loanAmount - downPayment) / loanAmount;

                  // Private Mortgage Insurance (PMI) is typically required if LTV is above 80%
                  const pmiRate = loanToValue > 0.80 ? 0.01 : 0; // PMI rate assumed at 1% annually for LTV above 80%

                  // Calculate total and monthly mortgage insurance
                  const totalInsurance = loanAmount * pmiRate * loanTerm; // Total PMI for the loan term
                  const monthlyInsurance = totalInsurance / (loanTerm * 12); // Monthly PMI

                  // Display results
                  displayResults(monthlyInsurance.toFixed(2), totalInsurance.toFixed(2));
                }

                function displayResults(monthlyInsurance, totalInsurance) {
                  document.getElementById('monthlyInsurance').innerText = `${monthlyInsurance} INR`;
                  document.getElementById('totalInsurance').innerText = `${totalInsurance} INR`;
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