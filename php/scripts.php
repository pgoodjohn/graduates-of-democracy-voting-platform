<?php

include 'config.php';

function findEmailInDatabase($email){
  //RETURNS TRUE IF EMAIL IS NOT FOUND IN THE DATABASE
  global $con;

  if ($stmt = mysqli_prepare($con, "SELECT Email FROM User WHERE Email=?")){
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $email);
    /* execute query */
    mysqli_stmt_execute($stmt);
    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $exists);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
  }
  if(empty($exists)){
    return True;
  }
  else{
    return False;
  }
}

function getUserIdByEmail($email){
  global $con;

  if ($stmt = mysqli_prepare($con, "SELECT Id FROM User WHERE Email=?")){
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $email);
    /* execute query */
    mysqli_stmt_execute($stmt);
    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
  }

  return $id;

}

function getUniqueIdByUserId($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Code FROM User WHERE Id = ?")){
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $Id);
    /* execute query */
    mysqli_stmt_execute($stmt);
    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
  }

  return $id;

}

function getHasVotedByUserId($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT HasVoted FROM User WHERE Id = ?")){
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $Id);
    /* execute query */
    mysqli_stmt_execute($stmt);
    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
  }

  return $id;

}

function getNameByUserId($UserId){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM User WHERE Id = ?")){
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $UserId);
    /* execute query */
    mysqli_stmt_execute($stmt);
    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
  }
  return $id;
}

function userHasVotedBy($id){
  global $con;
    /* create a prepared statement */
    if($stmt = mysqli_prepare($con, "UPDATE User SET HasVoted=1 WHERE id=?")){
      /* bind parameters for markers */
      if(!mysqli_stmt_bind_param($stmt, "i", $id)){
        $error = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
      }
      /* execute query */
      if(!mysqli_stmt_execute($stmt)){
        $error = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
      }
      /* closes statement and frees $stmt variable*/
      mysqli_stmt_close($stmt);
    }
    else{
      $error = "Preparing statement failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
    }
}

// Function to get the client IP address
function getClientIp() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function CheckLogin(){
  if(!empty($_SESSION['User'])){
    return True;
  }
  else{
     return False;
  }
}

function incrementVotesBy($id){
  global $con;
    /* create a prepared statement */
    if($stmt = mysqli_prepare($con, "UPDATE Candidates SET votes=votes+1 WHERE id=?")){
      /* bind parameters for markers */
      if(!mysqli_stmt_bind_param($stmt, "i", $id)){
        $error = "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
      }
      /* execute query */
      if(!mysqli_stmt_execute($stmt)){
        $error = "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
      }
      /* closes statement and frees $stmt variable*/
      mysqli_stmt_close($stmt);
    }
    else{
      $error = "Preparing statement failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';
    }
}

?>
