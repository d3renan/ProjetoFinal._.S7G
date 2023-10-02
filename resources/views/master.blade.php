<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevenGames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
@yield('content')
<body class="fundo">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top space-between">
        <div class="container-fluid" style="background-color: #080326; width: 100%;height: 70px;">
            <a class="navbar-brand" href="{{'/'}}"
                style="color: #EEF0F4; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px;">SevenGames</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-left: 1000px;">
                        <a class="nav-link active" aria-current="page" href="{{'/'}}"
                            style="color: aliceblue; font-size: 20px;">Home</a>
                    </li>
                 


                </ul>
            </div>
        </div>
    </nav>
   
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div style="margin-top: 10px;"></div>

       <footer class="text-center text-white" style="background-color: #0f0644;" >
        <!-- Grid container -->
        <div class="container pt-4">
            <p style="color: #EEF0F4; height: 47px; font-size:35px;"><strong> Cadastre-se ou faça login para ter acesso a
                nossos jogos</strong>     <a href="{{'/cadastro'}}"><button type="button" class="btn " style="background-color: #080326;color:#EEF0F4;">Cadastrar-se</button></a>     <a href="{{'/login'}}"><button type="button" class="btn " style="background-color: #080326;color:#EEF0F4;">Login</button></a></p>
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: #080326;">
            © 2023 É o seventchecas né pae.
            <a class="text-dark" href="https://sevengames.azurewebsites.net/">SevenTech</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>