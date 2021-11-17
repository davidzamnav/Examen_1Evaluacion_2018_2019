<?php

include 'head.php';
session_start();
echo '<table>
<thead>
        <th>Codigo tapa</th>
        <th>nº votos</th> 
</thead>
<tbody>';
// visualizar datos array en tabla cae en examen
foreach($_SESSION['votos'] as $clave=>$vector)
{
echo '<tr>
    <td>'.$clave.'</td>
    <td>'.$vector.'</td>
</tr>';   
}
echo '</tbody>                                        
</table>'
;
 include 'pie.php';

