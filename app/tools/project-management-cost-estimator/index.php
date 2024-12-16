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
                  <div class="col-md-6">
                    <form id="costEstimatorForm">
                      <!-- Total Area -->
                      <div class="form-group mb-3">
                        <label for="totalArea">Total Area (sq. meters):</label>
                        <input type="number" class="form-control" id="totalArea" required>
                      </div>

                      <!-- Construction Cost -->
                      <div class="form-group mb-3">
                        <label for="constructionCost">Total Construction Cost (in Rs):</label>
                        <input type="number" class="form-control" id="constructionCost" required>
                      </div>

                      <!-- Labor Cost -->
                      <div class="form-group mb-3">
                        <label for="laborCost">Total Labor Cost (in Rs):</label>
                        <input type="number" class="form-control" id="laborCost" required>
                      </div>

                      <!-- Electricity Cost -->
                      <div class="form-group mb-3">
                        <label for="electricityCost">Electricity Cost (in Rs):</label>
                        <input type="number" class="form-control" id="electricityCost" required>
                      </div>

                      <!-- Plumbing Cost -->
                      <div class="form-group mb-3">
                        <label for="plumbingCost">Plumbing Cost (in Rs):</label>
                        <input type="number" class="form-control" id="plumbingCost" required>
                      </div>

                      <!-- Painting Cost -->
                      <div class="form-group mb-3">
                        <label for="paintingCost">Painting Cost (in Rs):</label>
                        <input type="number" class="form-control" id="paintingCost" required>
                      </div>

                      <!-- Flooring Cost -->
                      <div class="form-group mb-3">
                        <label for="flooringCost">Flooring Cost (in Rs):</label>
                        <input type="number" class="form-control" id="flooringCost" required>
                      </div>

                      <!-- Gardening Cost -->
                      <div class="form-group mb-3">
                        <label for="gardeningCost">Gardening Cost (in Rs):</label>
                        <input type="number" class="form-control" id="gardeningCost" required>
                      </div>

                      <!-- Interior Cost -->
                      <div class="form-group mb-3">
                        <label for="interiorCost">Interior Cost (in Rs):</label>
                        <input type="number" class="form-control" id="interiorCost" required>
                      </div>

                      <!-- Calculate Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateCosts()">Calculate Costs</button>
                    </form>
                  </div>

                  <div class="col-md-6">
                    <div class="result-section mt-4" id="resultSection">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Cost Type</th>
                            <th>Total Cost (Rs)</th>
                            <th>Per Unit Area (Rs/sq.m)</th>
                          </tr>
                        </thead>
                        <tbody id="resultTableBody"></tbody>
                        <tfoot>
                          <tr>
                            <th>Total</th>
                            <th id="totalCost">0.00 Rs</th>
                            <th id="perUnitAreaCost">0.00 Rs/sq.m</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function calculateCosts() {
                  const totalArea = parseFloat(document.getElementById('totalArea').value);
                  const constructionCost = parseFloat(document.getElementById('constructionCost').value);
                  const laborCost = parseFloat(document.getElementById('laborCost').value);
                  const electricityCost = parseFloat(document.getElementById('electricityCost').value);
                  const plumbingCost = parseFloat(document.getElementById('plumbingCost').value);
                  const paintingCost = parseFloat(document.getElementById('paintingCost').value);
                  const flooringCost = parseFloat(document.getElementById('flooringCost').value);
                  const gardeningCost = parseFloat(document.getElementById('gardeningCost').value);
                  const interiorCost = parseFloat(document.getElementById('interiorCost').value);

                  // Total cost calculation
                  const totalCost = constructionCost + laborCost + electricityCost + plumbingCost + paintingCost + flooringCost + gardeningCost + interiorCost;

                  // Per unit area calculation
                  const perUnitAreaCost = totalCost / totalArea;

                  // Display results
                  displayResults(totalCost, perUnitAreaCost);
                }

                function displayResults(totalCost, perUnitAreaCost) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  resultTableBody.innerHTML = ''; // Clear previous results

                  const costTypes = [{
                      type: "Construction Cost",
                      amount: parseFloat(document.getElementById('constructionCost').value)
                    },
                    {
                      type: "Labor Cost",
                      amount: parseFloat(document.getElementById('laborCost').value)
                    },
                    {
                      type: "Electricity Cost",
                      amount: parseFloat(document.getElementById('electricityCost').value)
                    },
                    {
                      type: "Plumbing Cost",
                      amount: parseFloat(document.getElementById('plumbingCost').value)
                    },
                    {
                      type: "Painting Cost",
                      amount: parseFloat(document.getElementById('paintingCost').value)
                    },
                    {
                      type: "Flooring Cost",
                      amount: parseFloat(document.getElementById('flooringCost').value)
                    },
                    {
                      type: "Gardening Cost",
                      amount: parseFloat(document.getElementById('gardeningCost').value)
                    },
                    {
                      type: "Interior Cost",
                      amount: parseFloat(document.getElementById('interiorCost').value)
                    },
                  ];

                  costTypes.forEach(cost => {
                    const row = `
                <tr>
                    <td>${cost.type}</td>
                    <td>${cost.amount.toFixed(2)} Rs</td>
                    <td>${(cost.amount / parseFloat(document.getElementById('totalArea').value)).toFixed(2)} Rs/sq.m</td>
                </tr>
                `;
                    resultTableBody.insertAdjacentHTML('beforeend', row);
                  });

                  // Update total values
                  document.getElementById('totalCost').innerText = `${totalCost.toFixed(2)} Rs`;
                  document.getElementById('perUnitAreaCost').innerText = `${perUnitAreaCost.toFixed(2)} Rs/sq.m`;
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