## How to run containers

```docker-compose build```

```docker-compose up```

```http://localhost:8080/```

Bash:

```docker exec -it mentorship_web_1 /bin/bash```

```docker exec -it mentorship_php_1 /bin/bash```

## Running composer

* Run into the container
```docker exec -it mentorship_php_1 /bin/bash```

* Update composer
```composer update```