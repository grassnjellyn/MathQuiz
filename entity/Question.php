<?php

class Question 
{
    private $idQuestion;
    private $question;
    private $answer;
    private $explanation;
    /**@var $quiz Quiz */
    private $quiz; 

    public function __construct()
    {
        $this->quiz = new Quiz();
    }

    /**
     * @return Quiz
     */
    public function getQuiz()
    {
        if (!isset($this->quiz)) {
            $this->quiz = new Quiz();
        }
        return $this->quiz;
    }

    /**
     * @param Quiz $quiz
     */
    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;
    }

    /**
     * @return mixed 
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * @param mixed $idQuestion
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;
    }

    /**
     * @return mixed 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed 
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * @param mixed $explanation
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
    }
    
    public function __set($name, $value)
    {
        if (!isset($this->quiz)) {
            $this->quiz = new Quiz();
        }
        switch ($name) {
            case 'id_question':
                $this->idQuestion = $value;
                break;
            case 'quiz_id_quiz':
                $this->quiz->setIdQuiz($value);
                break;
        }
    }
}

?>