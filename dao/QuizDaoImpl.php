<?php

class QuizDaoImpl
{
    public function fetchAllQuiz()
    {
        $link = ConnectionUtil::getMySQLConnection();
        $query = 'SELECT * FROM quiz';
        $stmt = $link->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Quiz');
        $stmt->execute();
        $link = null;
        return $stmt->fetchAll();
    }
}

?>