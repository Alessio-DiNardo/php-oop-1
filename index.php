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

        $avatar = new Movie();
        $avatar->title = 'Avatar';
        $avatar->year = 2010;
        $avatar->type = 'fantasy';
        echo $avatar->getMovie();
        var_dump($avatar);

        $avengers = new Movie();
        $avengers->title = 'Avengers endgame';
        $avengers->year = 2019;
        $avengers->type = 'fantasy';
        echo $avengers-> getMovie();
        var_dump($avengers);



?>

