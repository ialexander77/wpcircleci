#!/bin/sh

# Deploy dir
DEPLOY_DIR="/var/www/wordpress"

# Get region name
EC2_AVAIL_ZONE=`curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone`
EC2_REGION="`echo \"$EC2_AVAIL_ZONE\" | sed -e 's:\([0-9][0-9]*\)[a-z]*\$:\\1:'`"

# Get parameters-by-path from the EC2 Parameter Store for the first DB
DB_NAME=`aws ssm get-parameters --no-with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/DB_NAME --region $EC2_REGION --output text --query Parameters[0].Value`
DB_USER=`aws ssm get-parameters --no-with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/DB_USER --region $EC2_REGION --output text --query Parameters[0].Value`
#DB_PASSWORD=`aws ssm get-parameters --with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/DB_PASSWORD --region $EC2_REGION --output text --query Parameters[0].Value`
DB_PASSWORD=`aws ssm get-parameters --no-with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/DB_PASSWORD --region $EC2_REGION --output text --query Parameters[0].Value`
DB_HOST=`aws ssm get-parameters --no-with-decryption --names /$DEPLOYMENT_GROUP_NAME/$APPLICATION_NAME/DB_HOST --region $EC2_REGION --output text --query Parameters[0].Value`


echo DB_NAME=$DB_NAME | sed "s/\(.*\)=\(.*\)/env[\1]='\2'/" >> /etc/php/7.2/fpm/pool.d/www.conf
echo DB_USER=$DB_USER | sed "s/\(.*\)=\(.*\)/env[\1]='\2'/" >> /etc/php/7.2/fpm/pool.d/www.conf
echo DB_HOST=$DB_HOST | sed "s/\(.*\)=\(.*\)/env[\1]='\2'/" >> /etc/php/7.2/fpm/pool.d/www.conf
echo DB_PASSWORD=$DB_PASSWORD | sed "s/\(.*\)=\(.*\)/env[\1]='\2'/" >> /etc/php/7.2/fpm/pool.d/www.conf
