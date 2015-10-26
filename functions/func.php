<?php

include 'functions.php';
//See http://bovi.hosts.ma-cloud.nl/md2_bap/p2_w1_functions/
writeHello();

writeMsg('hello');
writeMsg('byebye');

writeMsgTo('Ingrid','Functions are cool!');
writeMsgTo('Ingrid');

$outcome = addValue(5, 7);
echo 'The outcome of 5 + 7 = '. $outcome .'<br>';

$outcome = calcRect(5, 7);
echo 'The area of a rectangle of 5 and 7 = '. $outcome .'<br/>';

echo "<br>Exercise 2 (BMI)";
echo "<form method='post'><table>
      <input type='text' placeholder='Height' name='Height'><br>
      <input type='text' placeholder='Weight' name='Weight'><br>
      <input type='submit' name='submit'>
      </table></form>";
if (isset($_POST["submit"]))
{
$BMI = BMI($_POST['Weight'],$_POST['Height']);
echo $BMI;
}
