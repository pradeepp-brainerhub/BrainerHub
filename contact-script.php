<?php 		


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['comment'];
			
			$EmailBody = <<<EOD
<html>
<body style="margin:0px; text-align:center; font-family:'Open Sans'; font-weight:normal;">
    <div style=" font-family:'Open Sans';width:650px; height:630px; margin:0px auto;/* border:1px solid #acacac;*/" style>
    	<div style="  font-family:'Open Sans';width:100%; float:left; height:82px; background:#fff; text-align:left;">
        	<a href=""><img src="" alt="dreamcraft" name="dramcraft" width="152" height="38" style="margin:22px 0px 22px 33px; width:190px; height:70px;  font-family:'Open Sans'; cursor:pointer" id="dreamcraft Logo" title="dreamcraft Logo" border="0" /></a>
        </div>
        <div style="width:100%; background:#cc0000; float:left; text-align:center; color:#fff;  font-family:'Open Sans'; ">
        	<p style="margin:36px 0px 36px 0px; font-family:'Open Sans'; font-size:20px; color:#fff; font-weight:bold;">Are you Interested</p>
        </div>
        <div style=" float:left; width:100%; margin:0px; background:#fff; text-align:left;  font-family:'Open Sans';">
        	<p style="font-family:'Open Sans'; font-weight:lighter; font-size:45px; margin:30px 0px 0px 33px; color:#cc0000;">Thank you </p>
            <p style=" font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Dear <strong style='text-transform:capitalize;'>$name,</strong> </p>
            <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Thank you for contacting Dreamcraft. <a href="" target="_blank">Dreamcraft</a></p>
            <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:34px 0px 0px 33px; text-align:left;">
            Thank you for your patience.<br/>
                Team DreamCraft</p>
                <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:28px 0px 0px 33px; text-align:left;">
                <strong>DreamCraft<br /></strong>
                Above Ozone Show Room,<br />
				Vijay Cross Road, Ahmedabad<br />
            </p>
        </div>
        <div style=" float:left; margin:0px; width:100%; background:#222222; font-family:'Open Sans';">
        	<div style=" float:left; margin:0px; width:50%; background:#222222; text-align:left;  font-family:'Open Sans';">
            </div>
            <div style="float:left; margin:0px; width:50%; text-align:right;  font-family:'Open Sans';">
            	<p style=" font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#818181;; line-height:24px; margin:15px 33px 0 0; text-decoration:none;">&copy; 2014-15 Dreamcraft</p>
            </div>            
        </div>
        <div style="float:left; margin:0px; width:100%;background:#222222;  font-family:'Open Sans';">
        	<div style=" float:left; margin:0px; width:50%; text-align:left;  font-family:'Open Sans';">
            	<table cellpadding="0" cellspacing="0" style=" margin:0px; float:left; background:#222222;font-family:"Open Sans"; font-weight:normal; font-size:13px; color:#4c91c9;" width="100%" border="0">
                	
                    
                </table>
            </div>
            <div style=" float:left; margin:0px; width:50%; text-align:right;  font-family:'Open Sans';">
            	
            </div> 
        </div>
    </div>
</body>
</html>
EOD;
                        //echo 	$EmailBody;
                        $To="pradeep.keytorch@gmail.com"; 
                        $From=$_POST['name']." "."<".$_POST['email'].">";
                        $Subject_admin="Email From Get In Contact Form";
                        $headers = "From: $From \r\n";
                        $headers .= "Content-type: text/html; charset=iso-8859-1".
                                        'Reply-To: '.$_POST['email']."\r\n" .
                                            'X-Mailer: PHP/' . phpversion();
                        mail($To,$Subject_admin,$EmailBody,$headers);
				
				
				
				
				
			
			
			$EmailBody = <<<EOD
<html>
<body style="margin:0px; text-align:center; font-family:'Open Sans'; font-weight:normal;">
    <div style=" font-family:'Open Sans';width:650px; height:630px; margin:0px auto;/* border:1px solid #acacac;*/" style>
    	<div style="  font-family:'Open Sans';width:100%; float:left; height:82px; background:#fff; text-align:left;">
        	<a href=""><img src="" alt="dreamcraft" name="dramcraft" width="152" height="38" style="margin:22px 0px 22px 33px; width:190px; height:70px;  font-family:'Open Sans'; cursor:pointer" id="dreamcraft Logo" title="dreamcraft Logo" border="0" /></a>
        </div>
        <div style="width:100%; background:#cc0000; float:left; text-align:center; color:#fff;  font-family:'Open Sans'; ">
        	<p style="margin:36px 0px 36px 0px; font-family:'Open Sans'; font-size:20px; color:#fff; font-weight:bold;">Are you Interested</p>
        </div>
        <div style=" float:left; width:100%; margin:0px; background:#fff; text-align:left;  font-family:'Open Sans';">
        	<p style="font-family:'Open Sans'; font-weight:lighter; font-size:45px; margin:30px 0px 0px 33px; color:#cc0000;">Thank you </p>
            <p style=" font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Dear <strong style='text-transform:capitalize;'>$name,</strong> </p>
            <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:20px 0px 0px 33px; text-align:left;">Thank you for contacting Dreamcraft. <a href="" target="_blank">Dreamcraft</a></p>
            <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:34px 0px 0px 33px; text-align:left;">
            Thank you for your patience.<br/>
                Team DreamCraft</p>
                <p style="font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#000; line-height:24px; margin:28px 0px 0px 33px; text-align:left;">
                <strong>DreamCraft<br /></strong>
                Above Ozone Show Room,<br />
				Vijay Cross Road, Ahmedabad<br />
            </p>
        </div>
        <div style=" float:left; margin:0px; width:100%; background:#222222; font-family:'Open Sans';">
        	<div style=" float:left; margin:0px; width:50%; background:#222222; text-align:left;  font-family:'Open Sans';">
            </div>
            <div style="float:left; margin:0px; width:50%; text-align:right;  font-family:'Open Sans';">
            	<p style=" font-family:'Open Sans'; font-weight:normal; font-size:13px; color:#818181;; line-height:24px; margin:15px 33px 0 0; text-decoration:none;">&copy; 2014-15 Dreamcraft</p>
            </div>            
        </div>
        <div style="float:left; margin:0px; width:100%;background:#222222;  font-family:'Open Sans';">
        	<div style=" float:left; margin:0px; width:50%; text-align:left;  font-family:'Open Sans';">
            	<table cellpadding="0" cellspacing="0" style=" margin:0px; float:left; background:#222222;font-family:"Open Sans"; font-weight:normal; font-size:13px; color:#4c91c9;" width="100%" border="0">
                	
                    
                </table>
            </div>
            <div style=" float:left; margin:0px; width:50%; text-align:right;  font-family:'Open Sans';">
            	
            </div> 
        </div>
    </div>
</body>
</html>
EOD;
                                
				//echo 	$EmailBody;	
                                
                                $To=$_POST['email'];
                                
                                $From="dremcraft<pradeep.keytorch@gmail.com>";
                                $Subject_client="Thank You For Getting In Contact.";
                        
				$headers = "From: $From \r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1";
                                                'Reply-To: '.$From."\r\n" .
                                                'X-Mailer: PHP/' . phpversion();
				mail($To,$Subject_client,$EmailBody,$headers);
				
				header ("Location: index.html");
				//echo "submited successfully";
				exit;

		
  ?>