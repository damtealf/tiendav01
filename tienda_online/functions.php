<?php
// Funciones útiles para todo el sitio

/**
 * Obtiene la clase activa para el menú
 */
function getActiveClass($currentPage, $pageName) {
    return $currentPage === $pageName ? 'active' : '';
}

/**
 * Formatea el precio con descuento
 */
function formatPrice($price, $discount = 0) {
    if ($discount > 0) {
        $discountedPrice = $price - ($price * ($discount / 100));
        return '<span class="text-accent fw-bold">$'.number_format($discountedPrice, 2).'</span>
                <span class="text-decoration-line-through text-muted small ms-2">$'.number_format($price, 2).'</span>';
    }
    return '<span class="text-accent fw-bold">$'.number_format($price, 2).'</span>';
}

/**
 * Genera las estrellas de rating
 */
function generateRating($rating) {
    $fullStars = floor($rating);
    $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
    $emptyStars = 5 - $fullStars - $halfStar;
    
    $html = '';
    for ($i = 0; $i < $fullStars; $i++) {
        $html .= '<i class="fas fa-star text-warning"></i>';
    }
    if ($halfStar) {
        $html .= '<i class="fas fa-star-half-alt text-warning"></i>';
    }
    for ($i = 0; $i < $emptyStars; $i++) {
        $html .= '<i class="far fa-star text-warning"></i>';
    }
    
    return $html;
}
?>