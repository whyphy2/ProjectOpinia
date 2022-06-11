# Article Service

## Create Article

Request :

- Method : POST
- Endpoint : /Posting
- Header :
  - Content-Type : application/json
  - Accept : application/json
  - Authorization : Bearer Token
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
- Endpoint : /
- Header :
  - Accept : application/json
  - Authorization : Bearer Token
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
- Endpoint : /update/{id}
- Header :
  - Content-Type : application/json
  - Accept : application/json
  - Authorization : Bearer Token
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
    "message": "Update article success"
  }
  ```

## Delete Article

Request :

- Method : DELETE
- Endpoint : /delete/{id}
- Header :
  - Content-Type : application/json
  - Accept : application/json
  - Authorization : Bearer Token
  ```

- Response :

  ```json
  {
    "message": "Delete article success"
  }
  ```
