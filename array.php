<?php
$r=rand(0,3);
$s=rand(1,3);
//$i=rand(1,2);
$my1="SWAGAT NAHI";
$my2="  KAROGE HAMARA";
$col['1']="red";
$col['2']="blue";
$col['3']="orange";
$col['0']="yellow";
//$img['1']="k.jpg";
//$img['2']="j.jpg";
echo "<html>";
echo "<body>";
echo "<h1>";
echo"<center>";
echo "<font color=$col[$r]>$my1</font>";
echo "<font color=$col[$s]>$my2</font>";
echo "</h1>";echo"</center>";
echo "</body>";
echo "</html>";
echo "<br>";
print_r(getrusage());
echo "<br>";
echo "<br>";
echo"<center>";
   echo  "ru_oublock: block output operations"."<br>";
    echo "ru_inblock: block input operations"."<br>";
    echo "ru_msgsnd: messages sent"."<br>";
    echo "ru_msgrcv: messages received"."<br>";
    echo "ru_maxrss: maximum resident set size"."<br>";
 echo    "ru_ixrss: integral shared memory size"."<br>";
   echo  "ru_idrss: integral unshared data size"."<br>";
    echo "ru_minflt: page reclaims"."<br>";
    echo "ru_majflt: page faults"."<br>";
    echo "ru_nsignals: signals received"."<br>";
    echo "ru_nvcsw: voluntary context switches"."<br>";
    echo "ru_nivcsw: involuntary context switches"."<br>";
    echo "ru_nswap: swaps"."<br>";
    echo "ru_utime.tv_usec: user time used (microseconds)"."<br>";
   echo  "ru_utime.tv_sec: user time used (seconds)"."<br>";
    echo "ru_stime.tv_usec: system time used (microseconds)"."<br>";
    echo "ru_stime.tv_sec: system time used (seconds)"."<br>";
    
    
    
    
    if(isset($_GET['ab'])){
        
     header("Location: http://www.google.com");
        
    }
    
     if(isset($_GET['bc'])){
        
     echo"<input type=password>";
        //exit();
    }
    
    
    
    

header("Refresh:1");
//echo "<br>";
echo uniqid('AUR');
?>
<html>
    <body>
       <a href ="?bc"> </a>
        <a href="?ab"><br>BHAG BC</a></body></html>