#!/bin/bash
# Download Wordpress
wp core download

# Create wp-config
wp core config --dbname=vsmith_staging --dbuser=vsmith_wrdp2 --dbpass=Webgrrl.72 --dbhost=localhost --dbprefix=vs_ --extra-php <<PHP
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
define( 'WP_DEFAULT_THEME', 'coder-portfolio' );
define( 'WP_DEBUG', true );
define( 'WP_POST_REVISIONS', 0 );
PHP
# secure the wp-config
chmod 644 wp-config.php

# Create the Database
wp db create

# Install Wordpress
wp core install --url=http://staging.vanessa-smith.com --title="Vanessa Smith WordPress Developer - Staging" --admin_user=vsmith72 --admin_password=Webgrrl.72 --admin_email=vsmith72@gmail.com

#make the uploads folder and set permissions
mkdir uploads
chmod 775 uploads/

cd ..
# Install and Activate Perferred Theme
mv coder-portfolio.zip wp-content/themes/coder-portfolio.zip
cd wp-content/themes
wp theme install coder-portfolio.zip --activate
cd ../..

# Remove Default Twenty-Something Themes
wp theme delete twentyfourteen
wp theme delete twentyfifteen
wp theme delete twentysixteen

# Install Desired Plugins
wp plugin install advanced-custom-fields --activate
wp plugin install advanced-custom-fields-font-awesome --activate
wp plugin install wordpress-importer --activate
#wp plugin install duplicate-post --activate
#wp plugin install enable-media-replace --activate
#wp plugin install favicon-by-realfavicongenerator --activate
#wp plugin install regenerate-thumbnails --activate
#wp plugin install google-sitemap-generator
#wp plugin install add-to-any
#wp plugin install all-in-one-wp-migration --activate
#wp plugin install black-studio-tinymce-widget --activate
#wp plugin install mailchimp-for-wp
#wp plugin install wp-subscribe
#wp plugin install disqus-comment-system
#wp plugin install php-code-widget
#wp plugin install custom-post-type-ui --activate
#wp plugin install theme-check
#wp plugin install search-and-replace
#wp plugin install admin-menu-editor
#wp plugin install admin-menu-reorder
#wp plugin install wordpress-seo
#wp plugin install wp-security-audit-log
#wp plugin install backwpup

# Remove Unwanted Plugins
wp plugin delete hello

# Cleanup the Install Remove Default Posts and Pages
wp site empty
wp db reset
wp db import deploy.db.sql
wp search-replace 'http://v-smith.dev' 'http://staging.vanessa-smith.com'
wp import deploy.content.xml --authors=create --skip=image_resize

# Set Your Timezone & Blog Description
wp option update timezone_string America/Los_Angeles
wp option update blogdescription 'Creating beautifully responsive websites with WordPress'
wp option update permalink_structure '%postname%'
wp option update blog_privacy 0

#clear the history and exit
history -c && exit
