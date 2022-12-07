[![Product Name Screen Shot][product-screenshot]](https://myproject123.tk)

## Introduction

This is a complete project implementation of ecommerce fashion website figma mockup/wireframe. The website is created using the PHP Laravel Framework + Tailwind CSS. The site contain the following features:

- Navigation Section
- Benefits Section
- Hero Section
- Site-Wide Deals Section
- VIP Exclusive Section
- Trending Section
- New In Section
- Recently Bought Section
- Insta Section
- Newsletter Section
- Footer Section

## Installation

At least Ubuntu 20.04 LTS server environment is required to install the site.

Install NGINX web server.
```sh
  sudo apt install nginx
  sudo systemctl enable nginx
  sudo systemctl restart nginx
```

Install and Setup MariaDB.
```sh
  sudo apt install mariadb-server mariadb-client
  sudo mysql_secure_installation
  sudo systemctl enable mariadb
  sudo systemctl restart mariadb
```

Install PHP and required libraries.
```sh
  sudo apt install php7.4-fpm php7.4-mysql php7.4-cli php7.4-common php7.4-curl php7.4-json php7.4-mbstring php7.4-xml php7.4-pdo-mysql php7.4-tokenizer php7.4-bcmath php7.4-gd
  sudo systemctl enable php7.4-fpm.service
  sudo systemctl restart php7.4-fpm.service
```

Create Database and Allow Database User.

Connect to mysql root.
```sh
  sudo mysql -u root -p
```

Execute query commands to create database user.
```sh
  CREATE DATABASE db_ecommerce_fashion_site CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
  CREATE USER 'efssql'@'localhost' IDENTIFIED BY "password123!@#";
  GRANT ALL PRIVILEGES ON db_ecommerce_fashion_site.* TO 'efssql'@'localhost';
  FLUSH PRIVILEGES;
  FLUSH HOSTS;
```

Then exit to the mysql prompt.

Get Composer.
```sh
  sudo curl -sS https://getcomposer.org/installer | php
  sudo mv composer.phar /usr/local/bin/composer
  sudo chmod +x /usr/local/bin/composer
```

Install and Setup Site.
```sh
  sudo cd /var/www
  git clone git@github.com:traci12/Ecommerce_Fashion_Site.git
```

Generate a key if required.
```sh
  sudo php artisan key:generate
```

Setup Virtual Host.
```sh
  sudo nano /etc/nginx/sites-available/default
```

Paste the following configuration and replace <domain> with your certified domain name.
```sh
server {
    listen 80;
    server_name <domain>;
    root /var/www/Ecommerce_Fashion_Site/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Content-Type-Options "nosniff";

    index index.html index.htm index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Reload web server.
```sh
  sudo systemctl reload nginx
```

(Optional) Install Certbot and Obtain SSL Certificate. Replace <domain> with your certified domain name.
```sh
  sudo apt install certbot python3-certbot-nginx
  sudo certbot --nginx -d <domain>
```

[product-screenshot]: https://github.com/traci12/Ecommerce_Fashion_Site/blob/main/public/images/screenshot.png
