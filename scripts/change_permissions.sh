#!/bin/bash

# Deploy dir
DEPLOY_DIR="/var/www/wordpress"

# Get region name
EC2_AVAIL_ZONE=`curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone`
EC2_REGION="`echo \"$EC2_AVAIL_ZONE\" | sed -e 's:\([0-9][0-9]*\)[a-z]*\$:\\1:'`"

# Get parameters-by-path from the EC2 Parameter Store for the environment
#ENV_NAME=`aws ssm get-parameters --no-with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/ENVIRONMENT --region $EC2_REGION --output text --query Parameters[0].Value`

chown -R www-data:www-data $DEPLOY_DIR
find $DEPLOY_DIR -type d -exec chmod 755 {} \;
find $DEPLOY_DIR -type f -exec chmod 644 {} \;
chmod +x $DEPLOY_DIR/scripts/*.sh
