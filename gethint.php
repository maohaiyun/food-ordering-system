<?php
// Array with names
$a[] = "Admin's Account";
$a[] = "Admin_1";
$a[] = "Customer";
$a[] = "Customer1";
$a[] = "Customer2";

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
  //convert all the characters in the string stored in the variable $q to lowercase.
  $q = strtolower($q);
  //retrieve the length of a string stored in the variable $q.
  $len = strlen($q);
  foreach ($a as $name) {
    // checking if the beginning of $name matches a substring in $q.
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        //sets the value of $hint to a string that contains the first search suggestion
        $hint = " Suggestion: $name";
      } else {
        //appends a new search suggestion to the end of the existing string by concatenating ", $name" to the end of the $hint variable.
        $hint .= ", $name";
      }
    }
  }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>