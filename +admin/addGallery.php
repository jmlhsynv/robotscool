<?php 
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}
          if(isset($_POST['submit'])){
            $countfiles = count($_FILES['files']['name']);
            $query = "INSERT INTO images (name,image) VALUES(?,?)";
            $statement  = $pdo->prepare($query);

            for($i=0;$i<$countfiles;$i++){
                $filename = $_FILES['files']['name'][$i];
                    $ext = explode(".", $filename);
                    $ext = end($ext);
                    $valid_ext = array("png","jpeg","jpg");

                    if(in_array($ext, $valid_ext)){
                      if(move_uploaded_file($_FILES['files']['tmp_name'][$i],'../upload/'.$filename)){
                        $statement->execute(array($filename,'upload/'.$filename));
                    }
                  }
            }
            header('Location: gallery.php');
          }
          ?>