<?php

require 'scripts.php';

foreach($_POST['candidate'] as $id){
  echo "Adding a vote to $id<br>";
  incrementVotesBy($id);
}

userHasVotedBy($_SESSION['User']);

header('Location:../success.php');
