<?php 
    get_header();?>
    <body style="background-color: #ffffff">
		<div style="background-color: #ffffff">
		<nav style="background:#ffffff; padding-top:25px" class="navbar fixed-top navbar-expand-lg navbar-light">
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
								class="nav-link-blog"
								href="<?php echo site_url('/breakfast') ?>"
								><h2 style="text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b>Blog</b></h2></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link-blog"
								href="<?php echo site_url('/breakfast') ?>"
								><h3>Breakfast</h3></a
							>
						</li>
						<li class="nav-item">
							<a class="nav-link-blog" href="<?php echo site_url('/lunch') ?>"
								><h3>Lunch</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link-blog"
								href="<?php echo site_url('/dinner') ?>"
								><h3>Dinner</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link-blog"
								href="<?php echo site_url('/snacks') ?>"
								><h3>Snacks</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link-blog"
								href="<?php echo site_url('/juices') ?>"
								><h3>Juices</h3></a
							>
						</li>
						<li class="nav-item">
							<a
								class="nav-link-blog"
								href="<?php echo site_url('/smoothies') ?>"
								><h3>Smoothies</h3></a
							>
						</li>
                        <div style="background:#e300fa; padding:10px; border-radius:8px">
							<li style="">
								<?php get_search_form(); ?>
							</li>
                        </div>
					</ul>
				</div>
			</div>
		</nav>
		</div>
        <div style="margin-top:100px; margin-bottom:50px" class="container">
			<div class="row">
				<div style="padding: 25px 45px 50px 50px; margin-bottom:50px" class="homepage-card">
					<?php
						$topBlogPost = new WP_Query(array(
							'posts_per_page' => 1,
							 'post_type' => 'blog',
						 ));
					 
						 while($topBlogPost-> have_posts()){
							 $topBlogPost-> the_post();
					?>
					<div class="row">
						<div class="col">
							<?php the_post_thumbnail('titleImage'); ?>
						</div>
						<div class="col">
							<div class="row">
								<h1 style="color: #3B1349;text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); margin-top:80px; font-weight:900; font-size:48px"><?php the_title(); ?></h1>
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
					<?php } ?></div>		
				</div>
				<div class="row">
				<?php 
					$blogPosts = new WP_Query(array(
						'posts_per_page' => '-1',
						'post_type' => 'blog'
					));

					while($blogPosts-> have_posts()){
						$blogPosts-> the_post();
				?>
				
					<div class="col-lg-6">
						<div class="homepage-card">
							<div class="row">
								<div class="row">
									<div class="col"><?php the_post_thumbnail('cardImage') ?></div>
									<div class="col"><h1 style="font-weight:700; font-size:40px"><?php the_title(); ?></h1></div>
								</div>
								<div class="row">
									<h2><?php the_field('description'); ?></h2>
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
					<?php } get_footer(); ?>
				</div>
			</div>
        </div>

    