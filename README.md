# CodeSkate

CodeSkate is a framework written in PHP OOP under a minimalist concept. CodeSkate is not based on the MVC model, here the classes must have their respective themes and the connection with the database must be instantiated within the constructor of each class.

## Installation
```
git clone https://github.com/stndc/codeskate.git
cd codeskate
```

## Get Started
Inside the **librarie** you can find the configuration files. To start you must define the path where your project is hosted.

function.php
```
<?php

CONST BASE_URL = 'http://localhost/codeskate'; // Define the path
```


## Bootstrap
CodeSkate incorporates by default Bootstrap 5; https://getbootstrap.com/