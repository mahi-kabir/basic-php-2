<?php
class User {
    public $name; private $cell;

    function __construct($aName, $aCell){
        $this->name  = $aName;
        $this->cell = $aCell;
    }

    //getters
    public function getCell(){
        return $this->cell;
    }

    //setters
    public function setCell($cell){
        if(strpos($cell,'@')>-1){
            return $this->cell = $cell ;
        }
        
       
    }
}

class User2 extends User{
    public $rank;
    public function __construct($name, $cell, $rank){
        $this->rank = $rank;

        parent :: __construct($name, $cell, $rank);  //calling 
    }
}

$user1 = new User('Asha','asha123@yahoo.com');

$user3 = new User2('mahi','mahi123@yahoo.com', 7);

echo $user3->name . '<br>';
echo $user3->getCell(). '<br>';
echo $user3->rank;

?>