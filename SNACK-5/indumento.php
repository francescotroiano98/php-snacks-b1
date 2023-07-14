Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze. 

<?php 

    class Indumento {

        public $materiale;

        function __construct(String $materiale){
            $this->materiale = $materiale;
        }

    }
    class Scarpa extends Indumento {

        public $tacco;

        function __construct(String $materiale, String $tacco){
            parent::__construct($materiale);
            $this->tacco = $tacco;
        }

    }
    class Cappello extends Indumento {

        public $visiera;

        function __construct(String $materiale, String $visiera){
            parent::__construct($materiale);
            $this->visiera = $visiera;
        }

    }

    var_dump ( new Indumento ('Tessuto'), new Scarpa('ecopelle', 'metallo'), new Cappello ('cotone', 'baseball'));


