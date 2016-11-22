<?php 

require 'database/QueryBuilder.php';
require 'database/Connection.php';


$query = new QueryBuilder(Connection::make());
