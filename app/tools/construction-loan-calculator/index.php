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
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> <?php echo $PageHeading; ?></h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <h3>Construction Loan Calculator</h3>
                    <hr>
                    <form id="loanCalculatorForm">
                      <!-- Loan Amount -->
                      <div class="form-group mb-3">
                        <label for="loanAmount">Loan Amount (₹):</label>
                        <input type="number" class="form-control" id="loanAmount" required>
                      </div>

                      <!-- Interest Rate -->
                      <div class="form-group mb-3">
                        <label for="interestRate">Interest Rate (%):</label>
                        <input type="number" step="0.01" class="form-control" id="interestRate" required>
                      </div>

                      <!-- Loan Term -->
                      <div class="form-group mb-3">
                        <label for="loanTerm">Loan Term (years):</label>
                        <input type="number" class="form-control" id="loanTerm" required>
                      </div>

                      <!-- Monthly Payment Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateLoan()">Calculate Monthly Payment</button>
                    </form>
                  </div>

                  <div class="col-md-5">
                    <div class="result-section mt-4" id="resultSection">
                      <h6 class="bold">Results</h6>
                      <hr>
                      <div class="mt-4">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Monthly Payment</th>
                              <th>Total Payment</th>
                              <th>Total Interest</th>
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
                function calculateLoan() {
                  const loanAmount = parseFloat(document.getElementById('loanAmount').value);
                  const interestRate = parseFloat(document.getElementById('interestRate').value) / 100 / 12; // Monthly interest rate
                  const loanTerm = parseFloat(document.getElementById('loanTerm').value) * 12; // Loan term in months

                  if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(loanTerm)) {
                    alert("Please enter valid numbers.");
                    return;
                  }

                  // Formula for calculating monthly payment
                  const monthlyPayment = (loanAmount * interestRate * Math.pow(1 + interestRate, loanTerm)) / (Math.pow(1 + interestRate, loanTerm) - 1);

                  // Calculating total payment and total interest
                  const totalPayment = monthlyPayment * loanTerm;
                  const totalInterest = totalPayment - loanAmount;

                  // Displaying results
                  displayResults(monthlyPayment.toFixed(2), totalPayment.toFixed(2), totalInterest.toFixed(2));
                }

                function displayResults(monthlyPayment, totalPayment, totalInterest) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  const row = `
        <tr>
          <td>₹${monthlyPayment}</td>
          <td>₹${totalPayment}</td>
          <td>₹${totalInterest}</td>
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
  include $Dir . "/assets/app/FooterFiles.php";
  ?>
</body>

</html>