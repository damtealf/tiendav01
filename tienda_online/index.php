<?php 
// Configuración inicial
require_once 'functions.php';

// Inicia el buffer de salida
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaOnline - Inicio</title>
    
    <!-- Bootstrap CSS personalizado -->
    <link href="assets/css/bootstrap-custom.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS personalizado -->
    <link href="assets/css/styles.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
</head>

  <body class="<?php echo ($isHomepage ?? false) ? 'has-sticky-nav' : ''; ?>">
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/search.php'; ?>
    <?php include 'includes/product-functions.php'; ?>
    
    <main class="container-fluid px-0">
        <?php include 'includes/hero.php'; ?>
        
        <div class="container mt-4">
            <?php include 'includes/featured-products.php'; ?>
            <?php include 'includes/daily-offers.php'; ?>
            <?php include 'includes/categories.php'; ?>
        </div>
    </main>
    
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS personalizado -->
    <script src="assets/js/script.js"></script>
</body>
</html>
<?php
// Limpia el buffer y muestra la página
ob_end_flush();
?>