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

              <div class="row mt-3">
                <div class="col-md-6">
                  <h6 class="bold mt-2">Enter Wall, brick, and brick wastage details</h6>
                  <hr>
                  <form class="row">
                    <div class="col-md-4 col-4 col-xs-4 form-group">
                      <label>Brick Length (in inches)</label>
                      <input type="text" value="9" oninput="CalculateBricks()" class="form-control" id='length'>
                    </div>
                    <div class="col-md-4 col-4 col-xs-4 form-group">
                      <label>Brick Height (in inches)</label>
                      <input type="text" value="3" oninput="CalculateBricks()" class="form-control" id='height'>
                    </div>
                    <div class="col-md-4 col-4 col-xs-4 form-group">
                      <label>Brick Width (in inches)</label>
                      <input type="text" value="4" oninput="CalculateBricks()" class="form-control" id='width'>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Wall Thickness</label>
                      <select class="form-control" onchange="CalculateBricks()" id='WallThickness'>
                        <option value='4'>Half-Brick (4 inches)</option>
                        <option value='9'>Full-Brick (9 inches)</option>
                        <option value='13'>Full & Half-Brick (13 inches)</option>
                        <option value='18'>Double Brick (18 inches)</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Wall Height (in Feet)</label>
                      <input class="form-control" oninput="CalculateBricks()" value='10' id='WallHeight' type='text'>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Wall Width (in Feet)</label>
                      <input class="form-control" oninput="CalculateBricks()" value="10" id='WallWidth' type='text'>
                    </div>
                    <div class="form-group col-md-8">
                      <label>Space between two bricks (Mortar Area) in inches</label>
                      <input class="form-control" oninput="CalculateBricks()" value="0.5" id='MortarAreaValue' type='text'>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Brick Wastage (in %) (5-10)</label>
                      <input class="form-control" oninput="CalculateBricks()" value="5" id='BrickWastageValue' type='number'>
                    </div>

                    <div class="col-md-12">
                      <hr>
                    </div>
                    <div class="col-md-4 form-group">
                      <label>Grade of Mortar</label>
                      <select class="form-control" onchange="CalculateBricks()" id='CementRation'>
                        <option value="4">1+3</option>
                        <option value="5" selected>1+4</option>
                        <option value="6">1+5</option>
                        <option value="7">1+6</option>
                        <option value="8">1+8</option>
                      </select>
                    </div>

                    <div class="col-md-12">
                      <hr>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Price Per Brick</label>
                      <input class="form-control" oninput="CalculateBricks()" value="1" id='PriceBrick' type='number'>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Price Per Cement Bags</label>
                      <input class="form-control" oninput="CalculateBricks()" value="1" id='PriceCement' type='number'>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Price Per cft Sand</label>
                      <input class="form-control" oninput="CalculateBricks()" value="1" id='PriceSand' type='number'>
                    </div>

                    <div class="col-md-12 justify-content-end text-right">
                      <button type="reset" class="btn btn-md btn-default"> Reset</button>
                      <button type='button' onclick="CalculateBricks()" class="btn btn-md btn-success">Calculate <i class="fa fa-angle-right"></i></button>
                    </div>
                  </form>
                </div>

                <div class="col-md-6">
                  <div class="shadow-sm p-2">
                    <h6 class="bold">Brick Calculation results</h6>
                    <hr>
                    <table class="table table-striped">
                      <tr>
                        <th>Wall Volume (in cubic. Feet)</th>
                        <td id='WallArea'></td>
                      </tr>
                      <tr>
                        <th>One Brick Volume (in cubic feet)</th>
                        <td id='BrickSizeInches'></td>
                      </tr>
                      <tr>
                        <th>Mortar Volume (in cubic feet)</th>
                        <td id='MortarVolumeDisplay'></td>
                      </tr>
                      <tr>
                        <th>One Brick Volume After Mortar (in cubic feet)</th>
                        <td id='AfterMortarBrickVolume'></td>
                      </tr>
                      <tr>
                        <th>Wall Thickness</th>
                        <td id='WallSize'></td>
                      </tr>
                      <tr>
                        <th>No. of Bricks (without Mortar)</th>
                        <td id='TotalBricks'></td>
                      </tr>
                      <tr>
                        <th>No. of Bricks (with Mortar)</th>
                        <td id='TotalBricksWithMortar'></td>
                      </tr>
                      <tr>
                        <th>Brick Wastage</th>
                        <td id='BrickWastage'></td>
                      </tr>
                      <tr>
                        <th class="h5 bold">Net Bricks Required</th>
                        <td id='NetBrickRequired' class="h5 bold text-success"></td>
                      </tr>
                    </table>
                    <hr>
                    <h6 class="bold">Cement, Sand & Water Required</h6>
                    <hr>
                    <table class="table table-striped">
                      <tr>
                        <th>Volume Taken By Bricks</th>
                        <td id='BrickVolumes'></td>
                      </tr>
                      <tr>
                        <th>Volume of Mortar (Material)</th>
                        <td id='VolumeOfMortar'></td>
                      </tr>
                      <tr>
                        <th>Cement Volume</th>
                        <td id='CementQty'></td>
                      </tr>
                      <tr>
                        <th>Cement Qty & Bags (50kg/Bag)</th>
                        <td id='CementBags'></td>
                      </tr>
                      <tr>
                        <th>Sand Required</th>
                        <td id='SandRequired'></td>
                      </tr>
                    </table>

                    <h6 class="bold">Prices</h6>
                    <hr>
                    <table class="table table-striped">
                      <tr>
                        <th>Bricks Price</th>
                        <td id='BrickCost'></td>
                      </tr>
                      <tr>
                        <th>Cement</th>
                        <td id='CementCost'></td>
                      </tr>
                      <tr>
                        <th>Sand</th>
                        <td id='SandCost'></td>
                      </tr>
                      <tr>
                        <th class="h5 bold">Total Material Cost</th>
                        <td id='TotalCost' class="h5 text-success bold"></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function CalculateBricks() {
      var WallThickness = parseFloat(document.getElementById("WallThickness").value);
      var WallHeight = parseFloat(document.getElementById("WallHeight").value);
      var WallLength = parseFloat(document.getElementById("WallWidth").value);
      var length = parseFloat(document.getElementById("length").value);
      var height = parseFloat(document.getElementById("height").value);
      var width = parseFloat(document.getElementById("width").value);
      var MortarAreaValue = parseFloat(document.getElementById("MortarAreaValue").value);
      var BrickWastageValue = parseFloat(document.getElementById("BrickWastageValue").value);
      var CementRation = parseFloat(document.getElementById("CementRation").value);
      var PriceBrick = parseFloat(document.getElementById("PriceBrick").value);
      var PriceCement = parseFloat(document.getElementById("PriceCement").value);
      var PriceSand = parseFloat(document.getElementById("PriceSand").value);

      var WallArea = document.getElementById("WallArea");
      var WallSize = document.getElementById("WallSize");
      var TotalBricks = document.getElementById("TotalBricks");
      var BrickSizeInches = document.getElementById("BrickSizeInches");
      var MortarVolumeDisplay = document.getElementById("MortarVolumeDisplay");
      var AfterMortarBrickVolume = document.getElementById("AfterMortarBrickVolume");
      var TotalBricksWithMortar = document.getElementById("TotalBricksWithMortar");
      var BrickWastage = document.getElementById("BrickWastage");
      var NetBrickRequired = document.getElementById("NetBrickRequired");
      var BrickVolumes = document.getElementById("BrickVolumes");
      var VolumeOfMortar = document.getElementById("VolumeOfMortar");
      var CementQty = document.getElementById("CementQty");
      var CementBags = document.getElementById("CementBags");
      var SandRequired = document.getElementById("SandRequired");
      var BrickCost = document.getElementById("BrickCost");
      var CementCost = document.getElementById("CementCost");
      var SandCost = document.getElementById("SandCost");
      var TotalCost = document.getElementById("TotalCost");

      // Calculate total wall area including thickness
      //calculate part
      var TotalWallAreaVolume = (WallHeight * WallLength * (WallThickness / 12)).toFixed(3);
      var lengthInFeet = (length / 12).toFixed(2);
      var heightInFeet = (height / 12).toFixed(2);
      var widthInFeet = (width / 12).toFixed(2);
      var OneBrickVolume = lengthInFeet * heightInFeet * widthInFeet;
      var TotalNumberOfBricks = Math.ceil(TotalWallAreaVolume / OneBrickVolume);

      //mortar calculation
      MortarArea = (MortarAreaValue / 12).toFixed(2);
      MortarLength = +lengthInFeet + +MortarArea;
      MortarHeight = +heightInFeet + +MortarArea;
      MortarWidth = +widthInFeet + +MortarArea;
      MortarVolume = ((MortarHeight * MortarLength * MortarWidth).toFixed(5) - OneBrickVolume).toFixed(5);
      AfterMortarBrickVolumeQty = (+OneBrickVolume + +MortarVolume).toFixed(5);
      NoOfBrickAfterMortarVolumeQty = Math.ceil(TotalWallAreaVolume / AfterMortarBrickVolumeQty);

      //wastate and other calculations
      if (BrickWastageValue != 0 && BrickWastageValue > 0) {
        NumberOfBrickWastated = Math.ceil(NoOfBrickAfterMortarVolumeQty / 100 * BrickWastageValue);
      } else {
        NumberOfBrickWastated = 0;
      }

      TotalNumberOfBricksRequired = NumberOfBrickWastated + NoOfBrickAfterMortarVolumeQty;

      var BrickVolumesQty = TotalNumberOfBricksRequired * OneBrickVolume;
      var VolumeOfMortarQty = (TotalWallAreaVolume - BrickVolumesQty).toFixed(5);

      //cement calculation
      var DryVolumeOfMotar = 1.54 * VolumeOfMortarQty;
      CementVolumeQty = ((DryVolumeOfMotar + 1) / CementRation).toFixed(3);
      CementVolumeinMeter = CementVolumeQty / 35.3147;
      MassOfCementInKgs = (CementVolumeinMeter * 1440).toFixed(2);
      NumberOfCEMENTBags = (MassOfCementInKgs / 50).toFixed(2);
      CementVolumeCFEET = (CementVolumeinMeter * 35.3147).toFixed(2);

      SandVolume = ((+DryVolumeOfMotar * (CementRation - 1)) / CementRation) / 35.3147;
      SandQty = (+SandVolume * 35.3147).toFixed(2);

      //prices
      NetTotalCost = 0;
      NetBrickPrice = TotalNumberOfBricksRequired * PriceBrick;
      NetCementPrice = Math.ceil(Math.ceil(NumberOfCEMENTBags) * PriceCement);
      NetSandPrice = Math.ceil(SandQty * PriceSand);
      NetTotalCost = NetBrickPrice + NetCementPrice + NetSandPrice;

      //html display
      WallArea.innerHTML = TotalWallAreaVolume + " cubic feet";
      BrickSizeInches.innerHTML = OneBrickVolume + " cubic feet";
      WallSize.innerHTML = WallThickness + " inches";
      MortarVolumeDisplay.innerHTML = MortarVolume + " cubic feet";
      TotalBricks.innerHTML = TotalNumberOfBricks + " Bricks";
      AfterMortarBrickVolume.innerHTML = AfterMortarBrickVolumeQty + " cubic feet";
      TotalBricksWithMortar.innerHTML = NoOfBrickAfterMortarVolumeQty + " Bricks";
      BrickWastage.innerHTML = BrickWastageValue + " %" + " (" + NumberOfBrickWastated + " Bricks)";
      NetBrickRequired.innerHTML = TotalNumberOfBricksRequired + " Bricks";
      BrickVolumes.innerHTML = BrickVolumesQty + " cubic feet";
      VolumeOfMortar.innerHTML = VolumeOfMortarQty + " cubic feet";
      CementQty.innerHTML = CementVolumeQty + " cubic feet";
      CementBags.innerHTML = MassOfCementInKgs + " kgs ( " + NumberOfCEMENTBags + " Bags)";
      SandRequired.innerHTML = SandQty + " cubic feet";
      BrickCost.innerHTML = "Rs." + NetBrickPrice + " - (Rs." + PriceBrick + " Per Brick)";
      CementCost.innerHTML = "Rs." + NetCementPrice + " - (Rs." + PriceCement + " Per Bag)";
      SandCost.innerHTML = "Rs." + NetSandPrice + " - (Rs." + PriceSand + " Per cft.)";
      TotalCost.innerHTML = "Rs." + NetTotalCost;

    }
  </script>



  <?php
  include $Dir . "/include/common/Footer.php";
  include $Dir . "/assets/app/FooterFiles.php";
  ?>
</body>

</html>