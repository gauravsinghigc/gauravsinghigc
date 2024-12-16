<h6 class="app-sub-heading">Available Options</h6>
<div class='app-setting-menus'>
    <?php
    foreach (VENDOR_MENUS as $Key => $VendorMenus) { ?>
        <a href="<?php echo APP_URL; ?>/vendors/details/?view=<?php echo $Key; ?>" class="RecordsList" id='<?php echo $Key; ?>'>
            <i class="fa <?php echo $VendorMenus['icon']; ?> text-danger"></i> <?php echo $VendorMenus['name']; ?> <i class="fa fa-angle-right"></i>
        </a>
    <?php } ?>
</div>