<?php
require_once '../controllers/autenticador.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario_nombre'])) {
    // Redirigir a la página de inicio de sesión si no está autenticado
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

  
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100..900&family=Open+Sans:wght@300..800&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="../styles.css">
    <style>
        body {
            background-color: #002855; 
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #00509E; 

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #FFC107 !important; 
            font-weight: bold;
        }

        .banner {
            text-align: center;
            padding: 20px;
            background-color: #00509E; 
        }

        .video-container video {
            width: 100%; 
            height: auto; 
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #001D3D;
        }

        .btn-danger {
            background-color: #D90429;
            border-color: #D90429;
        }

        .btn-danger:hover {
            background-color: #9C021E;
            border-color: #9C021E;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">SAN MARTIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi-menu"
                aria-controls="mi-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mi-menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../templates/cliente.php" class="nav-link">Clientes</a></li>
                    <li class="nav-item"><a href="../templates/compras.php" class="nav-link">Compras</a></li>
                    <li class="nav-item"><a href="../templates/proveedor.php" class="nav-link">Proveedores</a></li>
                    <li class="nav-item"><a href="../templates/productos.php" class="nav-link">Productos</a></li>
                    <li class="nav-item"><a href="../templates/ventas.php" class="nav-link">Ventas</a></li>
                    <li class="nav-item"><a href="../controllers/logout.php" class="nav-link">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="banner">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?>!</h1>
        <p>Este es tu panel de control.</p>
    </div>

    
    <div class="container mt-3">
        <div class="d-flex justify-content-center video-container">
            <video autoplay loop muted playsinline>
                <source src="../assets/Presentación1.gif.mp4" type="video/mp4">
                Tu navegador no soporta videos HTML5.
            </video>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <a href="../controllers/logout.php" class="btn btn-danger">Cerrar sesión</a>
        </div>
    </div>

  
    <footer class="text-center text-lg-start mt-5 p-3">
    <p class="text-white text-center mb-0">&copy; 2025 Derechos Reservados CEDENAR SAS</p>
</footer>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
