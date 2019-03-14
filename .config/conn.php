
<?php
//connection db Mysql


$host = '10.10.10.2';
$port = '5432';
$user = 'itarget';
$pass = '1t4rg3t';
$db = 'dbtest';

$conn = pg_connect(`host=10.10.10.2 port=5432 dbname=dbtest user=itarget password=1t4rg3t`);

if($conn){
	echo 'conectado com sucesso';
}else{
	echo 'algum erro de conexão -> ';
}


?>