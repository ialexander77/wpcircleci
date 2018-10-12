#!/bin/bash

#if [ "$DEPLOYMENT_GROUP_NAME" == "prod" ]
#then
    #sed -i -e 's/Listen 80/Listen 9090/g' /etc/httpd/conf/httpd.conf
#    echo 1
#fi

#exit
sleep 60
mkdir -p /etc/nginx/ssl
yes | cp -rf /tmp/www.conf /etc/php/7.2/fpm/pool.d/
