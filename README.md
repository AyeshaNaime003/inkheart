InkHeart is an e-commerce website based on the Laravel Framework. It also utilizes the frontend Bootstrap framework.

In order to execute our project, first clone the repository from the GitHub link: https://github.com/AyeshaNaime003/inkheart.git.

Before opening the project, make sure you have WAMPP/XAMPP installed in your computer. Run the WAMP/XAMPP server, open phpMyAdmin and create a database by the name 'inkheart'.

After the cloning is complete, open the project directory in command line and execute the following commands in order:
1. Run composer install on your cmd or terminal
2. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
3. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
4. Run php artisan key:generate
5. Run php artisan migrate 
6. Run composer dump-autoload (this autoloads the user-defined helper files)
(reference: https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github)

On completion start the PHP server using command: 'php artisan serve'. Now enter 'http://127.0.0.1:8000' in the browser to start the application. 

Optional: if you wish to populate the databse with dummy data, run the command 'php artisan db:seed'. Be careful as this data is not coherent according to the database schema, it is only for testing purposes, so that view of the website can be deduced.

Project setup is complete!