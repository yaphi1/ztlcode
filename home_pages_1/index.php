<?php get_header(); ?>
<section id="content" role="main">
<div class="mastheadhome">
	<h1 class="homeh1">
		Get the Step-by-Step Road Map to Becoming a Front-End Web Developer
	</h1>

	<!-- Begin signup form -->
	<form action="//blinkdash.us9.list-manage.com/subscribe/post?u=cf6125d07d2da4bcb868629d4&amp;id=271f6daf1b" method="post" name="mc-embedded-subscribe-form" class="homeform" target="_blank" novalidate>
		<input type="text" value="" name="FNAME" class="required" placeholder="First Name">
		<input type="email" value="" name="EMAIL" class="required email" placeholder="Email">

		<input type="hidden" value="" name="URL" class="mce_URL">
		<input type="hidden" value="" name="PATH" class="mce_PATH">
		<input type="hidden" value="" name="REFERRER" class="mce_REFERRER">
		<input type="hidden" value="home-page" name="FORM_TYPE" class="mce_FORM_TYPE">

		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;"><input type="text" name="b_cf6125d07d2da4bcb868629d4_271f6daf1b" tabindex="-1" value=""></div>
		<button type="submit" name="subscribe">Get Free Guide</button>
	</form>
	<!-- End signup form -->

</div>





<div class="plaincontent contentwidth">
	<div style="font-size:1.6em; color:#076; padding:40px 0px 20px">
		Learning coding concepts is just like eating snacks.
	</div>
	<p>
		If the lessons come in small enough pieces, you can finish a lot really quickly without realizing it.
	</p>
	<p>
		That's the idea behind Simple Steps Code.
	</p>
</div>


<div class="gridbg">
	<div class="gridcontainer">
		<h2 style="text-align:left; padding:60px 10px 10px;">Featured content</h2>
		
		<?php query_posts('category_name=featured');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="gridbox">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
				<div class="tags">
					<?php _e( 'Tags: ', 'blankslate' ); ?><?php the_category( ', ' ); ?>
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>


<div class="plaincontent contentwidth">
	<h2>
		Upcoming content:
	</h2>
	<ul>
		<li>biggest mistakes websites make and how to avoid them</li>
		<li>how to approach responsive design</li>
		<!--<li>how to make a grid that dynamically updates depending on what the user searches for</li>-->
		<li>lightbox effects</li>
		<li>simple slide shows (without any of the confusion)</li>
	</ul>
	<p>
		<a href="#">Sign up</a> to get tutorials and inspiration directly to your inbox, and be the first to know when this material arrives.
	</p>
</div>

</section>
<?php get_footer(); ?>