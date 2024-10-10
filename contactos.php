<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <style>

    </style>
</head>

<body>
    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <img src="img/logo.webp" alt="" width="180px">
  <p>El Arte de vestir Bien</p> 
</div> -->
    <nav class="navbar navbar-expand-sm bg-primary navbar-primary">
        <a class="navbar-brand" href="#">Inicio</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactos</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    include('carrucel.php');
    ?>
    <section>
        <div class="mapa">
            <h2>Nuestra Dirección</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.5174354441892!2d-74.8775926240388!3d-10.924231622019233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910a2b7d70ab7ff9%3A0x4f5632928719be9f!2zTW9kYSAmIERpc2XDsW8!5e0!3m2!1ses-419!2spe!4v1728519780441!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <h2>Para información Registrarse</h2>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Open modal
            </button>

            <!-- The Modal -->
            <div class="modal fade " id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Ingrese sus Datos</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="p-3">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="email">Ingrese su Nombre:</label>
                                    <input type="text" class="form-control" placeholder="Enter email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ingrese Telefono</label>
                                    <input type="number" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ingrese su Email</label>
                                    <input type="email" class="form-control" placeholder="Enter password" id="pwd">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>


                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="jumbotron text-center bg-primary" style="margin-bottom: 0">
        <p>Derechos Reservado de Autor - 2024</p>
    </div>
</body>

</html>