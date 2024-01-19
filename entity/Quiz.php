<?php

class Quiz
{
    private $idQuiz;
    private $title;
    private $description;
    private $difficulty;
    /**@var $user User */
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * @return User
     */
    public function getUser()
    {
        if (!isset($this->user)) {
            $this->user = new User();
        }
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getIdQuiz()
    {
        return $this->idQuiz;
    }

    /**
     * @param mixed $idQuiz
     */
    public function setIdQuiz($idQuiz)
    {
        $this->idQuiz = $idQuiz;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed 
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @param mixed $difficulty
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    public function __set($name, $value)
    {
        if (!isset($this->user)) {
            $this->user = new User();
        }
        switch ($name) {
            case 'id_quiz':
                $this->idQuiz = $value;
                break;
            case 'user_id_user':
                $this->user->setIdUser($value);
                break;
        }
    }
}

?>