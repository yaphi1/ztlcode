<?php
/*
Template Name: Blank Post
*/

get_header();
?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="masthead">
	be ready to reduce this
	<h1><?php the_title() ?></h1>
</div>
<?php the_content() ?>
<?php endwhile; endif; ?>
</section>


<div class="contentwidth signupsection">
	<div class="enjoyedthis">
		Did you enjoy this?
	</div>
	<p>If yes, don't panic. Here's what to do next.</p>

	<div class="signupform">
		<div class="signupcopy">
			<div class="gettutorials">Get tutorials and inspiration</div>
			<ul class="bluechecks">
				<li><span>&check;</span> improve your coding skills</li>
				<li><span>&check;</span> get better jobs and salaries</li>
				<li><span>&check;</span> have more freedom to create what you want</li>
			</ul>
		</div>
		<!-- Begin MailChimp Signup Form -->
		<form action="http://blinkdash.us9.list-manage.com/subscribe/post?u=cf6125d07d2da4bcb868629d4&amp;id=271f6daf1b" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="zerofont">
				<input type="text" value="" name="FNAME" class="required" placeholder="First Name">
				<input type="email" value="" name="EMAIL" class="required email" placeholder="Email">
			</div>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_cf6125d07d2da4bcb868629d4_271f6daf1b" tabindex="-1" value=""></div>
		    <button type="submit" name="subscribe" class="signupbutton">Get Free Tutorials and Inspiration</button>
		    <div class="nospam">
		    	I absolutely hate spam, so you won't be receiving any. Also, your info is 100% private. If you're not happy for any reason, you can unsubscribe at any time.  I'll do my best to keep everything interesting and useful though.
		    </div>
		</form>
		<!--End mc_embed_signup-->
	</div>

</div>

<?php get_footer(); ?>