<?php


   include "../model/reseva.class.php";

   $reser = new Reserva;
   
   $reser->setNome($_POST["txtnome"]);
   $reser->setEmail($_POST["txtemail"]);
   $reser->setIdade($_POST["txtidade"]);
   $reser->setTelefone($_POST["txtfone"]);
   $reser->setRG($_POST["txtrg"]);
   $reser->setDiaria($_POST["txtdias"]);
   $reser->setRG($_POST["txtrg"]);
   
   
  
   

   echo "Plano".$reser->__toString();





?>