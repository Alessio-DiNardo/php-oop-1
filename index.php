<?php 
        //proprietà o campi
        class Movie {
            public $title;
            public $year;
            public $type;

        //costruttore
        function __construct($title, $year, $type){
            $this->title = $title;
            $this->year = $year;
            $this->type = $type;
        }    



            // metodi
            function getMovie(){
                return $this->title;
            }
        }

        $avatar = new Movie('Avatar', 2010, 'fantasy');
        echo $avatar->getMovie();


        $avengers = new Movie('Avengers', 2019, 'fantasy');
        echo $avengers->getMovie();


?>

