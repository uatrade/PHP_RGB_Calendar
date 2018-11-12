<?php
if(isset($_GET["R"])&&isset($_GET["G"])&&isset($_GET["B"]))
{
    $ColorR=$_GET["R"];
    $ColorG=$_GET["G"];
    $ColorB=$_GET["B"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Цвета</title>
</head>
<body>
<h1>Задание №1</h1>

<h2>Изменение цвета</h2>
<form>
    <label>Color R</label><input name="R"><br><br>
    <label>Color G</label><input name="G"><br><br>
    <label>Color B</label><input name="B"><br><br>
    <input type="submit" value="Acept">
</form>
<br><br>
<span style="background-color:rgb(
<?php echo "$ColorR" ?>,
<?php echo "$ColorG" ?>,
<?php echo "$ColorB" ?>)" >Образец цвета </span>


<h2>Календарь</h2>

<?php

$num =array();
if(isset($_GET["month"]))
{
    $month=$_GET["month"];
}
else
{
    $month="Не выбран";
}

if($_GET["month"]=="Январь")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i] = $i+1;
    }
}
if($_GET["month"]=="Февраль")
{
    $i=0;
    for($i=0;$i<28; $i++) {
        $num[$i+3] = $i+1;
    }
}
if($_GET["month"]=="Март")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+3] = $i+1;
    }
}
if($_GET["month"]=="Апрель")
{
    $i=0;
    for($i=0;$i<30; $i++) {
        $num[$i+6] = $i+1;
    }
}
if($_GET["month"]=="Май")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+1] = $i+1;
    }
}
if($_GET["month"]=="Июнь")
{
    $i=0;
    for($i=0;$i<30; $i++) {
        $num[$i+4] = $i+1;
    }
}
if($_GET["month"]=="Июль")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+6] = $i+1;
    }
}
if($_GET["month"]=="Август")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+2] = $i+1;
    }
}
if($_GET["month"]=="Сентябрь")
{
    $i=0;
    for($i=0;$i<30; $i++) {
        $num[$i+2] = $i+1;
    }
}
if($_GET["month"]=="Октябрь")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+5] = $i+1;
    }
}
if($_GET["month"]=="Ноябрь")
{
    $i=0;
    for($i=0;$i<30; $i++) {
        $num[$i+3] = $i+1;
    }
}
if($_GET["month"]=="Декабрь")
{
    $i=0;
    for($i=0;$i<31; $i++) {
        $num[$i+5] = $i+1;
    }
}


?>

<style>
    table
    {
        border: solid 1px silver;
    }
    tr, td, th
    {
        width: 30px;
        height: 30px;
        border: solid 1px silver;
    }
</style>
<form>

<select name="month">
    <option selected="selected">Выбор месяца</option>
    <option name="1">Январь</option>
    <option name="2">Февраль</option>
    <option name="3">Март</option>
    <option name="4">Апрель</option>
    <option name="5">Май</option>
    <option name="6">Июнь</option>
    <option name="7">Июль</option>
    <option name="8">Август</option>
    <option name="9">Сентябрь</option>
    <option name="10">Октябрь</option>
    <option name="11">Ноябрь</option>
    <option name="12">Декабрь</option>
</select>
    <br><br>
    <span style="color: blue; font-weight: bold"><?php echo"$month 2018 года"?></span>

<table>
    <tr>
        <th>Пн</th>
        <th>Вт</th>
        <th>Ср</th>
        <th>Чт</th>
        <th>Пт</th>
        <th style="color: red">Сб</th>
        <th style="color: red">Вс</th>
    </tr>
    <tr>
        <td><?php echo "$num[0]" ?></td>
        <td><?php echo "$num[1]" ?></td>
        <td><?php echo "$num[2]" ?></td>
        <td><?php echo "$num[3]" ?></td>
        <td><?php echo "$num[4]" ?></td>
        <td style="color: red"><?php echo "$num[5]" ?></td>
        <td style="color: red"><?php echo "$num[6]" ?></td>
    </tr>
    <tr>
        <td><?php echo "$num[7]" ?></td>
        <td><?php echo "$num[8]" ?></td>
        <td><?php echo "$num[9]" ?></td>
        <td><?php echo "$num[10]" ?></td>
        <td><?php echo "$num[11]" ?></td>
        <td style="color: red"><?php echo "$num[12]" ?></td>
        <td style="color: red"><?php echo "$num[13]" ?></td>
    </tr>
    <tr>
        <td><?php echo "$num[14]" ?></td>
        <td><?php echo "$num[15]" ?></td>
        <td><?php echo "$num[16]" ?></td>
        <td><?php echo "$num[17]" ?></td>
        <td><?php echo "$num[18]" ?></td>
        <td style="color: red"><?php echo "$num[19]" ?></td>
        <td style="color: red"><?php echo "$num[20]" ?></td>
    </tr>
    <tr>
        <td><?php echo "$num[21]" ?></td>
        <td><?php echo "$num[22]" ?></td>
        <td><?php echo "$num[23]" ?></td>
        <td><?php echo "$num[24]" ?></td>
        <td><?php echo "$num[25]" ?></td>
        <td style="color: red"><?php echo "$num[26]" ?></td>
        <td style="color: red"><?php echo "$num[27]" ?></td>
    </tr>
    <tr>
        <td><?php echo "$num[28]" ?></td>
        <td><?php echo "$num[29]" ?></td>
        <td><?php echo "$num[30]" ?></td>
        <td><?php echo "$num[31]" ?></td>
        <td><?php echo "$num[32]" ?></td>
        <td style="color: red"><?php echo "$num[33]" ?></td>
        <td style="color: red"><?php echo "$num[34]" ?></td>
    </tr>
    <tr>
        <td><?php echo "$num[35]" ?></td>
        <td><?php echo "$num[36]" ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
    <br>
    <input type="submit" value="Выбрать">
</form>
</body>
</html>
