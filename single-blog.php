<?php get_header(); ?>
<body style="background-color: #ffffff">
	<div style="background-color: #ffffff">
		<nav class="navbar navbar-expand-lg navbar-light">
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
						<li>
							<?php get_search_form(); ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
    <div class="container">
        <div style="margin-top:100px; margin-bottom:50px">
            <?php 
                while(have_posts()){
                    the_post(); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row"><img style="height:60vh; width: 75%; object-fit:cover" src=<?php the_field("blog_image_1") ?> /></div>
                    </div>
                    <div class="col-lg-6" style="margin-top:100px">
                        <div class="row">
                            <h1 style="font-weight:800; font-size:60px; color:black; margin-bottom:50px"><?php the_title(); ?></h1>
                        </div>
                        <p style="line-height:200%"><?php the_field("paragraph_1"); ?></p>
                    </div>
                </div>
                <div class="row">
                    <p style="line-height:200%"><?php the_field("paragraph_2"); ?></p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p style="line-height:200%"><?php the_field("paragraph_3"); ?></p>
                        <p style="line-height:200%"><?php the_field("paragraph_4"); ?></p>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                        <img style="height:60vh; width: 75%; object-fit:cover" src=<?php the_field("blog_image_2") ?> />
                        </div>
                    </div>
                </div>
                <div>
                    <p style="line-height:200%"><?php the_field("paragraph_5"); ?></p> 
                    <p style="line-height:200%"><?php the_field("paragraph_6"); ?></p> 
                </div>               
               <?php } ?>
        
        </div>
    </div>