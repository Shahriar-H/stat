<?php
    include('./header.php')
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="./css/login_css.css" />

    <title>Login Page</title>
</head>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto loginBody">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img style="max-width:150px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVtNgj3NMHPadD_lvUthihHS_xPl9SsME_TU4EAQDukA&s" class="logo">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img  src="./images/login.gif" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="card2 card border-0 px-4 py-5">
                    <div class='mb-4'>
                        <h3>Login Here</h3>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
                        <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                            <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                        </div>
                        <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn btn-blue text-center">Login</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>


<?php
    include('./footer.php')
?>