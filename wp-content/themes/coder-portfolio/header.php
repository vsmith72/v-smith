<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8" />
        <title>Portfolio Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
        <!-- TODO -- Make the nav bar a dynamic wp navbar must be responsive -->
		  <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container-fluid">
				    <div class="navbar-header scroll">
					   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
						   <span class="icon-bar"></span>
				        </button>
					   <a href="#bg-image" class="navbar-brand me">Vanessa Smith</a>
				    </div>
				    <div id="myNavbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#about">&lt;about me&gt;</a></li>
                            <li><a href="#portfolio">&lt;portfolio&gt;</a></li>
                            <li><a href="#contact">&lt;contact&gt;</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="https://codepen.io/vsmith72" target="_blank"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
                            <li><a href="https://github.com/vsmith72" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/vsmith1972" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
				    </div>
			   </div>
            </nav>
