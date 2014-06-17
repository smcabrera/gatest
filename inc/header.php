<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

<ul class="nav nav-pills">
  <li <?php
  if ($pageTitle == "Testing Google Analytics") {echo "class='active'";}?>>
    <a href="index.php">Start</a>
  </li>

  <li <?php if ($pageTitle == "Testing google analytics code") {echo "class='active'";} ?>>
    <a href="codetest.php">GA Code</a>
  </li>

  <li <?php if ($pageTitle == "Testing Google Analytics' Tag Manager") {echo "class='active'";}?>>
    <a href="tagtest.php">Tag Manager</a>
  </li>
</ul>

<div class='container'>
  <h3><?php echo $pageTitle; ?></h3>

