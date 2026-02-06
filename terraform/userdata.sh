#!/bin/bash
apt update -y
apt install -y httpd php php-mysqlnd git
systemctl enable httpd
systemctl start httpd
