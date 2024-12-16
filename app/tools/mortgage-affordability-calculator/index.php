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
                <i class="fa fa-calculator text-warning"></i> Mortgage Affordability Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="mortgageCalculatorForm">
                      <div class="mb-3">
                        <label for="monthlyIncome">Monthly Income (INR):</label>
                        <input type="number" class="form-control" id="monthlyIncome" required>
                      </div>
                      <div class="mb-3">
                        <label for="monthlyExpenses">Monthly Expenses (INR):</label>
                        <input type="number" class="form-control" id="monthlyExpenses" required>
                      </div>
                      <div class="mb-3">
                        <label for="interestRate">Interest Rate (% per annum):</label>
                        <input type="number" step="0.01" class="form-control" id="interestRate" required>
                      </div>
                      <div class="mb-3">
                        <label for="loanTerm">Loan Term (years):</label>
                        <input type="number" class="form-control" id="loanTerm" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateMortgage()">Calculate Affordability</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Max Mortgage (INR)</th>
                              <th>Monthly Payment (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="maxMortgage">0 INR</td>
                              <td id="monthlyPayment">0 INR</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateMortgage() {
                  // Get user inputs
                  const monthlyIncome = parseFloat(document.getElementById('monthlyIncome').value);
                  const monthlyExpenses = parseFloat(document.getElementById('monthlyExpenses').value);
                  const interestRate = parseFloat(document.getElementById('interestRate').value) / 100;
                  const loanTerm = parseFloat(document.getElementById('loanTerm').value);

                  if (isNaN(monthlyIncome) || isNaN(monthlyExpenses) || isNaN(interestRate) || isNaN(loanTerm) || monthlyIncome <= 0 || monthlyExpenses < 0 || interestRate <= 0 || loanTerm <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Calculate the amount available for mortgage payment after expenses
                  const availableIncome = monthlyIncome - monthlyExpenses;

                  // Use a rough estimate that 30% of available income is for mortgage
                  const maxMonthlyPayment = availableIncome * 0.30;

                  // Convert annual interest rate to monthly interest rate
                  const monthlyInterestRate = interestRate / 12;

                  // Calculate total number of months
                  const numberOfPayments = loanTerm * 12;

                  // Calculate the maximum loan amount using the amortization formula
                  const maxMortgage = (maxMonthlyPayment * (1 - Math.pow(1 + monthlyInterestRate, -numberOfPayments))) / monthlyInterestRate;

                  // Display results
                  displayResults(maxMortgage.toFixed(2), maxMonthlyPayment.toFixed(2));
                }

                function displayResults(maxMortgage, monthlyPayment) {
                  document.getElementById('maxMortgage').innerText = `${maxMortgage} INR`;
                  document.getElementById('monthlyPayment').innerText = `${monthlyPayment} INR`;
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