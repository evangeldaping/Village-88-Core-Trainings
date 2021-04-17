<?php

class Player_filter_model extends CI_Model
{
    public function search_name($key)
    {
        $this->db->select('*');
        $this->db->like('name', $key);
        // $this->db->or_like('sports', $key);
        // $this->db->or_like('gender', $key);
        return $this->db->get('players')->result();
    }

    function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('players');
        $this->db->where('player_status', '1');
        return $this->db->get();
    }

    function make_query($name, $gender, $sports)
    {
        $query = "
        SELECT * FROM players 
        WHERE player_status = '1' 
        ";

        if (isset($name)) {
            $name_filter = implode("','", $name);
            $query .= "
    AND name IN('" . $name_filter . "')
   ";
        }

        if (isset($gender)) {
            $gender_filter = implode("','", $gender);
            $query .= "
    AND gender IN('" . $gender_filter . "')
   ";
        }

        if (isset($sports)) {
            $sports_filter = implode("','", $sports);
            $query .= "
    AND sports IN('" . $sports_filter . "')
   ";
        }
        return $query;
    }

    function count_all($name, $gender, $sports)
    {
        $query = $this->make_query($name, $gender, $sports);
        $data = $this->db->query($query);
        return $data->num_rows();
    }

    function fetch_data($limit, $start, $name, $gender, $sports)
    {
        $query = $this->make_query($name, $gender, $sports);

        $query .= ' LIMIT ' . $start . ', ' . $limit;

        $data = $this->db->query($query);

        $output = '';
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $output .= '
                <div class="col-sm-4 col-lg-3 col-md-3">
                    <div style="border:1px solid white; border-radius:15px; padding:16px; margin-bottom:16px; height:250px;">
                        <img src="' . base_url() . 'images/' . $row['image'] . '" alt="" class="img-responsive" >
                        <p align="center" style="background-color:white; color:hotpink;><strong><a href="#">' . $row['name'] . '</a></strong></p>
                    </div>
                </div>
                ';
            }
        } else {
            $output = '<h3>No Data Found</h3>';
        }
        return $output;
    }
}
