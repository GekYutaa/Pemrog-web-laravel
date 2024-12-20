## Description

Ini adalah contoh latihan create dan read dari database menggunakan laravle 11

## Requirements

-   php 8.2 atau lebih tinggi
-   buat database kosong dengan nama `latihan_querybuilder`

## Setup

1. Clone atau download repository (dibawah adalah cara clone):

    ```bash
    git clone https://github.com/novenhartawan/webframework-latihan11.git
    cd webframework-latihan11
    ```

2. buat `.env` file dan sesuaikan koneksi database:

    ```bash
    cp .env.example .env
    ```

3. Install dependencies dan setup key:

    ```bash
    composer install
    ```

    ```bash
    php artisan key:generate
    ```

4. migrasi database:
    ```bash
    php artisan migrate
    ```

jalankan aplikasi seperti biasa

```bash
php artisan serve
```
