<?php
$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Los_Angeles'));
print date("D M d, Y G:i a")."</br>"; 
print "<br />".$date->format("n/j/Y g:i:s A");
$POSTVARS['timepass'] = $date->format("n/j/Y g:i:s A");

$POSTVARS['slevel'] = "";
$POSTVARS['staff_sec'] = "";
$POSTVARS['email'] = "meckstss@gmail.com";
$POSTVARS['password']="k031zp3n1z2";
$POSTVARS['gogo'] = "Log In";
$POSTVARS['device']="";
$POSTVARS['noimage']="true";
$POSTVARS['XPDI']=96;


$ch = curl_init();
//curl_setopt($ch,CURLOPT_URL,"https://s05.myfbo.com/b/login_check.asp");
curl_setopt($ch,CURLOPT_URL,"https://s05.myfbo.com/lost.asp?page=b-login_check-t");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_POSTFIELDS,$POSTVARS);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

//save any cookies
$cookie_file = dirname(__FILE__)."/cookie.txt";
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);


$output = curl_exec($ch);   
if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    echo 'Operation completed without any errors';
    echo $output;
}


curl_close($ch);

echo "<br />Cookie file contents:<br />";
echo "<pre>".file_get_contents(dirname(__FILE__)."/cookie.txt")."</pre>"; 

?>
