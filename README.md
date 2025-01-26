# Laravel Posts API
## Pengantar Project
API ini memungkinkan pengguna untuk membuat, memperbarui, menampilkan, dan menghapus postingan di sistem.
## Instalasi
### Langkah - langkah :
**1. Clone Repository** :
```bash
git clone https://github.com/Adithamada/laravel-posts-api
```
**2. Instal Depedensi** :
```bash
composer install
```
**3. Salin file .env.example ke .env dan atur konfigurasi database** :
```bash
cp .env.example .end
```
**4. Generate App Key** :
```bash
php artisan key:generate
```
**5. Migrasi Database** :
```bash
php artisan migrate
```
**6. Database Seeder** :
```bash
php artisan db:seed
```
## API Endpoints
**1. Get All Post** :
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
- Response 500 :
```json
{
    "code": "500",
    "data": null,
    "message": "Gagal mengamnil data post"
}
```
**2. Store Data Post** :
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
- Response 500 :
```json
{
    "code": "500",
    "data": null,
    "message": "Gagal menambah data"
}
```
**3. Show Data Post** :
- Endpoint: `/api/posts/1`
- Method: `POST`
- Deskripsi: Mengambil data post by id.
- Response 200 :
```json
{
    "code": "200",
    "data": {
        "id": 1,
        "title": "Quia alias et voluptatem.",
        "description": "Cumque assumenda et hic. Consequatur similique accusantium quae eos dolore modi voluptate. Voluptatem et voluptatem in ut cumque adipisci enim. Officiis nam autem sunt est consequatur et cupiditate quae.",
        "category_id": 1,
        "author": "Barry Nienow",
        "created_at": "2025-01-26T11:14:25.000000Z",
        "updated_at": "2025-01-26T11:14:25.000000Z"
    },
    "message": "Sukses mengambil data!"
}
```
- Reponse 500 :
```json
{
    "code": "500",
    "data": null,
    "message": "Gagal mengambil data"
}
```
**4. Update Data Post** :
- Endpoint: `/api/posts/1/update`
- Method: `PUT`
- Deskripsi: Meng-update data post.
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
        "id": 1
    },
    "message": "Sukses update data!"
}
```
- Response 500 :
```json
{
    "code": "500",
    "data": null,
    "message": "Gagal update data"
}
```
**5. Delete Data Post** :
- Endpoint: `/api/posts/1`
- Method: `POST`
- Deskripsi: Menghapus data post by id.
- Response 200 :
```json
{
    "code": "200",
    "data": {
        "id": 502,
        "title": "et voluptatem Quia alias Baron Van Houvel.",
        "description": "Cumque assumenda et hic. Officiis nam autem sunt est consequatur et cupiditate quae. lorem dolor topan",
        "category_id": 3,
        "author": "Joe Baron Micky",
        "created_at": "2025-01-26T12:19:58.000000Z",
        "updated_at": "2025-01-26T12:19:58.000000Z"
    },
    "message": "Sukses menghapus data!"
}
```
- Response 500 :
```json
{
    "code": "500",
    "data": null,
    "message": "Gagal menghapus data"
}
```
