<?php
echo(nl2br("Лаба 4\n"));
echo(nl2br("Вариант 8\n"));
echo(nl2br("Выполнил студент группы КИУКИ-17-1 Скорик В.\n\n"));
    $file_name = "data.txt";
    $data = file( $file_name );
?>
<table border="1">
<caption> <b> Прайс-лист канцелярского магазина </b> </caption>
<tr bgcolor=#98fa7a align="center">
    <th>Наименование товара</th>
    <th>Количество</th>
    <th>Цена за шт.</th>
    <th>Код</th>
</tr>
<?php
    foreach( $data as $value ):
        $value = explode( "|", $value );
?>
    <tr bgcolor=#fff696>
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
        <td><?=$value[3]?></td>
    </tr>
<?php
    endforeach;
?>
</table>