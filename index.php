<?php 

        class Movie {
            public $title;
            public $year;
            public $type;



            function getMovie(){

            }
        }

        $avatar = new Movie();
        $avatar->title = 'Avatar';
        $avatar->year = 2010;
        $avatar->type = 'fantasy';
        echo $avatar->getMovie();

?>

