<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone']; 
	$subject = $_POST['sub']; 
	$messagebody = $_POST['message']; 	
	
	// Set the from email address.
	$from = "<info@72mechanix.com>";
	
	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "irodrigu@gmail.com"; 

	// Build the email content.
	$message = "
				Hola,

				Un visitante envio una solicitud del sitio 7.2 Mechanix.
				
				Nombre: $name

				Correo eléctronico: $email

				Tema: $subject

				Teléfono: $phone

				Mensaje: $messagebody


				Gracias,

				7.2 Mechanix

				
				Este mensaje fue enviado a $to.  

				7.2 Mechanix Blvd. Lázaro Cárdenas #615 Fracc. Jardines del Lago.
				"; 


	// send the email 
	if(mail ($to,$subject,$message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>

