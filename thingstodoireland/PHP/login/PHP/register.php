<?php
include 'header.php';


?>

  
  <div class="container mt-5">
    <div class="row d-flex">
    <div class="col-lg">
     <form class="" method="POST" action="query_register.php">
        <div class="col-6">
          <?php
          if (isset($_GET['err'])){
            $error=$_GET['err'];
              if ($error == "empty"){
            echo ' <div class="alert alert-success" role="alert">
            Empty fields
          </div>';
            }elseif ($error="passcheck") {
            echo ' <div class="alert alert-danger" role="alert">
            No matching password.
          </div>';
            }
          }
         
          ?>
          <label class="form-label">User</label>
          <input autocomplete="off" type="text" name="user" class="form-control"  placeholder="user">
        </div>
        <div class="col-lg-6 col-sm-1">
          <label  class="form-label">Password</label>
          <input autocomplete="off" type="password" placeholder="password" name="pass" class="form-control" >
        </div>
        <div class="col-lg-6">
          <label class="form-label">Confirm Password</label>
          <input autocomplete="off" placeholder="confirm password" type="password" name="check_pass" class="form-control" >
        </div>

        <div class="m-3 form-check">
          <input autocomplete="off" value="1" class="form-check-input" type="checkbox" name="admin">
          
          <label class="form-check-label" >
          Admin privileges
          </label>
        </div>
     
        <div class="col m-3">
          <button type="submit" name="btn_register" class="btn btn-primary">Register</button>
        </div>

        
      </form>
    </div >

    <div class="col-lg">
      <?php
          if (isset($_GET['d_u'])){
            $error=$_GET['d_u'];
              if ($error == "success"){
            echo ' <div class="alert alert-success" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            User deleted successfully.
            
          </div>';
            }elseif ($error="failed") {
            echo ' <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            User not deleted.
            
          </div>';
            }
          }
         
          ?>
      <div class="show_data">
        <table class="table_date">
          <thead>
            <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>Admin Privileges</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          
            <?php
            include 'query_register.php';
            $user_select = mysqli_query($conn,"SELECT * FROM user") or die($mysqli->error);
              while ($row = $user_select->fetch_assoc()){
                echo "<tbody>";
                echo "<tr>";
                echo "<td> " . $row['user_id'] . "</td>";
                echo "<td> " . $row['user_name'] . "</td>";
                 if ($row['admin']==1) {
                   echo "<td> Yes</td>";  
                }else{
                   echo "<td> No </td>";
                }
               
                
                echo "<td class='p-1'>
                    <a href='register.php?delete_user=" . $row['user_id'] . " '>
                    <button class=' btn_delete' >DELETE </button>
                    </a>
                  </td>";
                echo "<td class='p-1'>
                    <a   href='register.php?update_user=" . $row['user_id'] . " '>
                    <button class=' btn_edit'>EDIT</button>
                    </a>
                  </td>";
                echo "</tr>";
                echo "</tbody>";
              }
                
          ?>
          
        </table> 
      </div>
    </div >

  </div>
  </div>
    


  
  


