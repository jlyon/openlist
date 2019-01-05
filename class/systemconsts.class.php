<?php
class SystemConsts {
	const DB=getenv('MYSQL_DB'),//'test',
	HOST=getenv('MYSQL_HOST'),//'localhost',
    DSN=getenv('CLEARDB_DATABASE_URL'),//'mysql:dbname=test;host=localhost',
    USERNAME=getenv('MYSQL_USERNAME'),//'root',
	PASSWORD=getenv('MYSQL_PASSWORD'),//'root';
}
?>