<?php 

  function __autoload($class) {
    require_once $class . '.php';
  }

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1> Spooky Halloween Madlib </h1>

  <div><img id="jackolantern" src="./images/pumpkin.jpg" alt="pumpkin" height=200 width=260/></div>
  </br>

  <section id="one">
    <?php 
      $firstStory = new ParentClass("Bob","Tree","ran","hairy","terrified","slushy");
      echo $firstStory;
    ?>
  </section>

  <?php $origStory = clone $firstStory; ?>

  </br>
  <h3> Bob woke up from his nightmare... and called up his friend Fred to go see a movie... </h3>
  </br>

  <section id="two">
    <?php 
      $secondStory = new ChildClass("Bob","Fred","tree","ran","hairy","terrified","melting");
      $secondStory->scaryChange();
      $secondStory->changeAction("scootered");
      echo $secondStory;
    ?>
  </section> 

  <br/>
  <h3> But Bob couldn't stop thinking about that original dream... </h3>
  <br/>

  <section id="orig">
    <?php echo $origStory; ?>
  </section>
	
</body>
</html>