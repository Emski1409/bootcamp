<?php

require_once('quiz.php');

class Bus
{
    public function getCapacity($seats)
    {
        return $this->numberOfSeats(100, $seats);
    }

    public function getPassengers($people)
    {
        return $this->numberOfPassengers(50, $people);
    }

    
    private function busCapacity($seats, $people)
    { 
        $passengers = [];
        for($i = 0; $i < $people; $i++)
            $passengers[] = new capacity($people);

        return $passengers;
    }
    private function removeFromCapacity($seats,$people)
    {
        $items = array_splice($this->numberOfPassengers, $index, 1);
        return $items[0];
    }
}