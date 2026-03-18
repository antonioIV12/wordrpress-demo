<?php

/**
 * Main Template
 *      
 * @package Demo_Theme
 */

get_header('pages/home/homeHeader');
?>
<!-- END: Navigation Header -->
<div class="flex-grow flex items-center justify-center p-6">
    <!-- BEGIN: MainLoginContainer -->
    <main class="w-full max-w-md p-8 bg-white rounded-2xl shadow-xl border border-warm-peach/30" data-purpose="login-card">

	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<?php
			if ( have_posts() ) :
				?>
				<div class="container">
					<?php
					if ( is_home() && ! is_front_page() ) {
						?>
						<header class="mb-5">
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>
						<?php
					}
					?>

					<div class="row">
						<?php
						$index         = 0;
						$no_of_columns = 3;

						while ( have_posts() ) : the_post();

							if ( 0 === $index % $no_of_columns ) {
								?>
								<div class="col-lg-4 col-md-6 col-sm-12">
								<?php
							}

							get_template_part( 'template-parts/content' );

							$index ++;

							if ( 0 !== $index && 0 === $index % $no_of_columns ) {
								?>
								</div>
								<?php
							}

						endwhile;
						?>
					</div>
				</div>
			<?php

			else :

				get_template_part( 'template-parts/content-none' );

            endif;
			?>
		</main>
	</div>

        <!-- BEGIN: HeaderSection -->
        <header class="text-center mb-8">
            <!-- Decorative element using the palette -->
            <div class="inline-block p-3 rounded-full bg-warm-peach mb-4">
                <svg class="h-8 w-8 text-deep-brown" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-deep-brown">Welcome Back</h1>
            <p class="text-vibrant-orange mt-2">Please enter your details to sign in</p>
        </header>
        <!-- END: HeaderSection -->
        <!-- BEGIN: LoginForm -->
        <form action="#" class="space-y-6" method="POST">
            <!-- Email Field Group -->
            <div class="space-y-1">
                <label class="block text-sm font-semibold text-deep-brown" for="email">Email Address</label>
                <input class="w-full px-4 py-3 rounded-lg border-warm-peach focus:ring-vibrant-orange focus:border-vibrant-orange bg-warm-cream/20" id="email" name="email" placeholder="name@company.com" required="" type="email" />
            </div>
            <!-- Password Field Group -->
            <div class="space-y-1">
                <div class="flex items-center justify-between">
                    <label class="block text-sm font-semibold text-deep-brown" for="password">Password</label>
                    <a class="text-xs font-medium text-vibrant-orange hover:underline" href="#">Forgot password?</a>
                </div>
                <input class="w-full px-4 py-3 rounded-lg border-warm-peach focus:ring-vibrant-orange focus:border-vibrant-orange bg-warm-cream/20" id="password" name="password" placeholder="••••••••" required="" type="password" />
            </div>
            <!-- Remember Me -->
            <div class="flex items-center">
                <input class="h-4 w-4 text-deep-brown focus:ring-vibrant-orange border-warm-peach rounded" id="remember-me" name="remember-me" type="checkbox" />
                <label class="ml-2 block text-sm text-deep-brown/80" for="remember-me">
                    Remember me for 30 days
                </label>
            </div>
            <!-- Login Button -->
            <button class="w-full bg-deep-brown text-warm-cream font-bold py-3 px-4 rounded-lg shadow-lg btn-hover transition-transform active:scale-[0.98]" data-purpose="submit-button" type="submit">
                Sign In
            </button>
        </form>
        <!-- END: LoginForm -->
        <!-- BEGIN: InternalFooterLinks -->
        <footer class="mt-8 pt-6 border-t border-warm-peach/40 text-center">
            <p class="text-sm text-deep-brown/70">
                Don't have an account?
                <a class="font-bold text-vibrant-orange hover:text-deep-brown transition-colors" href="#">Create account</a>
            </p>
        </footer>
        <!-- END: InternalFooterLinks -->
    </main>
    <!-- END: MainLoginContainer -->
</div>
<?php get_template_part( 'pages/home/home' ); 
get_footer();
