<?php
$Dir = "../..";
require $Dir . '/acm/SysFileAutoLoader.php';
require $Dir . '/handler/AuthController/AuthAccessController.php';

//Header requests
$GetModuleId = SECURE(ReturnSessionalValues("onboarding_firm", "MODULE_FOR_ONBOARDING_STEPS", SECURE(1, "e")), "d");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard @ <?php echo APP_NAME; ?></title>
    <?php include $Dir . "/assets/HeaderFiles.php"; ?>
    <script type="text/javascript">
        function SidebarActive() {
            document.getElementById("Home").classList.add("active");
        }
        window.onload = SidebarActive;
    </script>
</head>

<body>
    <div class="wrapper onboarding">
        <?php include __DIR__ . "/sections/HeaderSections.php" ?>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="shadow-sm p-2 pt-3 pb-3 b-r-1">
                        <h5 class="app-heading">Steps for Onboarding</h5>
                        <div class='app-setting-menus'>
                            <?php foreach (ORGANIZATION_ONBOARDING_STEPS as $OnboardingKey => $OnboardingValues) {
                                $ActiveModuleOption = CheckEquality($OnboardingKey, $GetModuleId, "active");  ?>
                                <a href="?onboarding_firm=<?php echo SECURE($OnboardingKey, "e"); ?>" class='fs-12 <?php echo $ActiveModuleOption; ?>'>
                                    <?php echo RandomColorText('<b><i class="' . $OnboardingValues['icon'] . '"></i></b> '); ?>
                                    (<span class="bold"><?php echo $OnboardingKey; ?></span>)-
                                    <?php echo $OnboardingValues['name']; ?>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="shadow-sm p-2 pt-3 pb-3 b-r-1">
                        <h4 class="app-heading">
                            <i class="<?php echo ORGANIZATION_ONBOARDING_STEPS[$GetModuleId]['icon']; ?>"></i>
                            <?php echo ORGANIZATION_ONBOARDING_STEPS[$GetModuleId]['name']; ?>
                        </h4>

                        <?php include __DIR__ . "/views/" . ORGANIZATION_ONBOARDING_STEPS[$GetModuleId]['module']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include $Dir . "/include/common/Footer.php";
    include $Dir . "/assets/FooterFiles.php";
    ?>
</body>

</html>