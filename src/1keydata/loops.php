<?php
/**
 * Created by IntelliJ IDEA.
 * User: herb
 * Date: 17.02.18
 * Time: 13:43
 */

echo "loops<br />";

$counter = 8;
WHILE ($counter < 10) {
  print "counter is now " . $counter . "<br>";
  $counter++;
}

FOR ($i = 0; $i <= 2; $i++) {
  print "value is now " . $i . "<br>";
}

$i = 5;
DO {
  print "value is now " . $i . "<br>";
  $i--;
} WHILE ($i > 3);

$array1 = array(1, 2, 3, 4, 5);
FOREACH ($array1 as $abc) {
  print "new value is " . $abc * 10 . "<br>";
}