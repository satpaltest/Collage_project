<?php
class updateuserprofile{
public function profileupdate($conn,$post){
 		   $id = $post['id'];
      $name= $post['username'];
      $mobile= $post['mobile'];
      $gender = $post['gender'];
  
  $query = "UPDATE guest_user SET name ='$name', mobile='$mobile', gender='$gender' WHERE id= '$id' ";
  $result=mysqli_query($conn,$query);
  
  return true;
 }