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

  if ($stmt = mysqli_prepare($con, "SELECT UserId FROM User WHERE Email=?")){
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

function getUniqueIdByUserId($UserId){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Code FROM User WHERE UserId = ?")){
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

function getHasVotedByUserId($UserId){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT HasVoted FROM User WHERE UserId = ?")){
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

function getPresidentById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM Presidency WHERE UserId = ?")){
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

function getInternalVPById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM InternalVicePresidency WHERE UserId = ?")){
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

function getExternalVPById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM ExternalVicePresidency WHERE UserId = ?")){
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

function getStructVPById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM StructVicePresidency WHERE UserId = ?")){
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
function getEditorInChiefById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM EditorInChief WHERE UserId = ?")){
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

function getDirectorOfCommunicationsById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM DirectorOfCommunications WHERE UserId = ?")){
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

function getTreasurerById($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM Treasurer WHERE UserId = ?")){
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
  
  if ($stmt = mysqli_prepare($con, "SELECT Name FROM User WHERE UserId = ?")){
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


?>
