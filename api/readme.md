## Installing project

 - You need `Docker` installed into your system
 - Go into the project directory `cd api/`
 - RUN `make install` to create docker instances, install all Composer dependencies, copy .env.example file to .env, set correct permissions and generate application key
 - Fill in correct database name, user and password at .env file. Just look for it at `docker-compose.yml` file, at `postgres -> environment` section
 - RUN `make db-migrate` to apply all database migrations
 
 As a result, your project should be hosted at http://localhost:8082 domain
 
 _To see all available console commands, please open the `Makefile` file_
