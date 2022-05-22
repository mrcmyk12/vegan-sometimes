<?php 
    get_header();?>
    <body style="background-color: #F0E66B">
		<div style="background-color: #F0E66B">
			<nav style="background:#F0E66B; padding-top:25px" class="navbar fixed-top navbar-expand-lg navbar-light">
				<div class="container-fluid" style="color: #ece6d4">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><img src="https://vegan-sometimes.com/wp-content/uploads/2022/03/Breakfast-Asset.png"></a>
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
								<a class="nav-link"  href="<?php echo site_url('/blog') ?>"><h3 style="color:#706B32">Blog</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link"  href="<?php echo site_url('/breakfast') ?>"><h2  style="color:#706B32; text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b>Breakfast</b></h2></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h3 style="color:#706B32">Lunch</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h3 style="color:#706B32">Dinner</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h3 style="color:#706B32">Snacks</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/juices"><h3 style="color:#706B32">Juices</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h3 style="color:#706B32">Smoothies</h3></a>
							</li>
							<li style="padding-top:10px">
								<?php get_search_form(); ?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        <div style="margin-top:100px" class="container">
			
			<h1 style="color: #706B32; font-weight: 900; font-size: 50px;  text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b><?php the_title(); ?><b></h1></b>

			
			<div class="breakfast-card">
            <?php 
                $topRecipe = new WP_Query(array(
                   'posts_per_page' => 1,
                    'post_type' => 'breakfast',
                    'orderby' => 'rand'
                ));

                while($topRecipe -> have_posts()){
                    $topRecipe -> the_post();?>
			<div class="row">
			<div class="col">
			<h1 style="color: #706B32; font-weight: 700;text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);">Recipe of the Day:</h1>
			<h2 style="color: #706B32;text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);"><?php the_title(); ?></h2>
		
			
				
					<h3 style="color: #706B32"><?php the_field('ingredients_row_1') ?></h3>
                    <a style="text-decoration:none" href="<?php the_permalink(); ?>"><button type="button" class="Button-Primary-L-Breakfast">View Recipe</button></a>
				</div>  
				<div class="col">    
					        
                    <?php the_post_thumbnail('titleImage'); ?>
			
               <?php } wp_reset_postdata();
            ?>
				</div>
				</div>
			</div>
				


			

            <?php 
                $breakfastPosts = new WP_Query(array(
                    'post_type' => 'breakfast',
                    'posts_per_page' => -1
                ));

                while($breakfastPosts -> have_posts()){
                    $breakfastPosts -> the_post(); ?>
			<div style="margin-bottom:25px" class="breakfast-card">
            <div class="row" >
                <div class="col-lg-4">
                    <?php the_post_thumbnail('cardImage'); ?>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <h2 style="color: #706B32; font-weight: 600"><?php the_title(); ?></h2>
                    </div>
                    <div class="row">
                       <h4 style="color: #706B32"><?php the_field('ingredients_row_1') ?></h4>
                    </div>
                </div>
                <div class="col-lg-3" style="align-items: start;">
                    <a style="text-decoration:none" href="<?php the_permalink(); ?>"><button class="Button-Primary-L-Breakfast"> View Recipe</button></a>
                </div>
            </div>
				</div>
              <?php  } get_footer();
            ?>
            
           