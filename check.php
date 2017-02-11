<?php



if(isset($_POST['btn']))
{
$today=trim($_POST['msg']);
//    $fh = fopen(“yo.txt”,"w") or die("cant open");


// fwrite($fh,$today);
// fclose($fh);



$file = 'Data.txt';

file_put_contents($file,$today, FILE_APPEND);







}
if(isset($_POST['shw'])){
include "yotxt.php";
}
?>

 






<html>
    <body>
        <form method="post">
        <input type="text" name="msg">
        <button type="submit" name="btn">input</button>
            <button type="submit" name="shw">output</button>
            </form>
        </body>
        </html>
