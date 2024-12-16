<section class="pop-section hidden" id="update_users_records_<?php echo $Users->UserId; ?>">
    <div class="action-window">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="flex-s-b">
                        <h4 class='app-heading w-pr-100 m-b-0'>Update User details</h4>
                        <a onclick="Databar('update_users_records_<?php echo $Users->UserId; ?>')" class="btn btn-sm btn-danger ml-1"><i class="fa fa-times fs-25"></i></a>
                    </div>
                </div>
            </div>
            <form class="row mt-3" action="<?php echo CONTROLLER; ?>" method="POST">
                <?php echo FormPrimaryInputs(true, [
                    "UserId" => $Users->UserId
                ]); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 row">
                            <div class="col-md-12">
                                <h4 class="app-sub-heading"><i class='fa fa-user'></i> User Primary Details</h4>
                            </div>
                            <div class="form-group pb-2 col-md-3">
                                <label class="control-label">Sal.</label>
                                <select name='UserSalutation' class="form-control" required>
                                    <?php echo InputOptions(SALUTATION, $Users->UserSalutation); ?>
                                </select>
                            </div>
                            <div class="form-group pb-2 col-md-9">
                                <label>Full Name</label>
                                <input type="text" required name="UserFullName" value='<?php echo $Users->UserFullName; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-7">
                                <label>Phone Number</label>
                                <input type="tel" required name="UserPhoneNumber" value='<?php echo $Users->UserPhoneNumber; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-5">
                                <label>Company Name</label>
                                <input type="text" required name="UserCompanyName" value='<?php echo $Users->UserCompanyName; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Working Industry</label>
                                <input type="text" name="UserWorkFeilds" value='<?php echo $Users->UserWorkFeilds; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Designation</label>
                                <input type="text" name="UserDesignation" value='<?php echo $Users->UserDesignation; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-4">
                                <label>Date of Birth</label>
                                <input type="date" value='<?php echo $Users->UserDateOfBirth; ?>' name="UserDateOfBirth" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5 row">
                            <div class="col-md-12">
                                <h4 class="app-sub-heading"><i class='fa fa-sign-in'></i> Login Details</h4>
                            </div>
                            <div class="form-group pb-2 col-md-12">
                                <label>Username/Login EmailId</label>
                                <input type="email" required name="UserEmailId" value='<?php echo $Users->UserEmailId; ?>' class="form-control">
                            </div>
                            <div class="form-group pb-2 col-md-12">
                                <label>Password</label>
                                <input type="text" required name="UserPassword" value='<?php echo SECURE($Users->UserPassword, "d"); ?>' class="form-control">
                            </div>
                            <div class="col-md-4 form-group pb-2">
                                <label>Login Status</label>
                                <select name='UserStatus' class="form-control" required>
                                    <?php echo InputOptionsWithKey([
                                        "0" => "Inactive",
                                        "1" => "Active"
                                    ], $Users->UserStatus); ?>
                                </select>
                            </div>
                            <div class="col-md-4 form-group pb-2">
                                <label>Login Type</label>
                                <select name='UserType' class="form-control" required>
                                    <?php echo InputOptions(USER_ROLES, $Users->UserType); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-right">
                    <hr>
                    <a href="#" onclick="Databar('update_users_records_<?php echo $Users->UserId; ?>')" class="btn btn-md btn-default">Cancel</a>
                    <button type="submit" name="UpdateUserDetailsRecords" class="btn btn-md btn-success"><i class="fa fa-check"></i> Update Details</button>
                </div>
            </form>
        </div>
    </div>
</section>