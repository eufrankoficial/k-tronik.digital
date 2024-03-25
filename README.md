# CRUD - USER API

## Stack:
- Laravel

To create a simple CRUD in an API, I have created the endpoints in `api.php` (As suggested by Sascha).
Regarding the token error, it was necessary to install Laravel Sanctum, as it already does all the necessary configuration for the API endpoints to work correctly.

For more information, refer to the [Laravel Sanctum documentation](https://laravel.com/docs/11.x/sanctum#main-content).

To start the application, we need:

```bash
./vendor/bin/sail up
./vendor/bin/sail migrate
```

In addition to the endpoints, I created resources and collections to return the data that is really necessary. The endpoints to perform the CRUD operations are as follows:

- **To list:**
  - Route: `/users`
  - Method: GET
  - Example:

    ```json
    GET /users
    ```

- **To save:**
  - Route: `/users`
  - Method: POST
  - Example:

    ```json
    POST /users
    {
        "name":"namename",
        "lastname":"lastlast",
        "email":"email@emailfff.com"
    }
    ```

- **To update:**
  - Route: `/users/{id}`
  - Method: POST
  - Example:

    ```json
    POST /users/{id}
    {
        "name":"namename",
        "lastname":"lastlast",
        "email":"email@emailfff.com"
    }
    ```

- **To search for a user by ID:**
  - Route: `/users/{id}`
  - Method: GET

- **To delete:**
  - Route: `/delete/{id}`
  - Method: DELETE