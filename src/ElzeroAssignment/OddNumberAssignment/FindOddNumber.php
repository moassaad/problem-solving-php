<?php

namespace ProblemSolve\App\ElzeroAssignment\OddNumberAssignment;

class FindOddNumber
{
    private array $list;
    private array $listOddNumber;
    public function __construct(array $list)
    {
        $this->list = $list;
        $this->listOddNumber = [];
        $this->run();
        
    }
    public function getOddList()
    {
        return $this->listOddNumber;
    }
    private function run()
    {
        foreach($this->list as $number)
        {
            if($this->isOdd($number))
            {
                $this->listOddNumber[] = $number;
            }
        }
    }
    private function isOdd(int $number)
    {
        return ($number % 2 == 1)? true : false;
    }
    
}
