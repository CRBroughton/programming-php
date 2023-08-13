This repo contains code for the book "Programming PHP, 4th Edition"

To run a script, use the following (be in the same folder):

docker container run --rm -v $(pwd):/app/ php:7.4-cli php /app/hello-world.php

For web pages, use:

docker run -d -p 80:80 --name php-web -v $(pwd)/php-info.php:/var/www/html/index.php php:7.4-apache