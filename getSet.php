<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
        class Movie{
            public $title;
            private $rating;

            function __construct($aTitle, $aRating){
                $this -> title = $aTitle;
                //$this -> rating = $aRating;
                $this -> setRating($aRating);
            }
            //using getRating

            function getRating(){
                return $this -> rating;
            }


            //using setRating

            function setRating($rating){
                if($rating == "G"|| $rating == "PG-13" || $rating = "PG"|| $rating == "R"){
                    $this -> rating = $rating; 
                }

                else{
                    $this -> rating = "NR";
                }
            }
          
        }
    $avengers = New Movie('avengers','G');
   
    echo $avengers -> getRating();
    //echo $avengers -> rating;


    ?>
</body>
</html>