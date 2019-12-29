# multiple-tokens-auth-testapp

## Endpoints
Learn more about [passing tokens in requests](https://laravel.com/docs/master/api-authentication#passing-tokens-in-requests).

### /api/login
`http://multiple-tokens-auth.test/api/login?id=1`  
**Requires param `id`.**  
Creates and prints a new token.  

### /api/user
`http://multiple-tokens-auth.test/api/user?api_token=abc123`  
**Requires authorization.**  
Returns the current user.  

### /api/logout
`http://multiple-tokens-auth.test/api/logout?api_token=abc123`  
**Requires authorization.**  
Deletes the token used in the request.  

### /api/purge
`http://multiple-tokens-auth.test/api/purge?api_token=abc123`  
**Requires authorization.**  
Deletes all tokens created for a user.  


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
