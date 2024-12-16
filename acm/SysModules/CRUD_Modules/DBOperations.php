<?php
//Count Data
function TOTAL($SQL, $die = null, $PrintSQL = false)
{
  $SQL = "$SQL";

  if ($die == true) {
    die($SQL);
  }

  //print sql
  if ($PrintSQL == true) {
    echo "<br><hr><code>$SQL</code><hr><br>";
  }

  $Query = mysqli_query(DBConnection, $SQL);
  $Count = mysqli_num_rows($Query);
  if ($Count == 0) {
    return 0;
  } else {
    return $Count;
  }
}
