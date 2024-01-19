<?php

class RoleDaoImpl
{
    public function fetchAllRole()
    {
        $link = ConnectionUtil::getMySQLConnection();
        $query = 'SELECT * FROM role';
        $stmt = $link->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Role');
        $stmt->execute();
        $link = null;
        return $stmt->fetchAll();
    }
}

?>