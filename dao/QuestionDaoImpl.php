<?php

class QuestionDaoImpl
{
    public function fetchAllQuestion()
    {
        $link = ConnectionUtil::getMySQLConnection();
        $query = 'SELECT * FROM question';
        $stmt = $link->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Question');
        $stmt->execute();
        $link = null;
        return $stmt->fetchAll();
    }
}

?>