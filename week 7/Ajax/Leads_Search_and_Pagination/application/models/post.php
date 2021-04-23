<?php defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Model
{

    function __construct()
    {
        // Set table name 
        $this->table = 'posts';
    }

    // public function set($key, $Date1, $Date2)
    // {
    //     $this->db->select('*');
    //     $this->db->where('created_at >=', $Date1);
    //     $this->db->where('created_at <=', $Date2);
    //     $this->db->like('first_name', $key);
    //     $this->db->from('posts');
    //     $this->db->group_by('id', 'desc');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    /* 
     * Fetch records from the database 
     * @param array filter data based on the passed parameters 
     */
    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from($this->table);

        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        if (array_key_exists("search", $params)) {
            // Filter data by searched keywords 
            if (!empty($params['search']['keywords'])) {
                $this->db->like('first_name', $params['search']['keywords']);
            }
        }

        // Sort data by ascending or desceding order 
        if (!empty($params['search']['sortBy'])) {
            $this->db->order_by('first_name', $params['search']['sortBy']);
        } else {
            $this->db->order_by('id', 'desc');
        }

        if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
            $result = $this->db->count_all_results();
        } else {
            if (array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')) {
                if (!empty($params['id'])) {
                    $this->db->where('id', $params['id']);
                }
                $query = $this->db->get();
                $result = $query->row_array();
            } else {
                $this->db->order_by('id', 'desc');
                if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit'], $params['start']);
                } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit']);
                }

                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
            }
        }

        // Return fetched data 
        return $result;
    }
}
