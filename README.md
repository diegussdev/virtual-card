# Virtual Card - QRCode

# Technologies
- Docker
- Laravel
- Bootstrap
- PHPUnit

# How to test
- Clone the repository
- Access the project directory
- Grant permission to the directory `chmod -R 777 ./`
- Rename the `app/.env.example` file to `app/.env`
- Start Docker and run `docker-compose --env-file ./app/.env up`
- Access the application container `docker exec -it virtual-card bash`
- Run the migrations `php artisan migrate`
- Run the tests `php artisan test`
- Access `localhost` in browser

# Result

![Home](/screenshot/home.png "Home")

![Generate](/screenshot/generate.png "Generate")

![QRCode](/screenshot/qr-code.png "QRCode")

![Profile](/screenshot/profile.png "Profile")
