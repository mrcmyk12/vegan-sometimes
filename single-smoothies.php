<?php 
    get_header();?>
    <body style="background-color: #CFE845">
		<div style="background-color: #CFE845">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid" style="color: #ece6d4">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><h2 style="color: #4C5711; font-weight: 900">vegan-sometimes</h2></a>
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
								<a class="nav-link"  href="<?php echo site_url('/breakfast') ?>"><h4 style="color:#4C5711">Breakfast</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h4 style="color:#4C5711">Lunch</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h3   style="color:#4C5711; text-shadow: 8px 4px 4px rgba(0,0,0,0.15)"><b>Dinner</b></h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h4 style="color:#4C5711">Snacks</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/juices"><h4 style="color:#4C5711">Juices</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h4 style="color:#4C5711">Smoothies</h4></a>
							</li>
							<li>
							<div class="input-group input-group-sm">
									<input
										class="form-control"
										type="text"
										placeholder="Search Recipes"
										aria-label="Search"
										style=""
									/>
									<button class="btn btn-primary" style="background: #3B1349" type="button" id="search-button">Search</button>
									</div>
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
			<div class="row" style="margin-top: 15px">
				<div class="col-7">
					<h1 style="font-weight: 900; font-size: 50px;  color:#4C5711; text-shadow: 8px 4px 4px rgba(0, 0, 0, 0.25);"><?php the_title(); ?></h1>
				</div>
				<div class="col-7">
					<div class="row" style="margin-top: 25px">
						<div class="col">
							<p class="Body-L" style="color: #4C5711"
								><b>Prep: <?php the_field('prep_time') ?></b></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #4C5711"
								><b>Cook: <?php the_field('cook_time') ?></b></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #4C5711"
								><b>Total: <?php the_field('total_time') ?></b></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #4C5711"
								><b>Servings: <?php the_field('servings') ?></b></p
							>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 25px">
				<div class="col-7">
					<div class="row">
						<div class="col">
							<h4  style="font-weight: 600; color: #4C5711"><?php the_field('ingredients_row_1') ?></h4>
						</div>
						<div class="col">
                        <h4  style="font-weight: 600; color: #4C5711"><?php the_field('ingredients_row_2') ?></h4>
						</div>
					</div>
				</div>
				<div class="col-5">
                    <?php the_post_thumbnail('titleImage'); ?>
				</div>
			</div>
			<div class="row" style="margin-bottom: 15px">
				<h2 style="font-weight: 800; color: #4C5711">Instructions</h2>
			</div>
			<div class="row"  style="margin-bottom: 30px; margin-left: 15px; margin-right: 20px">
				<h3 style="font-weight: 500; color: #4C5711"><?php the_field('instructions') ?></h3>
			</div>
			<div class="row">
				<h2 style="font-weight: 800; color: #4C5711">Related Recipes</h2>
			</div>
            <div class="row" style="margin-bottom: 20px">
            <?php
                $latestRecipes = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'smoothies',
                    'offset' => 1
                ));
                while($latestRecipes -> have_posts()){
                    $latestRecipes -> the_post(  );
                    ?>
                	<div class="col-6">
					<div class="Latest-Recipe-Card">
                        <a style="text-decoration: none; color: white" href="<?php the_permalink(  ); ?>">
                        <div class="row">
						<div class="col">
                            <?php the_post_thumbnail('cardImage'); ?>
						</div>
						<div class="col" >
                            <h3 style="margin-top: 10px; font-weight: 600; color: #4C5711"><?php the_title(); ?></h3>
							<p style="margin-bottom: 5px; font-weight: 500; color: #4C5711"
								> <?php the_field('description'); ?></p
							>
						</div>

                    </div>

					</div>
                </a>

				</div>
               <?php }
            ?>
			</div>
		</div>

   <?php }
?>




<?php
    get_footer();
?>

