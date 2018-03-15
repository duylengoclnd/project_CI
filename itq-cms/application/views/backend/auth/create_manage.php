<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-70">
                        Tao tai khoan quan tri
                    </span>
                    <span class="login100-form-avatar">
                        <img src="images/avatar-01.jpg" alt="AVATAR">
                    </span>

                    <ul class="error" >
                         <?php echo validation_errors(); ?>
                    </ul>
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                        <input class="input100" type="text" name="data[username]" value="<?php echo isset($_post['username'])  ?>">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100" type="password" name="data[password]"  value="<?php if(isset($_post['password']) && !empty($_post['password'])){ echo htmlspecialchars($_post['password']); }else{ echo ""; } ?>">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter email">
                        <input class="input100" type="email" name="data[email]"  value="<?php if(isset($_post['email']) && !empty($_post['email'])){ echo htmlspecialchars($_post['email']); }else{ echo ""; } ?>">
                        <span class="focus-input100" data-placeholder="email"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" name="create" value="LOGIN" type="submit">


                    </div>

                    <ul class="login-more p-t-190">
                        <li class="m-b-8">
                            <span class="txt1">
                                Forgot
                            </span>

                            <a href="<?php echo ITQ_BASE_URL?>backend/auth/forgot" class="txt2">
                                Username / Password?
                            </a>
                        </li>

                        <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="#" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>