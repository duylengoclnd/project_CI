    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form" action="" method="post">

                    <span class="login100-form-title p-b-70">
                        Quên thông tin tài khoản
                    </span>
                    <span class="login100-form-avatar">
                        <img src="public\template\backend\images\IMG_3279.jpg" alt="AVATAR">
                    </span>
                    <ul class="error" >
                        <?php echo validation_errors(); ?>
                    </ul>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter email">
                        <input class="input100" type="email" name="data[email]"  value="<?php if(isset($_post['email']) && !empty($_post['email'])){ echo htmlspecialchars($_post['email']); }else{ echo ""; } ?>">
                        <span class="focus-input100" ></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input class="login100-form-btn" name="forgot" value="Gửi" type="submit">
                    </div>

                    <ul class="login-more p-t-190">
                        <li class="m-b-8">
                            <span class="txt1">
                                Login
                            </span>

                            <a href="<?php echo ITQ_BASE_URL; ?>backend/home" class="txt2" >
                                Về trang chủ
                            </a>
                        </li>

                    </ul>
                </form>
            </div>
        </div>
    </div>


