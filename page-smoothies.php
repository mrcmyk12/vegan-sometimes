<?php 
    get_header();?>
    <body style="background-color: #CFE845">
		<div style="background-color: #CFE845">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><img src="https://vegan-sometimes.com/wp-content/uploads/2022/03/Smmothies-Asset.png"></a>
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
								<a class="nav-link"  href="<?php echo site_url('/breakfast') ?>"><h4  style="color:#4C5711">Breakfast</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h4 style="color:#4C5711">Lunch</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h4 style="color:#4C5711">Dinner</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h4 style="color:#4C5711">Snacks</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/juices"><h4 style="color:#4C5711">Juices</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h3 style="color:#4C5711; text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b>Smoothies</b></h3></a>
							</li>
							<li>
							<?php get_search_form(); ?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        <div class="container">
			<div class="row" style="margin-top: 30px">
				<h1 style="color: #4C5711; font-weight: 900; font-size: 50px;  text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b><?php the_title(); ?><b></h1></b>

				<h1 style="color: #4C5711; font-weight: 700">Recipe of the Day:</h1>
            <?php 
                $topRecipe = new WP_Query(array(
                   'posts_per_page' => 1,
                    'post_type' => 'smoothies',
                    'orderby' => 'rand'
                ));

                while($topRecipe -> have_posts()){
                    $topRecipe -> the_post();?>

<h2 style="color: #4C5711"><?php the_title(); ?></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 style="color: #4C5711"><?php the_field('ingredients_row_1') ?></h3>
                    <a href="<?php the_permalink(); ?>"><button type="button" style="margin-top: 25px; margin-bottom: 25px" class="Button-Primary-L-Smoothie">View Recipe</button></a>
				</div>
                <div class="col-md-6">
                    <?php the_post_thumbnail('titleImage'); ?>
                </div>

               <?php } wp_reset_postdata();
            ?>

			
			</div>
            <hr>

            <?php 
                $lunchPosts = new WP_Query(array(
                    'post_type' => 'smoothies',
                    'posts_per_page' => -1
                ));

                while($lunchPosts -> have_posts()){
                    $lunchPosts -> the_post(); ?>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-4">
                    <?php the_post_thumbnail('cardImage'); ?>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <h2 style="color: #4C5711; font-weight: 600"><?php the_title(); ?></h2>
                    </div>
                    <div class="row">
                       <h4 style="color: #4C5711"><?php the_field('ingredients_row_1') ?></h4>
                    </div>
                </div>
                <div class="col-md-3" style="align-items: start;">
                    <a href="<?php the_permalink(); ?>"><button class="Button-Primary-L-Smoothie"> View Recipe</button></a>
                </div>
            </div>
            <hr>
              <?php  } get_footer();
            ?>
            
           