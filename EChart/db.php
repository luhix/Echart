<?php
/**
 * @Author: Luhix
 * @Date:   2017-06-08 10:46:08
 * @Last Modified by:   Luhix
 * @Last Modified time: 2017-07-09 16:04:41
 */

require_once 'config.php';

$link = mysqli_connect(HOST, USER, PASS, DBNAME);
mysqli_query($link, 'SET NAMES UTF8');

$sql = "select name,age from user";

$result = mysqli_query($link, $sql);

$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
}

$info = json_encode($arr);
echo $info;


