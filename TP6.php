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
        //echo "Fin\n";
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
echo "\n";
$testee=new equipe("alexandre",1);
$testee->display();
echo "\n";
$testeee=new equipe("paul",3);
$testeee->display();
echo "\n";
$testeeee=new equipe("quentin",2);
$testeeee->display();

echo "\n";
equipe::displays();
?>

<br>
<br>
<hr>
<?php
class Formulaire
{
private $html = "";
private $interieur = "";
function __construct($fichier, $method)
{
$this->html .= "<form method='$method' action='$fichier'>";
    }
    function ajouterzonetexte($text){
    $this->html .= $text." <input type='text'name='nom6'/><br><br>";
    }
    function ajouterbouton(){
    $this->html .= "<button>Envoyer</button>";
    }
    function getform(){
    return $this->html . "</form>";
}
}

$p1 = new Formulaire("TP6.php","post");
$p1->ajouterzonetexte("Votre nom :");
$p1->ajouterzonetexte("Votre code :");
$p1->ajouterbouton();
echo $p1->getform();

?>


<form method='POST' action="TP6.php">
    Votre nom :<input type='text'name='nom'/>
    Votre prenom :<input type='text'name='prenom'/>
    Votre mail:<input type='text'name='mail'/>
    <select name="age">
        <option value="">--Age--</option>
        <option value="0-20">0-20</option>
        <option value="21-40">21-40</option>
        <option value="41-60">41-60</option>
        <option value="60+">61 et +</option>
    </select>
    H:<input
        type="radio"
        name="12"
        value="male">
    f:<input
        type="radio"
        name="12"
        value="femelle">
    <button value="submit" name="sub">Submit</button>
</form>
<?php
class recup{
private $nom;
private $prenom;
private $mail;
private $type;
private $age;
function __construct(){
    $this->nom=$_POST['nom'];
    $this->prenom=$_POST['prenom'];
    $this->age=$_POST['age'];
    $this->mail=$_POST['mail'];
    $this->type=$_POST['12'];
    }
    function display() {
        echo "\nVous êtes ".$this->type. " ".$this->nom." ".$this->prenom." vous avez entre ".$this->age." votre mail : ".$this->mail." !\n";
    }

}


$test = new recup();
$test->display();