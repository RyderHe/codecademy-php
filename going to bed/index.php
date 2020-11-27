<?php

class StringUtils
{
  public static function secondCase($string) {
    $string = strtolower($string);
    $string[1] = strtoupper($string[1]);
    return $string;
  }
 
}

class Pajamas
{
  private $owner, $fit, $color;

  function __construct(
    $owner = "unclaimed",
    $fit = "fine",
    $color = "white"
  ) {
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe() {
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }

  public function setFit($new_fit) {
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas
{
  private $button_state = "unbuttoned";
  public function describe() {
    return parent::describe() . " They also have buttons which are currently $this->button_state.";
  }

  public function toggleButtons() {
    if ($this->button_state === "unbuttoned") {
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";
    }
  }
}

echo StringUtils::secondCase("MCDONALD\n"); 
echo StringUtils::secondCase("baldwin\n"); 
echo StringUtils::secondCase("Q\n");
echo StringUtils::secondCase("Q\n"); #should print "q"
echo StringUtils::secondCase("\n"); #should print an empty string

$chicken_PJs = new Pajamas("CHICKEN", "just right", "purple");
echo $chicken_PJs->describe();
echo "\n";

$moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
echo "\n";
echo $moose_PJs->describe();
echo "\n";

$moose_PJs->toggleButtons();
echo "\n";
echo $moose_PJs->describe();
echo "\n";
?>