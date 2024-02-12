<?php

require ('../../functionality/db_conn.php');
include '../../functionality/actions/delete_fun.php';
include '../../functionality/actions/validation_fun.php';
include '../../functionality/actions/one_select_fun.php';

$title = "";
$content = "";
$publish = "";
$id = "";

$btn_update = false;


if(isset($_POST['add_post'])){
   session_start();

   $title = $_POST['title'];
   $user_id = $_SESSION['userId'];
   $content = $_POST['content'];
   $publish = $_POST['publish'];

   $img_post = $_FILES['img_post'];
   $img_name = $_FILES['img_post']['name'];
   $img_tmp_name = $_FILES['img_post']['tmp_name'];
   $img_size = $_FILES['img_post']['size'];
   $img_type = $_FILES['img_post']['type'];

   $img_ext = explode('.' , $img_name);
   $img_act_ext = strtolower(end($img_ext));

   $allowed =  array('jpg', 'png', 'jpeg' );
  


if(   empty_validation($title) || 
      empty_validation($user_id) || 
      empty_validation($content)   ||
      empty_validation($publish) ){

      header("location: blog_manager_page.php?err=empty");
      exit();
   }else if ($_FILES['img_post']['error'] != 0){
      header("location: blog_manager_page.php?err=no_img");
       exit();
  }else if ($img_size > 8000000 ){
      header("location: blog_manager_page.php?err=img_big");
      exit();
  }else if ($img_size < 100 ){
      header("location: blog_manager_page.php?err=img_small");
      exit();
  }else if(!in_array($img_act_ext, $allowed)){
      header("location: blog_manager_page.php?err=img_format_invalid");
      exit();
  }else{
      $content_html = htmlspecialchars(ConvertPlainTextToHTML($content));

      $insert = "INSERT INTO post(user_id,title,content_html,content_txt,publish,image_file,image_name,image_type) 
      VALUES ('$user_id','$title','$content_html','$content','$publish','$img_tmp_name','$img_name','$img_act_ext')";  

      $result = $conn->query($insert);
   if ($result) {
      //$img_new_name = $img_name."_".uniqid('',true).".".$img_act_ext;
      move_uploaded_file($_FILES['img_post']['tmp_name'],"../../blog/assets/".basename($img_name));

      header('location: blog_manager_page.php?err=post_success');

      mysqli_close($conn);   

      } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
        mysqli_close($conn); 
      }
   }
     
 }


if(isset($_POST['update_post'])){
   session_start();
   $id = $_POST['id'];
   $title = $_POST['title'];
   $user_id = $_SESSION['userId'];
   $content = $_POST['content'];
   $publish = $_POST['publish'];
   $update_date = date('Y-m-d H:i:s');

   $img_post = $_FILES['img_post'];
   $img_name = $_FILES['img_post']['name'];
   $img_tmp_name = $_FILES['img_post']['tmp_name'];
   $img_size = $_FILES['img_post']['size'];
   $img_type = $_FILES['img_post']['type'];
  
   $target_file= $_FILES["fileToUpload"]["name"];

   $img_ext = explode('.' , $img_name);
   $img_act_ext = strtolower(end($img_ext));

   $allowed =  array('jpg', 'png', 'jpeg' );
  


if(   empty_validation($title) || 
      empty_validation($user_id) || 
      empty_validation($content)   ||
      empty_validation($publish) ){

      header("location: blog_manager_page.php?err=empty");
      exit();
   }else if ($_FILES['img_post']['error'] > 0){
      header("location: blog_manager_page.php?err=no_img");
       exit();
  }else if ($img_size > 5000000){
      header("location: blog_manager_page.php?err=img_big");
      exit();
  }else if(!in_array($img_act_ext, $allowed)){
      header("location: blog_manager_page.php?err=img_format_invalid");
      exit();
  }else{
   $content_html = htmlspecialchars(ConvertPlainTextToHTML($content));
   move_uploaded_file($_FILES['img_post']['tmp_name'],"../../blog/assets/".basename($img_name));
 
   $update = "UPDATE 
               post SET user_id='$user_id', 
               title='$title', 
               content_html ='$content_html',
               content_txt = '$content',
               publish = '$publish',
               updated_at = '$update_date',
               image_file = '$img_tmp_name',
               image_name = '$img_name',
               image_type = '$img_act_ext' WHERE id='$id'"; 
   
   if ($conn->query($update) === TRUE) {
      
      header('location: blog_manager_page.php');
               
      } else {
        echo "Error: " . $update . "<br>" . $conn->error;
        die(mysqli_error($conn));
      }
   } 
}






if(isset($_GET['update_post'])){
   $btn_update=true;

   $id = $_GET['update_post'];

   if(!empty($id)){
      
      $result = single_select('post',$id);
      
         if(count(array($result))>0){
            $row = $result->fetch_array();

            $id = $row['id'];
            $title = $row['title'];
            $content= $row['content_txt'];
            $publish = $row['publish'];
      }
   }
}


 if (isset($_GET['delete_post'])) {

   delete_data('post' , $_GET['delete_post']);
    
 }





function ConvertPlainTextToHTML($s)
{


   $LineFeed = strpos($s,"\r\n")!==false ? "\r\n" : ( strpos($s,"\n")!==false ? "\n" : "\r" );
   $s = trim($s);
   $s = strpos($s,"\n")===false ? str_replace("\r","\n",$s) : str_replace("\r",'',$s);
   $s = preg_replace('/\n\n+/','~~N-n~--</p>~~N-n~--<p>~~N-n~--',$s);
   $s = str_replace("\n","\n<br />",$s);
   $s = str_replace('~~N-n~--',"\n",$s);
   $s = "<p>\n$s\n</p>";
   # Image URLs into IMG tag.
   $matches = array();
   preg_match_all('!\b(https?://[a-zA-Z0-9\-\._\~\:/\'\+\=\%\(\)]+\.(png|jpg|jpeg|gif))!s',$s,$matches);
   foreach( $matches[1] as $match )
   {
      $encoded = quotemeta($match);
      $s = preg_replace( '!\b'.$encoded.'!s', '<img src="h__HH__h' . $match . '" style="max-width:100%;" />', $s );
   }
   # Non-image URLs into A tag.
   $matches = array();
   preg_match_all('!\b(https?://[a-zA-Z0-9\-\._\~\:/\?\#\[\]\@\!\$\&\'\(\)\*\+,;\=\%]+)!s',$s,$matches);
   foreach( $matches[1] as $match )
   {
      $encoded = quotemeta($match);
      $s = preg_replace( '!\b'.$encoded.'!s', '<a href="' . $match . '">' . $match . '</a>', $s );
   }
   # Image URLs from h__HH__hhttp:// to http:// and from h__HH__hhttps:// to https://
   $s = str_replace('h__HH__hhttp','http',$s);
   return str_replace("\n",$LineFeed,$s);
}
?>