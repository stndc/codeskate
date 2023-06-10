<p align="center">
    <img width="100%" src="https://github.com/stndc/codeskate/blob/main/assets/img/codeskateGit.jpg">
</p>

[![GitHub Sponsors](https://img.shields.io/badge/GitHub-Sponsors-ff69b4)](https://github.com/sponsors/stndc)

# CodeSkate

CodeSkate is a framework written in PHP OOP under a minimalist concept. CodeSkate is not based on the MVC model, here the classes inherit the connection to the database and are complemented by a group of functions designed to optimize working time.

[![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/K3K3D9TH6)

## Get Started
```
git clone https://github.com/stndc/codeskate.git
cd codeskate
```


functions.php
```
<?php

require_once 'helpers/functions.php';
```

config.php

You can configure two connections. One local and the other with the IP of the server you want.

```
<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
    // Localhost
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "dbname");
} else{
    // DB Extern
    define("DB_HOST", "");
    define("DB_USER", "");
    define("DB_PASS", "");
    define("DB_NAME", "");
}
```

## License
<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
