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

<body class="bg-background-light dark:bg-background-dark text-deep-brown dark:text-warm-cream font-display">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <header class="sticky top-0 z-50 w-full border-b border-vibrant-orange/10 bg-white dark:bg-deep-brown/80 backdrop-blur-md">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <div class="flex items-center gap-8">
                 <?php get_template_part('template-parts/header/logo'); ?>
                    <nav class="hidden md:flex items-center gap-6">
                        <a class="text-sm font-semibold text-vibrant-orange transition-colors" href="#">Dashboard</a>
                        <a class="text-sm font-medium text-deep-brown/70 dark:text-warm-peach/80 hover:text-vibrant-orange transition-colors" href="#">Services</a>
                        <a class="text-sm font-medium text-deep-brown/70 dark:text-warm-peach/80 hover:text-vibrant-orange transition-colors" href="#">Schedule</a>
                        <a class="text-sm font-medium text-deep-brown/70 dark:text-warm-peach/80 hover:text-vibrant-orange transition-colors" href="#">Team</a>
                    </nav>
                </div>
                <div class="flex items-center gap-4">
                    <label class="relative hidden sm:block">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-deep-brown/40 dark:text-warm-peach/40">
                            <span class="material-symbols-outlined text-sm">search</span>
                        </span>
                        <input class="h-10 w-64 rounded-xl border-none bg-vibrant-orange/10 pl-10 text-sm focus:ring-2 focus:ring-vibrant-orange/50 dark:bg-warm-peach/10 dark:text-warm-cream" placeholder="Search projects..." type="text" />
                    </label>
                    <button class="flex h-10 items-center justify-center gap-2 rounded-xl bg-vibrant-orange px-5 text-sm font-bold text-white shadow-lg shadow-vibrant-orange/20 hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-sm">person</span>
                        <span class="hidden sm:inline">Profile</span>
                    </button>
                    <div class="h-10 w-10 overflow-hidden rounded-full border-2 border-vibrant-orange/20 bg-cover bg-center" data-alt="User profile avatar portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOw6OiB8AjcozrV6BS1bcBnN0c2xx6pHmxPgu3GeCxQ_WMPT4ICbwhovrAxldUhbhzo2oV2628A9Wgqx_tbjMl4tGpW8cpnPAOD7OCW1S0UrM0E21rR6lPrQgS4cXVPfIpP7CABgZkHvtnloTzd_GihS5uxgim8qSuoO6AhBomNZSbFPql32PjlA9Sri2MsSME-sexJ21wDw_ag70zonMbD8YUHFtXDB92rFUR7E13HzpF9shARwAhVOBAFuHtZu-WpItZFXvddw_I')"></div>
                </div>
            </div>
        </header>