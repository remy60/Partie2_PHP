<?php
$age = 40;
$genre = "homme";
if($age == 40 && $genre == "homme"){
  echo "Vous etes un homme et vous etes majeur";
}
elseif($genre =="homme" && $age < 18){
  echo "Vous etes un homme et vous etes mineur";
}
elseif ($genre =="femme" && $age == 40) {
  echo "Vous etes une femme et vous etes majeur";
}
else{
  echo "Vous etes une femme et vous etes mineur";
}
 ?>
