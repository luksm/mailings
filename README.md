# Mailing test App

A test contact book, using docker

## Installation

We're testing docker

Run docker mysql if we don't have a database

    docker run --name mailing-mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=root -d mysql:5.7

Build from docker image

    docker build -t mailing-php .

Run from the built image

    docker run -d --name running-mailing-php mailing-php
     -p 80:80 -v "$PWD":/var/www/html --link mailing-mysql:mysql
