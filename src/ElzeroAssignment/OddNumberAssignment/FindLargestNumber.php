<?php

namespace ProblemSolve\App\ElzeroAssignment\OddNumberAssignment;

class FindLargestNumber
{
    private $list;
    private $listFakeNumber;
    private $sortedList;
    public function __construct(array $list)
    {
        $this->list = $list;
        $this->sortedList = [];
        $this->listFakeNumber = [];
        $this->run();
    }
    public function getLargestNumber()
    {
        return implode($this->sortedList);
    }
    private function run()
    {
        $this->listRealNumber();
        for($index = 10; $index >= -1; $index--)
        {
            for($inIndex = 0; $inIndex < count($this->listFakeNumber); $inIndex++)
            {
                if($this->listFakeNumber[$inIndex] == $index)
                {
                    $this->sortedList[] = $this->list[$inIndex];
                }
            }
        }
    }
    private function listRealNumber(){
        foreach ($this->list as $number)
        {
            if($number > 9)
            {
                $number = $this->getN($number);
            }
            $this->listFakeNumber[] = $number;
        }
    }
    private function getN(string $number)
    {
        if($number > 9)
        {
            $newNumber = 0;
            for($index = 0; $index < strlen($number); $index++)
            {
                $newNumber += (int)$number[$index];
            }
            if($newNumber > 9)
            {
                $this->getN($newNumber);
            }
        }
        return $newNumber;
    }  
}
