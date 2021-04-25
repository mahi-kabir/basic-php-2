<?php
    class Cars{
        public $name;
        private $mail;

    function __construct($aName, $aMail){
        $this-> name = $aName;
        $this -> mail = $aMail;
    }
    public function addFriend(){
        return "$this->mail added a new friend";
    }
    //getters

    function getMail(){
        return $this -> mail;
    }


    //setters

    public function setMail($mail){
        if(strpos($mail, '@')>-1){
            $this -> mail = $mail;
        }
        
    }
}

    $car1 = new Cars('toyota', 'Purple@yahoo.com');
    $car2 = new Cars('Range Rover', 'Silver@yahoo.com');
    echo $car1 -> addFriend();

    // $car2 -> setMail('Brown@yahoo.com');

    // echo $car1->getMail().'<br>';  //calling getters
    // echo $car2 -> getMail();
?>