<?php define('SESSIONTIME',$_SERVER['REQUEST_TIME']); define('TIMEOUT',3600); include ('includes/session.tpl'); session::start(); 
    date_default_timezone_set('Asia/Kolkata');

    define('WEBPATH','http://localhost:1020/Capt/');
    define('MODEL','model/');
    define('PROCESS',WEBPATH.'process/');
    define('IMAGES', WEBPATH.'images/');
    define('STYLES',WEBPATH.'extras/');
    define('DOCUMENTROOT',$_SERVER['DOCUMENT_ROOT'].'/Capt/');
    define('TITLE','Login');
    include(MODEL.'siteModel.tpl');

?>