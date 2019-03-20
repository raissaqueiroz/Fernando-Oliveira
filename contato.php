<?php
	date_default_timezone_set("BRAZIL/EAST");
    include_once "flash.php"; 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['enviar'])){ #Se cliquei no botão de enviar/logar
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$assunto = "Contato feito pelo site";
			$msg = addslashes($_POST['mensagem']);
			$to = "fpcontato2k19@gmail.com";
			$subject = "Contato - ".$assunto;
			$body = "Nome: ".$nome."\r\n"."Email: ".$email."\r\n"."Mensagem: ".$msg;
			$header = "From:fpcontato2k19@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();
			//função mail():::
			$enviando = mail($to,$subject,$body,$header);
				if($enviando){
					flash("mensagem", "Mensagem enviada com sucesso!", "success");
					header("Location: index.php#contato");
				} else {
					flash("mensagem", "Falha ao enviar mensagem!", "danger");
					header("Location: index.php#contato");
				}
		}
	}



	
?>