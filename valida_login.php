<?php

  session_start();
  $_SESSION['x'] = 'Oi, eu sou um valor de sessão!';
  print_r($_SESSION);
 

  //Vriavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;

  //Usuario do sistema
  $usuarios_app = array(
      array('email' => 'adm@teste.com.br', 'senha' => '123456'),
      array('email' => 'vandi@gmail.com', 'senha' => 'abcd')
  );

  // percorrendo o array $usuarios_app
  foreach($usuarios_app as $user){
      if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
          $usuario_autenticado = true;
      }
  }
  
  if($usuario_autenticado){
    echo 'Usuário autenticado.';

    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php?');
  }else{  
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
  }

?>