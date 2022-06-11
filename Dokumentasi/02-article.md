# Article Service

## Create Article

Request :

- Method : POST
- Endpoint : /api/article
- Header :
  - Content-Type : application/json
  - Accept : application/json
- Body :

  ```json
  {
    "title" : "Foo Bar",
    "description" : "Lorem ipsum dolor sit amet",
    "type" : 1,
    "user" : 1
  }
  ```

- Response :

  ```json
  {
    "title" : "Foo Bar",
    "description" : "Lorem ipsum dolor sit amet",
    "type" : 1,
    "user" : 1
  }
  ```

## List Article

Request :

- Method : GET
- Endpoint : /api/article
- Header :
  - Accept : application/json
- Response :

  ```json
  {
    "data": [
      {
        "title" : "Foo Bar",
        "description" : "Lorem ipsum dolor sit amet",
        "type" : 1,
        "user" : 1
      },
      {
        "title" : "Hello World",
        "description" : "Lorem ipsum dolor sit amet",
        "type" : 1,
        "user" : 1
      }
    ]
  }
  ```

## Update Article

Request :

- Method : PUT
- Endpoint : /api/article/{id}
- Header :
  - Content-Type : application/json
  - Accept : application/json
- Body :

  ```json
  {
    "title" : "Foo Bar",
    "description" : "Lorem ipsum dolor sit amet",
    "type" : 1,
    "user" : 1
  }
  ```

- Response :

  ```json
  {
    "success": true,
    "message": "Update article success"
  }
  ```

## Delete Article

Request :

- Method : DELETE
- Endpoint : /api/article/{id}
- Header :
  - Content-Type : application/json
  - Accept : application/json
  ```

- Response :

  ```json
  {
    "success": true,
    "message": "Delete article success"
  }
  ```
