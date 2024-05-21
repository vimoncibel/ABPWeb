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
    <link rel="stylesheet" href="/css/profil.css">
    <link rel="stylesheet" href="/css/header_footer.css">


</head>

<body>

    @include('header')
    <div class="container">
        <div class="row">
            <div class="col-12">
                Home / My Account / Edit Profile
            </div> </br>
            <div class="col-12">
                <strong>Personal Data</strong>
            </div>
            <div class="col-3">
                <div class="profile-details">
                    <a href="profil">
                        <img src="/img/profile.png" alt="profile" width="30" height="30">
                        General</a>
                    <a class="active" href="edit_profil">
                        <img src="/img/seting.png" alt="profile" width="30" height="30">
                        Edit Profile</a>
                    <a href="recipe">
                        <img src="/img/recipe-book.png" alt="profile" width="30" height="30">
                        My Recipe</a>
                </div>
            </div>
            <div class="col-6">
                <div class="col"><img src="/img/profile2.png" alt="profile" width="80" height="80">
                </div> <br>
                <div class="col">
                    <div class="input">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-with-icon">
                            <input type="text" id="username" class="form-control input-custom" placeholder="Username" aria-label="Username">
                            <span class="input-icon"><img src="/img/edit.png" alt="edit" width="20" height="20"></span>
                        </div>
                    </div> <br>

                    <div class="input">
                        <label for="full name" class="form-label">Full Name</label>
                        <div class="input-with-icon">
                            <input type="text" id="full name" class="form-control input-custom" placeholder="Full Name" aria-label="Full Name">
                            <span class="input-icon"><img src="/img/edit.png" alt="edit" width="20" height="20"></span>
                        </div>
                    </div> <br>

                    <div class="input">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-with-icon">
                            <input type="text" id="email" class="form-control input-custom" placeholder="Email" aria-label="Email">
                            <span class="input-icon"><img src="/img/edit.png" alt="edit" width="20" height="20"></span>
                        </div>
                    </div> <br>

                    <button type="button" class="btn btn-primary btn-save float-right">Save</button>
                </div>
            </div>
        </div>

    </div>
    </div>



    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>