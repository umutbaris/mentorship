FROM php:7.0-cli

COPY . /Users/trkarasu/Projects/mentorship

WORKDIR /Users/trkarasu/Projects/mentorship

CMD [ "php", "./quicksort.php" ]

# docker run -it --rm --name my-running-script -v "$PWD":/Users/trkarasu/Projects/mentorship -w /Users/trkarasu/Projects/mentorship php:7.0-cli php quicksort.php

