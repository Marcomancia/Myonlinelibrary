<html>
<head>
  <title>My Online Collection;</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
  <div class="header">
    <div class="wrapper">
      <h1 class="branding-title"><a href="./">My Online Collection</a></h1>
<ul class="nav">
  <li class="books<?php if ($section == "books") { echo " on";}?>">
    <a href="catalog.php?cat=books">Books</a></li>
  <li class="Movies<?php if ($section == "Movies") { echo " on";}?>">
  <a href="catalog.php?cat=movies">Movies</a></li>
  <li class="Music<?php if ($section == "Music") { echo  " on";}?>">
  <a href="catalog.php?cat=music">Music</a></li>
  <li class="Suggest<?php if ($section == "Suggest") { echo " on";}?>">
  <a href="suggest.php">Suggest</a></li>
</ul>
</div>
</div>
<div id="content">
