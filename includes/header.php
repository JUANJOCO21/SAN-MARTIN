<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #0d6efd !important;
            padding: 1rem;
        }
       
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white !important;
        }
       
        .nav-btn {
            background-color: #003566 !important; 
            color: white !important; 
            border-radius: 5px;
            padding: 8px 20px !important;
            margin: 0 5px;
            border: none; 
            font-weight: bold; 
        }
       
        .nav-btn:hover {
            background-color: #002952; 
            color: white !important; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="/SubestacionSanmartin/index.php">SAN MARTIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mi-menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/SubestacionSanmartin/index.php" class="nav-link nav-btn">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/SubestacionSanmartin/templates/login.php" class="nav-link nav-btn">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/SubestacionSanmartin/templates/preguntas.php" class="nav-link nav-btn">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
