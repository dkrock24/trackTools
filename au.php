<?php

	$domain 	=	$_POST['domain'];
 	$username 	=	$_POST['usuario'];
 	$password 	=	$_POST['password'];

 	$response = array (
	            "domain" => $domain,
	            "success" => $username,
	            "error" => 0,
	            "error_msg" => "",
	            "result" => false,
	            "user_db" => "",
	            "user_email" => ""
	    );

 	try {
        $adldap = null;
        switch ($domain)
        {					
			case 'SV':
                require('/adLDAP.php');
				break;

			case 'TI':  
                require('/adLDAP_ti.php');
				break; 

            case 'GT':                             		
                require('/adLDAP_gt.php');  					 
				break;							
		}			
		$adldap = new adLDAP();
	}
	catch (adLDAPException $e)
	{
		echo $e;
		exit();
	} 

	if($adldap->authenticate($username,$password))
	{
    	//$password = 'admin123456';

        try
        {
        	echo "yes - Autenticado";
        	session_start();
        	$_SESSION['wl']=$username;
        	header('Location: '.'index.php');

        }
        catch (Exeption $e)
        {
           echo "yes Ex";
        }
        if (!$response['result'])
        {
            echo "yes";
        }  
    }
    else
    {//if adldap
        echo "Fail Global";
   	} 



?>