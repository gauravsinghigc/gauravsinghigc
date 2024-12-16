<section class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="main-navigation-bar">
                <?php
                foreach (NAVIGATION_MENUS as $key => $value) {

                    $ActiveRequestedTab = IfRequested("GET", "get", ReturnSessionalValues("get", "ACTIVE_MAIN_NAV_LINK", "Home"));

                    if ($ActiveRequestedTab == $key) {
                        $ActiveLink = "active";
                    } else {
                        $ActiveLink = "";
                    }
                ?>
                    <li id='<?php echo $key; ?>' class='RecordsList <?php echo $ActiveLink; ?>'>
                        <a href="<?php echo $value['url']; ?>?get=<?php echo $key; ?>">
                            <i class='fa fa-<?php echo $value['icon']; ?>'></i>
                            <span class='title'>
                                <?php echo $value['title']; ?>
                                <?php
                                if ($value['counts'] != 0) {
                                    echo "<span class='counts'>" . $value['counts'] . "</span>";
                                }
                                ?>
                            </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>