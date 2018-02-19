## How to run docker compose

* $ docker-compose up -d to run php and nginx images together 

* http://localhost:8080/ to view results on browser

# Run docker file

* $ docker build -t quicksort .
* $ docker run -it --rm --name my-running-app quicksort


#Installing PHP Unit
* $ docker run --rm -v $(pwd):/app composer/composer:latest require --dev phpunit/phpunit ^6.0

docker run -v $(pwd):/app --rm phpunit/phpunit:latest --bootstrap quicksort.php QuicksortTest.php
