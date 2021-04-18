<?php

include "template_manager/template_manager.php";
include "tab_me/Tab_me.php";

$template_manager = new Template_manager(array('template_exemple'));

//Create new object for manage tab menu
$structure = array('button-1', 'button-2');
$tab_me = new Tab_me($structure);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tab Me</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="tab_me/css/style_tab_me.css">
</head>
<body>
    <h1>Welcome to TabMe</h1>
    <?php

    //Put template in tab
    $tab_me->put_template_in_tab($template_manager->get_template_secure('template_tab_1.html'), "button-1");
    $tab_me->put_template_in_tab($template_manager->get_template_secure('template_tab_2.html'), "button-2");

    //display menu
    echo $tab_me->get_menu();
    ?>
    <!-- Scripts -->
    <script type="text/javascript" src="vendor/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="tab_me/js/Tab_me.js"></script>
</body>
</html>
