<?php

include 'scripts.php';

print_r($_SESSION);

function getPresidencyVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM Presidency WHERE UserId = ?")){
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

function updatePresidencyVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `Presidency` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}

function getExtVPVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM ExternalVicePresidency WHERE UserId = ?")){
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

function updateExtVPVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `ExternalVicePresidency` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}

function getIntVPVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM InternalVicePresidency WHERE UserId = ?")){
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

function updateIntVPVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `InternalVicePresidency` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}

function getStructVPVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM StructVicePresidency WHERE UserId = ?")){
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

function updateStructVPVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `StructVicePresidency` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}


function getEditorVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM EditorInChief WHERE UserId = ?")){
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

function updateEditorVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `EditorInChief` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}

function getCommunicationsVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM DirectorOfCommunications WHERE UserId = ?")){
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

function updateCommunicationsVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `DirectorOfCommunications` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}

function getTreasurerVotes($Id){
  global $con;
  
  if ($stmt = mysqli_prepare($con, "SELECT Votes FROM Treasurer WHERE UserId = ?")){
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

function updateTreasurerVotes($Id, $presidentVotes){
		global $con;
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($con, "UPDATE `Treasurer` SET `Votes` = ? WHERE `UserId` = ? ")) {
			/* bind parameters for markers */
			if(!mysqli_stmt_bind_param($stmt, "ii", $presidentVotes, $Id)){
				echo "Binding parameters failed (" . $stmt.errno . ") " . $stmt->error . '<br>';	
			}
			/* execute query */
			if(!mysqli_stmt_execute($stmt)){
				echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . '<br>';	
			}
			/* closes statement and frees $stmt variable*/
			mysqli_stmt_close($stmt);
		}
		else{
			//TODO REDIRECT TO HOMEPAGE SHOWING ERROR
			$error = "Unable to prepare the Mysqli statement";
		}
	}


$presidentVotes = getPresidencyVotes($_SESSION['presidency']);
$presidentVotes++;

updatePresidencyVotes($_SESSION['presidency'], $presidentVotes);
echo '<br>President votes updated!<br>';

$extVicePresidentVotes = getExtVPVotes($_SESSION['ext-vp']);
$extVicePresidentVotes++;

updateExtVPVotes($_SESSION['ext-vp'], $extVicePresidentVotes);
echo '<br>External Vice-President votes updated!<br>';

$intVicePresidentVotes = getIntVPVotes($_SESSION['int-vp']);
$intVicePresidentVotes++;

updateIntVPVotes($_SESSION['int-vp'], $intVicePresidentVotes);
echo '<br>Internal Vice-President votes updated!<br>';

$structVicePresidentVotes = getStructVPVotes($_SESSION['struct']);
$structVicePresidentVotes++;

updateStructVPVotes($_SESSION['struct'], $structVicePresidentVotes);
echo '<br>Internal Vice-President votes updated!<br>';

$editorVotes = getEditorVotes($_SESSION['editor']);
$editorVotes++;

updateEditorVotes($_SESSION['editor'], $editorVotes);
echo '<br>Editor votes updated!<br>';

$communicationsVotes = getCommunicationsVotes($_SESSION['communications']);
$communicationsVotes++;

updateCommunicationsVotes($_SESSION['communications'], $communicationsVotes);
echo '<br>Communications votes updated!<br>';

$treasurerVotes = getTreasurerVotes($_SESSION['treasurer']);
$treasurerVotes++;

updateTreasurerVotes($_SESSION['treasurer'], $treasurerVotes);
echo '<br>Treasurer votes updated!<br>';

$UserId = $_SESSION['User'];
$query = "UPDATE `User` SET `HasVoted` = '0' WHERE `User`.`UserId` = '$UserId'"; 
mysqli_query($con, $query);

session_unset();
header("Location:../success.php");
exit;

?>
