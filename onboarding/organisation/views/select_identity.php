<?php if (isset($_SESSION['GSI_SESSION_FOR_ENTITY_TYPE'])) {
    if ($_SESSION['GSI_SESSION_FOR_ENTITY_TYPE'] == "INDIVIDUAL") {
        $individual_checked = 'active';
        $organization_checked = '';
    } else {
        $individual_checked = '';
        $organization_checked = 'active';
    }
} else {
    $individual_checked = '';
    $organization_checked = '';
} ?>

<form class="row pt-3" action="<?php echo CONTROLLER; ?>/ModuleController/OnboardingController.php" method="POST">
    <?php echo FormPrimaryInputs(true); ?>
    <div class="col-md-12 text-center">
        <h4>Select Your Onboarding Entity Type</h4>
        <p>
            Choose <strong>Individual</strong> if you are registering as a freelancer or self-employed professional.
            Select <strong>Organization</strong> if you represent a registered business entity.
        </p>
        <div class="flex-c-b mt-5 identity-steps">
            <label onclick="form.submit()" class="bg-white p-2 b-r-2 shadow-sm link w-pr-25 m-2 d-block <?php echo $individual_checked; ?>">
                <h1 class="fs-50 text-primary"><i class="fa fa-user"></i></h1>
                <input type="radio" name="GSI_entity_type" value="INDIVIDUAL" hidden>
                <span class="fs-15 bold">INDIVIDUAL</span>
                <p class="text-secondary">I am creating an account for an individual, where all data is managed by me or by my team only. </p>
            </label>
            <label onclick="form.submit()" class="bg-white p-2 b-r-2 shadow-sm link w-pr-25 m-2 d-block <?php echo $organization_checked; ?>">
                <h1 class="fs-50 text-warning"><i class="fa fa-building"></i></h1>
                <input type="radio" name="GSI_entity_type" value="ORGANISATION" hidden>
                <span class="fs-15 bold">ORGANISATION</span>
                <p class="text-secondary">I am creating an account for my business, where all data is managed by admins and team members. </p>
            </label>
        </div>
    </div>
    <div class="col-md-12 text-center pt-3">
        <?php if (isset($_SESSION['GSI_SESSION_FOR_ENTITY_TYPE'])) { ?>
            <hr>
            <img src="<?php echo STORAGE_URL; ?>/others/onboarding-progress-bar.gif" class="w-pr-20">
            <h5 id="message" class="pt-0 mt-0"><i class="fa fa-refresh fa-spin text-danger"></i> Please wait while preparing files and folders for you. It will take only <span id="countdown" class="bold text-black">5</span> seconds...</h5>
            <script>
                let timeLeft = 5;
                const countdownElement = document.getElementById("countdown");

                const timer = setInterval(() => {
                    timeLeft--;
                    countdownElement.textContent = timeLeft;
                    if (timeLeft <= 0) {
                        clearInterval(timer);
                        window.location.href = "?onboarding_firm=Vy80RENjZGxxTTNDOHN5VkRJSGlJUT09"; // Change to your target URL
                    }
                }, 1000);
            </script>
        <?php } ?>
    </div>
</form>