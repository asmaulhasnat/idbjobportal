# Job Portal
 
# Job Portal Application
  This job portal creating for demo purpose


## Requirements
- Laravel 5.7
- MySQL
- Composer

## Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/asmaulhasnat/vod_anime.git
2. **Install Dependencies**
   ```bash
   composer install
3. **Set Up Environment Variables**
   ```bash
   cp .env.example .env
- Open the .env file in a text editor and set up your database details and other setting
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=root
    DB_PASSWORD=

- Replace database  setting as you need.

4. **SGenerate Application Key**
   ```bash
   php artisan key:generate

5. **Run Migrations**
   ```bash
   php artisan migrate

7. **Run the Server**
- To start the application, run the Laravel development server:
  ```bash
    php artisan serve
