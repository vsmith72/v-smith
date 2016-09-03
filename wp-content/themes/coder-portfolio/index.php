<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage coder-portfolio
 */
get_header(); ?>
<div class="bg-image">
	<header id="page-header">
		<h1>&lt;i'm a coder&gt;<span class="blink">|</span></h1>
	</header>
</div>
<div id="about" class="scroll">
	<div class="container-fluid">
		<h2>&lt;about me&gt;<span class="blink">|</span></h2>
		<div class="row center">
			<div class="col-sm-4">
				<div class="right">
					<img src="http://vanessa-smith.com/codecamp/images/me.jpg" alt="Vanessa Smith - Front End Web Developer" class="shadow" style="width:100%;"><br /><br />
				</div>
			</div>
			<div class="col-sm-8">
				<p>Vanessa Smith is a Front End Web Developer specilaizing in Wordpress Development. Using a combination of formal schooling and self-learning she has been designing and building Websites and Web Apps for over 10 years and has been working with Wordpress for the last four years. She is currently working to earn her Full Stack Web Development certificate online from <a href="https://freecodecamp.com" target="_blank">FreeCodeCamp</a>.</p>
				<p>Vanessa lives and works in Seattle, Washington. If you'd like to hire her please <a href="#contact">contact</a> her below. When she is not <span class="code">&lt;coding&gt;</span> Vanessa enjoys traveling the world, photography and making pretty things.</p>

                <div class="skills">
                    <h3>&lt;skills&gt;</h3>
                    <h4>HTML - including HTML 5</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active teal" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                            <span>99.9%</span>
                        </div>
                    </div>
                    <h4>CSS - including CSS3 and Bootstrap</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <span>85%</span>
                        </div>
                    </div>
                    <h4>Wordpress - including PHP</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active teal" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                    <h4>UI &amp; UX - including Adobe Photoshop and Illustrator</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active teal" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <span>80%</span>
                        </div>
                    </div>
                    <h4>JavaScript &amp; jQuery</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active teal" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <span>60%</span>
                        </div>
                    </div>
                    <p class="footnote">Vanessa's skill set will continue to grow. "Once you stop learning you start dying," -Albert Einstein</p>
                </div>
            </div>
        </div>
	</div>
</div><!-- end about -->
<div id="portfolio" class="scroll">
	<div class="container-fluid">
		<h2>&lt;portfolio&gt;<span class="blink">|</span></h2>
		<div class="row center">
			<div class="col-sm-4">
				<a href="http://codepen.io/vsmith72/pen/YWzWex" target="_blank"><img src="http://vanessa-smith.com/codecamp/images/stevejobstribute.png" alt="Portfolio piece - Steve Jobs Trubute Page" style="width:100%;"  class="shadow filter"></a>
				<p class="footnote-white">Skills Used: HTML, CSS, Javascript &amp; jQuery, UI/UX</p>
			</div>
			<div class="col-sm-4">
				<a href="http://codepen.io/vsmith72/pen/BzaLjb" target="_blank"><img src="http://vanessa-smith.com/codecamp/images/portfolio.png" alt="Portfolio piece - Web Developer Portfolio" style="width:100%;"  class="shadow filter"></a>
				<p class="footnote-white">Skills Used: HTML, CSS, Javascript &amp; jQuery, UI/UX</p>
			</div>
			<div class="col-sm-4">
				<a href="http://wandrrblog.com" target="_blank"><img src="http://vanessa-smith.com/codecamp/images/wandrrblog.png" alt="Portfolio piece - Wandrrblog a personal blog using Wordpress" style="width:100%;" class="shadow filter"></a>
				<p class="footnote-white">Skills Used: Custom Wordpress Template, CSS, HTML, UI/UX</p>
			</div>
		</div>
	</div>
</div><!-- end portfolio -->
<div id="contact" class="scroll">
	<div class="container-fluid">
		<h2>&lt;contact&gt;<span class="blink">|</span></h2>
		<div class="row center center-2">
			<div class="col-sm-12">
				<p>Contact Vanessa below, whether you want to hire her, inquire about her experience, or simply invite her to lunch (No, seriously. Invite her to lunch!)</p>
				<form action="http://vanessa-smith.com/codecamp/contact.php" name="contactform" method="post" role="form">
					<div class="form-group">
						<label for="usr">Name:</label>
						<input type="text" name="name" class="form-control" id="usr" placeholder="Your name" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea name="message" class="form-control" rows="5" id="message"></textarea>
					</div>
					<button type="submit" class="btn btn-block"><i class="fa fa-envelope-o fa-x5" aria-hidden="true"></i>&nbsp; &nbsp;Send Your Message</button>
				</form>
			</div>
		</div>
	</div>
</div><!-- end contact -->
<?php get_footer(); ?>
