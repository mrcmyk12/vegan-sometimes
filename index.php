<?php get_header(); ?>
<body style="background-color: #EF80FA">
		<div style="background-color: #EF80FA">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid" style="color: #ece6d4">
					<a href='<?php echo site_url('/') ?>' class="navbar-brand"><h2 style="color: white; font-weight: 900">vegan-sometimes</h2></a>
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
								<a class="nav-link" href="<?php echo site_url('/breakfast') ?>"><h4>Breakfast</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/lunch') ?>"><h4>Lunch</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/dinner') ?>"><h4>Dinner</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/snacks') ?>"><h4>Snacks</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/juices') ?>"><h4>Juices</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('/smoothies') ?>"><h4>Smoothies</h4></a>
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
	<div class="row">
		<div class="col-md-6">
			<div class="row" style="margin-top: 50px">
				<h1 style="font-weight: 900; color: white">vegan-sometimes</h1>
			</div>
			<div class="row" style="margin-top: 25px">
				<p class="Body-L-Bold" style="line-height: 30px;">
                    Sometimes I'm Vegan...Sometimes I'm not.  But you can always be conscious of what you're 
					consuming.  It's not about being perfect.  Just eating one vegan meal a week can make a 
					huge difference.  Browse our Vegan recipes to begin your Vegan journey.
				</p>
			</div>
			<div class="row">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="col-md-6" style="margin-top: 50px">
			<div
				id="carouselExampleCaptions"
				class="carousel slide"
				data-bs-ride="carousel"
			>
				<div class="carousel-indicators">
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="0"
						class="active"
						aria-current="true"
						aria-label="Slide 1"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="1"
						aria-label="Slide 2"
					></button>
					<button
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide-to="2"
						aria-label="Slide 3"
					></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img
							src="https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?cs=srgb&dl=pexels-ash-376464.jpg&fm=jpg"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>First Slide Label</h5>
							<p class="Body-M"
								>Lorem ipsum dolor sit amet, consectetur adipisicing
								elit.</p
							>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="https://images.pexels.com/photos/2662875/pexels-photo-2662875.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Second Title Slide</h5>
							<p class="Body-M"
								>Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Cumque odit vitae cum illo officiis, accusantium
								harum ipsa error sequi suscipit inventore est ducimus
								voluptatibus quis, sapiente nam, totam eius mollitia?</p
							>
						</div>
					</div>
					<div class="carousel-item">
						<img
							src="https://images.pexels.com/photos/139746/pexels-photo-139746.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							class="d-block w-100"
							alt="..."
						/>
						<div class="carousel-caption d-none d-md-block">
							<h5>Third Title Slide</h5>
							<p class="Body-M"
								>Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Cumque odit vitae cum illo officiis, accusantium
								harum ipsa error sequi suscipit inventore est ducimus
								voluptatibus quis, sapiente nam, totam eius mollitia?</p
							>
						</div>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="prev"
				>
					<span
						class="carousel-control-prev-icon"
						aria-hidden="true"
					></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselExampleCaptions"
					data-bs-slide="next"
				>
					<span
						class="carousel-control-next-icon"
						aria-hidden="true"
					></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 75px; margin-bottom: 75px;">
		<h2 style="font-weight: 700; font-size: 50px;">Latest Recipes</h2>
	</div>
	<div class="row" style="margin-bottom: 20px">
		<?php
        $latestPosts = new WP_Query(array(
            'posts_per_page' => 10, 
            'post_type' => array('breakfast','lunch','dinner','snack','juices','smoothies') 
        )); 
        
        while($latestPosts -> have_posts()) { 
            
        $latestPosts -> the_post();?>

		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-4">
				<div class="row">
					<a href="<?php the_permalink(); ?>" style="text-decoration: none">
						<h1 style="font-weight: 700;"><?php the_title(); ?></h1>
					</a>
				</div>
				<div class="row">
					<h4><?php the_field('description'); ?></h4>
				</div>	
			</div>
			<div class="col-md-4">
				<h3><?php the_field('ingredients_row_1'); ?></h3>
			</div>
			<div class="col-md-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('cardImage'); ?>
				</a>
			</div>
		</div>
		<hr>

		<!-- <div class="col-md-6" style="margin-bottom: 25px">
            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                <div class="Latest-Recipe-Card">
                    <div class="row">
                        <div class="col">
                            <?php the_post_thumbnail('cardImage'); ?>
                        </div>
                        <div class="col">
                            <h3 style="margin-top: 10px; font-weight: 600"><?php the_title(); ?></h3>
                            <p class="Body-M-Bold" style="margin-bottom: 5px; color: whitesmoke;"
                                ><?php the_field('description') ?></p
                            >
                        </div>
                    </div>
                </div>
            </a>
		</div> -->
		<?php  }
            ?>
	</div>

	<?php get_footer(); ?></div
>
