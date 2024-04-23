<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Login</title>
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
                <div class="forminput container py-5">
                    <div class="row">
                        <div class="col">
                            <h1 class="JudulSignUp py-5 mt-5"><strong>Login account</strong></h1>

                            <h5>Welcome!</h5><br>
                            <form>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="Email" type="text" class="form-control" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <!-- Ganti input dengan elemen span -->
                                    <input id="Password" type="text" class="form-control" placeholder="Password"/>
                                </div> <br>
                                <button id="Login" type="submit" class="register btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
</body>
</html>
