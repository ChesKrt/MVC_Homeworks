<?php 
    require_once("./model/homework.php");

    class HomeworkController
    {
        private $model;

        public function __construct()
        {
            $this->model = new Homework();
        }

        public function listing()
        {
            $homeworks = $this->model->getHomework();
            include("./view/listing.php");
        }

        public function addNewHomework($description)
        {
            $this->model->addHomework($description);
            header("Location: index.php");
        }

        public function completed($id)
        {
            $this->model->finishHomework($id);
            header("Location: index.php");
        }

    }
?>