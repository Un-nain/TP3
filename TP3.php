<?php
function add(){
    static $nb=0;
    $nb ++;
    echo $nb."<br>" ;
}
function modif(&$test)
{
    $test=12;
    echo $test."<br>";
}


add();
add();
add();
add();
add();
add();
$six =6;
modif($six);
echo $six."<br>";
?>
<br>
<hr>
<?php
$identite = ['alain', 'basile', 'David', 'Edgar'];
$age = [1, 15, 35, 65];
$mail = ['penom.nom@gtail.be', 'truc@bruce.zo', 'caro@caramel.org', 'trop@monmel.fr'];

function domaine($tab){
    for ($i=0;$i<4;$i++){
    $tab1=strstr($tab[$i],"@");
    $tab2=strstr($tab1,".");
    echo $tab1."<br>".$tab2."<br>";}}
domaine($mail);
echo "<br><hr>";
function afficher($id,$ag,$email)
{
    $i = rand(0, 3);
    echo "\"je me nomme " . $id[$i] . " j'ai " . $ag[$i] . " ans et mon mail est " . $email[$i] . " du domaine DOMAINE avec l'extension EXTENSION";
}
afficher($identite,$age,$mail);
?>
<br><hr>
<?php
function ligne(){
    $test = "*       *";
    echo "**** <br><hr>";
    echo "* * * <br>";
    echo "* * * <br>";
    echo "* * *<br><hr>";
    echo "* <br>";
    echo "* * <br>";
    echo "* * *<br><hr>";
    echo "* * * * *<br>"."* &nbsp &nbsp &nbsp &nbsp &nbsp*"."<br>* &nbsp &nbsp &nbsp &nbsp &nbsp*<br>* &nbsp &nbsp &nbsp &nbsp &nbsp*<br>* * * * *<br><hr>";
    echo "*<br>* *<br>* &nbsp *<br>* &nbsp &nbsp *<br>*****<br><hr>";
    echo "*****<br>* &nbsp &nbsp *<br>* &nbsp &nbsp *<br>* &nbsp *<br>* *<br>*<br><hr>";
}
ligne();
?>


<hr><br>
<?php
function chiffrement (&$achiffer,$clef){
    $t=strlen($achiffer);
    for($i=0;$i<$t;$i++){
        $test=ord($achiffer[$i]);
        $test+=$clef;
        if($test >122){
            $achiffer[$i]=chr(97+$test-122);
        }
        else{
            $achiffer[$i]=chr(ord($achiffer[$i])+$clef);
        }
    }
    echo $achiffer;
}
$b="boujour";
chiffrement($b,1);
?>