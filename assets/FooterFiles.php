<script src="<?php echo ASSETS_URL; ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/adminlte.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
    // Initialize tags input after the document is fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        $('#tags-input').tagsinput();
    });
</script>