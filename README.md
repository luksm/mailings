# Mailing test App

A test contact book, using docker

## Installation

We're testing docker

    docker run --name mailing-mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -d mysql:5.7
    docker build -t mailing-php .
    docker run -d --name running-mailing-php mailing-php
     -p 80:80 -v "$PWD":/var/www/html --link mailing-mysql:mysql
