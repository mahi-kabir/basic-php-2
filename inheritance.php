<?php
    class Person {
        function Name(){
            echo 'this person is xyz';
        }

        function Age(){
            echo "his age is 26";
        }

        function Ability(){
            echo "this person can run very fast";
        }

        
    }

    class Person2 extends Person{     //inheritance
        function Cook(){
            echo 'Person2 can cook pasta';
        }

        function Ability(){
            echo "Person2 can play football very well.";
        }
    }

    $person2 = new Person2();
    $person2->Ability();
?>