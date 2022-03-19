<?php
if(isset($POST['form']));
$Nombre=$_POST['nom'];
$Edad=$_POST['ed'];
$Direccion=$_POST['dir'];
$Telefono=$_POST['tel'];
$Email=$_POST['em'];
$Hi=INSERT INTO form(id_form, Nombre, Edad, Direccion, Email) Values('$Nombre','$Edad','$Direccion', '$Telefono', '$Email');
$Hi=$conecta=query(Hi);
