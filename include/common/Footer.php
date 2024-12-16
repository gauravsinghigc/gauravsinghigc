<?php
include __DIR__ . "/../../include/common/Message.php";
include __DIR__ . "/../forms/Add-Record-Window.php";
?>
<section class="fixed-bottom bg-white shadow-sm">
  <div class="text-gray-600 text-center mb-0 text-black">
    <div class="text-center bold fs-12">
      <b>
        <i class="fa fa-clock text-success"></i>
        <span id='CurrentTime'></span> | <i class="fa fa-calendar text-danger"></i>
        <span><?php echo date("d D M, Y"); ?></span>
      </b>
      <b>| &copy; <?php echo APP_NAME; ?></b> @ <?php echo date("Y"); ?>
    </div>
  </div>
</section>