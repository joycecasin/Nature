<?php require_once('includes/header.php'); ?>
<?php
if ($session->is_signed_in()){
    redirect('index.php');
}

if (isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username, $password);

    if ($user_found){
        $session->login($user_found);
        redirect("index.php");
    }else{
        $the_message = "Your password or username FAILED";
    }
}else{
    $username = "";
    $password = "";
}
?>
<body class="bg-light-gray" id="body">
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                        <a href="../front/index.php">
                            <i class="fas fa-signature"></i>
                            <span class="brand-name">Nature Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">

                    <h4 class="text-dark mb-5">Inloggen</h4>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" name="username" class="form-control input-lg" id="email" aria-describedby="emailHelp"
                                       placeholder="Username">
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" name="password" class="form-control input-lg" id="password"
                                       placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex my-2 justify-content-between">
                                    <div class="d-inline-block mr-3">
                                        <label class="control control-checkbox">Remember me
                                            <input type="checkbox"/>
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                    <p><a class="text-blue" href="#">Forgot Your Password?</a></p>
                                </div>
                                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block mb-4">Inloggen</button>
                                <p>Don't have an account yet ?
                                    <a class="text-blue" href="sign-up.html">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright pl-0">
        <p class="text-center">&copy; 2020 Copyright Nature Dashboard
            <a class="text-primary" href="" target="_blank">Joyce Casin/a>.
        </p>
    </div>
</div>
</body>
</html>