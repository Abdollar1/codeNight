 

<!doctype html>
<html>
<head><title> new crud</title>
    <link rel="stylesheet" href="main.css">
    
    </head>

<body>
    
   <fieldset id="fd">
<form id="main" method="post" action="">
       <legend>please fill the forms</legend>
    <hr>
     
    <div>
    <input type="number" name="number" value="MobileNo" placeholder="please enter a number" required >
    
    <br/>
    <input type="text" name="message" value="message" placeholder="message">
        <br/>
        <input type="button" name="same" value="url">
    
    </div>
  
</form>
    </fieldset>
      <?php 
    
    
if(isset($_POST['MobileNo']) ) {

//Getting data from form variable and sending as text messages to respective mobile no.

		$message = urlencode("Dear ".$_POST['Surname'].". You are required to use both\nSerial No: ".$FormA." and \nPIN: ".$LoginCode." to complete the online undergraduate registration @ http://goo.gl/bcc4Hy. Thank you."); // Message

		$destination = $_POST['MobileNo'];  // Receipient

		//$type = "0"; // Message type 0 is refered as normal message

		$source = "My SMSGh"; // Sender

$url = "https://api.infobip.com/api/v3/sendsms/plain?user=Elben&password=UMaT@CE2&sender=$source&SMSText=$message&GSM=$destination&type=longSMS";

					$ch = curl_init($url);

					$Responds = curl_exec($ch);

					echo $Responds; 


}
    
    
    ?>
     
    
    </body>

</html>