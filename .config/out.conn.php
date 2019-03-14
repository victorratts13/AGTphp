<?php 
//v1.0
//by. Victor Ratts

$name = $_POST['nome'];
$sn = $_POST['sobrenome'];
$end = $_POST['end'];
$tel = $_POST['tel'];
$dataTime = date('D-m-y h:i:s');

$dt = [
	'nome' => $name,
	'Sobrenome' => $sn,
	'ender' => $end,
	'tel' => $tel
];

$data = '<tr>
	      <th scope="row">'.$name.'</th>
	      <td>'.$sn.'</td>
	      <td>'.$end.'</td>
	      <td>'.$tel.'</td>
	      <td>'.$dataTime.'</td>
	    </tr>' ;

$file = 'contacts.php';

$fp = fopen($file, 'a+');

fwrite($fp, $data);

fclose($fp);


 ?>

 <a href="contacts.json">contacts</a>