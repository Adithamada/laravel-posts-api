# Laravel Posts API
## Pengantar Project
API ini memungkinkan pengguna untuk membuat, memperbarui, menampilkan, dan menghapus postingan di sistem.
## Instalasi
### Langkah - langkah :
1. Clone Repository :
```bash
git clone https://github.com/Adithamada/laravel-posts-api
```
2. Instal Depedensi
```bash
composer install
```
3. Salin file .env.example ke .env dan atur konfigurasi database:
```bash
cp .env.example .end
```
4. Generate App Key :
```bash
php artisan key:generate
```
5. Migrasi Database :
```bash
php artisan migrate
```
6. Database Seeder :
```bash
php artisan db:seed
```
## API Endpoints
1. Get All Post
- Endpoint: `/api/posts`
- Method: `GET`
- Deskripsi: Mengambil semua data post.
- Response 200 :
```json
{
    "code": "200",
    "data": [
        {
            "id": 1,
            "title": "Sunt doloribus tempora nostrum adipisci id non nostrum.",
            "description": "Necessitatibus asperiores fugit aut dolore aut repudiandae. Aut ipsa nostrum quam quos sunt quos corporis. Numquam beatae aut eum non vel. Est quod ullam tenetur ratione voluptates optio.",
            "category_id": 2,
            "author": "Cali Schowalter",
            "created_at": "2025-01-26T11:14:26.000000Z",
            "updated_at": "2025-01-26T11:14:26.000000Z"
        },
        {
            "id": 2,
            "title": "Suscipit mollitia consequatur consequuntur consectetur non et.",
            "description": "Et qui eius et quia delectus. Consequuntur perferendis nihil laborum veniam recusandae.",
            "category_id": 2,
            "author": "Caitlyn Harris",
            "created_at": "2025-01-26T11:14:26.000000Z",
            "updated_at": "2025-01-26T11:14:26.000000Z"
        }
    ],
    "message": "Sukses mengambil data post"
}
```
2. Store Data Post
- Endpoint: `/api/posts`
- Method: `POST`
- Deskripsi: Menambah data post baru.
- Request :
```json
{
    "title":"et voluptatem Quia alias Baron Van Houvel.",
    "description": "Cumque assumenda et hic. Officiis nam autem sunt est consequatur et cupiditate quae. lorem dolor topan",
    "category_id": 3,
    "author": "Joe Baron Micky"
}
```
- Response 200 :
```json
{
    "code": "200",
    "data": {
        "title": "et voluptatem Quia alias Baron Van Houvel.",
        "description": "Cumque assumenda et hic. Officiis nam autem sunt est consequatur et cupiditate quae. lorem dolor topan",
        "category_id": 3,
        "author": "Joe Baron Micky",
        "updated_at": "2025-01-26T12:19:58.000000Z",
        "created_at": "2025-01-26T12:19:58.000000Z",
        "id": 502
    },
    "message": "Sukses menambah data!"
}
```
