<?php 
    get_header();?>
    <body style="background-color: #7CD6B6">
		<div style="background-color: #7CD6B6">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid" style="color: #ece6d4">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><img src="https://vegan-sometimes.com/wp-content/uploads/2022/03/Jucie-Asset.png"></a>
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
					<div
						class="collapse navbar-collapse"
						id="navbarSupportedContent"
					>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link"  href="<?php echo site_url('/breakfast') ?>"><h3  style="color:#125B66">Breakfast</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h3 style="color:#125B66">Lunch</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h3 style="color:#125B66">Dinner</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h3 style="color:#125B66">Snacks</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/juices"><h2 style="color:#125B66; text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b>Juices</b></h2></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h3 style="color:#125B66">Smoothies</h3></a>
							</li>
							<li>
							<?php get_search_form(); ?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
<?php
    while(have_posts()){
        the_post(); ?>

<div class="container">
<div class="juice-card">
				<div class="row" style="margin-top: 15px">
					<div class="col-lg-7">
						<h1 style="font-weight: 900; font-size: 50px;  color:#125B66; text-shadow: 8px 4px 4px rgba(0, 0, 0, 0.25);"><?php the_title(); ?></h1>
					</div>
					<div class="col-lg-7">
						<div class="row" style="margin-top: 25px">
							<div class="col">
								<p class="Body-L" style="color: #125B66"
									><b>Prep: <?php the_field('prep_time') ?></b></p
								>
							</div>
							<div class="col">
								<p class="Body-L" style="color: #125B66"
									><b>Cook: <?php the_field('cook_time') ?></b></p
								>
							</div>
							<div class="col">
								<p class="Body-L" style="color: #125B66"
									><b>Total: <?php the_field('total_time') ?></b></p
								>
							</div>
							<div class="col">
								<p class="Body-L" style="color: #125B66"
									><b>Servings: <?php the_field('servings') ?></b></p
								>
							</div>
						</div>
					</div>
				
					<div class="col-lg-7">
						<div class="row">
							<div class="col">
								<h4  style="font-weight: 600; color: #125B66"><?php the_field('ingredients_row_1') ?></h4>
							</div>
							<div class="col">
							<h4  style="font-weight: 600; color: #125B66"><?php the_field('ingredients_row_2') ?></h4>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<?php the_post_thumbnail('titleImage'); ?>
					</div>
				</div>
			</div>
		
			<div class="juice-card">
				<div class="row" style="margin-bottom: 15px">
					<h2 style="font-weight: 800; color: #125B66">Instructions</h2>
				</div>
				<div class="row"  style="margin-bottom: 30px; margin-left: 15px; margin-right: 20px">
					<h3 style="font-weight: 500; color: #125B66"><?php the_field('instructions') ?></h3>
				</div>
			</div>
			<div class="row" style="margin-top: 50px;">
				<h2 style="font-weight: 800; color: #125B66; font-size: 50px;">Related Recipes</h2>
			</div>
            <div class="row" style="margin-bottom: 20px">
            <?php
                $latestRecipes = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'juices',
                    'offset' => 1
                ));
                while($latestRecipes -> have_posts()){
                    $latestRecipes -> the_post(  );
                    ?>
                	<div class="col-lg-6">
					<div class="juice-card">	
						<div class="row" style="margin-bottom: 20px;">
							
								<div class="row">
									<a href="<?php the_permalink(); ?>" style="text-decoration: none">
										<h1 style="font-weight: 700; color: #125B66"><?php the_title(); ?></h1>
									</a>
								</div>
								<div class="row">
									<div class="col">
										<h4 style="color: #125B66"><?php the_field('description'); ?></h4>
									</div>
							<div class="col">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('cardImage'); ?>
								</a>
							</div>
				</div>
						</div>
					</div>
				</div>
               <?php }
            ?>
		</div>

   <?php }
?>




<?php
    get_footer();
?>

