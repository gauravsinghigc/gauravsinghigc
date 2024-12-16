<?php
//foreach loop html tag attribute display
function LOOP_TagsAttributes($data)
{
  foreach ($data as $key => $values) {
    return "$key='$values'";
  }
}

$req = "<span class='text-danger'>*</span>";

function moneyFormatIndia($number)
{
  $decimal = (string)($number - floor($number));
  $money = floor($number);
  $length = strlen($money);
  $delimiter = '';
  $money = strrev($money);

  for ($i = 0; $i < $length; $i++) {
    if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $length) {
      $delimiter .= ',';
    }
    $delimiter .= $money[$i];
  }

  $result = strrev($delimiter);
  $decimal = preg_replace("/0\./i", ".", $decimal);
  $decimal = substr($decimal, 0, 3);

  if ($decimal != '0') {
    $result = $result . $decimal;
  }

  return $result;
}

//price function display
function Price($price, $class = null, $icon = null)
{
  $price = moneyFormatIndia($price);

  if ($icon == "icon") {
    $icon = "<i class='fa fa-inr'></i>";
  } else if ($icon == "text") {
    $icon = "INR";
  } else {
    $icon = $icon;
  }
  echo "<span class='$class'>$icon $price</span>";
}

//mrp price function display
function MrpPrice($price)
{
  echo "<span class='text-danger'><strike>Rs.$price</strike></span>";
}

//delete confirmation pop 
function CONFIRM_DELETE_POPUP($id, array $Requests, $controller, $btnname = null, $btncss = null)
{
  $new_no = rand(0000, 99999999);
  $id = $id . "_" . $new_no;

  //if btnname is null
  if ($btnname == null) {
    $btnname = "<i class='fa fa-trash'></i>";
  }

  //if btncss is null
  if ($btncss == null) {
    $btncss = "";
  }

  //create requests
  $CreateRequests = "?";
  $Start = 0;
  foreach ($Requests as $key => $values) {
    if ($Start == 0) {
      $CreateRequests .= "" . $key . "=" . SECURE($values, "e");
    } else {
      $CreateRequests .= "&" . $key . "=" . SECURE($values, "e");
    }
    $Start++;
  }

  //default request
  $CreateRequests .= "&access_url=" . SECURE(RUNNING_URL, "e") . "&AuthToken=" . SECURE(VALIDATOR_REQ, "e");

  //define controller request 
  $Controller_Requests = DOMAIN . "/handler" . "/" . $controller . ".php" . $CreateRequests;
?>
  <a class="sqaure <?php echo $btncss; ?>" onclick="Databar('<?php echo $id; ?>')"><?php echo $btnname; ?></a>
  <section class="popup-background" id="<?php echo $id; ?>">
    <div class="action-area">
      <div class="ref-image">
        <h1 class="text-center">
          <img src="<?php echo STORAGE_URL_D; ?>/tool-img/failed.gif" alt="Remove Record" title="Remove Record">
        </h1>
      </div>
      <div class="activity-details">
        <h5 class="action-title">
          <span class="action-title-text">Confirm Delete Action!</span>
        </h5>
        <p class="action-desc">
          <span class="action-desc-text">You can't recover this if you delete this!</span>
        </p>
      </div>
      <div class="activity-action">
        <a onclick="Databar('<?php echo $id; ?>')" class="btn btn-lg btn-danger">Cancel</a>
        <a href="<?= $Controller_Requests ?>" class="btn btn-lg btn-success">Confirm & Delete</a>
      </div>
    </div>
  </section>
<?php }


//Status View
function STATUS($status)
{
  if ($status == "1") {
    $s = "Active";
    $b = "btn-success";
  } else {
    $s = "Inactive";
    $b = "btn-danger";
  }

  echo "<span class='btn btn-sm $b'>$s</span>";
}

//no data found View
function NoDataTableView($title, $columns)
{ ?>
  <tr>
    <td colspan="<?php echo $columns; ?>"><?php echo $title; ?></td>
  </tr>
<?php }

//function phone
function PHONE($phonenumber, $visibility = "text", $class = null, $icon = null)
{
  if ($phonenumber == null || $phonenumber == "" || $phonenumber == "null") {
    return false;
  } else {
    if ($visibility == "text") {
      echo "<span class='$class'><i class='$icon'></i> $phonenumber</span>";
    } else {
      echo "<a href='tel:$phonenumber' target='_blank' class='$class'><i class='$icon'></i> $phonenumber</a>";
    }
  }
}

//function email
function EMAIL($emailid, $visibility = "text", $class = null, $icon = null)
{
  if ($emailid == null || $emailid == "" || $emailid == "null") {
    return false;
  } else {
    if ($visibility == "text") {
      echo "<span class='$class'><i class='$icon'></i> $emailid</span>";
    } else {
      echo "<a href='mailto:$emailid' target='_blank' class='$class'><i class='$icon'></i> $emailid</a>";
    }
  }
}

//function website
function WEBSITE($website, $visibility = "text", $class = null, $icon = null)
{
  if ($website == null || $website == "" || $website == "null") {
    return false;
  } else {
    if ($visibility == "text") {
      echo "<span class='$class'><i class='$icon'></i> $website</span>";
    } else {
      echo "<a href='$website' target='_blank' class='$class'><i class='$icon'></i> $website</a>";
    }
  }
}

//function address
function ADDRESS($address, $visibility = "text", $class = null, $icon = null)
{
  if ($address == null || $address == "" || $address == "null") {
    return false;
  } else {
    if ($visibility == "text") {
      echo "<span class='$class'><i class='$icon'></i> $address</span>";
    } else {
      echo "<a href='https://www.google.com/maps/search/?api=1&query=$address' target='_blank' class='$class'><i class='$icon'></i> $address</a>";
    }
  }
}


//text area with editors
function TextareaWithEditor(array $attributes, $id)
{
?>
  <script>
    tinymce.init({
      selector: 'textarea#<?php echo $id; ?>',
      menubar: false
    });
  </script>
  <textarea id="<?php echo $id; ?>" <?php echo LOOP_TagsAttributes($attributes); ?>></textarea>
<?php
}

//status view
function StatusView($data)
{
  if ($data == "1" || $data == 1) {
    return "<span class='text-success'><i class='fa fa-check-circle'></i></span>";
  } else {
    return "<span class='text-danger'><i class='fa fa-warning'></i></span>";
  }
}

//status view
function StatusViewWithText($data)
{
  if ($data == "1" or $data == 1 or $data == "Active" or $data == "ACTIVE") {
    return "<span class='text-success'><i class='fa fa-check-circle'></i> Active</span>";
  } elseif ($data == "2" or $data == 2 or $data == "Inactive" or $data == "INACTIVE" or $data == "0") {
    return "<span class='text-danger'><i class='fa fa-warning text-warning'></i> Inactive</span>";
  } elseif ($data == "3" or $data == 3 or $data == "Deleted" or $data == "DELETED") {
    return "<span class='text-danger'><i class='fa fa-trash text-danger'></i> Deleted!</span>";
  } else {
    return "<span class='text-secodary'>$data</span>";
  }
}

//function get serial nos
function SerialNo()
{
  $SerialNo = 0;
  if (isset($_GET['view_page'])) {
    $view_page = $_GET['view_page'];
    if ($view_page == 1) {
      $SerialNo = 0;
    } else {
      $SerialNo = CONFIG("DEFAULT_RECORD_LISTING") * ($view_page - 1);
    }
  } else {
    $SerialNo = $SerialNo;
  }

  return $SerialNo;
}
//pagination Headers
function listingstartfrom($Return = null)
{
  $RecordLimit = (int)CONFIG("DEFAULT_RECORD_LISTING");

  $page = 1;
  // Get current page number
  if (isset($_GET["view_page"])) {
    $page = $_GET["view_page"];
  } else {
    $page = 1;
  }
  $value = $page - 1;
  $start = $value * $RecordLimit;

  if ($Return == null) {
    return null;
  } else {
    if ($Return == "start") {
      return $start;
    } elseif ($Return == "end") {
      return $RecordLimit;
    }
  }
}

//pagination footers
function PaginationFooter(int $TotalItems = 0, $RedirectForAll = "index.php")
{

  $RecordLimit = CONFIG("DEFAULT_RECORD_LISTING");

  // Get current page number
  if (isset($_GET["view_page"])) {
    $page = $_GET["view_page"];
  } else {
    $page = 1;
  }


  $next_page = ($page + 1);
  $previous_page = ($page - 1);
  $NetPages = round(($TotalItems / $RecordLimit) + 0.5);
  if ($NetPages == 1) {
    $next_page = 1;
  }

  if ($previous_page == 0) {
    $previous_page = 1;
  }

  //prepare url parameter and pass with pagination
  $UrlParameters = "";
  if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
      if ($key != "view_page") {
        $UrlParameters .= "&$key=$value";
      }
    }
  }
?>
  <div class="col-md-12 flex-s-b mt-2 mb-1 pl-0 pr-0">
    <div class="">
      <h6 class="mb-0 mt-1" style="font-size:0.85rem;">Page <b><?php echo IfRequested("GET", "view_page", $page, false); ?></b> from <b><?php echo $NetPages; ?> </b> pages <br>Total <b><?php echo $TotalItems; ?></b> entries</h6>
    </div>
    <div class="flex-s-b">
      <span class="mr-1">
        <a href="?view_page=<?php echo $previous_page . $UrlParameters; ?>" class="btn btn-xs btn-primary"><i class="fa fa-angle-double-left"></i></a>
      </span>
      <form>
        <input type="number" name="view_page" onchange="form.submit()" class="form-control mb-0 fs-12" min="1" max="<?php echo $NetPages; ?>" value="<?php echo IfRequested("GET", "view_page", 1, false); ?>">
      </form>
      <span class="ml-1">
        <a href="?view_page=<?php echo $next_page . $UrlParameters; ?>" class="btn btn-xs btn-primary"><i class="fa fa-angle-double-right"></i></a>
      </span>
      <?php if (isset($_GET['view_page'])) { ?>
        <span class="ml-1">
          <a href="<?php echo $RedirectForAll; ?>" class="btn btn-xs btn-danger mb-0"><i class="fa fa-times"></i></a>
        </span>
      <?php } ?>
    </div>
  </div>
<?php
}

//define constants
define("SERIAL_NO", SerialNo());
define("START_FROM", listingstartfrom("start"));


//fontawesome icon
function FontIcon($icon)
{
  return "<i class='fa fa-$icon'></i>";
}
