<?php

    class User
    {
        private $user_name;
        private $password:
        private $scores;

        function __construct($user_name, $password, $scores)
        {
            this->user_name = $user_name;
            $password_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
            $this->password = $password_hash;
            $this->scores = $scores;
        }

        function setUserName($new_user_name)
        {
            $this->user_name = $new_user_name;
        }
        function getUserName()
        {
            return $this->user_name;
        }
        function setPassword($new_password)
        {
            $this->password = $new_password;
        }
        function getPassword()
        {
            return $this->password;
        }
        function setScores($new_scores)
        {
            $this->$scores = $new_scores;
        }
        function getScores()
        {
            return $this->user_name;
        }

    }
?>
