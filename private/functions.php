<?php



// to use in anchor url parameter
function url_for($script_path){

    if ($script_path[0] != '/') {
        $script_path = '/' .  $script_path;
    }
    
    return WWW_ROOT . $script_path;
    
}  


function u($string=""){
		return urldecode($string);
}  

function raw_u($string=""){
		return rawurldecode($string);
}  

function h($string=""){
		return htmlspecialchars($string);
}  

