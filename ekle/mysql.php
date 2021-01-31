<?


mysql_connect(MYSQL_ALAN,MYSQL_KULLANICI,MYSQL_DB_PAROLA);
mysql_select_db(MYSQL_DB_AD);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'"); 

?>