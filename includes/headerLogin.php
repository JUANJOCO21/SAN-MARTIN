<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>

    <!-- Incluyendo CSS de Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Incluyendo hoja de estilos personalizada -->
    <link rel="stylesheet" href="../styles.css"> 
    <style>
        .navbar-custom {
            background-color: #0d6efd !important;
            padding: 1rem;
        }

        .navbar-custom .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar-custom .nav-link {
            background-color: #003566 !important; 
            color: white !important;
            border-radius: 5px;
            padding: 8px 20px !important;
            margin: 0 5px;
            border: none; 
            font-weight: bold;
        }

        .navbar-custom .nav-link:hover {
            background-color: #002952 !important; 
            color: white !important;
        }

        .fondo {
            background-color: #A0B2C8; 
            min-height: 100vh; 
        }
    </style>
</head>

<body class="fondo">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="../templates/dashboard.php">SAN MARTIN</a>

            <!-- Botón de menú para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi-menu"
                aria-controls="mi-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del menú -->
            <div class="collapse navbar-collapse justify-content-end" id="mi-menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../templates/cliente.php" class="nav-link">Clientes</a></li>
                    <li class="nav-item"><a href="../templates/compras.php" class="nav-link">Compras</a></li>
                    <li class="nav-item"><a href="../templates/proveedor.php" class="nav-link">Proveedores</a></li>
                    <li class="nav-item"><a href="../templates/productos.php" class="nav-link">Productos</a></li>
                    <li class="nav-item"><a href="../templates/ventas.php" class="nav-link">Ventas</a></li>
                    <li class="nav-item"><a href="../controllers/logOut.php" class="nav-link">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>