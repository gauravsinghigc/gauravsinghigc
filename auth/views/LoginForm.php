 <?php include __DIR__ . "/handler/LoginChecker.php"; ?>

 <div class="card border-0">
     <div class="card-header text-center">
         <?php include __DIR__ . "/../components/AuthFormLogo.php"; ?>
         <br>
         <span class="h5">
             <i class="fa fa-lock text-success"></i> Login to Account
         </span>
     </div>
     <div class="card-body mt-2">
         <form action="<?php echo CONTROLLER("AuthController/AuthController.php"); ?>" method="POST" class="fs-13px">
             <?php echo FormPrimaryInputs($LAST_OPEN_URL); ?>
             <div class="form-group mb-20px">
                 <input type="email" oninput="HidePassword()" onclick="HidePassword()" id='emailid' class="form-control form-control-lg h-40px fs-20" name="UserEmailId" placeholder="Email Address" />
             </div>
             <div class="form-group mb-15px m-t-15">
                 <input type="password" onmouseleave="HidePass()" oninput="HideEmail()" onclick="HideEmail()" id='passwords' name="UserPassword" class="form-control form-control-lg h-40px fs-20" placeholder="*******" />
             </div>
             <div class="mb-10px text-secondary text-right">
                 Forget Password? <a href="<?php echo DOMAIN; ?>/auth/?Authview=ForgetForm" class="text-secondary bold"><b>Recover Password</b></a>
                 <br><br>
             </div>
             <div class="mb-15px">
                 <button type="submit" name="LoginRequest" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">
                     <i class="fa fa-lock text-white"></i> Secured Login
                 </button>
             </div>
             <?php include "../include/common/login-footer.php"; ?>
         </form>
     </div>
 </div>
 <script>
     function HidePassword() {
         document.getElementById("emailid").type = "email";
         document.getElementById("passwords").type = "password";
     }

     function HideEmail() {
         document.getElementById("emailid").type = "password";
         document.getElementById("passwords").type = "text";
     }

     function HidePass() {
         document.getElementById("passwords").type = "password";
     }
 </script>