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
            <div class="shadow-sm p-3 b-r-1">
              <h4 class="app-sub-heading">
                <i class="fa fa-calculator text-warning"></i> <?php echo $PageHeading; ?>
              </h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Duct Size Calculator</h3>
                    <hr>
                    <form id="ductCalculatorForm">
                      <!-- Airflow (CFM) -->
                      <div class="form-group mb-3">
                        <label for="airflow">Airflow (CFM - Cubic Feet per Minute):</label>
                        <input type="number" class="form-control" id="airflow" required>
                      </div>

                      <!-- Velocity -->
                      <div class="form-group mb-3">
                        <label for="velocity">Velocity (FPM - Feet per Minute):</label>
                        <input type="number" class="form-control" id="velocity" required>
                      </div>

                      <!-- Duct Shape -->
                      <div class="form-group mb-3">
                        <label for="ductShape">Duct Shape:</label>
                        <select class="form-control" id="ductShape" required>
                          <option value="rectangular">Rectangular</option>
                          <option value="circular">Circular</option>
                        </select>
                      </div>

                      <!-- Width and Height for Rectangular Duct -->
                      <div class="form-group mb-3" id="rectangularInputs" style="display:none;">
                        <label for="ductWidth">Duct Width (inches):</label>
                        <input type="number" class="form-control mb-2" id="ductWidth">
                        <label for="ductHeight">Duct Height (inches):</label>
                        <input type="number" class="form-control" id="ductHeight">
                      </div>

                      <!-- Diameter for Circular Duct -->
                      <div class="form-group mb-3" id="circularInput">
                        <label for="ductDiameter">Duct Diameter (inches):</label>
                        <input type="number" class="form-control" id="ductDiameter">
                      </div>

                      <!-- Estimate Duct Size Button -->
                      <button type="button" class="btn btn-primary" onclick="calculateDuctSize()">Calculate Duct Size</button>
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
                              <th>Duct Size</th>
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
                // Show or hide inputs based on duct shape selection
                document.getElementById('ductShape').addEventListener('change', function() {
                  if (this.value === 'rectangular') {
                    document.getElementById('rectangularInputs').style.display = 'block';
                    document.getElementById('circularInput').style.display = 'none';
                  } else {
                    document.getElementById('rectangularInputs').style.display = 'none';
                    document.getElementById('circularInput').style.display = 'block';
                  }
                });

                function calculateDuctSize() {
                  const airflow = parseFloat(document.getElementById('airflow').value);
                  const velocity = parseFloat(document.getElementById('velocity').value);
                  const ductShape = document.getElementById('ductShape').value;

                  if (isNaN(airflow) || isNaN(velocity)) {
                    alert("Please enter valid numbers.");
                    return;
                  }

                  let ductSize;

                  // Calculate for rectangular or circular duct
                  if (ductShape === 'rectangular') {
                    const width = parseFloat(document.getElementById('ductWidth').value);
                    const height = parseFloat(document.getElementById('ductHeight').value);
                    if (isNaN(width) || isNaN(height)) {
                      alert("Please enter valid width and height for rectangular duct.");
                      return;
                    }
                    // Rectangular duct area formula: Width x Height
                    const area = width * height;
                    ductSize = airflow / (velocity * area);
                  } else {
                    const diameter = parseFloat(document.getElementById('ductDiameter').value);
                    if (isNaN(diameter)) {
                      alert("Please enter a valid diameter for circular duct.");
                      return;
                    }
                    // Circular duct area formula: π * (Diameter/2)^2
                    const area = Math.PI * Math.pow(diameter / 2, 2);
                    ductSize = airflow / (velocity * area);
                  }

                  // Displaying results
                  displayResults(ductSize.toFixed(2));
                }

                function displayResults(ductSize) {
                  const resultTableBody = document.getElementById('resultTableBody');
                  const row = `
        <tr>
          <td>${ductSize} sq. inches</td>
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