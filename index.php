<?php
require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sistema San Martin</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6f2ff;
            color: #333;
        }
        
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .banner {
            background: #fff;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .content {
            flex: 1;
            padding-right: 2rem;
        }
        
        .texto {
            color: #0052cc;
            font-size: 2em;
            margin-bottom: 1rem;
        }
        
        .remarcar {
            display: inline-block;
            background-color: #0052cc;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        
        .remarcar:hover {
            background-color: #003d99;
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .service-item {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .logo-image {
            display: block;
            margin: 2rem auto;
            width: 100%;
            max-width: 1200px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .additional-info {
            text-align: center;
            margin-top: 2rem;
            padding: 1.5rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-button {
            display: inline-flex;
            align-items: center;
            background-color: #25D366;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2rem;
            margin-top: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-button:hover {
            background-color: #1eb954;
            transform: translateY(-2px);
        }

        .whatsapp-icon {
            margin-right: 0.5rem;
            font-size: 1.5rem;
        }

        .catalog-link {
            display: inline-block;
            background-color: #0052cc;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .catalog-link:hover {
            background-color: #003d99;
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <main>
        <section>
            <div class="banner">
                <div class="content">
                    <h2 class="texto">BIENVENIDO AL SISTEMA SAN MARTIN</h2>
                    <p>
                        Somos SAN MARTÍN, una empresa ubicada al norte de Nariño, en el municipio de San Pedro de Cartago, específicamente en la vereda San Martín. Pertenecemos a CEDENAR y estamos comprometidos con la gestión de datos y la lógica de negocio para diversos sectores empresariales, ofreciendo soluciones avanzadas y personalizadas que optimizan la administración de recursos e información.

Nos destacamos por nuestro avanzado sistema de gestión de información, diseñado para facilitar el manejo eficiente de inventarios, análisis detallado de datos y reportes inteligentes. Además, ofrecemos una amplia gama de servicios, incluyendo la venta, mantenimiento e instalación de equipos industriales, comerciales y residenciales, garantizando siempre la más alta calidad y confiabilidad.

Con tecnología de punta y un equipo altamente capacitado, somos el aliado estratégico ideal para empresas y hogares que buscan soluciones integrales para mejorar sus operaciones y asegurar un desempeño óptimo de sus equipos y sistemas.
                    </p>
                    <p>
                        <a href="templates/singUp.php" class="remarcar">
                            <span>Para empezar, crea tu cuenta de usuario</span>
                        </a>
                    </p>
                </div>
            </div>

            <img src="assets/Logo1.jpg" alt="Logo de San Martin" class="logo-image">

            <div class="additional-info">
                <p>
                    Contamos con venta de equipos y material eléctrico, además de personal especializado para la instalación en proyectos industriales, comerciales y residenciales. 
                </p>
                <p>
                    Para más información, contáctanos por WhatsApp:
                </p>
                <p>
                    <a href="https://wa.me/573147076434" target="_blank" class="whatsapp-button">
                        <i class="fab fa-whatsapp whatsapp-icon"></i> Contáctanos
                    </a>
                </p>
                <p>
                    <a href="assets/CatalogoSanMartin.pdf" class="catalog-link" download>Descargar Catálogo</a>
                </p>
            </div>

            <div class="services">
                <div class="service-item">
                    <h3>Gestión de Datos</h3>
                    <p>Sistema avanzado para el manejo eficiente de información empresarial</p>
                </div>
                <div class="service-item">
                    <h3>Inventario Digital</h3>
                    <p>Control preciso y en tiempo real de sus productos e insumos</p>
                </div>
                <div class="service-item">
                    <h3>Reportes Inteligentes</h3>
                    <p>Análisis detallado y visualización de datos para mejor toma de decisiones</p>
                </div>
            </div>
        </section>
    </main>
<?php
require_once 'includes/footer.php';
?>
