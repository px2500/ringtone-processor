<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="UTF-8"> 
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width" />
<TITLE>The List</TITLE>
</HEAD>
<BODY style="font-size: 16px;">
<pre>
Billy (Worked for Jeff, died in accident after leaving Pat's)
Wade Biswell (Jeff's accountant)
David? (Lived at Chimney Ridge)
Jeff Liding (formerly played football for Indianapolis Colts)
Julie Sondgeroth
Kyle Bethel (Kristen's brother)
Nancy Fishel
Carla Proffitt
Austin Neal
Amy Tucker
Greg Dillow
Donette Trisler
Nancy Forest (Lucy) (Acquaintence of my friend Jerry)
Kevin Flaherty
Chris Mcnally
David Dixon
Dale Parker
Barbara Coward
Maureen Collier
Eddie Kapiolani
Eddie Groom
Kristen Lieurance
Jerry Coward
Perry Sanders
Bill Johnson
Kevin Record
Steve Johnson
Paul Shelton
</pre>
<br>

<?php
echo "Page last modified: " . date ("F d Y H:i:s", filemtime(__FILE__)) . " CT\n";

$myIP = file_get_contents("/home/paul/data/ip.txt");

$hostIP = $_SERVER["REMOTE_ADDR"];

if ($hostIP != $myIP) {
$hostName = gethostbyaddr( $_SERVER["REMOTE_ADDR"] );	
$agent = $_SERVER["HTTP_USER_AGENT"];
$dateTime = date('Y-m-d H:i');
  file_put_contents("/var/www/data2/access-history-thelist.csv",$dateTime. "|" . $hostIP . "|" . $hostName . "|" . $agent . "\n", FILE_APPEND);
}
?>
</body>
</html>
