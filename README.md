# Laravel Admin Demo With REST API

This is a demo for laravel project which serves as backend admin admin with REST API.

## Setup

- Create a **.env** file in root folder following the .env.sample

### MacOS

#### Docker and Docker Compose

If you are Using **docker** and **docker-compose** please follow the steps.

- Use the command line / terminal to run `source docker/.env`. This will include the MySQL env info in the terminal. This command needs to be run everytime when terminal is started. Please modify the **docker/.env** if required to suit your local env.
- Then run command `docker-compose up`.
- From the docker mac app open the laravel container's terminal and run command `composer install`.

![alt text](https://github.com/mediamerchants/laravel-backend-admin/blob/main/public/app/images/screenshot-composer-install.jpg)

*Note:* The nginx config are configured to run at port 8088. This can be changed in **docker-compose.yml** and **.env**

#### Valet+

When using valet plus, the configurations should set in **.env** in root folder. Database can be setup manually.

- Run command `valet link`. Make sure in the `.env` file to rename config *APP_URL* to the valet plus asigned URL.
- Run command `composer install`

*Note* **docker-compose.yml** and **docker/.env** can be completely ignored.

#### Windows

If you are Using **docker** and **docker-compose** please follow the steps.

- Use the command line / terminal to run `"docker/.env.bat"`. This will include the MySQL env info in the terminal. This command might need to be run everytime when terminal is started. Please modify the **docker/.env.bat** if required to suit your local env.
- Then run command `docker-compose up`.
- From the docker desktop open the laravel container's terminal and run command `composer install`.

![alt text](https://github.com/mediamerchants/laravel-backend-admin/blob/main/public/app/images/screenshot-composer-install.jpg)


*Note:* The nginx config are configured to run at port 8088. This can be changed in **docker-compose.yml** and **.env**