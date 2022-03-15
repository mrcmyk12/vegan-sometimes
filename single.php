<?php 
    get_header();

    while(have_posts()){
        the_post(); ?>

<div class="container">
			<div class="row" style="margin-top: 15px">
				<div class="col-7">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="col-7">
					<div class="row" style="margin-top: 25px">
						<div class="col">
							<p class="Body-L" style="color: #e45d5c"
								><b>Prep</b>: <?php the_field('prep_time') ?></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #e45d5c"
								><b>Cook</b>: <?php the_field('cook_time') ?></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #e45d5c"
								><b>Total</b>: <?php the_field('total_time') ?></p
							>
						</div>
						<div class="col">
							<p class="Body-L" style="color: #e45d5c"
								><b>Servings</b>: <?php the_field('servings') ?></p
							>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 25px">
				<div class="col-7">
					<div class="row">
						<div class="col">
							<?php the_field('ingredients_row_1') ?>
						</div>
						<div class="col">
							<?php the_field('ingredients_row_2') ?>
						</div>
					</div>
				</div>
				<div class="col-5">
                    <?php the_post_thumbnail('titleImage'); ?>
				</div>
			</div>
			<div class="row" style="margin-bottom: 15px">
				<h2>Instructions</h2>
			</div>
			<div class="row"  style="margin-bottom: 30px; margin-left: 15px; margin-right: 20px">
				<?php the_field('instructions') ?>
			</div>
			<div class="row">
				<h2>Related Recipes</h2>
			</div>
            <?php
                $latestRecipes = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type' => 'breakfast'
                ));
                while($latestRecipes -> have_posts()){
                    $latestRecipes -> the_post(  );
                    ?>
                        <div><?php the_title(); ?></div>
               <?php }
            ?>
			<div class="row" style="margin-bottom: 20px">
				<div class="col-6">
					<div class="Latest-Recipe-Card">
                        <div class="row">
						<div class="col">
							<img
								src="https://images.pexels.com/photos/1251198/pexels-photo-1251198.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								style="height: 178px; width: 178px"
							/>
						</div>
						<div class="col" >
                            <h3 style="margin-top: 10px;">Recipe Title</h3>
							<p style="margin-bottom: 5px;"
								>Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Magnam, voluptatem odit. Ipsam, quia architecto
								temporibus quis non.</p
							>
						</div>
                    </div>
					</div>
				</div>
				<div class="col-6">
                    <div class="Latest-Recipe-Card">
                        <div class="row">
						<div class="col">
							<img
								src="https://images.pexels.com/photos/1251198/pexels-photo-1251198.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								style="height: 178px; width: 178px"
							/>
						</div>
						<div class="col" >
                            <h3 style="margin-top: 10px;">Recipe Title</h3>
							<p style="margin-bottom: 5px;"
								>Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Magnam, voluptatem odit. Ipsam, quia architecto
								temporibus quis non.</p
							>
						</div>
                    </div>
                </div>
			</div>
		</div>

   <?php }
?>




<?php
    get_footer();
?>