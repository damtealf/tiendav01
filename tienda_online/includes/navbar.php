<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">
            <i class="fas fa-shopping-bag me-2"></i>Trend&Online
        </a>
        
        <!-- Botón para móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <!-- Menú de categorías -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list me-1"></i> E-Categorias
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="categoriesDropdown">
                        <li><h6 class="dropdown-header text-accent">Direito</h6></li>
                        <li><a class="dropdown-item" href="#">Art. Cliente</a></li>
                        <li><a class="dropdown-item" href="#">Textar escalo</a></li>
                        <li><a class="dropdown-item" href="#">Registrante</a></li>
                        <li><a class="dropdown-item" href="#">Leia de classes</a></li>
                        <li><a class="dropdown-item" href="#">Debatividades</a></li>
                        <li><a class="dropdown-item" href="#">Técnico</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Todos os documentos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Página 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Página 2</a>
                </li>
            </ul>
            
            <!-- Menú de usuario -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-1"></i> Mi Cuenta
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="#">Iniciar sesión</a></li>
                        <li><a class="dropdown-item" href="#">Registrarse</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Lista de deseos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-alt me-1"></i> Documentos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart me-1"></i> Carrito
                        <span class="badge bg-accent rounded-pill cart-count">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>