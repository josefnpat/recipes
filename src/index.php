<?php

$data = json_decode(file_get_contents("recipes.json"));

echo "<h1>".$data->name."</h1>\n";

foreach($data->recipes as $recipe){
  echo "<h2>".$recipe->name."</h2>\n";
  if(isset($recipe->img)){
    echo "<img src=\"".$recipe->img."\" />";
  }
  if($recipe->prep > 0){
    echo "<p>Prep:".$recipe->prep."</p>\n";
  }
  if($recipe->cook > 0){
    echo "<p>Cook:".$recipe->cook."</p>\n";
  }
  echo "<p>Ready In:".($recipe->cook+$recipe->prep)."</p>\n";
  echo "<p>Serves:".$recipe->serves."</p>\n";
  echo "<h3>Ingredients</h3>\n";
  echo "<ul>\n";
  foreach($recipe->ingredients as $ingredient){
    echo "<li>".$ingredient."</li>\n";
  }
  echo "</ul>\n";
  echo "<h3>Directions</h3>\n";
  echo "<ol>\n";
  foreach($recipe->directions as $direction){
    echo "<li>".$direction."</li>\n";
  }
  echo "</ol>\n";
}
