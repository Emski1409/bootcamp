<?php

class Truck
{
      private $stock = [];

    
      public function addStock($icecreams)
      {
         $this->stock = array_merge($this->stock, $icecreams);
      }

      public function vend($flavour)
      {
          foreach($this->$stock as $index => $icecream)
          {
            if($icecream ->getFlavour()== $flavour)
                return $this ->removeFromStock($index);
    
          }
          return null;
      }
      private function removeFromStock($index)
      {

       $items= array_splice($this->stock, $index, 1);
        return $items[0];
      }
}

?>