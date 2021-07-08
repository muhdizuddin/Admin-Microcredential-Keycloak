
This project is for the integration of Moodle,Laravel and Keycloak using REST API. Please make sure to generate your access token in your moodle and add below in your environment:
## Laravel Keycloak intergration with Moodle web service api

1. Need to run Keycloak
2. Need to run Xampp
3. Need to run Laravel(php artisan serve)

4. Need to configure 
.env
MOODLE_URL=http://localhost/moodle 
MOODLE_TOKEN=moodle_mobile_app(token required from moodle api)
MOODLE_TOKEN2=core_course_create_courses(token required from moodle api)

KEYCLOAK_BASE_URL=http://localhost:8180/auth(your keycloak url)
KEYCLOAK_REALM=master(your realms default= master)
KEYCLOAK_REALM_PUBLIC_KEY= your own public key
KEYCLOAK_CLIENT_ID= your client id name
KEYCLOAK_CLIENT_SECRET= client secret key
KEYCLOAK_CACHE_OPENID= cache openid default = false

4. Need to configure at keycloak-web.php
<?php

return [
    /**
     * Keycloak Url
     *
     * Generally https://your-server.com/auth
     */
    'base_url' => env('KEYCLOAK_BASE_URL', ''),

    /**
     * Keycloak Realm
     *
     * Default is master
     */
    'realm' => env('KEYCLOAK_REALM', 'master'),// your realms default = master

    /**
     * The Keycloak Server realm public key (string).
     *
     * @see Keycloak >> Realm Settings >> Keys >> RS256 >> Public Key
     */
    'realm_public_key' => env('KEYCLOAK_REALM_PUBLIC_KEY', null),

    /**
     * Keycloak Client ID
     *
     * @see Keycloak >> Clients >> Installation
     */
    'client_id' => env('KEYCLOAK_CLIENT_ID', null),

    /**
     * Keycloak Client Secret
     *
     * @see Keycloak >> Clients >> Installation
     */
    'client_secret' => env('KEYCLOAK_CLIENT_SECRET', null),

    /**
     * We can cache the OpenId Configuration
     * The result from /realms/{realm-name}/.well-known/openid-configuration
     *
     * @link https://www.keycloak.org/docs/3.2/securing_apps/topics/oidc/oidc-generic.html
     */
    'cache_openid' => env('KEYCLOAK_CACHE_OPENID', false),

    /**
     * Page to redirect after callback if there's no "intent"
     *
     * @see Vizir\KeycloakWebGuard\Controllers\AuthController::callback()
     */
    'redirect_url' => '/home',

    /**
     * The routes for authenticate
     *
     * Accept a string as the first parameter of route() or false to disable the route.
     *
     * The routes will receive the name "keycloak.{route}" and login/callback are required.
     * So, if you make it false, you shoul register a named 'keycloak.login' route and extend
     * the Vizir\KeycloakWebGuard\Controllers\AuthController controller.
     */
    'routes' => [
        'login' => 'login',
        'logout' => 'logout',
        'register' => 'register',
        'callback' => 'callback',
    ],

    /**
    * GuzzleHttp Client options
    *
    * @link http://docs.guzzlephp.org/en/stable/request-options.html
    */
   'guzzle_options' => [],
];


