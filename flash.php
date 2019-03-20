<?php
session_start();
	#Função que monta a estrutura das flash mensagens
	function flash($key, $mensagem, $tipo = "danger"){
		if(!isset($_SESSION['flash'][$key])){
			$_SESSION['flash'][$key] = '<div class="alert alert-'.$tipo.' text-center">'.$mensagem.'</div>';
		}
	}
	#Função pra exibir as flash mensagens
	function getFlash($key){
		if(isset($_SESSION['flash'][$key])){
			$mensagem = $_SESSION['flash'][$key];
			unset($_SESSION['flash'][$key]);
			if(isset($mensagem)){
				return $mensagem;
			} else {
				return '';
			}
		}
	}
?>