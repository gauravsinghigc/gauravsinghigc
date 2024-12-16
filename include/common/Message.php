<?php
//check message display status true or not
if (CONTROL_NOTIFICATION == "true") {

  //success message
  if (isset($_SESSION['success'])) { ?>
    <div class="notification-box" id="MsgArea1">
      <?php if (CONTROL_NOTIFICATION_SOUND == "true") { ?>
        <audio controls autoplay hidden="">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/success.mp3" type="audio/ogg">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/success.mp3" type="audio/ogg">
        </audio>
      <?php } ?>
      <h4 class="bg-success p-3 text-white" onclick="HideMsgNote('MsgArea1')"><i class="fa fa-check-circle"></i> Success!
        <i class="fa fa-times"></i>
      </h4>
      <p class="mb-0">
        <span class="font-14">
          <?php echo $_SESSION['success']; ?>
        </span>
        <br><br>
      </p>
      <script>
        setTimeout(function() {
          $("#MsgArea1").fadeOut("slow");
        }, <?php echo CONTROL_MSG_DISPLAY_TIME; ?>);
      </script>
    </div>
    <?php
    if (!empty($_SESSION['success'])) {
      unset($_SESSION['success']);
    }

    //info message
  } elseif (isset($_SESSION['info'])) { ?>
    <div class="notification-box" id="MsgArea2">
      <?php if (CONTROL_NOTIFICATION_SOUND == "true") { ?>
        <audio controls autoplay hidden="">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/info.mp3" type="audio/ogg">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/info.mp3" type="audio/ogg">
        </audio>
      <?php } ?>
      <h4 class="bg-info p-3 text-white" onclick="HideMsgNote('MsgArea2')"><i class="fa fa-bell"></i> Notification
        <i class="fa fa-times"></i>
      </h4>
      <p class="mb-0">
        <span class="font-14">
          <?php echo $_SESSION['info']; ?>
        </span>
        <br><br>
      </p>
      <script>
        setTimeout(function() {
          $("#MsgArea2").fadeOut("slow");
        }, <?php echo CONTROL_MSG_DISPLAY_TIME; ?>);
      </script>
    </div>
    <?php
    if (!empty($_SESSION['info'])) {
      unset($_SESSION['info']);
    }

    //warning message
  } elseif (isset($_SESSION['warning'])) { ?>
    <div class="notification-box" id="MsgArea3">
      <?php if (CONTROL_NOTIFICATION_SOUND == "true") { ?>
        <audio controls autoplay hidden="">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/danger.mp3" type="audio/ogg">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/danger.mp3" type="audio/ogg">
        </audio>
      <?php } ?>
      <h4 class="bg-danger p-3 text-white" onclick="HideMsgNote('MsgArea3')">Failed
        <i class="fa fa-times"></i>
      </h4>
      <p class="mb-0">
        <span class="font-14">
          <?php echo $_SESSION['warning']; ?>
        </span>
        <br><br>
      </p>
      <script>
        setTimeout(function() {
          $("#MsgArea3").fadeOut("slow");
        }, <?php echo CONTROL_MSG_DISPLAY_TIME; ?>);
      </script>
    </div>
    <?php
    if (!empty($_SESSION['warning'])) {
      unset($_SESSION['warning']);
    }

    //failed message
  } elseif (isset($_SESSION['danger'])) { ?>
    <div class="notification-box" id="MsgArea4">
      <?php if (CONTROL_NOTIFICATION_SOUND == "true") { ?>
        <audio controls autoplay hidden="">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/warning.mp3" type="audio/ogg">
          <source src="<?php echo STORAGE_URL_D; ?>/sys-tone/warning.mp3" type="audio/ogg">
        </audio>
      <?php } ?>
      <h4 class="bg-danger p-3 text-white" onclick="HideMsgNote('MsgArea4')"> <i class="fa fa-warning"></i> Something Went Wrong!
        <i class="fa fa-times"></i>
      </h4>
      <p class="mb-0">
        <span class="font-14">
          <?php echo $_SESSION['danger']; ?>
        </span>
        <br><br>
      </p>
      <script>
        setTimeout(function() {
          $("#MsgArea4").fadeOut("slow");
        }, <?php echo CONTROL_MSG_DISPLAY_TIME; ?>);
      </script>
    </div>
<?php
    if (!empty($_SESSION['danger'])) {
      unset($_SESSION['danger']);
    }
  }
} ?>