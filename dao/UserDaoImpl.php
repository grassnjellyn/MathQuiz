<?php

class UserDaoImpl
{
    public function fetchAllUser()
    {
        $link = ConnectionUtil::getMySQLConnection();
        $query = 'SELECT r.id_role AS "role_id_role", r.nama_role AS "nama_role", id_user, username, password, email FROM user u LEFT OUTER JOIN role r ON u.role_id_role = r.id_role';
        $stmt = $link->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        $stmt->execute();
        $link = null;
        return $stmt->fetchAll();
    }
}

?>