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
    <! -- HERO AREA -------------------------------------------------------------->

    <header class="hero-area scroll" id="hero-area">
        <p class="type anim-typewriter">&lt;i'm a coder&gt;</p>
    </header>

    <!-- ABOUT ME ---------------------------------------------------------------->

    <section id="about" class="scroll">
        <div class="container-fluid">
            <?php query_posts('pagename=about-me'); ?>
                <?php
                while (have_posts()) : the_post();
                      //set up variables for about me and skills
                      $about_the_code = get_field('about_the_code');
                      $about_the_person = get_field('about_the_person');
                      $skill_image_1 = get_field('skill_image_1');
                      $skill_image_2 = get_field('skill_image_2');
                      $skill_image_3 = get_field('skill_image_3');
                      $skill_image_4 = get_field('skill_image_4');
                      $skill_1 = get_field('skill_1');
                      $skill_2 = get_field('skill_2');
                      $skill_3 = get_field('skill_3');
                      $skill_4 = get_field('skill_4');
                      $skill_1_title = get_field('skill_1_title');
                      $skill_2_title = get_field('skill_2_title');
                      $skill_3_title = get_field('skill_3_title');

                ?>
                    <! -- get the modal template part -->
                    <?php get_template_part('content-modal'); ?>
                        <h2>&lt;about me&gt;<span class="blink">|</span></h2>
                        <!-- Shape Experiment -->
                        <div class="about-content">
                            <div class="shape-about"></div>
                            <h3>Hi, my name is Vanessa, and I am a coder!</h3>
                            <p>
                                <?php echo $about_the_code; ?>
                            </p>
                            <p class="footnote">"Once you stop learning you start dying," -Albert Einstein</p>
                            <p>
                                <?php echo $about_the_person; ?>
                            </p>
                            <p class="footnote clearfix">"Not all who wander are lost" -JRR Tolken</p>
                            <div class="skills">
                                <header class="skills-header clearfix">
                                    <h3>My Skillset and How I Roll!</h3>
                                </header>
                                <div class="shape-skill">
                                    <span class="skill-logo"><?php echo $skill_image_1; ?></span>
                                </div>
                                <h4>&lt;<?php echo $skill_1_title; ?>&gt;</h4>
                                <p class="clearfix"><?php echo $skill_1; ?></p>
                                <div class="shape-skill">
                                    <span class="skill-logo"><?php echo $skill_image_2; ?></span>
                                </div>
                                <h4>&lt;<?php echo $skill_2_title; ?>&gt;</h4>
                                <p class="clearfix"><?php echo $skill_2; ?></p>
                                <div class="shape-skill">
                                    <span class="skill-logo"><?php echo $skill_image_3; ?></span>
                                </div>
                                <h4>&lt;<?php echo $skill_3_title; ?>&gt;</h4>
                                <p class="clearfix"><?php echo $skill_3; ?></p>
                            </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <!-- end about -->
    <section id="portfolio" class="scroll">
        <div class="container-fluid">
            <h2>&lt;portfolio&gt;<span class="blink">|</span></h2>
            <ul class="flex">
                <?php query_posts('post_type=portfolio'); ?>
                    <?php
                    while (have_posts()) : the_post();

                        //set up variables for portfolio items
                        $project_title = get_field('project_title');
                        $project_url = get_field('project_url');
                        $project_description = get_field('project_description');
                        $skills_used = get_field('skills_used');

                        // image
                        $img = get_field('project_image');
                        //vars
                        $size = 'large';

                    ?>
                        <li class="portfolio-item">
                            <a href="<?php echo $project_url; ?>" target="_blank">
                                <?php if ($img) : ?>
                                    <img class="portfolio-img" src="<?php echo $img; ?>" width="100%" />
                                <?php endif; ?>
                            </a>
                            <br/>
                            <p class="footnote-white">Skills Used:
                                <?php echo $skills_used; ?>
                            </p>
                        </li>
                        <?php endwhile; wp_reset_query(); ?>
            </ul>
        </div>
    </section>
    <!-- end portfolio -->
    <section id="contact" class="scroll">
        <div class="container-fluid">
            <h2>&lt;contact&gt;<span class="blink">|</span></h2>
            <div class="content-contact">
                <p>
                    Contact Vanessa below, whether you want to hire her, inquire about her experience, or simply invite her to lunch (No, seriously. Invite her to lunch!)
                </p>
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
                    <button type="submit" class="btn btn-block">
                        <i class="fa fa-envelope-o fa-x5" aria-hidden="true"></i>
                        &nbsp; &nbsp;Send Your Message
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact -->
    <?php get_footer(); ?>
