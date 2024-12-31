<?php

namespace ProblemSolve\App\ElzeroAssignment\OddNumberAssignment;

class Application
{
    public $findOddNumber;
    public $findRepeatedNumber;
    public $findLargestNumber;
    public function __construct(array $list)
    {
        $this->findOddNumber = new FindOddNumber($list);
        $this->findRepeatedNumber = new FindRepeatedNumber($this->findOddNumber->getOddList());
        $this->findLargestNumber = new FindLargestNumber($this->findOddNumber->getOddList());
    }
    public function getOddList()
    {
        return $this->findOddNumber->getOddList();
    }
    public function getRepeatedOddList()
    {
        return $this->findRepeatedNumber->getRepeatedNumberList();
    }
    public function getLargestNumberList()
    {
        return $this->findLargestNumber->getLargestNumber();
    }
}

