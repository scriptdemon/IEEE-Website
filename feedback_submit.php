<?php
include 'connection.php';


  if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['Class']) && isset($_POST['description']) ) {
  $user_name= $_POST['name'];
  $user_mail= $_POST['mail'];
  $user_phone=$_POST['phone'];
  $user_class = $_POST['Class'];
  $description = $_POST['description'];
  $check_if_exists = "SELECT * from users where user_mail='$user_mail'";

    $qry="INSERT INTO feedback (name,email,phone,class,description) VALUES('$user_name','$user_mail','$user_phone','$user_class','$description')";
    if(mysqli_query($con, $qry))
    {
        echo "success";
    }
    else 
    {
        echo "failure";
    }
}
else
{
    echo "fields missing";
}

?>