<?php
  $userNum = rand(1,6);
  $compNum = rand(1,6);
  if (isset($_POST['submit'])){
  echo "<h1>You picked: $userNum</h1>";
  echo "<h1>Computer picked: $compNum</h1>";
  }
  if ($userNum == $compNum) {
    echo "TIE";
  }
  else {
    echo "YOU WIN!";
  }
?>
