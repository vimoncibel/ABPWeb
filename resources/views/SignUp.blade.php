<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Sign Up</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/SignUp.css">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <img class="picSignUp" src="/image/picWelcome.png" alt="Pic Sign Up">
            </div>
            <div class="col">
                <div class="container  py-4">
                    <div class="row">
                        <div class="col">
                            <h1 class="JudulSignUp py-5"><strong>Create your account</strong></h1>

                            <h5>Welcome!</h5><br>
                            <form method="post">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="Email" type="text" class="form-control" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label for="UserName">User Name</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="UserName" type="text" class="form-control" placeholder="User Name"/>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="Password" type="text" class="form-control" placeholder="Password"/>
                                </div>
                                <div class="form-group">
                                    <label for="Confrim Password">Confirm Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="ConfirmPassword" type="text" class="form-control" placeholder="Confirm Password"/>
                                </div> <br>
                                <button id="Register" type="submit" class="register btn">Register</button></br></br>

                                <center>
                                <span>Already have an account ? </span>
                                <span><a href="Login" class="link-succes link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></span>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
</body>
</html>
