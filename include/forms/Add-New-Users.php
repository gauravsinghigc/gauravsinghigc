<section class="pop-section hidden" id="AddNewUsers">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="flex-s-b">
                        <h4 class='app-heading w-pr-100 m-b-0'>Add New Users</h4>
                        <a onclick="Databar('AddNewUsers')" class="btn btn-sm btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                    </div>
                </div>
            </div>
            <form class="row mt-3" action="<?php echo CONTROLLER; ?>" method="POST">
                <?php FormPrimaryInputs(true); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 row">
                            <div class="col-md-12">
                                <h4 class="app-sub-heading"><i class='fa fa-user'></i> User Primary Details</h4>
                            </div>
                            <div class="form-group pb-2 col-md-3">
                                <label class="control-label">Sal.</label>
                                <select name='UserSalutation' class="form-control" required>
                                    <?php echo InputOptions(SALUTATION, "Select Salutation"); ?>
                                </select>
                            </div>
                            <div class="form-group pb-2 col-md-9">
                                <label>Full Name</label>
                                <input type="text" required name="UserFullName" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-7">
                                <label>Phone Number <span id='phonemsg'></span></label>
                                <input type="tel" oninput="CheckExistingPhoneNumbers()" Id='PhoneNumberCheck' required name="UserPhoneNumber" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-5">
                                <label>Company Name</label>
                                <input type="text" required name="UserCompanyName" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Working Industry</label>
                                <input type="text" name="UserWorkFeilds" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Designation</label>
                                <input type="text" name="UserDesignation" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Date of Birth</label>
                                <input type="date" value='<?php echo DATE("Y-m-d"); ?>' name="UserDateOfBirth" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 row">
                            <div class="col-md-12">
                                <h4 class="app-sub-heading"><i class='fa fa-sign-in'></i> Login Details</h4>
                            </div>
                            <div class="form-group pb-2 col-md-12">
                                <label>Username/Login EmailId <span id='emailmsg'></span></label>
                                <input type="email" oninput="CheckExistingMailId()" id='LoginMailIdCheck' required name="UserEmailId" class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-12">
                                <label>Password</label>
                                <input type="text" required name="UserPassword" class="form-control">
                            </div>
                            <div class="col-md-4 form-group pb-2">
                                <label>Login Status</label>
                                <select name='UserStatus' class="form-control" required>
                                    <?php echo InputOptionsWithKey([
                                        "0" => "Inactive",
                                        "1" => "Active"
                                    ], "0"); ?>
                                </select>
                            </div>
                            <div class="col-md-4 form-group pb-2">
                                <label>Login Type</label>
                                <select name='UserType' class="form-control" required>
                                    <?php
                                    echo InputOptions(USER_ROLES, "");
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <a href="#" onclick="Databar('AddNewUsers')" class="btn btn-md btn-default">Cancel</a>
                    <button type="button" id='subbtn' name="CreateNewUser" class="btn btn-md btn-success"><i class="fa fa-check"></i> Save Details</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    function CheckExistingPhoneNumbers() {
        let SearchingFor = document.getElementById("PhoneNumberCheck");
        var phonemsg = document.getElementById("phonemsg");
        var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        var subbtn = document.getElementById("subbtn");
        let ExistingPhoneNumbers = [<?php
                                    $AllData = SET_SQL("SELECT UserPhoneNumber FROM users", true);
                                    if ($AllData != null) {
                                        foreach ($AllData as $Data) {
                                            echo "'" . $Data->UserPhoneNumber . "', ";
                                        }
                                    } ?>];

        if (ExistingPhoneNumbers.includes(SearchingFor.value)) {
            phonemsg.classList.add("text-danger");
            phonemsg.classList.remove("text-warning");
            phonemsg.innerHTML = "<i class='fa fa-warning'></i> Phone Number Already Exits";
            subbtn.type = "button";
        } else if (pattern.test(SearchingFor.value) == false) {
            phonemsg.classList.add("text-warning");
            phonemsg.classList.remove("text-danger");
            phonemsg.innerHTML = "<i class='fa fa-warning'></i> Phone Number is not valid";
            subbtn.type = "button";
        } else {
            phonemsg.classList.remove("text-danger");
            phonemsg.classList.remove("text-warning");
            phonemsg.classList.add("text-success");
            phonemsg.innerHTML = "<i class='fa fa-check'></i> Phone Number is Ok";
            subbtn.type = "submit";
        }
    }

    function CheckExistingMailId() {
        let SearchingFor = document.getElementById("LoginMailIdCheck");
        var emailmsg = document.getElementById("emailmsg");
        var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var subbtn = document.getElementById("subbtn");
        let CheckExistingMailId = [<?php
                                    $AllData = SET_SQL("SELECT UserEmailId  FROM users", true);
                                    if ($AllData != null) {
                                        foreach ($AllData as $Data) {
                                            echo "'" . $Data->UserEmailId . "', ";
                                        }
                                    } ?>];

        if (CheckExistingMailId.includes(SearchingFor.value)) {
            emailmsg.classList.add("text-danger");
            emailmsg.classList.remove("text-warning");
            emailmsg.innerHTML = "<i class='fa fa-warning'></i> Email-Id Already Exits";
            subbtn.type = "button";
        } else if (pattern.test(SearchingFor.value) == false) {
            emailmsg.classList.add("text-warning");
            emailmsg.classList.remove("text-danger");
            emailmsg.innerHTML = "<i class='fa fa-warning'></i> Email-ID is not valid";
            subbtn.type = "button";
        } else {
            emailmsg.classList.remove("text-danger");
            emailmsg.classList.remove("text-warning");
            emailmsg.classList.add("text-success");
            emailmsg.innerHTML = "<i class='fa fa-check'></i> Email-ID is Ok";
            subbtn.type = "submit";
        }
    }
</script>