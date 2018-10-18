<?php
/* indexed array */
$newContent = array("Jason", "48", "Green");
$newContent = array("Jacob", "17", "Magneto");
/* multidimensional indexed array */
$newContent = array(
    array("Jorge", "18", "Pink"),
    array("Jason", "16", "Blue"),
    array("Sterling", "16", "Purple")
    );
for($i=0; $i<3; $i++) {
   // echo $i."<br>";
//    echo "Hello, my name is ".$newContent[$i][0]."<br>";
  //  echo "I am ".$newContent[$i][1]." years old<br>";
//    echo "My favorite color is ".$newContent[$i][2]."<br>";
}
//echo "<select>";
    for($i=0; $i<3; $i++) {
  //      echo "<option>".$newContent[$i][0]."</option>";
    }
//echo "</select>";
//echo "<br><br>";
// associative arrays
$myContent = array(
    "name"=>"Jorge",
    "age"=>"18",
    "color"=>"Pink"
    );
//echo $myContent["name"]."<br><br>";
/* associative multidimensional array */
$myContent = array(
    "Jorge"=>array(
        "age"=>"18",
        "color"=>"Pink"
        ),
    "Jason"=>array(
        "age"=>"16",
        "color"=>"Blue"
        ),
    "Sterling"=>array(
        "age"=>"16",
        "color"=>"Purple"
        )    
    );
//echo $myContent["Sterling"]["age"]."<br><br>";
/* indexed multidimensional associative array */
$myContent = array(
    array(
        "name"=>"Jorge",
        "age"=>"18",
        "color"=>"Pink"
        ),
    array(
        "name"=>"Jason",
        "age"=>"16",
        "color"=>"Blue"
        ),
    array(
        "name"=>"Sterling",
        "age"=>"16",
        "color"=>"Purple"
        )    
    );
//echo $myContent[1]["age"]."<br>";
$myNav = array(
    array(
        "title"=>"Home",
        "page"=>"index.php"
        ),
    array(
        "title"=>"Contact",
        "page"=>"contact.php"
        ),
    array(
        "title"=>"About",
        "page"=>"about.php"
        ),
    array(
        "title"=>"bob",
        "page"=>"bob.php"
        )
    );
    
        $myNavCount = count($myNav);
        
// homework: create a navigation from the $myNav array using a for loop
// result should look like the nav.php file

echo "<ul class='nav'>";
for($i=0;$i<count($myNavCount);$i++){
    echo"<li class='nav-item'><a class='nav-link' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
    }
echo "</ul>"




?>