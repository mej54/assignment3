<?php
	// This is the file for the parent class

	class ParentClass {
    private $name1;
    private $object1;
    private $action1;
    private $adjective1;
    private $emotion;
    private $adjective2;

    public function __construct($name1, $object1, $action1, $adjective1, $emotion, $adjective2) {
      $this->n = $name1;
      $this->o1 = $object1;
      $this->a = $action1;
      $this->ad1 = $adjective1;
      $this->emo = $emotion;
      $this->adj2 = $adjective2;
    }

    public function __toString() {
      $movie = $this->n . " went to the drive-in to see Night of the Living " . $this->o1 . "s.";
      $about = "It was about a bunch of " . $this->o1 . "s that awoke from their graves every Halloween to terrorize the people.";
      $event = "During the movie, " . $this->n . " looked out the car window and saw two " . $this->ad1 . " " . $this->o1 . "s staring back!";
      $result = $this->n . " was " . $this->emo . " and " . $this->a . " as fast as possible from the " . $this->o1 . "s, which were now " . $this->adj2 . ".";
    
      return $movie . "</br>" . $about . "</br>" .  $event . "</br>" . $result;
    }
	}
