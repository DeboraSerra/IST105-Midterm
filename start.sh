#! /bin/bash

sudo dnf update -y
sudo dnf install php php-cli php-common php-fpm php-mysqlnd -y
sudo dnf install httpd -y
sudo dnf install git-all -y
sudo systemctl start httpd
git clone https://github.com/DeboraSerra/MidTerm_IST105.git
sudo cp -r MidTerm_IST105/* /var/www/html/
sudo systemctl restart httpd
