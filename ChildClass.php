<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		
    private $n2;

    public function __construct($name1, $name2, $object1, $action1, $adjective1, $emotion, $adjective2) {
      parent::__construct($name1, $object1, $action1, $adjective1, $emotion, $adjective2);
      $this->n2 = $name2;
    }

    public function scaryChange() {
      $this->o1 = "Zombie";
    }

    public function __toString() {
      $oldStory = parent::__toString();
      $rescue = "</br> Thankfully, " . $this->n2 . " came to the rescue.";
      $end = "</br> But " . $this->n . " never went to the drive-in ever again.";

      return $oldStory . $rescue . $end;
    }
	}
