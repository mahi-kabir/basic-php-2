<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Classes</title>
</head>
<body>
    <?php
    
        // class Person {
        //     var $name;
        //     var $age;
        // }
    
        // $person1 = new Person();  //creating a object
        // $person1->name = 'John';
        // $person1->age = 26;

        // class Products {
        //     var $name;
        //     var $price;
        //     var $color;

            //Using constructor
            
    //     function __construct($aName, $aPrice, $aColor){
    //         $this->name = $aName;
    //         $this->price = $aPrice;
    //         $this-> color = $aColor;
    //     }
    // }

    //     $product1 = new Products('Harry Potter', 300, 'red');
    //     $product1->name = "Misir ali";
    //     $product2 = new Products('himu', 400, 'yellow');
        
    //     echo $product1 -> name;
    //     echo $product2 -> name;



    //USING OBJECT FUNCTION



    class Buddies{
        var $name;
        var $age;
        var $gpa;

        function __construct($aName, $aAge, $aGPA){
            $this -> name = $aName;
            $this -> age = $aAge;
            $this -> gpa = $aGPA;
        }

        //object function

        function hasHonors(){
            if($this-> gpa >= 3.5){
              return "true";
            } 

            return "false";
        }

        function hasAge(){
            if($this -> age >= 28){
                return 'older';
            } else{
                return 'younger';
            }
        }
    }

        $buddies1 = new Buddies('Sumon', 28, 3.6);
        $buddies2 = new Buddies('Sohan', 27, 3.98);
        
        echo $buddies1->hasAge();
          
            

        
       

    ?>
</body>
</html>