<link rel="shortcut icon" href="<?php echo MAIN_LOGO; ?>">
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/adminlte.min.css" />
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/app.css" />
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/message.css" />
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/theme.css" />
<link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/utility.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
<link rel="stylesheet" href="https://app.apnalead.com/assets/plugins/fontawesome-free/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" integrity="sha512-EaaldggZt4DPKMYBa143vxXQqLq5LE29DG/0OoVenoyxDrAScYrcYcHIuxYO9YNTIQMgD8c8gIUU8FQw7WpXSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?php echo ASSETS_URL; ?>/js/textarea.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo CONFIG('GOOGLE_MAP_API'); ?>"></script>
<script>
  tinymce.init({
    selector: 'textarea.editor',
    menubar: false
  });
</script>