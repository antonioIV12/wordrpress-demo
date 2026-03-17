<?php

/**
 * Home page
 * 
 * @package Demo_Theme
 */

get_template_part( 'pages/home/homeHeader' );
?>
<main class="flex-1">
    <section class="px-6 py-8">
        <div class="mx-auto max-w-7xl">
            <div class="relative overflow-hidden rounded-3xl bg-deep-brown px-8 py-16 text-center shadow-2xl @container">
                <div class="absolute inset-0 opacity-40 bg-gradient-to-br from-vibrant-orange via-deep-brown to-deep-brown/80" data-alt="Abstract orange and dark brown gradient background"></div>
                <div class="relative z-10 mx-auto max-w-3xl">
                    <h1 class="text-4xl font-black tracking-tight text-warm-cream sm:text-6xl mb-6">
                        Welcome Back to Your Professional Dashboard
                    </h1>
                    <p class="mb-10 text-lg text-warm-peach">
                        Manage your projects, track your progress, and stay updated with real-time insights in one centralized workspace designed for peak productivity.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <button class="w-full sm:w-auto rounded-xl bg-vibrant-orange px-8 py-4 text-base font-bold text-white shadow-xl shadow-vibrant-orange/30 transition-transform active:scale-95">
                            Get Started
                        </button>
                        <button class="w-full sm:w-auto rounded-xl bg-white/10 px-8 py-4 text-base font-bold text-white backdrop-blur-md hover:bg-white/20 transition-all border border-white/20">
                            View Reports
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-6 py-12 bg-vibrant-orange/5 dark:bg-transparent">
        <div class="mx-auto max-w-7xl">
            <div class="mb-8 flex items-center justify-between">
                <h2 class="text-2xl font-bold tracking-tight text-deep-brown dark:text-warm-cream">Live Widgets</h2>
                <button class="text-sm font-semibold text-vibrant-orange hover:underline">Customize Layout</button>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col rounded-2xl bg-white p-6 shadow-sm dark:bg-deep-brown border border-warm-peach/30 dark:border-vibrant-orange/10">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="material-symbols-outlined text-vibrant-orange">analytics</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-deep-brown/40 dark:text-warm-peach/40">Stats</span>
                    </div>
                    <div class="mt-auto">
                        <p class="text-3xl font-black text-deep-brown dark:text-warm-cream">84%</p>
                        <p class="text-sm font-medium text-deep-brown/60 dark:text-warm-peach/60">Project Completion</p>
                        <div class="mt-3 h-2 w-full rounded-full bg-warm-cream dark:bg-deep-brown/50 overflow-hidden border border-warm-peach/20">
                            <div class="h-full w-[84%] bg-vibrant-orange rounded-full"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-2xl bg-white p-6 shadow-sm dark:bg-deep-brown border border-warm-peach/30 dark:border-vibrant-orange/10">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="material-symbols-outlined text-vibrant-orange">event_upcoming</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-deep-brown/40 dark:text-warm-peach/40">Events</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-vibrant-orange/10 text-vibrant-orange font-bold">12</div>
                            <div class="overflow-hidden">
                                <p class="truncate text-sm font-bold text-deep-brown dark:text-warm-cream">Design Sync</p>
                                <p class="text-xs text-deep-brown/60 dark:text-warm-peach/60">2:00 PM Today</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-vibrant-orange/10 text-vibrant-orange font-bold">14</div>
                            <div class="overflow-hidden">
                                <p class="truncate text-sm font-bold text-deep-brown dark:text-warm-cream">Client Review</p>
                                <p class="text-xs text-deep-brown/60 dark:text-warm-peach/60">10:30 AM Wed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-2xl bg-white p-6 shadow-sm dark:bg-deep-brown border border-warm-peach/30 dark:border-vibrant-orange/10">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="material-symbols-outlined text-vibrant-orange">notifications_active</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-deep-brown/40 dark:text-warm-peach/40">Alerts</span>
                    </div>
                    <div class="space-y-4">
                        <p class="text-sm text-deep-brown/70 dark:text-warm-peach/70">
                            <span class="font-bold text-vibrant-orange">New feedback</span> on "Project Alpha" from Sarah.
                        </p>
                        <p class="text-sm text-deep-brown/70 dark:text-warm-peach/70">
                            <span class="font-bold text-vibrant-orange">Server update</span> scheduled for 12:00 AM tonight.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col rounded-2xl bg-white p-6 shadow-sm dark:bg-deep-brown border border-warm-peach/30 dark:border-vibrant-orange/10">
                    <div class="mb-4 flex items-center justify-between">
                        <span class="material-symbols-outlined text-vibrant-orange">cloud</span>
                        <span class="text-xs font-bold uppercase tracking-wider text-deep-brown/40 dark:text-warm-peach/40">Local</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-3xl font-black text-deep-brown dark:text-warm-cream">72°F</p>
                            <p class="text-sm font-medium text-deep-brown/60 dark:text-warm-peach/60">Sunny, New York</p>
                        </div>
                        <span class="material-symbols-outlined text-5xl text-vibrant-orange/40">sunny</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-6 py-12">
        <div class="mx-auto max-w-7xl">
            <div class="overflow-hidden rounded-2xl bg-white shadow-sm dark:bg-deep-brown border border-warm-peach/30 dark:border-vibrant-orange/10">
                <div class="flex flex-col @xl:flex-row">
                    <div class="w-full @xl:w-1/3 bg-cover bg-center h-48 @xl:h-auto" data-alt="Office workspace with minimalist tech setup" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDFSTfTIElZcbJZyztIYuRDbF3BBFwpfTgFBdiAOYkKYxWcrjTcdwBfUBQJJy5CLO58mnAzn5j4EX8dpsr18hC1Aa69a6rdT9huRdiuAKbLLSWmuKJUb4Tgn_8k_fuE6nGZcUV3zWVMsRiKE_B-Lhej3TvWvukx5eAJKNr555eoBT88_VQBalCxmHxZTzWntJn5V60GCe9UJZcIgqla3G_uFOdheVj0Bihme_N2Iyao_fJv5QVoqH_Xe3x1BZxWRfhY3PZ1NU7JIehN')"></div>
                    <div class="flex flex-1 flex-col justify-center p-8">
                        <div class="mb-2 flex items-center gap-2 text-vibrant-orange font-bold text-sm">
                            <span class="material-symbols-outlined text-sm">bolt</span>
                            RECENT ACTIVITY
                        </div>
                        <h3 class="text-2xl font-bold text-deep-brown dark:text-warm-cream mb-4">Project Alpha Milestones</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="mt-1 h-2 w-2 rounded-full bg-vibrant-orange flex-shrink-0"></div>
                                <p class="text-sm text-deep-brown/70 dark:text-warm-peach/70">3 new high-priority tasks completed today by the UI team.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="mt-1 h-2 w-2 rounded-full bg-vibrant-orange/40 flex-shrink-0"></div>
                                <p class="text-sm text-deep-brown/70 dark:text-warm-peach/70">Marketing materials updated 2h ago. Awaiting final creative sign-off.</p>
                            </div>
                        </div>
                        <div class="mt-8 flex gap-4">
                            <button class="rounded-xl bg-vibrant-orange px-6 py-2.5 text-sm font-bold text-white shadow-lg shadow-vibrant-orange/20">View Activity</button>
                            <button class="rounded-xl bg-warm-cream dark:bg-background-dark px-6 py-2.5 text-sm font-bold text-deep-brown dark:text-warm-peach border border-warm-peach/30 dark:border-vibrant-orange/20">Archive</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


</html>
<?php
get_footer();
