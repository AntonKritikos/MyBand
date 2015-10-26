<?php
function writeHello()
{
  echo "Hello<br>";
}
function writeMsg($msg)
{
  echo $msg . "<br>";
}
function writeMsgTo($name,$msg = "Default Message.")
{
  echo "Message to " . $name . " : " . $msg . "<br>";
}
function addValue($num1,$num2)
{
  return ($num1 + $num2);
}
function calcRect($num1,$num2)
{
  return ($num1 * $num2);
}
function BMI($weight = 0.0,$height = 0.0)
{
  if ($height > 3)
  {
    //Hier check ik of je de waarde mischien als meters invult
    $height = $height / 100;
  }
  return ($weight / ($height * $height));

}
?>
