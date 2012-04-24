<?php
//Required Routes
$routes['__defaultAction'] = 'index';
$routes['__defaultController'] = 'main';

$routes['inscreva-se'] = "main/inscricoes_gratuitas";
$routes['participe'] = "main/participe";
$routes['palestrantes'] = "main/palestrantes";
$routes['inscricoes'] = "main/inscricoes_gratuitas";
$routes['inscricoes_gratuitas'] = "main/inscricoes_gratuitas";
$routes['call_for_papers'] = "main/call_for_papers";
$routes['registrar_inscricao'] = "main/registrar_inscricao";
$routes['patrocine'] = "main/patrocine";

//Rota especial para palestras
$routes['palestras/visualizar/([[:alnum:]\)\(\.\+\%\-\,&:-@_\>\<]+)'] = "main/verPalestra/$2";

//Route example (you can also see more at Router documentation)
//$routes['example'] = "exampleController";
//$routes['example/([[:alnum:]&:-@_]+)'] = "exampleController/$1";
//$routes['example/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)'] = "exampleController/$1/$2";
//$routes['example/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)'] = "exampleController/$1/$2/$3";
//$routes['example/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)'] = "exampleController/$1/$2/$4";
//$routes['example/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)'] = "exampleController/$1/$2/$4/$5";
//$routes['example/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)/([[:alnum:]&:-@_]+)'] = "exampleController/$1/$2/$4/$5/$6";
?>
