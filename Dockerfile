FROM php:7.0-cli



RUN apt-get update && apt-get install  -y \
                                          libpq-dev \
                                          cron \
                                          mysql-client

RUN docker-php-ext-install mysqli

COPY . /Users/trkarasu/Projects/mentorship

WORKDIR /Users/trkarasu/Projects/mentorship

CMD [ "php", "./test.php" ]




# docker run -it --rm --name quicksort -v "$PWD":/Users/trkarasu/Projects/mentorship -w /Users/trkarasu/Projects/mentorship php:7.0-cli php test.php

