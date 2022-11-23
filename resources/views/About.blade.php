<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page linking in Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/app.css">
    {{-- bootstrap JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container">

        <h2 class="my-5 p-3 text-capitalize text-white  "><strong>tutorialabc.com is a learning and tech
                platform</strong></h2>
        <p class="mx-5 text-danger bg-white p-4"> We believe, Education should be free for everyone in this world. In
            this
            regard, we
            are trying to reach
            those
            unpreviliged people around the world who would like to learn specific set of skills for their empowerment.

            <br>

            <br>
            <a href="/posts" class="btn btn-danger mx-4   text-warning">Back to HomePage</a>
        </p>
    </div>








    <div class="newdiv container-fluid text-white text-center h6">
        <?php
        
        $greeting = 'Welcome to Laravel framework';
        $msg = 'This message is coming from the PHP script inside of this HTML file';
        
        echo $msg . ' .  ' . $greeting;
        
        ?>
    </div>


    <nav class="navbar navbar-expand-lg bg-warning my-5">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <script src="/app.js"></script>
    <script src="/jscript/own.js"></script>
</body>

</html>
