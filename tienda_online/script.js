$(document).ready(function() {
    // Contador del carrito
    let cartCount = 0;
    
    // Añadir producto al carrito
    $('.add-to-cart').click(function() {
        cartCount++;
        $('.cart-count').text(cartCount);
        
        // Mostrar notificación
        const productName = $(this).closest('.card-body').find('.card-title').text();
        showAlert(`${productName} añadido al carrito`, 'success');
    });
    
    // Mostrar alerta
    function showAlert(message, type) {
        const alert = $(`
            <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="z-index: 9999;">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `);
        
        $('body').append(alert);
        
        // Eliminar alerta después de 3 segundos
        setTimeout(() => {
            alert.alert('close');
        }, 3000);
    }
    
    // Efecto hover en las tarjetas de categoría
    $('.category-bar a').hover(
        function() {
            $(this).css('color', '#ffc107');
        },
        function() {
            $(this).css('color', '#212529');
        }
    );
    
    // Inicializar tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();
});