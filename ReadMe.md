# How to run with out docker


# How to run development environment
- composer install 
- cp .env.example .env 
- ./vendor/bin/sail up
- sail artisan key:generate
- sail artisan migrate
