
<!-- Section Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-5">
    <img class="navbar-brand" src="/image/brand.png" alt="Brand Image">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Home">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Recipes">RECIPES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Calorie">CALORIE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Create Your Recipe">CREATE YOUR RECIPE</a>
            </li>
            <!-- Baru Ditambahin -->
            <li class="nav-item">
                <!-- Dropdown dengan ikon profil -->
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/image/picProfil.png" alt="Profile Icon"> <!-- Ganti picProfil.png dengan gambar ikon profil Anda -->
                        <span id="profileText">Hi, <span id="usernamePlaceholder">Alicia</span></span>
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
                            <button type="button" class="btn btn-logout shadow-lg waves-effect" onclick="logoutAndRedirect()">
                                <i class="fas fa-sign-out-alt"></i> Yes, Logout!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Logout End -->

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
