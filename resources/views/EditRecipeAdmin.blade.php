<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="/css/UploadRecipe.css">

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
                        <a class="nav-link" href="Logout">LOGOUT</a>
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

    <!-- Section Form Up Recipe -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="imgUpRecipe text-center">
                    <p style="font-size: 30px;"><strong>Edit Menu</strong></p>
                    <img style="width: 10%;" src="/image/PFPict1.png" alt="picCamera"> 
                    <p>Change Photo</p>
                </div>
                <form style="padding-left: 20%;">
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="recipeTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="recipeTitle" placeholder="Enter recipe title" style="width: 700px;">
                    </div>
                    <!-- Servings -->
                    <div class="mb-3">
                        <label for="recipeServings" class="form-label">Servings</label>
                        <input type="number" class="form-control" id="recipeServings" placeholder="Enter number of servings" style="width: 700px;">
                    </div>
                    <!-- Prep Time -->
                    <div class="mb-3">
                        <label for="recipePrepTime" class="form-label">Prep Time</label>
                        <input type="text" class="form-control" id="recipePrepTime" placeholder="Enter preparation time" style="width: 700px;">
                    </div>
                    <!-- Calories -->
                    <div class="mb-3">
                        <label for="recipeCalories" class="form-label">Calories</label>
                        <input type="number" class="form-control" id="recipeCalories" placeholder="Enter number of calories" style="width: 700px;">
                    </div>
                    <!-- Meal -->
                    <div class="mb-3">
                        <label class="form-label">Meal</label>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="meal" id="breakfast" value="breakfast">
                                    <label class="form-check-label" for="breakfast">
                                        Breakfast
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="meal" id="lunch" value="lunch">
                                    <label class="form-check-label" for="lunch">
                                        Lunch
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="meal" id="dinner" value="dinner">
                                    <label class="form-check-label" for="dinner">
                                        Dinner
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Health -->
                    <div class="mb-3">
                        <label class="form-label">Health</label>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="health" id="Vegan" value="Vegan">
                                    <label class="form-check-label" for="breakfast">
                                        Vegan
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="health" id="Gluten Free" value="Gluten Free">
                                    <label class="form-check-label" for="lunch">
                                        Gluten Free
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="health" id="Low Sugar" value="Low Sugar">
                                    <label class="form-check-label" for="dinner">
                                        Low Sugar
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ingredients -->
                    <div class="mb-3">
                        <label for="ingredientCount" class="form-label">Number of Ingredients</label>
                        <input type="number" class="form-control" id="ingredientCount" style="width: 700px;">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ingredients</label>
                        <textarea class="form-control" id="ingredients" rows="" placeholder="Enter ingredients" style=" width: 100%; height: auto;max-width: 700px"></textarea>
                    </div>
                    <!-- Instruction -->
                    <div class="mb-3">
                        <label for="instruction" class="form-label">Instruction</label>
                        <textarea class="form-control" id="instruction" rows="" placeholder="Enter instruction" style="width: 100%; height: auto;max-width: 700px"></textarea>
                    </div>
                
                    <!-- Submit Button -->
                    <button style="margin-bottom: 30px;" type="button" class="btn btn-done">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Section Form Up Recipe -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>