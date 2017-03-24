<?php

$config = require 'config.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/Router.php';

require 'core/Request.php';


new QueryBuilder(Connection::make($config['database']));

function view($path, $data = array()) {
    extract($data);

    return require "views/{$path}.view.php";
}
