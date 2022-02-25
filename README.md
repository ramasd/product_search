# product_search
Search for products in XML file

## How to start

Clone the project to a local machine:
>`git clone https://github.com/ramasd/product_search.git`

- Go to project directory:
>`cd product_search`

- Start application containers:
>`docker-compose up -d --build server`

- Set database environment values in the **/src/.env** file:
```
DB_CONNECTION=mysql
DB_HOST=db              #[database service name from docker-compose.yaml file]
DB_PORT=3306
DB_DATABASE=homestead   #[mysql.env MYSQL_DATABASE value]
DB_USERNAME=homestead   #[mysql.env MYSQL_USER value]
DB_PASSWORD=secret      #[mysql.env MYSQL_PASSWORD value]
```

- Install composer:
>`docker-compose run composer install`

- Run migrations:
>`docker-compose run artisan migrate`

`http://localhost:8000` - *product_search* app <br />
