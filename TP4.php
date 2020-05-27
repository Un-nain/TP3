<?php
//setlocale ( LC_TIME , "fr_FR.utf8");
//echo strftime ( '%a %d %B %G');
$d=new DateTime("1998-04-01");
$d1=new DateTime("2020-03-04");
echo '<br>';
$result= $d->diff(new DateTime());
echo $result->format("%y %m %d");
$result = $d->diff($d1);
echo '<br>';
echo $result->format("%y %m %d");
echo '<br>';
$d2=new DateTime("2020-02-09 08:34:35");
$d3=new DateInterval("P29DT12H44M3S");
for($i=0;$i<100;$i++)
    {$result=$d2->add($d3);}
echo $result->format("y m  d h i s");
//echo date('l j F Y');
