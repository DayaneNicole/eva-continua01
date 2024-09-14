<?php
// Your product data (replace with your actual data)
$producto1 = [
    'img' => 'resources\img\card01.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];
$producto2 = [
    'img' => 'resources\img\card02.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];
$producto3 = [
    'img' => 'resources\img\card03.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];
$producto4 = [
    'img' => 'resources\img\card04.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];
$producto5 = [
    'img' => 'resources\img\card05.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];
$producto6 = [
    'img' => 'resources\img\card06.jpg',
    'titulo' => 'Card title',
    'descripcion' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
    'inf-tiempo' => 'Last updated 3 mins ago',
];


$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda-Mas</title>
    <link rel="stylesheet" href="resources\css\bootstrap.min.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="resources/img/logo.png" style="height: 30px;" alt="">
        <a class="navbar-brand" href="#">Tiendas Mas</a>
        <div class="social-icons" style="float: right; margin-left: auto;">
            <img src="resources\img\Facebook-icono.png" style="height: 30px;" alt="Facebook">
            <span style="margin-right: 20px;">Facebook</span>
            <img src="resources\img\WhatsApp-icono.png" style="height: 30px;" alt="WhatsApp">
            <span style="margin-right: 10px;">WhatsApp</span>
        </div>
    </nav>

    <!--carrusel de imagenes-->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/img/slide03.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/img/slide02.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/img/slide01.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>


    <!--Nuestros productos-->
    <section class="border mt-1" style="height: 150px;">
        <h1 class="text-center mt-4">Nuestros Productos </h1>
    </section>


    <div class="row">
        <?php foreach ($productos as $producto) { ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?php echo $producto['img']; ?>" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><br><br>

    <!--Barra de info final-->
    <nav style="color: black; background-color: #eae8e8">
  <ul style="list-style-type: none;">
    <li>
      <a href="#" style="color: black;">
        <img src="resources\img\señaldercha.png" style="height: 10px;" alt="Direccion">
        Jr. Amazonas 120
      </a>
    </li>
    <li>
      <a href="#" style="color: black;">
        <img src="resources\img\telefono-icono.png" style="height: 10px;" alt="Telefono">
        Teléfono: 123456789
      </a>
    </li>
  </ul>
  <p style="text-align: center; color: black;"> Todos los Derechos Reservados 2014 </p>
</nav>

    <!-- javascripts para el movimiento del carrusel-->
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/bootstrap.bundle.min.js"></script>

</body>

</html>