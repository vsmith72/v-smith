#!/bin/bash
# Backup database and content to be migrated to new server
#database
wp db export deploy.db.sql
#content
wp export
mv vanessa-smith.wordpress.2016-10-02.000.xml deploy.content.xml


# Copy backup files to server
scp -P 2222 deploy.db.sql vsmith@vanessa-smith.com:/home1/vsmith/public_html/
scp -P 2222 deploy.content.xml vsmith@vanessa-smith.com:/home1/vsmith/public_html/
scp -P 2222 deploy-remote.sh vsmith@vanessa-smith.com:/home1/vsmith/public_html/
scp -P 2222 wp-content/themes/coder-portfolio.zip vsmith@vanessa-smith.com:/home1/vsmith/public_html/
scp -P 2222 salts.sh vsmith@vanessa-smith.com:/home1/vsmith/public_html/
echo "SSH into remote server"
ssh v-s.com

