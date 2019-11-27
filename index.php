<?php
include ('config.tpl');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLES.'main.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLES.'font-awesome.min.css';?>">
    <script src="<?php echo STYLES.'jquery-3.2.1.min.js';?>"></script>
    <title>Login - <?php echo TITLE;?></title>
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1><?php echo "Login Here";?></h1>
    </div>
    <div class="login-box">
        <form class="login-form" id="loginForm" name="loginForm" action="" method="post">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div id="errorMsg"></div>
            <div class="form-group">
                <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="Email" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="txtPassword" name="txtPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="txtCaptcha" id="txtCaptcha" placeholder="Enter Captcha" class="form-control"/>
                    </div>
                    <div class="col-md-4">
                        <div id="captcha"></div>
                    </div>
                    <div class="col-md-2">
                        <div style="height: 8px;"></div>
                        <i class="fa fa-refresh" onclick="javascript: loadCaptcha();"></i>
                    </div>
                </div>
            </div>
        
            <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-block" id="btnLogin"><i class="fa fa-sign-in fa-lg fa-fw"></i>Get Record</button>
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    function loadCaptcha(){
        $.post("<?php echo IMAGES.'botImage';?>",{},function(o){
            $("#captcha").html(o)
        })}
    $(document).ready(function(){
        $("#loginForm").on("submit",function(o){
            o.preventDefault(),
                $.ajax({
                    url:"<?php echo PROCESS.'logMeIn';?>",
                    type:"POST",
                    data:new FormData(this),
                    processData:!1,
                    contentType:!1,
                    success:function(o){
                                $("#errorMsg").html(o);
                            loadCaptcha()}})}),loadCaptcha()});
</script>
<script src="<?php echo STYLES.'popper.min.js';?>"></script>
<script src="<?php echo STYLES.'bootstrap.min.js';?>"></script>
<script src="<?php echo STYLES.'main.js';?>"></script>
<script src="<?php echo STYLES.'plugins/pace.min.js';?>"></script>
</body>
</html>
