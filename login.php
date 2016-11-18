<div class="col-md-4"></div>
<div class="col-md-4 login-form">
    <h1 class="text-center" style="font-family: monospace">Login </h1>
    <?php
    if(isset($_GET["login"])){  ?>
    <div class="alert-danger" align="center" style="font-size: 10pt;"><span> Please, Login Please!</span></div>
    <?php } ?>
    
<form action="login_proses.php" method="POST" class="">
    <div class="form-group">
        <input class="form-control login-field" type="text" name="username" placeholder="isi username" autofocus required=/>
        <label class="login-field-icon fui-user" for="login-name"></label>
    </div>
    <div class="form-group">
        <input class="form-control login-field" type="password" name="password" placeholder="isi password" required="" />
        <label class="login-field-icon fui-lock" for="login-pass"></label>
    </div>
    <div class="form-group">
        <input class="btn btn-block btn-lg btn-info" type="submit" name="submit" value="login"/>
        <a class="login-link" href="#">Reset</a>
         <a class="login-link" href="#">Lost your password?</a>
    </div>
    
</form>
</div>
<div class="col-md-4"></div>