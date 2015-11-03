<?php

    class User
    {
        private $user_name;
        private $password;
        private $scores;
        private $id;

        function __construct($user_name, $password, $scores, $id = null)
        {
            $this->user_name = $user_name;
            $password_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
            $this->password = $password_hash;
            $this->scores = $scores;
            $this->id = $id;
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
        function setId($new_id)
        {
            $this->id = $new_id;
        }
        function getId()
        {
            return $this->id;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO users (user_name, password, scores)
                VALUES ('{$this->getUserName()}',
                        '{$this->getPassword()}',
                        {$this->getScores()});");
            $this->setId($GLOBALS['DB']->lastInsertId());
        }
        function updatePassword($new_password)
		{
			$GLOBALS['DB']->exec("UPDATE users SET password = '{$new_password}' WHERE id = {$this->getId()};");
			$this->setPassword($new_password);
		}
		function updateUserName($new_user_name)
		{
			$GLOBALS['DB']->exec("UPDATE users SET user_name = '{$new_user_name}' WHERE id = {$this->getId()};");
			$this->setUserName($new_user);
		}
        static function getAll()
		{
			$returned_users = $GLOBALS['DB']->query("SELECT * FROM users;");
			$users = array();
			foreach($returned_users as $user)
			{
				$new_user_name = $user['user_name'];
				$new_password = $user['password'];
				$new_signed_in = (int) $user['scores'];
				$new_id = $user['id'];
				$new_user = new User($new_user_name, $new_password, $new_scores, $new_id);
				$new_user->setPassword($new_password);
				array_push($users, $new_user);
			}
			return $users;
		}

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM users;");
        }

        static function find($search_id)
        {
            $found_user = null;
            $users = User::getAll();
            foreach($users as $user) {
                $user_id = $user->getId();
                if($user_id == $search_id) {
                    $found_user = $user;
                }
            }
            return $found_user;
        }
    }
?>
