<p align="center">
    <img width="100%" src="https://github.com/stndc/codeskate/blob/main/assets/img/codeskateGit.jpg">
</p>

# CodeSkate

CodeSkate is a framework written in PHP OOP under a minimalist concept. CodeSkate is not based on the MVC model, here the classes must have their respective themes and the connection with the database must be instantiated within the constructor of each class.

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/K3K3D9TH6)

## Installation
```
git clone https://github.com/stndc/codeskate.git
cd codeskate
```

## Get Started
Inside the **librarie** you can find the configuration files. To start you must define the path where your project is hosted. You will also need to change the values of the constants to connect to your database.

function.php
```
<?php

CONST BASE_URL = 'http://localhost/codeskate'; // Define the path
```

config.php
```
<?php

CONST DB_HOST 	  = 'localhost';
CONST DB_USER 	  = 'root';
CONST DB_PASSWORD = '';
CONST DB_NAME 	  = '';
```

## Bootstrap
CodeSkate incorporates by default Bootstrap 5 - https://getbootstrap.com/