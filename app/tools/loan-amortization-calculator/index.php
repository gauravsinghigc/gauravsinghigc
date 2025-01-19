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
                <i class="fa fa-calculator text-warning"></i> Loan Amortization Calculator
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <form id="loanCalculatorForm">
                      <div class="mb-3">
                        <label for="loanAmount">Loan Amount (₹):</label>
                        <input type="number" class="form-control" id="loanAmount" required>
                      </div>
                      <div class="mb-3">
                        <label for="annualInterestRate">Annual Interest Rate (%):</label>
                        <input type="number" class="form-control" id="annualInterestRate" required>
                      </div>
                      <div class="mb-3">
                        <label for="loanTerm">Loan Term (in years):</label>
                        <input type="number" class="form-control" id="loanTerm" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateLoan()">Calculate Amortization</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Monthly Payment</th>
                              <th>Total Interest Paid</th>
                              <th>Total Payment</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody">
                            <tr>
                              <td id="monthlyPayment">₹0.00</td>
                              <td id="totalInterest">₹0.00</td>
                              <td id="totalPayment">₹0.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="amortization-schedule" id="amortizationSchedule"></div>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateLoan() {
                  // Get user inputs
                  const loanAmount = parseFloat(document.getElementById('loanAmount').value);
                  const annualInterestRate = parseFloat(document.getElementById('annualInterestRate').value);
                  const loanTerm = parseFloat(document.getElementById('loanTerm').value);

                  if (isNaN(loanAmount) || isNaN(annualInterestRate) || isNaN(loanTerm) || loanAmount <= 0 || annualInterestRate <= 0 || loanTerm <= 0) {
                    alert("Please enter valid values for all fields.");
                    return;
                  }

                  // Monthly interest rate and total number of payments
                  const monthlyInterestRate = (annualInterestRate / 100) / 12;
                  const numberOfPayments = loanTerm * 12;

                  // Calculate monthly payment using amortization formula
                  const monthlyPayment = (loanAmount * monthlyInterestRate) / (1 - Math.pow(1 + monthlyInterestRate, -numberOfPayments));

                  // Total payment and total interest
                  const totalPayment = monthlyPayment * numberOfPayments;
                  const totalInterest = totalPayment - loanAmount;

                  // Display results
                  displayResults(monthlyPayment, totalInterest, totalPayment);
                  generateAmortizationSchedule(loanAmount, monthlyInterestRate, monthlyPayment, numberOfPayments);
                }

                function displayResults(monthlyPayment, totalInterest, totalPayment) {
                  document.getElementById('monthlyPayment').innerText = `₹${monthlyPayment.toFixed(2)}`;
                  document.getElementById('totalInterest').innerText = `₹${totalInterest.toFixed(2)}`;
                  document.getElementById('totalPayment').innerText = `₹${totalPayment.toFixed(2)}`;
                }

                function generateAmortizationSchedule(loanAmount, monthlyInterestRate, monthlyPayment, numberOfPayments) {
                  let balance = loanAmount;
                  const amortizationSchedule = document.getElementById('amortizationSchedule');
                  amortizationSchedule.innerHTML = ''; // Clear previous schedule

                  // Create table for amortization schedule
                  let scheduleTable = '<table class="table"><thead><tr><th>Month</th><th>Principal</th><th>Interest</th><th>Remaining Balance</th></tr></thead><tbody>';

                  for (let month = 1; month <= numberOfPayments; month++) {
                    const interestPayment = balance * monthlyInterestRate;
                    const principalPayment = monthlyPayment - interestPayment;
                    balance -= principalPayment;

                    // Add row to the amortization schedule
                    scheduleTable += `
          <tr>
            <td>${month}</td>
            <td>₹${principalPayment.toFixed(2)}</td>
            <td>₹${interestPayment.toFixed(2)}</td>
            <td>₹${balance.toFixed(2)}</td>
          </tr>
        `;
                  }

                  scheduleTable += '</tbody></table>';
                  amortizationSchedule.innerHTML = scheduleTable;
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