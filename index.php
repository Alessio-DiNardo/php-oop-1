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

            function getAllInfo(){
                $allInfo= [];
                $allInfo[] = $this->title;
                $allInfo[] = $this->year;
                $allInfo[] = $this->type;
                echo implode(',',$allInfo);
                return $allInfo;

            }

            // metodi
            function getMovie(){
                return $this->title;
            }
        }
        // oggetto (istanza della classe movie)
        $avatar = new Movie('Avatar', 2010, 'fantasy');
        
        $avengers = new Movie('Avengers', 2019, 'fantasy');
        echo $avengers->getMovie();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>
<?php 
    $avatar-> getAllInfo();

?>
</p>


</body>
</html>