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
?>

