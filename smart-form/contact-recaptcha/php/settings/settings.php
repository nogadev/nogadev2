<?php

	/* Enter your name or company name below
	 * You can also use your website URL
	--------------------------------------------- */
	$receiver_name = "My Company";
	
	/* Enter your message subject below
	 * This subject is the one you will see in your email
	------------------------------------------------------ */	
	$receiver_subject = "New Contact Message";
	
	/* Form message will be sent to this email address
	 * For more than one email go to smartprocess.php then
	 * Add addresses to the recipients section
	------------------------------------------------------ */
	$receiver_email = "fer.nogara@gmail.com";
	
	/* If you want to redirect to another page after sending the form
	 * Change the $redirectForm option below from (false) to (true)
	 * Then add your redirect page URL replace - http://example.com/thankyou.php
	----------------------------------------------------------------------------- */	
	$redirectForm = false;
	$redirectForm_url = "www.nogadev.com/index.html";
	
	/* Powered BY
	 * You will use both your website NAME and URL
	 * By default its powered by SMARTFORMS - http://www.doptiq.com/smart-forms
	----------------------------------------------------------------------------- */
	$poweredby_name = "Your Company";
	$poweredby_url = "http://your-company.com";	
	
	/* If you want to store all form data in a CSV file
	 * Change the generateCSV option from (false) to (true)
	------------------------------------------------------------ */
	$generateCSV = false;
	
	/* Name for generated CSV file 
	 * Please don't change this name unless you have to
	------------------------------------------------------------ */	
	$csvFileName = "formcsv.csv";
	
	/* If you want to automatically reply to the sender 
	 * Change the autoresponder option below from (false) to (true)
	-------------------------------------------------------------------- */	
	$autoResponder = false;
	
	/* RECAPTCHA PROCESSING
	 * Enter your recaptcha google secret key 
	 * Get your keys from - https://www.google.com/recaptcha/admin
	 * Please enter the key inside the double quotes below 
	-------------------------------------------------------------------- */		
	$secretKey = "6Le-oQgTAAAAAEx0qUJEra0UQas68kh8UBU_ptxg";
	
	/* User IP Address 
	 * Used for purposes of recaptcha don't remove
	-------------------------------------------------------------------- */	
	$userIP = $_SERVER['REMOTE_ADDR'];		
?>