<?php

$offset = 0;
$flag=0;
include 'formforfindandreplace.php';
if ((isset($_GET['text']) && !empty($_GET['text'])) && (isset($_GET['find']) &&
    !empty($_GET['find'])) && (isset($_GET['replace']) && !empty($_GET['replace'])))
{
    while ($str = strpos($_GET['text'], $_GET['find'], $offset))
    {
        $flag = 1;
        $strreplaced = str_replace($_GET['find'], $_GET['replace'], $_GET['text']);
        $offset = $offset + strlen($_GET['find']);
    }
}
if (isset($_GET['submit']) && $flag==1)
{
    echo 'The new text is: <font size="10" color="blue">' . $strreplaced . '</font>';
}
else if(isset($_GET['submit']) && $flag==0)
{
    echo 'Word not found.';
}
?>