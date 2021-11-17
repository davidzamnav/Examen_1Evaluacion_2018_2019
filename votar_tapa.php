<?php

include 'head.php';
    session_start();
  if(isset($_REQUEST['votar']))
  {
$codigo=$_REQUEST['codigo'];
$_SESSION['votos'][$codigo]++;
  }
echo'<form action="" method="post">
            Selecciona la Tapa a la cual quieres votar
                            <select name="codigo">';
                            foreach($_SESSION['tapas'] as $clave=>$vector)
                            echo'<option value="'.$clave.'">'.$vector[0].'</option>';


                                echo'</select>
     <br> 
     <input name="votar" type="submit"  value="Votar"/>

    </form>';

 include 'pie.php';

