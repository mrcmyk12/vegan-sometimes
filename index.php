<?php get_header(); ?>
<body style="background-color: #ef80fa">
	<div style="background-color: #ef80fa">
		<nav style="background: #ef80fa; padding-top: 25px" class="navbar fixed-top navbar-expand-lg navbar-light">
			<div class="container-fluid" style="color: #ece6d4">
				<a href="<?php echo site_url('/') ?>" class="navbar-brand"
					><img
						src="https://vegan-sometimes.com/wp-content/uploads/2022/03/Asset-4.png"
				/></a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/blog') ?>"
								><h3>Blog</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/breakfast') ?>"
								><h3>Breakfast</h3></a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/lunch') ?>"
								><h3>Lunch</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/dinner') ?>"
								><h3>Dinner</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/snacks') ?>"
								><h3>Snacks</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/juices') ?>"
								><h3>Juices</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link"
								href="<?php echo site_url('/smoothies') ?>"
								><h3>Smoothies</h3></a
							>
						</li>
						
						<li style="padding-top:10px">
							<?php get_search_form(); ?>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="container" style="margin-top:100px">
		<div class="row">
			<div class="homepage-card" style="padding: 25px 45px 50px 50px">
				<div class="row">
					<h2
						style="
							font-size: 32px;
							text-align: center;
							font-weight: 800;
							margin-bottom: 25px;
							text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
						"
						>Vegan Recipe Library</h2
					>
				</div>
				<div class="row">
					<h3
						style="
							font-size: 20px;
							text-align: center;
							font-weight: 600;
							margin-bottom: 25px;
						"
						>Best Vegan Recipes Online. Your one stop shop for recipes for
						Breakfast, Lunch, Dinner. As well as Juice and Dessert
						Recipes. Start browsing to start or continue generating ideas
						for your plant based diet.</h3
					>
				</div>

				<div class="row">
					<div
						style="
							background: #ffffff;
							box-shadow: 12px 12px 24px #d975e3,
							inset 4px 4px 8px #fce8fe, inset -8px -8px 16px #ef80fa;
							border-radius: 12px;
							width: fit-content;
							margin-left: 35%;
							padding:10px
						"
					>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
			$latestblogpost = new WP_Query(array(
				'posts_per_page' =>
		3, 'post_type' => 'blog' )); while($latestblogpost -> have_posts()){
		$latestblogpost -> the_post(); ?>

		<div class="row">
			<div class="homepage-card" style="padding: 25px 45px 50px 50px">
				<div class="row">
					<div class="col-lg-6">
						<?php the_post_thumbnail('titleImage'); ?>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<h2
								style="
									font-weight: 900;
									margin-top: 10%;
									font-size: 32px;
									text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
								"
								><?php the_title(); ?></h2
							>
						</div>
						<div class="row">
							<p style="margin-top: 25px; font-size: 20px"
								><?php the_field('description'); ?></p
							>
							<a
								style="text-decoration: none"
								href="<?php the_permalink(); ?>"
								><button type="button" class="Button-Primary-L-Homepage"
									>View Blog Post</button
								></a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="row" style="margin-top: 75px; margin-bottom: 75px">
			<h2 style="font-weight: 700; font-size: 50px">Latest Recipes</h2>
		</div>
		<div class="row" style="margin-bottom: 20px">
			<?php
        $latestPosts = new WP_Query(array(
            'posts_per_page' =>
			10, 'post_type' =>
			array('breakfast','lunch','dinner','snack','juices','smoothies'),
			'orderby' => 'rand' )); while($latestPosts -> have_posts()) {
			$latestPosts -> the_post();?>

			<div class="col-lg-6">
				<div class="homepage-card">
					<a
						href="<?php the_permalink(); ?>"
						style="text-decoration: none"
					>
						<div class="row">
							<div class="col">
								<div class="row">
									<h1 style="font-weight: 700"
										><?php the_title(); ?></h1
									>
								</div>
								<div class="row">
									<div class="col">
										<h4
											style="
												font-family: 'Fredoka';
												font-weight: 400;
												font-size: 20px;
												line-height: 19px;
												text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
											"
											><?php the_field('description'); ?></h4
										>
									</div>
								</div>
								<div class="col">
									<?php the_post_thumbnail('cardImage'); ?>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php  }
            ?>
		</div>

		<?php get_footer(); ?></div
	>
</body>
