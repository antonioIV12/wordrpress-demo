<?php

/**
 * Footer template
 * 
 * @package Demo_Theme 
 */
?>

<footer class="mt-auto border-t border-vibrant-orange/10 bg-white dark:bg-deep-brown py-12 px-6">
    <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 gap-12 md:grid-cols-4">
            <div class="col-span-1 md:col-span-1">
                <div class="mb-4 flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-vibrant-orange text-white">
                        <span class="material-symbols-outlined text-sm">dashboard_customize</span>
                    </div>
                    <h2 class="text-lg font-bold text-deep-brown dark:text-warm-cream">ProService</h2>
                </div>
                <p class="text-sm text-deep-brown/60 dark:text-warm-peach/60 leading-relaxed">
                    Elevating professional workflows with smart dashboarding and integrated project management tools.
                </p>
            </div>
            <div>
                <h4 class="mb-4 text-sm font-bold uppercase tracking-wider text-vibrant-orange">Platform</h4>
                <ul class="space-y-2 text-sm text-deep-brown/70 dark:text-warm-peach/70">
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">Overview</a></li>
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">Features</a></li>
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 text-sm font-bold uppercase tracking-wider text-vibrant-orange">Company</h4>
                <ul class="space-y-2 text-sm text-deep-brown/70 dark:text-warm-peach/70">
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">About Us</a></li>
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">Contact</a></li>
                    <li><a class="hover:text-vibrant-orange transition-colors" href="#">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 text-sm font-bold uppercase tracking-wider text-vibrant-orange">Subscribe</h4>
                <div class="flex">
                    <input class="w-full rounded-l-xl border-none bg-warm-cream dark:bg-background-dark text-sm focus:ring-1 focus:ring-vibrant-orange border border-warm-peach/30 dark:border-vibrant-orange/20" placeholder="Email" type="email" />
                    <button class="rounded-r-xl bg-vibrant-orange px-4 py-2 text-white">
                        <span class="material-symbols-outlined text-sm">send</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-warm-peach/30 dark:border-vibrant-orange/20 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-deep-brown/50 dark:text-warm-peach/50">© 2024 ProService Inc. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-deep-brown/40 dark:text-warm-peach/40 hover:text-vibrant-orange" href="#"><span class="material-symbols-outlined">share</span></a>
                <a class="text-deep-brown/40 dark:text-warm-peach/40 hover:text-vibrant-orange" href="#"><span class="material-symbols-outlined">language</span></a>
                <a class="text-deep-brown/40 dark:text-warm-peach/40 hover:text-vibrant-orange" href="#"><span class="material-symbols-outlined">help</span></a>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>