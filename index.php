<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>test2</title>
    </head>
    <body>
        <?php
        
        require_once "/Snoopy/Snoopy.class.php";
        $snoopy = new Snoopy;
        $snoopy->referrer = "https://s05.myfbo.com/link.asp";
        
        $URI = "https://s05.myfbo.com/b/login_check.asp";
        
    
 
# Login via api.php
$login_vars['timepass'] = "4/7/2014 10:53:02 AM";
$login_vars['slevel'] = "";
$login_vars['staff_sec'] = "";
$login_vars['email'] = "meckstss@gmail.com";
$login_vars['password']="k031zp3n1z2";
$login_vars['gogo'] = "Log In";
$login_vars['device']="";
$login_vars['noimage']="true";
$login_vars['XPDI']=96;

## First part
$snoopy->submit($URI,$login_vars);
print date("D M d, Y G:i a")."</br>"; 
print "Here is the response from: ".$URI."<br><pre>".$snoopy->results."</pre>";
/*$login_vars['lgtoken'] = $response[login][token];
$snoopy->cookies["wiki_session"] = $response[login][sessionid]; // You may have to change 'wiki_session' to something else on your Wiki
## Second part, now that we have the token
$snoopy->submit($api_url,$login_vars);

print($snoopy->results);

*/
        ?>
    </body>
</html>
