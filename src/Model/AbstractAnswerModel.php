<?php

namespace Model;

/**
 * Class AbstractAnswerModel
 */
abstract class AbstractAnswerModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var bool
     */
    protected $answer;

    /**
     * RiskModel constructor.
     *
     * @param int  $id
     * @param bool $answer
     */
    public function __construct($id, $answer)
    {
        $this->id = $id;
        $this->answer = $answer;
    }

    /**
     * Id getter.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Answer getter.
     *
     * @return bool|null
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}