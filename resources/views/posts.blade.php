<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel DOC</title>
</head>

<body style="background-color: cornflowerblue">

    {{-- Navbar from Bootstrap 5 --}}

    <nav class="navbar navbar-expand-lg bg-dark text-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled">Disabled</a>

                </div>
            </div>
        </div>
    </nav>


    {{-- using bootstrap 5 card --}}

    <div class="card bg-success">
        <h5 class="card-header text-info bg-white mx-2 my-1">Card in Bootstrap using Laravel</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="/About" class="btn btn-danger">Click to Go somewhere</a>
        </div>

        {{-- second card --}}
        <div class="card-body ">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

        {{-- another card --}}
        <div class="card-body ">
            <h5 class="card-title">Laravel </h5>
            <p class="card-text">Php framework for web application development</p>
            <a href="https://laracasts.com/" target="_blank" class="btn btn-secondary">Follow Laracasts</a>
        </div>
    </div>

    {{-- carousel in bootstrap 5 --}}
    <div class="container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1657551423049-ca94bc799c61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        width="200" height="500" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1494366222322-387658a1a976?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80"
                        width="200" height="500" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1666238854921-8d713c469086?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=336&q=80"
                        width="200" height="500"class="d-block w-50" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>


    <article class="my-5 p-5">


        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci quasi amet nesciunt atque explicabo
            ratione placeat aut veritatis praesentium sapiente doloribus cupiditate dolore beatae! Doloribus eveniet qui
            earum architecto.</h4>
        <p style="color: rgb(156, 36, 60); font-size: 26px; text-align: center">
            First,Follow the Laracasts tutorial stored in your pc
        </p>

        <h6 style="text-align: center; font-size:20px;color:azure"> Then follow the Udemy e-commerce course on Laravel
            for strong
            grasp of the topic.
        </h6>


    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
