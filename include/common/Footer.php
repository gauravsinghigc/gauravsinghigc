<?php
include __DIR__ . "/../../include/common/Message.php";
include __DIR__ . "/../forms/Add-Record-Window.php";
?>

<section class="fixed-bottom bg-white shadow-sm">
  <div class="text-gray-600 text-center mb-0 text-black">
    <div class="text-center bold fs-12">
      <b>
        <i class="fa fa-clock text-success"></i>
        <span id="CurrentTime"></span> |
        <i class="fa fa-calendar text-danger"></i>
        <span><?php echo date("d D M, Y"); ?></span>
      </b>
      <b>| &copy; <?php echo APP_NAME; ?></b> @ <?php echo date("Y"); ?>
      |
      <button onclick="EnlargeFontSize()" class="btn btn-xs btn-default">
        <i class="fa fa-search-plus fs-10"></i>
      </button>
      <button onclick="LowerFontSize()" class="btn btn-xs btn-default">
        <i class="fa fa-search-minus fs-10"></i>
      </button>
      <button id="RestoreToDefaultBtn" class="btn btn-xs btn-default hidden" onclick="restoreToDefault()">
        <i class="fa fa-history fs-10"></i>
      </button>
      <span id="SizeUpdateMsg" class="fs-12 bold text-danger"></span>

    </div>
  </div>
</section>

<div class="InsertRecordBtn">
  <a href="" class="btn-default text-white btn btn-md"><i class="fa fa-refresh"></i></a>
</div>