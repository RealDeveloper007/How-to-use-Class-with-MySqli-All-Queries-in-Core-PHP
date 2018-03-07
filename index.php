<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
require("Test.php");

$db_handle=new DBcontroller();


/*

$query=$db_handle->runWQuery("select * from tb_advertisements");

$ID = 1; $ADVName = 'Test'; $ADV = 'Testing'; $Created = date('Y-m-d h:i:s');

$Update = $db_handle->Update("update tb_advertisements SET advertise_name='$ADV' where sr_no='$ID'");

$Insert = $db_handle->Insert("insert into tb_advertisements (advertise_name,advertise,created) values('$ADVName','$ADV','$Created')");

$query=$db_handle->runFQuery("select * from table_name inner join table_name2 on  table_name.coulmn = table_name2.id where table_name.id=23");

$querr=$db_handle->runFQuery("select distinct id from table_name");

$quer=$db_handle->runFQuery("select count(distinct id) from table_name");

$que=$db_handle->runFQuery("select count(id) from table_name");

$query=$db_handle->runFQuery("select * from table_name order by id DESC");

$query=$db_handle->runFQuery("select * from table_name limit 3,1");

$query=$db_handle->runFQuery("select MIN(id) as ID from table_name");

$query=$db_handle->runFQuery("select MAX(id) -2 as ID from table_name");

$query=$db_handle->runFQuery("select AVG(coulmn)  from table_name where id='37'");

$query=$db_handle->runFQuery("select SUM(coulmn) as TOTALPayment from table_name group by id");

$query=$db_handle->runFQuery("select coulmn from table_name where coulmn LIKE 'l%'");

$query=$db_handle->runFQuery("select coulmn from table_name where coulmn LIKE '%l'");

$query=$db_handle->runFQuery("select coulmn from table_name where lendar NOT LIKE 'l%'");


*/


//print_r($query);
?>
