<?php

require("/home/travis/build/roottusk/slangdetect/lib/init.php");

$strTEST=' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';

CheckAll();

function CheckAll()
{
global $strTEST;


ContainsBadWord($strTEST);
//IsBadWord($strTEST);
//StripBadWords($strTEST);
//StripOneWord($strTEST,"ABCD");
exit(0);


}

?>
