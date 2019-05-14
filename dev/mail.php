<?php

  //Variaveis de POST, Alterar somente se necessário 
  //====================================================


if( $_POST['landing'] == 'empresarial' ){
  $email_conteudo = "Contato Empresarial \n \n"; 
}
elseif( $_POST['landing'] == 'estudantil' ){
  $email_conteudo = "Contato Estudantil \n \n";   
}
elseif( $_POST['landing'] == 'zillion' ){
   $email_conteudo = "Contato Landing Zillion \n \n";   
}

if(isset($_POST['name'])){
  $nome = $_POST['name'];
  $email_conteudo .= "Nome: $nome \n"; 
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
  $email_conteudo .= "Email: $email \n";
}
if(isset($_POST['company'])){
  $company = $_POST['company'];
  $email_conteudo .= "Empresa: $company \n"; 
}
if(isset($_POST['role'])){
  $role = $_POST['role'];
  $email_conteudo .= "Função: $role \n"; 
}
if(isset($_POST['college'])){
  $college = $_POST['college'];
  $email_conteudo .= "Universidade: $college \n"; 
}
if(isset($_POST['class'])){
  $class = $_POST['class'];
  $email_conteudo .= "Curso: $class \n";
}
if(isset($_POST['phone'])){
  $phone = $_POST['phone'];
  $email_conteudo .= "Telefone: $phone \n";
}
  //====================================================

  //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //==================================================== 
  $email_remetente = "insidesales@viaflow.com.br"; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = "insidesales@viaflow.com.br"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "Contato - Landing ViaFlow"; // Este será o assunto da mensagem
  //====================================================
  
  
  //Seta os Headers (Alterar somente caso necessario) 
  //==================================================== 
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
    $response_arr = array('success' => true);
  } 
  else{ 
    $response_arr = array('success' => false);
  } 
  echo json_encode($response_arr);
  //====================================================

  ?>