<?php

//    Standard CRUD for a Comment object.
//  Includes a function to retrieve
//  comment by the 'parent' Message ID.

class Comment_Model extends CI_Model
{
    function create_comment($comment)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "INSERT INTO comments (author_id, message_id, comment_txt, created_at, updated_at) 
                         VALUES        (?,         ?,          ?,           ?,          ?)";

        $values = array($comment['author_id'], $comment['message_id'], $comment['comment_txt'], $now, $now);

        return $this->db->query($query, $values);
    }

    function retrieve_comment($comment_id)
    {
        $query = "SELECT
                      * 
                  FROM 
                      comments 
                  WHERE 
                      comments.id = ?";

        $values = array($comment_id);

        return $this->db->query($query, $values)->row_array();
    }

    function retrieve_comments_by_message_id($message_id, $sort_desc = false)
    {
        $query = "SELECT
                      comments.id, 
                      comments.author_id,
                      CONCAT(users.first_name, ' ', users.last_name) AS full_name, 
                      comments.comment_txt, 
                      DATE_FORMAT(comments.created_at, '%b %e, %Y') AS created_date,
                      comments.updated_at 
                  FROM 
                      comments 
                          INNER JOIN 
                      messages ON comments.message_id = messages.id 
                          INNER JOIN 
                      users ON comments.author_id = users.id 
                  WHERE 
                      messages.id = ? 
                  ORDER BY comments.created_at";

        if ($sort_desc) {
            $query .= " DESC";
        }
        $values = array($message_id);

        return $this->db->query($query, $values)->result_array();
    }

    function update_comment($comment)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "UPDATE comments
                  SET
                      comments.author_id = ?, 
                      comments.message_id = ?, 
                      comments.comment_txt = ?, 
                      comments.updated_at = ? 
                  WHERE
                      comments.id = ?";

        $values = array($comment['author_id'], $comment['message_id'], $comment['comment_txt'], $now, $comment['id']);

        return $this->db->query($query, $values);
    }

    function destroy_comment($id)
    {
        $query = "DELETE FROM comments 
                  WHERE
                      id = ?";

        $values = array($id);

        return $this->db->query($query, $values);
    }
}
