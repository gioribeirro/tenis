<?php
//print_r($_REQUEST);       //confirmar se envia dados
if(isset($_POST['submt']) && !empty($_POST['email'])&& !empty($_POST['senha']))
{

        //ACESSAR O SISTEMA
    include_once('confing.php');
    $email=$_POST['email'];
    $senha=$_POST('senha');

        //Control D copia todas as palavras iguais

   /* print_r('Email:'. $email);
    print_r('<br>');
    print_r('Senha:'. $senha);*/
    $sql="SELECT * FROM ativida WHERE email='$email' and senha='senha'";
        $result=$conexao->query ($sql);
        print_r($result);
}else{

        //não acessa
    header('Location: login.php');
}