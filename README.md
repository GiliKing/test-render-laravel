## AHow to Use the Api

- You can test all api route through Postman



## Api Route

- Adding a new person
https://test-backend-21mn.onrender.com/api/

- Get the single person
https://test-backend-21mn.onrender.com/api/user_id

- update the single person
https://test-backend-21mn.onrender.com/api/user_id

- delete the single person
https://test-backend-21mn.onrender.com/api/user_id


Note: user_id is the id allocated to the person which 1, 2, 3, 4, 5 when the it was initially created.

Note: route can also take dynamic input like the name of the user.

## Standard Formart for each Api Request and Response.

- For Post Request
`
{
    method: 'Post',
    url: https://test-backend-21mn.onrender.com/api/,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
    data: {
        name: 'Micheal'
    }
}
`

- For Post Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Micheal",
            "id": 3
        }
    }
}
`

- For Get Request
`
{
    method: 'Get',
    url: https://test-backend-21mn.onrender.com/api/3,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    }
}
`

- For Get Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Micheal",
            "id": 3
        }
    }
}
`

- For Put Request
`
{
    method: 'Put',
    url: https://test-backend-21mn.onrender.com/api/3,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
    data: {
        name: 'Christian'
    }
}
`

- For Post Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Christian",
            "id": 3
        }
    }
}
`

- For Delete Request
`
{
    method: 'Delete',
    url: https://test-backend-21mn.onrender.com/api/,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
}
`

- For Delete Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": "Deleted Successfully"
    }
}
`


## Running it on local server

- Fist clone the application from github by running
`git clone https://github.com/GiliKing/test-render-laravel/`

- generate an app key for the laravel application by running
`php artisan key:generate`

- link you database by modify the .env.example to .env and run
`php artisan migrate`

- start the server by running
`php artisan serve`

- You will then see
`Your server is running http://127.0.0.1:8000/`        

- once your local server is running  now you van got to post man and run the following endpoints below

- Adding a new person
https://http://127.0.0.1:8000/api/

- Get the single person
https://http://127.0.0.1:8000/api/user_id

- update the single person
https://http://127.0.0.1:8000/api/user_id

- delete the single person
https://http://127.0.0.1:8000/api/user_id

## Typical Request and Response

- For Post Request
`
{
    method: 'Post',
    url: https://http://127.0.0.1:8000/api/,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
    data: {
        name: 'Micheal'
    }
}
`

- For Post Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Micheal",
            "id": 3
        }
    }
}
`


- For Get Request
`
{
    method: 'Get',
    url: https://http://127.0.0.1:8000/api/3,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    }
}
`

- For Get Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Micheal",
            "id": 3
        }
    }
}
`

- For Put Request
`
{
    method: 'Put',
    url: https://http://127.0.0.1:8000/api/3,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
    data: {
        name: 'Christian'
    }
}
`

- For Post Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": {
            "name": "Christian",
            "id": 3
        }
    }
}
`

- For Delete Request
`
{
    method: 'Delete',
    url: https://http://127.0.0.1:8000/api/,
    headers: {
        'Accept': 'application/vnd.api+json',
        'Content-Type': 'application/vnd.api+json',
    },
}
`
- For Delete Response
`
{
    "status": "Request was succesful.",
    "message": null,
    "data": {
        "user": "Deleted Successfully"
    }
}
`