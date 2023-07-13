<?php 

        class Movie {
            public $title;
            public $year;
            public $type;



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

