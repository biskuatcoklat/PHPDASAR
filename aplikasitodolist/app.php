<?php

require_once __DIR__ . "/Model/todolist.php";
require_once __DIR__ . "/bisnislogic/showtodolist.php";
require_once __DIR__ . "/bisnislogic/addtodolist.php";
require_once __DIR__ . "/bisnislogic/removetodolist.php";
require_once __DIR__ . "/view/viewtodolist.php";
require_once __DIR__ . "/view/viewaddshow.php";
require_once __DIR__ . "/view/viewremove.php";
require_once __DIR__ . "/helpper/inputdata.php";

echo "aplikasi ToDoList" .PHP_EOL;

viewshowtodolist();