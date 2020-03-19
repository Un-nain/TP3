<?php
class equipe{
    private $nom="PSG";
    private $titre=12;
    static $NBequipe = 0;
    static function displays(){
        echo self::$NBequipe."\n";
    }
    function display()
    {
        echo $this->titre . $this->nom;
    }
    function __construct($name, $titres) {
        $this->nom = $name;
        $this->titre = $titres;
        ++self::$NBequipe;

    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function getTitre(): int
    {
        return $this->titre;
    }
    public function setTitre(int $titre)
    {
        $this->titre = $titre;
    }
    function __destruct(){
        echo "Fin\n";
    }

}
/*$test = new equipe();
$test->display();
echo '<br>';
$test->setNom("test2");
$test->setTitre(13);
$test->display();
echo '<br>';*/
$teste=new equipe("eloi",0);
$teste->display();
echo '<br>';
$testee=new equipe("alexandre",1);
$testee->display();
echo '<br>';
$testeee=new equipe("paul",3);
$testeee->display();
echo '<br>';
$testeeee=new equipe("quentin",2);
$testeeee->display();

echo '<br>';
equipe::displays();