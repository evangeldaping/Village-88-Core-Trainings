<?php
class People_manager extends Database
{
    public function __construct($db_name)
    {
        $this->connect($db_name);
    }
    public function get_all_users()
    {
        $query = "SELECT * FROM people";
        return $this->fetch_all($query);
    }
    public function get_user_by_id($id)
    {
        $query = "SELECT * FROM people WHERE people.id = $id";
        return $this->connection->fetch_record($query);
    }
}
