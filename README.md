## Redis Best Examples

<div>
    # Install project
    <p>Clone project</p>
    <pre>git clone https://github.com/Hanna-hanna/redis-best-examples.git</pre>
    <pre>cd redis-best-examples</pre>
    <p>Install Requirements</p>
    <pre>composer install</pre>
    <pre>npm install</pre>
    <p>Create new database on the local database tool like TablePlus</p>
    <p>Create file .env from env.example (on the root) and add info</p>
    <pre>
    DB_DATABASE=name_your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    </pre>
    <p>Migrate Database</p>
    <pre>php artisan migrate --seed</pre>
    <p>Set key for application</p>
    <pre>php artisan key:generate</pre>
    <p>Start project from your server or use local</p>
    <pre>php artisan serve</pre>
    
</div>