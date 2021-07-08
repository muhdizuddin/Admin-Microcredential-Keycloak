
This project is for the integration of Moodle,Laravel and Keycloak using REST API. Please make sure to generate your access token in your moodle and add below in your environment:
## Laravel,Keycloak intergration with Moodle web service api

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



