<?php
include '../../functionality/actions/delete_fun.php';
require ('../../functionality/db_conn.php');



 if (isset($_GET['delete_email'])) {

   delete_data('newsletter' , $_GET['delete_email']);
       
 }




?>