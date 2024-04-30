<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equid="X-UA_Compatible" content="ie=edge">
    <title>Login</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Recipes.css">

</head>
<body>   
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
                </ul>
            </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-3 mt-5 SideBar">
                <h3><strong>Filter By</strong></h3>
                <div class="Meal" >
                    <h5>Meal</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mealRadio" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Breakfast
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mealRadio" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Lunch
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mealRadio" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Dinner
                        </label>
                    </div>
                </div>

                <div class="Health" >
                    <h5>Health</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthRadio" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Vegan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthRadio" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Gluten Free
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthRadio" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Low Sugar
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 Main mt-5 px-5">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 m">
                        <img src="image/cardRecipes1.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="">

                    </div>
                </div>
            </div>
        </div>
    </footer>

    

</body>
</html>
