<form
	id="searchform"
	method="get"
	action="<?php echo esc_url( home_url( '/' ) ); ?>"
>

		<input
			type="text"
			class="search-field"
			name="s"
			style="border-radius: 8px; border: none; width: 250px"
			placeholder="Search Our Recipes"
			value="<?php echo get_search_query(); ?>"
		/>
		<input type="hidden" name="post_type[]" value="breakfast" />
		<input type="hidden" name="post_type[]" value="lunch" />
		<input type="hidden" name="post_type[]" value="dinner" />
		<input type="hidden" name="post_type[]" value="juices" />
		<input type="hidden" name="post_type[]" value="smoothies" />


	<input 
		type="submit" 
		value="Search" 
		style="background: none; border-radius: 5px"/>

</form>
