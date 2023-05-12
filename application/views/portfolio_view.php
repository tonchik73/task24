<title>О нас</title>
<h1 align="center">Портфолио</h1>
<p>
<table align="center">
<h3 align="center">Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</h3>
<tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
<?php
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>