<?php 
class Movie{
    public $id;
    public $title;
    public $genre;
    public $language;
    public $vote;
    public $year;
    public $image;
    public function __construct(int $id, string $title, string $genre, string $language, int $vote, string $year, string $image){
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->vote = $vote;
        $this->year = $year;
        $this->image = $image;
    }
}

$padrino = new Movie(1, 'Il Padrino', 'Gangster', 'en', 10, '1972', 'https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg' );
$via_col_vento = new Movie(2,'Via col vento' ,'Romantico', 'it', 8, '1939','https://m.media-amazon.com/images/I/51FvKgUQ1lL.jpg');


?>

<?php include './partials/template/head.php' ?>
<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    Bonus 1:
    Modificare la classe Movie in modo che accetti piú di un genere.

    Bonus 2:    
    Creare un layout completo per stampare a schermo una lista di movies.
    Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
    - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
    - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
    - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->
<header class="container-fluid">
    <nav class="d-flex justify-content-between align-items-center h-100 p-3">
        <div class="d-flex align-items-center p-1 h-100">
            <img src="./images/logo.png" alt="logo">
            <ul class="nav d-none d-lg-flex">
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Home</a> 
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Serie TV</a> 
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Film</a> 
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Nuovi e popolari</a> 
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white">Sfoglia per lingua</a> 
                </li>
            </ul>
        </div>
        
        <div>
            <input type="text" placeholder="Cerca film o serie TV" class="me-3" v-model="store.params.query" @keyup="$emit('onSearch')">
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <div class="row mt-4 gap-3 align-items-center flex-nowrap overflow-auto p-3">
            <div id="mycard" class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center rounded-4 overflow-hidden p-0">
                <div class="image">
                    <img src="<?php echo $padrino->image; ?>" alt="logo" class="img-fluid">
                </div>
                <div class="info px-4 d-flex flex-column justify-content-between overflow-auto">
                    <h4><?php echo $padrino->title; ?></h4>
                    <span>Genere: <?php echo $padrino->genre; ?></span>
                    <span>Lingua: <?php echo $padrino->language; ?></span>
                    <span>Voto: <?php echo $padrino->vote; ?></span>
                    <span>Anno: <?php echo $padrino->year; ?></span>
                </div>
            </div>
            <div id="mycard" class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center rounded-4 overflow-hidden p-0">
                <div class="image">
                    <img src="<?php echo $via_col_vento->image; ?>" alt="logo" class="img-fluid">
                </div>
                <div class="info px-4 d-flex flex-column justify-content-between overflow-auto">
                    <h4><?php echo $via_col_vento->title; ?></h4>
                    <span>Genere: <?php echo $via_col_vento->genre; ?></span>
                    <span>Lingua: <?php echo $via_col_vento->language; ?></span>
                    <span>Voto: <?php echo $via_col_vento->vote; ?></span>
                    <span>Anno: <?php echo $via_col_vento->year; ?></span>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include './partials/template/foot.php' ?>