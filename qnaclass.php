<?php

class QnA {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Reads questions and answers from the database.
     * @return array An array containing all the questions and answers from the database.
     */
    public function readQuestionsAndAnswers() {
        $questionsAndAnswers = array();

        $query = "SELECT * FROM qna";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $questionsAndAnswers[] = array('question' => $row['question'], 'answer' => $row['answer']);
            }
        }

        return $questionsAndAnswers;
    }
}
