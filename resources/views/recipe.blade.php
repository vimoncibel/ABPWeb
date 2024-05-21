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
                    <a href="edit_profil">
                        <img src="/img/seting.png" alt="profile" width="30" height="30">
                        Edit Profile</a>
                    <a class="active" href="recipe">
                        <img src="/img/recipe-book.png" alt="profile" width="30" height="30">
                        My Recipe</a>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card-abc h-85">
                            <div class="card-img-container">
                                <img src="/img/ChimichurriSreak.jpeg" class="card-img-top img-fluid" alt="Chimichurri">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title"><strong>Chimichurri Sreak</strong></h5>
                                <p class="card-text overflow-hidden">Some quick example text to build on the card-abc title and make up the bulk of the card's content.</p>
                                <div class="button-container">
                                    <button class="btn btn-primary btn1 me-md-2" type="button" data-toggle="modal" data-target="#myModal">Delete</button>
                                    <button class="btn btn-primary btn2 " type="button" onclick="window.location.href='#'">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-abc h-85">
                            <div class="card-img-container">
                                <img src="/img/capcay.jpg" class="card-img-top img-fluid" alt="capcay">
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
                    <div class="col">
                        <div class="card-abc h-85">
                            <div class="card-img-container">
                                <img src="/img/gadogado.jpg" class="card-img-top img-fluid" alt="gado">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title"><strong>Gado - Gado</strong></h5>
                                <p class="card-text overflow-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="button-container">
                                    <button class="btn btn-primary btn1 me-md-2" type="button" data-toggle="modal" data-target="#myModal">Delete</button>
                                    <button class="btn btn-primary btn2 " type="button" onclick="window.location.href='#'">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-abc h-85">
                            <div class="card-img-container">
                                <img src="/img/capcay.jpg" class="card-img-top img-fluid" alt="capcay">
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
                    <img src="/img/delete.png" alt="profile" width="80" height="80">
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

    @include('footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>