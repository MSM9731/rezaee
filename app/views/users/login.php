<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo ROOT ?>/app/assets/users/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT ?>/app/assets/users/libs/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo ROOT ?>/app/assets/users/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo ROOT ?>/app/assets/users/libs/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo ROOT ?>/app/assets/users/libs/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo ROOT ?>/app/assets/users/css/custom.css" rel="stylesheet">

    <!-- My Style -->
    <link href="<?php echo ROOT ?>/app/assets/users/css/style.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <a class="hiddenanchor" id="reset"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form id="loginForm">
                        <h1>فرم ورود</h1>
                        <div>
                            <input value="user" type="text" name="username" class="form-control" placeholder="نام کاربری" required>
                        </div>
                        <div>
                            <input value="pass" type="password" name="password" class="form-control" placeholder="رمز ورود" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">ورود</button>
                            <br>
                            <a class="reset_pass m-0" href="#reset" style="width: 100%;">رمز ورود را از دست دادید؟</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">جدید در سایت؟
                                <a href="#signup" class="to_register"> ایجاد حساب </a>
                            </p>

                            <div class="clearfix"></div>
                            <br>

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form id="registerForm">
                        <h1>ایجاد حساب</h1>
                        <div>
                            <input value="usersname" type="text" name="username" class="form-control" placeholder="نام کاربری" required>
                        </div>
                        <div>
                            <input value="email@email.ir" type="email" name="email" class="form-control" placeholder="ایمیل" required>
                        </div>
                        <div>
                            <input value="password" type="password" name="password" class="form-control" placeholder="رمز ورود" required>
                        </div>
                        <div>
                            <input value="password" type="password" name="confirm_password" class="form-control" placeholder="تکرار رمز ورود" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">ارسال</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">در حال حاضر عضو هستید؟
                                <a href="#signin" class="to_register"> ورود </a>
                            </p>

                            <div class="clearfix"></div>
                            <br>

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div id="rest_pass" class="animate form rest_pass_form">
                <section class="login_content">
                    <!-- /password recovery -->
                    <form id="resetPassForm">
                        <h1>بازیابی رمز عبور</h1>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="ایمیل">
                            <div class="form-control-feedback">
                                <i class="fa fa-envelope-o text-muted"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-block">بازیابی رمز عبور </button>
                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">جدید در سایت؟
                                <a href="#signup" class="to_register"> ایجاد حساب </a>
                            </p>

                            <div class="clearfix"></div>
                            <br>

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©1397 تمامی حقوق محفوظ. Gentelella Alela! یک قالب بوت استرپ 3. حریم خصوصی و شرایط</p>
                            </div>
                        </div>
                    </form>
                    <!-- Password recovery -->
                </section>
            </div>
        </div>
    </div>


    <script src="<?php echo ROOT ?>/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo ROOT ?>/assets/libs/xhr/xhr.js"></script>
    <script src="<?php echo ROOT ?>/assets/js/main.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                let formdata = new FormData(this);
                send_ajax_request('login.php', formdata, function(res) {
                    // window.location.assign('./dashboard');
                });
            });
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                let formdata = new FormData(this);
                send_ajax_request('register.php', formdata, function(res) {
                    console.log(res);
                    window.location.assign('./login#signin');
                });
            });
            document.getElementById('resetPassForm').addEventListener('submit', function(e) {
                e.preventDefault();
                let formdata = new FormData(this);
                send_ajax_request('reset_password.php', formdata, false, false, false, function(res) {
                    text = 'hello'
                    console.log(res);
                    // window.location.assign('./dashboard');
                });
            });
        });
    </script>
</body>

</html>