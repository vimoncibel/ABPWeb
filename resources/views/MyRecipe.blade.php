<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MealMate - User Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="stylesheet" href="/css/Home.css">

</head>
<body>

    <!-- Section Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-5">
            <img class="navbar-brand" src="/image/brand.png" alt="Brand Image">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Recipes">RECIPES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Create Your Recipe">CREATE YOUR RECIPE</a>
                    </li>
                    <!-- Baru Ditambahin -->
                    <li class="nav-item active">
                        <!-- Dropdown dengan ikon profil -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                                <span id="profileText">Hi, {{ Auth::user()->name }}<span id="usernamePlaceholder"></span></span>
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <!-- Isi dropdown menu dengan gambar ikon -->
                                <a class="dropdown-item" href="My Account">
                                    <img src="/image/picMyAcc.png" alt="My Account Icon"> My Account
                                </a>
                                <a class="dropdown-item" href="My Recipe">
                                    <img src="/image/picMyRecipe.png" alt="My Recipe Icon"> My Recipe
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <img src="/image/picLogOut.png" alt="Log Out Icon"> Log Out
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- Modal Logout Start -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content shadow-lg">
                                <div class="modal-header bg-gray-200">
                                    <img src="/image/picLogout2.png" alt="Log Out 2 Icon">
                                    <h5 class="modal-title text-xm font-weight-bold" id="logoutModalLabel">LOGOUT!</h5>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to logout? </br>
                                    Once you logout you need to login again. Are you Ok?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cancle shadow-lg waves-effect" data-bs-dismiss="modal">
                                        <i class="fas fa-window-close"></i> Cancel
                                    </button>
                                    <button type="button" class="btn btn-logout shadow-lg waves-effect" onclick="logout()">
                                        <i class="fas fa-sign-out-alt"></i> Yes, Logout!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Logout End -->

                    <script>

                        function logout() {
                            window.location.href = "/logout";
                        }
                    </script>

                    <!-- Section Script profil -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Mendapatkan nama pengguna dari data yang telah disimpan saat registrasi
                            var username = localStorage.getItem("username"); // Anda harus mengatur "username" setelah proses registrasi
                        
                            // Memperbarui teks nama pengguna di profil jika nama pengguna tersedia
                            if (username) {
                                var usernamePlaceholder = document.getElementById("usernamePlaceholder");
                                usernamePlaceholder.textContent = username;
                            }
                        });
                    </script>
                    <!-- End Section Script profil -->
                </ul>
            </div>
                        
        
    </nav>
    <!-- End Section Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                Home / My Account / My Recipe
            </div>
            <br>

            <div class="col-12 text-col12">
                <strong>Personal Data</strong>
            </div>
            <br>

            <div class="row justify-content-start">
                <div class="col-md-3">
                    <div class="profile-details">
                        <a href="profil">
                            <img src="/image/profile.png" alt="profile" width="30" height="30">
                            General</a>
                        <a href="edit_profil">
                            <img src="/image/seting.png" alt="profile" width="30" height="30">
                            Edit Profile</a>
                        <a class="active" href="recipe">
                            <img src="/image/recipe-book.png" alt="profile" width="30" height="30">
                            My Recipe</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12 col-md-4 card-margin">
                            <div class="card card-recipe">
                                <div class="card-img-container">
                                    <img src="/image/capcay.jpg" class="card-img-top img-fluid" alt="capcay">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><strong>Capcay</strong></h5>
                                    <p class="card-text overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="button-container">
                                        <button class="btn btn-primary btn1 me-md-2" type="button" data-toggle="modal" data-target="#myModal">Delete</button>
                                        <button class="btn btn-primary btn2 " type="button" onclick="window.location.href='#'">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 card-margin">
                            <div class="card card-recipe">
                                <div class="card-img-container">
                                    <img src="/image/ChimichurriSreak.jpeg" class="card-img-top img-fluid" alt="capcay">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><strong>Chimichurri Sreak</strong></h5>
                                    <p class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="button-container">
                                        <button class="btn btn-primary btn1 me-md-2" type="button">Delete</button>
                                        <button class="btn btn-primary btn2" type="button">Edit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 card-margin">
                            <div class="card card-recipe">
                                <div class="card-img-container">
                                    <img src="/image/gadogado.jpg" class="card-img-top img-fluid" alt="capcay">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><strong>Gado - Gado</strong></h5>
                                    <p class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="button-container">
                                        <button class="btn btn-primary btn1 me-md-2" type="button">Delete</button>
                                        <button class="btn btn-primary btn2" type="button">Edit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 card-margin">
                            <div class="card card-recipe">
                                <div class="card-img-container">
                                    <img src="/image/gadogado.jpg" class="card-img-top img-fluid" alt="capcay">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><strong>Gado - Gado</strong></h5>
                                    <p class="card-text overflow-hidden">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="button-container">
                                        <button class="btn btn-primary btn1 me-md-2" type="button">Delete</button>
                                        <button class="btn btn-primary btn2" type="button">Edit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- konten modal-->
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/image/delete.png" alt="profile" width="80" height="80">
                    <p><Strong>Delete Recipe!</Strong></p>
                    <p>Are you sure you want to delete the menu? Once deleted, the menu will be removed permanently. Are you Ok?</p>
                    <div class="button-container">
                        <button class="btn btn-primary btn1 me-md-2" type="button" onclick="window.location.href='/recipe'">Cancle</button>
                        <button class="btn btn-primary btn2" type="button">Yes! Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>