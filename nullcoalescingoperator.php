<?php

$data = [
    'action'=>'create'
];
/*
//cara panjang
if(isset($data['action']))
{
    $action = $data['action'];
}
else{
    $action ='nothing';
}

echo $action;
*/
$action = $data ['action'] ?? 'nothing';
echo $action;
?>