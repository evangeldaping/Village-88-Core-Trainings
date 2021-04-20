<?php

//    Normal CRUD for a User object.
//  Includes a function to retrieve a user
//  by the email address, as well as one to 
//  retrieve all users. Also, update is
//  broken into three different functions, 
//  since the view offers three different
//  update subsets (names, password, desc). 

class User_Model extends CI_Model
{
    function create_user($user, $user_level = 0)
    {
        $users = $this->retrieve_all_users();
        if (empty($users))                //  the first registered user is given admin privileges
        {
            $user_level = 9;
        }

        $query = "INSERT INTO users (first_name, last_name, email, password, user_level, created_at, updated_at) 
                         VALUES     (         ?,         ?,     ?,        ?,          ?,          ?,          ?)";

        $values = array(
            $user['first_name'], $user['last_name'],
            $user['email'],      $user['password'],
            $user_level,         date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")
        );

        return $this->db->query($query, $values);
    }

    function retrieve_user($user_id)
    {
        $query = "SELECT 
                      *
                  FROM 
                      users
                  WHERE
                      users.id = ?";

        $values = array($user_id);

        return $this->db->query($query, $values)->row_array();
    }

    function retrieve_user_by_email($email)
    {
        $query = "SELECT
                      *
                  FROM
                      users
                  WHERE
                      users.email = ?";

        $values = array($email);

        return $this->db->query($query, $values)->row_array();
    }

    function retrieve_all_users()
    {
        $query = "SELECT
                      users.id,
                      CONCAT(users.first_name, ' ', users.last_name) AS full_name, 
                      users.email, 
                      DATE_FORMAT(users.created_at, '%b %e, %Y') AS created_date, 
                      IF(users.user_level = 9, 'admin', 'user') AS status
                  FROM
                      users 
                  ORDER BY users.id";

        return $this->db->query($query)->result_array();
    }

    function update_user_name($user)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "UPDATE users 
                  SET
                      users.first_name = ?, 
                      users.last_name = ?, 
                      users.email = ?, 
                      users.user_level = ?, 
                      users.updated_at = ? 
                  WHERE
                      users.id = ?";

        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['user_level'], $now, $user['id']);

        return $this->db->query($query, $values);
    }

    function update_user_password($user)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "UPDATE users 
                  SET
                      users.password = ?, 
                      users.updated_at = ? 
                  WHERE
                      users.id = ?";

        $values = array($user['password'], $now, $user['id']);

        return $this->db->query($query, $values);
    }

    function update_user_description($user)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "UPDATE users 
                  SET
                      users.description = ?, 
                      users.updated_at = ? 
                  WHERE
                      users.id = ?";

        $values = array($user['description'], $now, $user['id']);

        return $this->db->query($query, $values);
    }

    function destroy_user($id)
    {
        $query = "DELETE FROM users
                  WHERE
                      id = ?";

        $values = array($id);

        return $this->db->query($query, $values);
    }
}
