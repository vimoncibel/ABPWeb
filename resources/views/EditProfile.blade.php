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
                    <li class="nav-item active">
                        <a class="nav-link" href="UploadRecipe">CREATE YOUR RECIPE</a>
                    </li>
                    <!-- Baru Ditambahin -->
                    <li class="nav-item">
                        <!-- Dropdown dengan ikon profil -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                                <span id="profileText">Hi, {{ Auth::user()->name }}<span id="usernamePlaceholder"></span></span>
                            </a>
                            <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                <!-- Isi dropdown menu dengan gambar ikon -->
                                <a class="dropdown-item" href="Profil">
                                    <img src="/image/picMyAcc.png" alt="My Account Icon"> My Account
                                </a>
                                <a class="dropdown-item" href="MyRecipe">
                                    <img src="/image/picMyRecipe.png" alt="MyRecipe"> My Recipe
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
                                        <i class="fas"></i> Cancel
                                    </button>
                                    <button type="button" class="btn btn-logout shadow-lg waves-effect" onclick="logout()">
                                        <i class="fas"></i> Yes, Logout!
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
            <div class="col-8">
                Home / My Account / Edit Profile
            </div> <br>

            <div class="col-9">
                <strong>Personal Data</strong>
            </div> <br>

            <div class="row justify-content-start">
                <div class="col-md-4">
                    <div class="profile-details">
                        <a href="profil">
                            <img src="/image/profile.png" alt="profile" width="30" height="30">
                            General</a>
                        <a class="active" href="edit_profil">
                            <img src="/image/seting.png" alt="profile" width="30" height="30">
                            Edit Profile</a>
                        <a href="recipe">
                            <img src="/image/recipe-book.png" alt="profile" width="30" height="30">
                            My Recipe</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col"><img src="/image/profile2.png" alt="profile" width="80" height="80">
                    </div> <br>
                    <div class="col">
                        <div class="input">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-with-icon">
                                <input type="text" id="username" class="form-control input-custom" placeholder="Username" aria-label="Username">
                                <span class="input-icon"><img src="/image/edit.png" alt="edit" width="20" height="20"></span>
                            </div>
                        </div> <br>

                        <div class="input">
                            <label for="full name" class="form-label">Full Name</label>
                            <div class="input-with-icon">
                                <input type="text" id="full name" class="form-control input-custom" placeholder="Full Name" aria-label="Full Name">
                                <span class="input-icon"><img src="/image/edit.png" alt="edit" width="20" height="20"></span>
                            </div>
                        </div> <br>

                        <div class="input">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-with-icon">
                                <input type="text" id="email" class="form-control input-custom" placeholder="Email" aria-label="Email">
                                <span class="input-icon"><img src="/image/edit.png" alt="edit" width="20" height="20"></span>
                            </div>
                        </div> <br>

                        <button type="button" class="btn btn-primary btn-save float-right">Save</button>
                    </div>
                </div>
            </div>

        </div>




</body>

</html>