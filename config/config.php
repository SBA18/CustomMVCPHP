<?php

Config::set('site_name','Your site name');

Config::set('language', array('en', 'fr'));

//Router. route name => method prefix
Config::set('routes', array(
            'default' => '',
            'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'custommvc');
Config::set('db.password', 'custommvc');
Config::set('db.db_name', 'custommvc');

Config::set('salt', 'jd7sj3sdkd964he7e');


