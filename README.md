# CEA Test
CRUD API with JWT authentication.  
This API can be visualized using [this UI](https://github.com/BeaaGomes/cea-front-end). 
    
### Project Setup

Clone this repository

    git clone https://github.com/BeaaGomes/cea-back-end.git

Access the project directory

    cd cea-back-end

Install dependencies

    composer install

Copy the example env file

    cp .env.example .env

Create an empty database and put the access credentials in .env

Perform table migration with seeds

    php artisan migrate --seed

Run the server locally

    php artisan serve

You can now access the server at http://localhost:8000
