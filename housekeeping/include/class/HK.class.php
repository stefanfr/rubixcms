<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 25-4-14
 * Time: 20:03
 */

class HK {
    public function UserInfo($u_name = '', $row = '')
    {
        global $db;
        $user = $db->query("SELECT * FROM users WHERE username = '".$u_name."' LIMIT 1")->fetch_assoc();
        return $user[$row];
    }

    public function UsersOnline(){
        global $db;
        $online = $db->query("SELECT rooms_loaded FROM server_status")->fetch_assoc();
        return  $online['rooms_loaded'];
    }

    public function RoomsLoaded(){
        global $db;
        $online = $db->query("SELECT users_online FROM server_status")->fetch_assoc();
        return  $online['users_online'];
    }
} 