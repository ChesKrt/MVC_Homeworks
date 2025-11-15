<?php

    class Homework
    {
        private $conn;
        public function __construct()
        {
            $this->conn = new mysqli("localhost","usrHomework","1234567890","homework_db");
        }

        public function getHomework()
        {
            $result = $this->conn->query("SELECT * FROM homeworks");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function addHomework($description)
        {
            $smt = $this->conn->prepare("INSERT INTO homeworks (description) VALUES (?)");
            $smt->bind_param("s", $description);
            $smt->execute();
        }

        public function finishHomework($id)
        {
            $smt = $this->conn->prepare("UPDATE homeworks SET finish = 1 WHERE idhomeworks = ?");
            $smt->bind_param("i", $id);
            $smt->execute();
        }

    }

?>