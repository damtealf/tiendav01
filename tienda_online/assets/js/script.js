$(document).ready(function() {
    // Ajustar el padding del body según el tamaño del navbar
    function adjustBodyPadding() {
        const navbarHeight = $('.navbar').outerHeight();
        $('body').css('padding-top', navbarHeight + 'px');
    }

    // Ejecutar al cargar y al redimensionar
    adjustBodyPadding();
    $(window).resize(adjustBodyPadding);

    // Mejorar el comportamiento del dropdown en móviles
    $('.navbar .dropdown').on('show.bs.dropdown', function() {
        if ($(window).width() < 992) {
            $(this).find('.dropdown-menu').first().css({
                'position': 'absolute',
                'transform': 'translate3d(0, 42px, 0)',
                'top': '100%',
                'left': '0'
            });
        }
    });

    // Cerrar menú al hacer clic en un item (solo móviles)
    if ($(window).width() < 992) {
        $('.navbar .nav-link').on('click', function() {
            $('.navbar-collapse').collapse('hide');
        });
    }
});

$(document).ready(function() {
    // Menú móvil mejorado
    function setupMobileMenu() {
        const $navbar = $('.navbar');
        const $navbarToggler = $('.navbar-toggler');
        const $navbarCollapse = $('.navbar-collapse');
        
        // Efecto al hacer scroll
        $(window).scroll(function() {
            if ($(window).width() < 992) {
                $navbar.toggleClass('scrolled', $(this).scrollTop() > 10);
            }
        });
        
        // Animación del botón hamburguesa
        $navbarToggler.on('click', function() {
            $(this).toggleClass('collapsed');
            $navbarCollapse.toggleClass('show');
            $('body').toggleClass('menu-open');
        });
        
        // Cerrar menú al hacer clic en enlace
        $('.nav-link').on('click', function() {
            if ($(window).width() < 992) {
                $navbarCollapse.removeClass('show');
                $navbarToggler.addClass('collapsed');
                $('body').removeClass('menu-open');
            }
        });
        
        // Mejorar dropdowns en móviles
        $('.dropdown-toggle').on('click', function(e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                const $dropdownMenu = $(this).next('.dropdown-menu');
                $('.dropdown-menu').not($dropdownMenu).slideUp();
                $dropdownMenu.slideToggle().toggleClass('show');
            }
        });
    }
    
    // Scroll suave para todos los enlaces
    $('a[href*="#"]').on('click', function(e) {
        if (this.hash !== "" && $(this).attr('href').startsWith('#')) {
            e.preventDefault();
            const hash = this.hash;
            const target = $(hash);
            
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - $('.navbar').outerHeight()
                }, 800, 'easeInOutQuad', function() {
                    window.location.hash = hash;
                });
            }
        }
    });
    
    // Inicializar
    setupMobileMenu();
    
    // Reconfigurar al cambiar tamaño
    $(window).resize(function() {
        if ($(window).width() >= 992) {
            $('.navbar-collapse').removeClass('show');
            $('.dropdown-menu').removeClass('show').attr('style', '');
        }
        setupMobileMenu();
    });
});