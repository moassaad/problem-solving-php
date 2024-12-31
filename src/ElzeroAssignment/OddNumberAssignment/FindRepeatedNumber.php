<?php

namespace ProblemSolve\App\ElzeroAssignment\OddNumberAssignment;

class FindRepeatedNumber
{
    private $list;
    private $listRepeatedNumber;
    public function __construct(array $list)
    {
        $this->list = $list;
        $this->listRepeatedNumber = [];
        $this->run();
    }
    public function getRepeatedNumberList()
    {
        return implode($this->listRepeatedNumber);
    }
    private function run()
    {
        for($index = 0; $index <= count($this->list)-1; $index++)
        {
            $count = 0;
            for($inIndex = $index; $inIndex <= count($this->list)-1; $inIndex++)
            {
                if($this->list[$index] == $this->list[$inIndex])
                {
                    $count++;
                }
            }
            if($count > 1)
            {
                if(!key_exists($this->list[$index],$this->listRepeatedNumber))
                {
                    $this->listRepeatedNumber[$this->list[$index]] = new RepeatedNumber($this->list[$index], $count);
                }
            }
        }
    }
}
class RepeatedNumber
{
    public int $number;
    public int $count;
    public function __construct(int $number, int $count)
    {
        $this->number = $number;
        $this->count = $count;
    }
    public function __tostring()
    {
        return "{{$this->number}: {$this->count}}";
    }
}
