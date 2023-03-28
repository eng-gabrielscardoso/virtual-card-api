<div align="center">
  <img src="https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white" alt="NodeJS" />
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/Linux-E34F26?style=for-the-badge&logo=linux&logoColor=black" alt="Linux" />
  <img src="https://img.shields.io/badge/Git-E34F26?style=for-the-badge&logo=git&logoColor=white" alt="Git" />
</div>

# Virtual Card API

> A simple virtual business card to improve your network and reachability.

## Table of content

- [Virtual Card API](#virtual-card-api)
  - [Table of content](#table-of-content)
  - [Installation](#installation)
    - [Local](#local)
    - [Sail (Docker)](#sail-docker)
  - [Licence](#licence)
  - [Author](#author)

## Installation

### Local

1. Firstly you need to install the system required packages. If you are running on a Unix system, you could run the following command to install the required packages. If you are running on a Windows system or another you could search about the dependencies separated and install each one.

```bash
chmod +x install-system-requirements.sh && sudo ./install-system-requirements.sh
```

2. After install the system required packages, you must run the following command to install the Laravel required packages.

```bash
composer install
```

3. By now your application has the necessary dependencies, but still not operating. Copy the `.env.example` file as `.env` and run the following command to generate the app key.

```bash
php artisan key:generate
```

4. Run the following command to run the migrations using artisan:

```bash
php artisan migrate
```

5. Run the following command to generate some fake data for testing purposes

```bash
php artisan db:seed
```

6. Finally, run the following command to serve the API

```bash
php artisan serve
```

### Sail (Docker)

1. Copy the `.env.example` file as `.env`. You could run the API using Laravel Sail. For it, just setup the following alias into your local `.bashrc` file:

```bash
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

2. Now, run the following command to up the containers

```bash
sail up -d
```

3. By now your application has the necessary dependencies, but still not operating. Run the following command to generate the app key.

```bash
sail artisan key:generate
```

4. Run the following command to run the migrations using artisan:

```bash
sail artisan migrate
```

5. Run the following command to generate some fake data for testing purposes

```bash
sail artisan db:seed
```

And then, your API will be up and running.

## Licence

This project is licensed under the [MIT Licence](LICENSE.md). See more information about [here](https://opensource.org/license/mit/)

## Author

-   Gabriel Santos Cardoso - [eng.gabrielscardoso@gmail.com](mailto:eng.gabrielscardoso@gmail.com)

[🆙 Back to top](#virtual-card-api)
