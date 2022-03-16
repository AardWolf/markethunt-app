<?php
require_once($_SERVER['APPDIR'] . "/config/setup.php");
require_once($_SERVER['APPDIR'] . "/model/ItemModel.php");

ob_start();

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$event_data = [
    ['2020-08-18', '2020-09-08', 'Ronza \'20'],
    ['2020-10-14', '2020-11-03', 'Hween \'20'],
    ['2020-12-08', '2021-01-06', 'GWH \'20'],
    ['2021-02-09', '2021-02-23', 'LNY \'21'],
    ['2021-03-02', '2021-03-23', 'BDay \'21'],
    ['2021-03-30', '2021-04-27', 'SEH \'21'],
    ['2021-05-25', '2021-06-08', 'KGA \'21'],
    ['2021-06-29', '2021-07-13', 'Jaq \'21'],
    ['2021-07-27', '2021-08-17', 'Ronza \'21'],
    ['2021-10-13', '2021-11-02', 'Hween \'21'],
    ['2021-12-07', '2022-01-05', 'GWH \'21'],
    ['2022-01-31', '2022-02-15', 'LNY \'22'],
    ['2022-03-02', '2022-03-22', 'BDay \'22'],
];
echo json_encode($event_data);

ob_end_flush();