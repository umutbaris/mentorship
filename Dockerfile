FROM php:7.0-cli
FROM phpearth/php:7.2-nginx




#RUN apt-get update && apt-get install  -y \
#                                          libpq-dev \
#                                          cron \



COPY . /Users/trkarasu/Projects/mentorship

WORKDIR /Users/trkarasu/Projects/mentorship

CMD [ "php", "./public_html/QuicksortTest.php" ]

# docker run -it --rm --name quicksort -v "$PWD":/Users/trkarasu/Projects/mentorship -w /Users/trkarasu/Projects/mentorship php:7.0-cli php test.php -d nginx

#docker run -it --rm --name my-running-app quicksort