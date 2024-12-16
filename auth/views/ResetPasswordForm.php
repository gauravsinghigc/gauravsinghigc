<div class="card">
    <div class="card-header text-center">
        <?php include __DIR__ . "/../components/AuthFormLogo.php"; ?>
        <br>
    </div>
    <div class="card-body">
        <?php if (isset($_GET['token'])) {
            $ReceivedToken = $_GET['token'];
            $UserIdForPasswordChange = FETCH("SELECT UserIdForPasswordChange from user_password_change_requests where PasswordChangeToken='$ReceivedToken'", "UserIdForPasswordChange");
            $PasswordChangeTokenExpireTime = FETCH("SELECT PasswordChangeTokenExpireTime FROM user_password_change_requests where PasswordChangeToken='$ReceivedToken' and UserIdForPasswordChange='$UserIdForPasswordChange'", "PasswordChangeTokenExpireTime");
            $RequiredToken = FETCH("SELECT PasswordChangeToken FROM user_password_change_requests where PasswordChangeToken='$ReceivedToken' and UserIdForPasswordChange='$UserIdForPasswordChange'", "PasswordChangeToken");
            $PasswordChangeTokenExpireTime = date("d-m-y h:i", strtotime($PasswordChangeTokenExpireTime));
            $CurrentDateTime = date("d-m-y h:i");
            $_SESSION['SUBMITTED_PASSWORD_RESET_TOKEN'] = $RequiredToken;
            $_SESSION['REQUESTED_EMAIL_ID'] = $UserIdForPasswordChange;

            if (CHECK("SELECT UserIdForPasswordChange FROM user_password_change_requests where PasswordChangeToken='$ReceivedToken'") == true) {
                if ($CurrentDateTime < $PasswordChangeTokenExpireTime) { ?>
                    <h5 class="h5 text-center"><i class='fa fa-edit text-success'></i> Reset Your Password</h5>
                    <form role="form" action="<?php echo CONTROLLER("AuthController/AuthController.php"); ?>" method="POST">
                        <?php echo FormPrimaryInputs($url = RUNNING_URL); ?>
                        <div class="form-group">
                            <label for="inputUsernameEmail">New Password <span id='msg1'></span></label>
                            <input type="text" name="Password1" value="" id="Pass1" required="" class="form-control form-control-lg outline-danger">
                        </div>
                        <div class="form-group">
                            <label for="inputUsernameEmail">Re-Enter New Password <span id='msg2'></span></label>
                            <input type="password" name="Password2" id="Pass2" value="" required="" class="form-control form-control-lg" oninput="CheckPassMatch()">
                        </div>
                        <br>
                        <button type="submit" id='btn' name="RequestForPasswordChange" class="btn btn btn-success btn-block btn-lg">
                            <i class="fa fa-edit fs-18 text-white"></i> Change Password
                        </button>
                    </form>
                    <script>
                        function CheckPassMatch() {
                            var Pass1 = document.getElementById("Pass1").value;
                            var Pass2 = document.getElementById("Pass2").value;
                            if (Pass1 != Pass2) {
                                document.getElementById("msg2").innerHTML = "<span class='text-danger pull-right'><i class='fa fa-warning'></i> Password Mismatch</span>";
                                document.getElementById("Pass2").style.borderColor = "red";
                                document.getElementById("Pass2").style.backgroundColor = "rgba(255, 0, 0, 0.1)";
                                document.getElementById("Pass2").style.color = "red";
                                document.getElementById("Pass2").style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.5)";
                                document.getElementById("Pass2").style.transition = "0.5s";
                                document.getElementById("btn").classList.add("disabled");
                                document.getElementById("btn").type = "button";
                            } else if (Pass1 == "" || Pass1 == null || Pass1 == " ") {
                                document.getElementById("msg2").innerHTML = "<span class='text-danger pull-right'><i class='fa fa-warning'></i> Please Enter Password</span>";
                                document.getElementById("Pass2").style.borderColor = "red";
                                document.getElementById("Pass2").style.backgroundColor = "rgba(255, 0, 0, 0.1)";
                                document.getElementById("Pass2").style.color = "red";
                                document.getElementById("Pass2").style.boxShadow = "0 0 0 0.2rem rgba(255, 0, 0, 0.5)";
                                document.getElementById("Pass2").style.transition = "0.5s";
                                document.getElementById("btn").classList.add("disabled");
                                document.getElementById("btn").type = "button";
                            } else {
                                document.getElementById("msg2").innerHTML = "<span class='text-success pull-right'><i class='fa fa-check'></i> Password Ok</span>";
                                document.getElementById("Pass2").style.borderColor = "green";
                                document.getElementById("Pass2").style.backgroundColor = "rgba(0, 255, 0, 0.1)";
                                document.getElementById("Pass2").style.color = "green";
                                document.getElementById("Pass2").style.boxShadow = "0 0 0 0.2rem rgba(0, 255, 0, 0.5)";
                                document.getElementById("Pass2").style.transition = "0.5s";
                                document.getElementById("btn").classList.remove("disabled");
                                document.getElementById("btn").type = "submit";
                            }
                        }
                    </script>
                <?php } else {
                    $PasswordChangeRequestStatus = "Expired";
                    $PasswordChangeToken = $RequiredToken;
                    $Update = CUSTOM_COLUMN_UPDATE("user_password_change_requests", ["PasswordChangeRequestStatus"], "PasswordChangeToken='$PasswordChangeToken' and UserIdForPasswordChange='$UserIdForPasswordChange'"); ?>
                    <h4 class="text-center">Sorry! Token Expired</h4>
                    <p>Password link is expired. Please re create link or re-send password change request!</p>
                    <a href="<?php echo DOMAIN; ?>/auth/?Authview=ForgetForm" class='btn btn-md btn-lg btn-block btn-primary'><i class="fa fa-refresh"></i> Re Generate Token</a>
                <?php }
            } else {
                $PasswordChangeRequestStatus = "Expired";
                $PasswordChangeToken = $RequiredToken;
                $Update = CUSTOM_COLUMN_UPDATE("user_password_change_requests", ["PasswordChangeRequestStatus"], "PasswordChangeToken='$PasswordChangeToken' and UserIdForPasswordChange='$UserIdForPasswordChange'");
                ?>
                <h4><i class="fa fa-warning text-danger"></i> Token Expired</h4>
                <p>Received Password change token is not valid or may be epxired. You have to create new one by following below links.</p>
                <div class="flex-s-b">
                    <a href="<?php echo DOMAIN; ?>/auth/?Authview=ForgetForm" class='btn btn-md btn-primary'>Password Reset</a>
                    <a href="<?php echo DOMAIN; ?>/auth/?Authview=LoginForm" class='btn btn-md btn-success'>Back to Login</a>
                </div>
            <?php }
        } else { ?>
            <h5><b>Ooopsss......</b></h5>
            <p>Password reset access token are missing. Please check the link it may be broken or incorrect.</p>
            <p>You can also generate password reset link again. </p>
            <div class="flex-s-b">
                <a href="<?php echo DOMAIN; ?>/auth/?Authview=ForgetForm" class='btn btn-md btn-primary'>Password Reset</a>
                <a href="<?php echo DOMAIN; ?>/auth/?Authview=LoginForm" class='btn btn-md btn-success'>Back to Login</a>
            </div>
        <?php } ?>
        <?php include "../include/common/login-footer.php"; ?>
    </div>

</div>