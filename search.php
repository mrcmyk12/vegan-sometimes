<?php
/*
Template Name: Search Page
*/
?>

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
<?php
    $s = get_search_query();
    $args = array(
        's' => $s
    ); ?>
    <div class="container">
    <?php
    $the_query = new WP_Query( $args );
    if( $the_query -> have_posts()) {
        _e("<h2>Search results for: ".get_query_var('s')."</h2>");
        while( $the_query -> have_posts()){
            $the_query -> the_post();
            ?>
            <div class="row">
                <div class="col">
                    <h1 style="font-weight: 700"><?php the_title(); ?></h1>
                    <?php the_field('description'); ?>
                </div>
                <div class="col">
                    <?php the_field('ingredients_row_1'); ?>
                </div>
                <div class="col">
                    <?php the_post_thumbnail('cardImage') ?>
                </div>
            </div>
            <hr>
      <?php  } 
    } else {
        ?>
            <div>
                <h2>Sorry, but nothing matched your search criteria</h2>
            </div>
    </div>
   <?php   }

    get_footer();
?>