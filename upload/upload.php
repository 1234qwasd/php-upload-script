<?php

if ($_FILES["dosya"]) {

  echo "<pre>";

  print_r($_FILES);

  echo "</pre>";

} else {

  echo "File not selected";

}


if ($_FILES["dosya"]) {

  echo "File Uploaded";

} else {

  echo "File not selected";

}


if ($_FILES["dosya"]) {

  $sonuc = move_uploaded_file($_FILES["dosya"]["tmp_name"], $_FILES["dosya"]["name"]);

  echo $sonuc ? "File Uploaded" : "Error";

} else {

  echo "File not selected";

}
if ($_FILES["dosya"]) {

  echo "<pre>";

  print_r($_FILES);

  echo "</pre>";

} else {

  echo "File not selected";

}
?>
