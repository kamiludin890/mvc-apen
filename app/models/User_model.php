<?php
class User_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUserName($username)
    {
        $this->db->query("SELECT user_name FROM " . DB_NAME . ".db_user WHERE user_name='$username'"); //WHERE 'user_name = :username'
        // $this->db->bind('username', $username);
        return $this->db->single();
    }
}
