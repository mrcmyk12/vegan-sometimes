<?php 
    get_header();?>
    <body style="background-color: #F0E66B">
		<div style="background-color: #F0E66B">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid" style="color: #ece6d4">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><h2 style="color: #706b32; font-weight: 900">vegan-sometimes</h2></a>
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
								<a class="nav-link"  href="<?php echo site_url('/breakfast') ?>"><h3  style="color:#706B32; text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b>Breakfast</b></h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h4 style="color:#706B32">Lunch</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h4 style="color:#706B32">Dinner</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h4 style="color:#706B32">Snacks</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/juices"><h4 style="color:#706B32">Juices</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h4 style="color:#706B32">Smoothies</h4></a>
							</li>
							<li>
								<form class="d-flex">
									<input
										class="Nav-Search"
										type="search"
										placeholder="Search Recipes"
										aria-label="Search"
									/>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        <div class="container">
			<div class="row" style="margin-top: 30px">
				<h1 style="color: #706B32; font-weight: 900; font-size: 50px;  text-shadow: 8px 4px 4px rgba(0,0,0,0.25)"><b><?php the_title(); ?><b></h1></b>
			</div>
			<div class="row">
				<h1 style="color: #706B32; font-weight: 700">Recipe of the Day:</h1>
			</div>
            <div class="row">
            <?php 
                $topRecipe = new WP_Query(array(
                   'posts_per_page' => 1,
                    'post_type' => 'breakfast',
                    'orderby' => 'rand'
                ));

                while($topRecipe -> have_posts()){
                    $topRecipe -> the_post();?>

<h2 style="color: #706B32"><?php the_title(); ?></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3 style="color: #706B32"><?php the_field('ingredients_row_1') ?></h3>
                    <button type="button" style="margin-top: 25px; margin-bottom: 25px" class="Button-Primary-L-Breakfast">View Recipe</button>
				</div>
                <div class="col-md-6">
                    <?php the_post_thumbnail('titleImage'); ?>
                </div>

               <?php }
            ?>

			
			</div>
            <hr>

            <?php 
                $breakfastPosts = new WP_Query(array(
                    'post_type' => 'breakfast',
                    'post_per_page' => 
                ))
            ?>
            <div class="row" style="margin-top: 20px;">
                <div class="col-4">
                    <img style="height: 200px;" src="https://www.bestfoods.com/content/dam/unilever/global/recipe_image/108/10846/108467-default.jpg/_jcr_content/renditions/cq5dam.web.800.600.jpeg">
                </div>
                <div class="col-5">
                    <div class="row">
                        <h2>Asian Pasta Salad</h2>
                    </div>
                    <div class="row">
                        <ul>
                            <li>1 box (12 oz.) gluten-free spaghetti, broken in half</li>
                            <li>3/4 cup vegan dressing</li>
                            <li>2 tbsp. reduced sodium soy sauce</li>
                            <li>2 tbsp. rice wine vinegar</li>
                            <li>2 tsp. toasted sesame oil</li>
                            <li>3 cups thinly sliced napa cabbage</li>
                            <li>1 cup shredded carrots</li>
                            <li>1/2 chopped fresh cilantro</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3" style="align-items: start;">
                    <button class="Button-Primary-L"> View Recipe</button>
                </div>
            </div>
           