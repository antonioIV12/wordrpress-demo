<?php

/**
 * Navigation template
 * 
 * @package Demo_Theme
 */

$page = get_page_by_path('/pages/home/home.php');
$link = get_permalink($page);
?>

<nav class="hidden md:flex space-x-8">
    <a class="text-sm font-medium hover:text-vibrant-orange transition-colors" href="<?php echo esc_url(home_url('/pages/home/home')); ?>">Features</a>
    <a class="text-sm font-medium hover:text-vibrant-orange transition-colors" href="#">About</a>
    <a class="text-sm font-medium hover:text-vibrant-orange transition-colors" href="#">Support</a>
</nav>
<div class="md:hidden">
    <button class="text-deep-brown">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        </svg>
    </button>
</div>