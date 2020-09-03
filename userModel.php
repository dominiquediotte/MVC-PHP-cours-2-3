<?php

require_once('dbModel.php');
require_once('userDTO.php');

class UserModel extends DBModel
{
    const GET_ALL_USERS_PROC_NAME = 'get_all_users';
    const GET_USER_BY_ID_PROC_NAME = 'get_user_by_id';

    public function getAllUsers()
    {
        $result = $this->mysqli->query('CALL ' . self::GET_ALL_USERS_PROC_NAME . '();');
        $users = array();

        while ($row = $result->fetch_assoc()) {
            array_push($users, new UserDTO($row['id_user'], $row['first_name'], $row['last_name']));
        }
        
        return $users;
    }

    public function getUser($userID)
    {
        $result = $this->mysqli->query('CALL ' . self::GET_USER_BY_ID_PROC_NAME . '(' . $userID . ');');
        $user = null;
        
        while ($row = $result->fetch_assoc()) {
            $user = new UserDTO($row['id_user'], $row['first_name'], $row['last_name']);
        }
        
        return $user;
    }
}
