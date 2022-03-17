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
									<button class="btn btn-primary" style="background: #6E2375" type="button" id="search-button" data-bs-toggle="modal" data-bs-target="#searchModal">Search</button>
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
                    Sometimes I'm Vegan...Sometimes I'm not.  But I am always conscious of what I am putting in my body.  Love animals, and love yourself.  It's not about being perfect.  Browse our Vegan recipes to begin your Vegan journey.
				</p>
			</div>
			<div class="row" style="margin-top: 25px; margin-bottom: 50px;">
				<button id="search-button" data-bs-toggle="modal" data-bs-target="#searchModal" class="Button-Primary-L-Wide">Search Recipes</button>
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
	<div class="row">
		<h2 style="font-weight: 700">Latest Recipes</h2>
	</div>
	<div class="row" style="margin-bottom: 20px">
		<?php
        $latestPosts = new WP_Query(array(
            'posts_per_page' => 2, 
            'post_type' => array('breakfast','lunch','dinner','snack','juices','smoothies') 
        )); 
        
        while($latestPosts -> have_posts()) { 
            
        $latestPosts -> the_post();?>

		<div class="col-md-6" style="margin-bottom: 25px">
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
		</div>
		<?php  }
            ?>
	</div>
	<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="SearchModal" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title">Search Recipes</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="input-group input-group-md">
							<input type="text" id="search-term" class="form-control" aria-label="Recipe search input" aria-describedby="Recipe Search Input">
							<button class="btn " type="submit" id="button-addon2" style="background:#6E2375; color: white;">Search</button>
						</div>
						<div class="modal_results">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?></div
>
