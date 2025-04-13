#!/bin/bash
if [ ! -d "/home/${USER}/data/" ]; then
    sudo mkdir /home/honguyen/data
fi

if [ ! -d "/home/${USER}/data/mariadb" ]; then
    sudo mkdir /home/honguyen/data/mariadb
fi

if [ ! -d "/home/${USER}/data/wordpress" ]; then
    sudo mkdir /home/honguyen/data/wordpress
fi

#  sudo cp -a ~/saved_data/. ~/data/
sudo chmod -R 755 /home/honguyen/data
sudo chown -R 100:101 /home/honguyen/data

if [ ! -d "~/project/srcs/.env" ]; then
        sudo cp -f  /home/honguyen/saved_data/tools/.env /home/honguyen/project/srcs/
fi

if [ ! -d "~/project/srcs/requirements/nginx/tools/honguyen.42.fr.crt" ]; then
       sudo cp -f ~/saved_data/tools/honguyen.42.fr.crt ~/project/srcs/requirements/nginx/tools
fi

if [ ! -d "~/project/srcs/requirements/nginx/tools/honguyen.42.fr.key" ]; then
       sudo cp -f ~/saved_data/tools/honguyen.42.fr.key ~/project/srcs/requirements/nginx/tools
fi