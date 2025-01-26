# API Documentation

## 💁‍♀️ Allowed HTTP Request
- GET : To GET data from the API
- POST : To send POST request to the API ( Create data )
- PUT : To send PUT request to the API ( Update data )
- DELETE : To delete data on the API

## 📝 Description Of Usual Server Responses
- 200 OK - Request was successful
- 500 Not Found - Requested data was not found

## 📀 Posts Attributes
- id INT : Unique identifier ( Primary Key )
- title varchar : Post Name
- description varchar : Post Description
- category_id INT : Post Category ( Foreign Key )

## 💿 Category Attributes
- id INT : Unique identifier ( Primary Key )
- category varchar : Category Name

## 🔖 GET Method Example
### Getting all data

#### Posts URL :
```
http://localhost:8000/api/v1/posts
```
#### Result Examples :
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
#### Category URL :
```
http://localhost:8000/api/v1/category
```

#### Result Examples :
```json
{

"code":  "200",

"data":  [

{

"id":  1,

"category_name":  "Technology",

"created_at":  null,

"updated_at":  null

},

{

"id":  2,

"category_name":  "Health",

"created_at":  null,

"updated_at":  null

},

{

"id":  3,

"category_name":  "Sports",

"created_at":  null,

"updated_at":  null

},

{

"id":  4,

"category_name":  "Entertainment",

"created_at":  null,

"updated_at":  null

}

],

"message":  "Sukses mengambil data category"

}
```
### Getting a specific posts data based on ID
#### Posts Url :
```
http://127.0.0.1:8000/api/v1/post/{id}
```
#### Result Example :
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

#### Category Url
```
http://127.0.0.1:8000/api/v1/category/{id}
```
#### Result Example :
```json
{

"code":  "200",

"data":  {

"id":  3,

"category_name":  "Sports",

"created_at":  null,

"updated_at":  null

},

"message":  "Sukses mengambil data category!"

}
```
## 🧾 POST Method Example

### Posts Example
#### URL :
```
http://localhost:8000/api/v1/post/
```
#### Body :
```json
{
	"title":"et voluptatem Quia alias Baron Van Houvel.",
    "description": "Cumque assumenda et hic. Officiis nam autem sunt est consequatur et cupiditate quae. lorem dolor topan",
    "category_id": 3,
    "author": "Joe Baron Micky"
}
```
### Category Example
#### URL :
```
http://localhost:8000/api/v1/category/
```
#### Body :
```json
{
	"Category_name":"Donation"
}
```
## ✍ PUT Method Example

### Posts Example
#### URL :
```
http://localhost:8000/api/v1/posts/{id}/update
```
#### Body :
```json
{
	"title":"et voluptatem Quia alias Baron Van Houvel.",
    "description": "Cumque assumenda et hic. Officiis nam autem sunt est consequatur et cupiditate quae. lorem dolor topan",
    "category_id": 3,
    "author": "Joe Baron Micky"
}
```
### Category Example
#### URL :
```
http://localhost:8000/api/v1/category/{id}/update
```
#### Body :
```json
{
	"category_name":"Donation"
}
```
## ❌ DELETE Method Example

### Posts

#### URL :
```
http://localhost:8000/api/v1/post/{id}
```
### Category

#### URL :
```
http://localhost:8000/api/v1/category/{id}
```
## 🖥 Entity Relational Diagram ( ERD )
![API ERD](http://localhost:8000/api.drawio.png)
