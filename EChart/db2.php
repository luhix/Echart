<?php
/**
 * @Author: Luhix
 * @Date:   2017-06-08 10:46:08
 * @Last Modified by:   Luhix
 * @Last Modified time: 2017-06-08 15:48:58
 */

require_once 'config.php';

$link = mysqli_connect(HOST, USER, PASS, DBNAME);
mysqli_query($link, 'SET NAMES UTF8');

$sql = "select task from work order by id desc";

$result = mysqli_query($link, $sql);

$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
}

$info = json_encode($arr);
echo $info;
