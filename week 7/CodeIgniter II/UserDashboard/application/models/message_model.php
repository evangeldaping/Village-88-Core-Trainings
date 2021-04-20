<?php

//    Standard CRUD for a Message object.
//  Includes a function to retrieve
//  message by the 'parent' Profile ID.

class Message_Model extends CI_Model
{
    function create_message($message)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "INSERT INTO messages (author_id, profile_id, message_txt, created_at, updated_at) 
                         VALUES        (?,         ?,          ?,           ?,          ?)";

        $values = array($message['author_id'], $message['profile_id'], $message['message_txt'], $now, $now);

        return $this->db->query($query, $values);
    }

    function retrieve_message($message_id)
    {
        $query = "SELECT
                      * 
                  FROM 
                      messages
                  WHERE 
                      messages.id = ?";

        $values = array($message_id);

        return $this->db->query($query, $values)->row_array();
    }

    function retrieve_messages_by_profile_id($profile_id, $sort_desc = false)
    {
        $query = "SELECT
                      messages.id,
                      messages.author_id,
                      CONCAT(users.first_name, ' ', users.last_name) AS full_name, 
                      messages.message_txt, 
                      DATE_FORMAT(messages.created_at, '%b %e, %Y') AS created_date,
                      messages.updated_at
                  FROM
                      messages 
                          INNER JOIN
                      users ON messages.author_id = users.id
                  WHERE
                      messages.profile_id = ?
                  ORDER BY messages.created_at";

        if ($sort_desc) {
            $query .= " DESC";
        }

        $values = array($profile_id);

        return $this->db->query($query, $values)->result_array();
    }

    function update_message($message)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "UPDATE messages 
                  SET
                      messages.author_id = ?, 
                      messages.profile_id = ?, 
                      messages.message_txt = ?, 
                      messages.updated_at = ? 
                  WHERE
                      messages.id = ?";

        $values = array($message['author_id'], $message['profile_id'], $message['message_txt'], $now, $message['id']);

        return $this->db->query($query, $values);
    }

    function destroy_message($id)
    {
        $query = "DELETE FROM messages 
                  WHERE
                      id = ?";

        $values = array($id);

        return $this->db->query($query, $values);
    }
}
