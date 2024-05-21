<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Login</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tautan ke Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/homeAdmin.css" />
<body>

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
                    <a class="nav-link" href="Recipes">USER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Create Recipe">CREATE RECIPE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#logoutModal" data-bs-toggle="modal">LOGOUT</a>
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


    <!-- Section Menu-->
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h1><strong>Menu MealMate</strong></h1><br>
                <div class="contentOS container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img src="/image/recipe-book.png" alt="PFPict1">
                                        </div>
                                        <div class="card-buttons">
                                            <button class="btn btn-edit">Add Menu</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img src="/image/PFPict2.png" alt="PFPict2">
                                        </div>
                                        <div class="card-body">
                                            <a>Capcay Vegetable</a>
                                        </div>
                                        <div class="card-buttons">
                                            <button class="btn btn-delete" onclick="confirmDelete()">Delete</button>
                                            <button class="btn btn-edit">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img src="/image/PFPict3.png" alt="PFPict3">
                                        </div>
                                        <div class="card-body">
                                            <a>Veg Platter</a>
                                        </div>
                                        <div class="card-buttons">
                                            <button class="btn btn-delete" onclick="confirmDelete()">Delete</button>
                                            <button class="btn btn-edit">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img src="/image/PFPict3.png" alt="PFPict3">
                                        </div>
                                        <div class="card-body">
                                            <a>Veg Platter</a>
                                        </div>
                                        <div class="card-buttons">
                                            <button class="btn btn-delete" onclick="confirmDelete()">Delete</button>
                                            <button class="btn btn-edit">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <img src="/image/PFPict3.png" alt="PFPict3">
                                        </div>
                                        <div class="card-body">
                                            <a>Veg Platter</a>
                                        </div>
                                        <div class="card-buttons">
                                            <button class="btn btn-delete" onclick="confirmDelete()">Delete</button>
                                            <button class="btn btn-edit">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more cards as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete Start -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow-lg">
                <div class="modal-header bg-gray-200">
                    <img style="width: 50px;" src="/image/delete.png" alt="Delete Icon">
                    <h5 class="modal-title text-xm font-weight-bold" id="deleteModalLabel">DELETE!</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel shadow-lg waves-effect" data-bs-dismiss="modal">
                        <i class="fas"></i> Cancel
                    </button>
                    <button type="button" class="btn btn-delete-confirm shadow-lg waves-effect" onclick="deleteItem()">
                        <i class="fas"></i> Yes, Delete!
                    </button>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        // Fungsi untuk menampilkan modal konfirmasi delete
            function confirmDelete() {
                $('#deleteModal').modal('show');
            }

            // Fungsi untuk menghapus item (dummy function)
            function deleteItem() {
                // Tambahkan logika penghapusan item di sini
                console.log('Item deleted!');
                // Tutup modal setelah menghapus item
                $('#deleteModal').modal('hide');
            }

    </script>
    <!--End Section Menu-->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

