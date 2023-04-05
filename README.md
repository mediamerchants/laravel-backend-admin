# Laravel Admin Demo With REST API

This is a demo for laravel project which serves as backend admin admin with REST API.

## Setup

- Create a **.env** file in root folder following the .env.sample

### MacOS

#### Docker and Docker Compose

If you are Using **docker** and **docker-compose** please follow the steps.

- Create a folder *dbdata* in root directory
- Use the command line / terminal to run `source docker/.env`. This will include the MySQL env info in the terminal. This command needs to be run everytime when terminal is started. Alternatively it can be included in batch to be include by default. Please modify the **docker/.env** if required to suit your local env.
- Then run command `docker-compose up`.

*Note:* The nginx config are configured to run at port 8088. This can be changed in **docker-compose.yml** and **.env**

#### Valet+

When using valet plus, the configurations should set in **.env** in root folder. Database can be setup manually.

*Note* **docker-compose.yml** and **docker/.env** can be completely ignored.
