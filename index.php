<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body style="margin: 0 auto; width: 854px">
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas2"></canvas>
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas1"></canvas>
		<canvas style="width: 854px ; height:480px; background-color: rgba(0,0,0,0); align-content: center;border: 1px solid black;position: absolute;" id="canvas"></canvas>
		<script src="sc.js"></script>
		<div>
			<?php
    /* Соединяемся, выбираем базу данных */
    $link = mysql_connect("mysql_host", "mysql_user", "mysql_password")
        or die("Could not connect : " . mysql_error());
    print "Connected successfully";
    mysql_select_db("my_database") or die("Could not select database");

    /* Выполняем SQL-запрос */
    $query = "SELECT * FROM my_table";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* Выводим результаты в html */
    print "<table>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }
        print "\t</tr>\n";
    }
    print "</table>\n";

    /* Освобождаем память от результата */
    mysql_free_result($result);

    /* Закрываем соединение */
    mysql_close($link);
?>
		</div>
	</body>
</html>
