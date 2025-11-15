<?php 
    require_once"./controller/homeworkController.php";

    $controller = new HomeworkController();

    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'addNewHomework' && !empty($_POST['description']))
        {
            $controller->addNewHomework($_POST['description']);
        }
        elseif($_GET['action'] == 'finish' && isset($_GET['id']))
        {
            $controller->completed($_GET['id']);
        }
    }
    else
    {
        $controller->listing();
    }
?>