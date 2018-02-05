<?php
/**
 * Created by IntelliJ IDEA.
 * User: herb
 * Date: 04.02.18
 * Time: 18:09
 */

// phpinfo();

// echo "Hello World!";

learn_switch(10);
learn_switch(25);
learn_switch(20);

function learn_switch($sample) {
  switch ($sample) {
    case 30:
      print "Value is 30";
      break;
    case 25:
      print "Value is 25";
      break;
    case 20:
      print "Value is 20";
      break;
    default:
      print "Value $sample is outside the range";
  }
  print("\n");
}