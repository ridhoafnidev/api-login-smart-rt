<?php
$connect = new mysqli("localhost","root","","db_rt");
if(@connect){
	//echo "Connection Sukses";

}else{
	echo "Connection Failed";
	exit();
}
