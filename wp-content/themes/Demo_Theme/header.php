<?php

/**
 * Header template
 * 
 * @package Demo_Theme
 */

add_theme_support('title-tag');
?>

<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        <?php wp_title(''); ?>
    </title>
    <!-- Tailwind CSS CDN with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- BEGIN: Tailwind Configuration -->
    <script>
         tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#FF964A", // vibrant-orange
                        "warm-cream": "#FFFDF1",
                        "warm-peach": "#FFD19D",
                        "vibrant-orange": "#FF964A",
                        "deep-brown": "#593209",
                        "background-light": "#FFFDF1", // warm-cream
                        "background-dark": "#593209", // deep-brown
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    <?php wp_head(); ?>
</head>

<body class="bg-warm-cream min-h-screen flex flex-col font-sans antialiased text-deep-brown">
    <!-- BEGIN: Navigation Header -->
    <header class="w-full bg-white border-b border-warm-peach/30 px-6 py-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex flex-row gap-1 items-center justify-between">
            <?php get_template_part('template-parts/header/logo'); ?>
            <span class="text-xl font-bold tracking-tight">WarmBrand</span>
            </div>
            <?php get_template_part('template-parts/header/nav'); ?>
        </div>
    </header>