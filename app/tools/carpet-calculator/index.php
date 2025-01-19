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
            <div class="shadow-sm p-2 b-r-1 mt-3">
              <h4 class="app-sub-heading"><i class='fa fa-calculator text-warning'></i> <?php echo $PageHeading; ?></h4>

              <div class="container mt-3">
                <div class="row">
                  <div class="col-md-8">
                    <form id="calculatorForm">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <h6>Enter Required values in the respective fields</h6>
                          <hr>
                          <!-- Unit selection -->
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitMeters" value="meters" checked>
                            <label class="form-check-label" for="unitMeters">Meters</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitFeet" value="feet">
                            <label class="form-check-label" for="unitFeet">Feet</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitYards" value="yards">
                            <label class="form-check-label" for="unitYards">Yards</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitKilometers" value="kilometers">
                            <label class="form-check-label" for="unitKilometers">Kilometers</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitAcres" value="acres">
                            <label class="form-check-label" for="unitAcres">Acres</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitHectares" value="hectares">
                            <label class="form-check-label" for="unitHectares">Hectares</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitCentimeters" value="centimeters">
                            <label class="form-check-label" for="unitCentimeters">Centimeters</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="unitInches" value="inches">
                            <label class="form-check-label" for="unitInches">Inches</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="length">Length:</label>
                          <input type="number" class="form-control" id="length" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="width">Width:</label>
                          <input type="number" class="form-control" id="width" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="height">Height:</label>
                          <input type="number" class="form-control" id="height" required>
                        </div>
                      </div>

                      <button type="button" class="btn btn-primary" onclick="calculateArea()">Calculate Area</button>
                      <button type="button" class="btn btn-success" onclick="calculateVolume()">Calculate Volume</button>
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
                              <th>Unit</th>
                              <th>Area</th>
                              <th>Volume</th>
                            </tr>
                          </thead>
                          <tbody id="resultTableBody"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <script>
                    // Conversion factors for different units
                    const conversionFactors = {
                      meters: 1,
                      feet: 0.092903, // 1 foot^2 = 0.092903 meters^2
                      yards: 0.836127, // 1 yard^2 = 0.836127 meters^2
                      kilometers: 1e6, // 1 kilometer^2 = 1e6 meters^2
                      acres: 4046.86, // 1 acre = 4046.86 meters^2
                      hectares: 10000, // 1 hectare = 10000 meters^2
                      centimeters: 1e-4, // 1 cm^2 = 1e-4 meters^2
                      inches: 0.00064516 // 1 inch^2 = 0.00064516 meters^2
                    };

                    // Function to calculate area
                    function calculateArea() {
                      const length = parseFloat(document.getElementById('length').value);
                      const width = parseFloat(document.getElementById('width').value);
                      const unit = document.querySelector('input[name="unit"]:checked').value;

                      if (isNaN(length) || isNaN(width)) {
                        alert("Please enter valid values for length and width.");
                        return;
                      }

                      // Calculate area in square meters
                      let area = length * width;

                      // Convert to the selected unit
                      const convertedArea = area / conversionFactors[unit];

                      displayResult(unit, convertedArea.toFixed(2), '-');
                    }

                    // Function to calculate volume
                    function calculateVolume() {
                      const length = parseFloat(document.getElementById('length').value);
                      const width = parseFloat(document.getElementById('width').value);
                      const height = parseFloat(document.getElementById('height').value);
                      const unit = document.querySelector('input[name="unit"]:checked').value;

                      if (isNaN(length) || isNaN(width) || isNaN(height)) {
                        alert("Please enter valid values for length, width, and height.");
                        return;
                      }

                      // Calculate volume in cubic meters
                      let volume = length * width * height;

                      // Convert to the selected unit (volume doesn't have a direct conversion here, assuming meters for simplicity)
                      displayResult(unit, '-', volume.toFixed(2));
                    }

                    // Function to display results in the table
                    function displayResult(unit, area, volume) {
                      const resultTableBody = document.getElementById('resultTableBody');
                      const row = `
    <tr>
      <td>${unit}</td>
      <td>${area}</td>
      <td>${volume}</td>
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
    </div>
  </div>

  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/FooterFiles.php";
  ?>
</body>

</html>