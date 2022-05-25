<?php
// è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie{
    public $title;
    public $img;
    public $text;
    public $year;
    public $genre;
    public $lang;
    public $producer;

    function __construct($_title, $_img, $_text, $_year, $_genre, $_lang, $_producer){
        $this -> title      = $_title;
        $this -> img        = $_img;
        $this -> text       = $_text;
        $this -> year       = $_year;
        $this -> genre      = $_genre;
        $this -> lang       = $_lang;
        $this -> producer   = $_producer;
    }

    function getTitle(){
        return $this -> title;
    }
};

// MOVIE 1
$movie1 = new Movie('Avatar', 'https://www.artribune.com/wp-content/uploads/2022/03/Avatar-2-20th-century-fox.jpg', "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, beatae. Dolor modi nostrum minus debitis.", '2009', 'Science Fiction', 'English', 'James Cameron');
// MOVIE 2
$movie2 = new Movie('I, Robot', 'https://www.ilpuntoquotidiano.it/alboscuole/wp-content/uploads/2019/07/iorobot.jpg', "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque officiis eum odio repudiandae, quam sed.", '2004', 'Science Fiction, Action', 'English', 'Laurence Mark');
// var_dump($movie1, $movie2);

?>

<!doctype html>
<html lang='en'>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS v5.1.3 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' 
    integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

    <!-- Style CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>

    <div class="container py-5">
        <div class="row">
            <h2 class="text-center pb-4 display-4 fw-bold">Movies</h2>
            <div class="col-12 d-flex justify-content-center gap-5">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?=$movie1->img?>" alt="Card image cap" style="width: 100%; height: 180px;">
                    <div class="card-body">
                        <h3 class="card-title"><?=$movie1->title?></h3>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Year:</h6><span><?=$movie1->year?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Genre:</h6><span><?=$movie1->genre?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Language:</h6><span><?=$movie1->lang?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Producer:</h6><span><?=$movie1->producer?></span>
                        </div>
                        <p class="card-text py-1"><?=$movie1->text?></p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?=$movie2->img?>" alt="Card image cap" style="width: 100%; height: 180px;">
                    <div class="card-body">
                        <h3 class="card-title"><?=$movie2->title?></h3>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Year:</h6><span><?=$movie2->year?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Genre:</h6><span><?=$movie2->genre?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Language:</h6><span><?=$movie2->lang?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-1 pe-2 py-1">Producer:</h6><span><?=$movie2->producer?></span>
                        </div>
                        <p class="card-text py-1"><?=$movie2->text?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>