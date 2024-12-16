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
                </div>
              </div>

              <script>
                function calculateArea() {
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const unit = getSelectedUnit();

                  const area = length * width;

                  document.getElementById('resultTableBody').innerHTML = ''; // Clear previous results
                  displayAreaInAllUnits(area);
                  document.getElementById('resultVolume').innerHTML = ''; // Clear volume result

                  fadeInResultSection();
                }

                function calculateVolume() {
                  const length = parseFloat(document.getElementById('length').value);
                  const width = parseFloat(document.getElementById('width').value);
                  const height = parseFloat(document.getElementById('height').value);
                  const unit = getSelectedUnit();

                  const volume = length * width * height;

                  document.getElementById('resultTableBody').innerHTML = ''; // Clear previous results
                  displayVolumeInAllUnits(volume);
                  document.getElementById('resultArea').innerHTML = ''; // Clear area result

                  fadeInResultSection();
                }

                function getSelectedUnit() {
                  const radios = document.getElementsByName('unit');

                  for (const radio of radios) {
                    if (radio.checked) {
                      return radio.value;
                    }
                  }

                  // Default to meters if no radio button is checked (this should not happen with the provided UI)
                  return 'meters';
                }

                function displayAreaInAllUnits(area) {
                  const units = ['meters', 'feet', 'yards', 'kilometers', 'acres', 'hectares', 'centimeters', 'inches'];
                  const resultTableBody = document.getElementById('resultTableBody');

                  units.forEach(unit => {
                    const convertedArea = convertArea(area, 'meters', unit);
                    resultTableBody.innerHTML += `<tr><td>${unit}</td><td>${convertedArea} square ${unit}</td><td></td></tr>`;
                  });
                }

                function displayVolumeInAllUnits(volume) {
                  const units = ['meters', 'feet', 'yards', 'kilometers', 'acres', 'hectares', 'centimeters', 'inches'];
                  const resultTableBody = document.getElementById('resultTableBody');

                  units.forEach(unit => {
                    const convertedVolume = convertVolume(volume, 'meters', unit);
                    resultTableBody.innerHTML += `<tr><td>${unit}</td><td></td><td>${convertedVolume} cubic ${unit}</td></tr>`;
                  });
                }

                function convertArea(value, fromUnit, toUnit) {
                  // Add conversion logic here
                  return value; // Placeholder, actual conversion logic needs to be implemented
                }

                function convertVolume(value, fromUnit, toUnit) {
                  // Add conversion logic here
                  return value; // Placeholder, actual conversion logic needs to be implemented
                }

                function fadeInResultSection() {
                  const resultSection = document.getElementById('resultSection');
                  resultSection.style.opacity = '0';

                  setTimeout(() => {
                    resultSection.style.opacity = '1';
                  }, 100);
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