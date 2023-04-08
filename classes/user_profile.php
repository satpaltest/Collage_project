<?php
class updateuserprofile{
public function profileupdate($conn,$post){
 		   $id = $post['id'];
      $name= $post['username'];
      $phone= $post['mobile'];
      $gender = $post['gender'];
  
  $query = "UPDATE hotel_user SET name ='$name', phone='$phone', gender='$gender' WHERE id= '$id' ";
  $result=mysqli_query($conn,$query);
  return true;
 }
}