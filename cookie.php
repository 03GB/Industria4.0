<?php
    $count = 0;
    //Timer para verificar se o usuário visitou a página nos últimos 30 dias
    //60 segundos * 60 minutos * 24 horas * 30 dias 
    setcookie("count", $count, time()+60*60*24*30);

    $msg = "";

    if(isset($_COOKIE["count"])){
            
            //Mensagem caso o usuário tenha visitado o site nos últimos 30 dias
            $msg = "Seja bem-vindo novamente ao nosso site!";
        } else {

            //Mensagem caso o usuário não tenha visitado o site ainda ou a mais de 30 dias
            $msg = "Seja bem vindo ao nosso site, agredecemos sua visita!";
        }


?>
