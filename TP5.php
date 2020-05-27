<!DOCTYPE html>
<body>
<a href="TP5.php?valeur=15">Lien vers page2</a>
<br>
<form method="post">
    input <input type="text" name="valeur1"/>
    <input type="submit" value="temp"/>
</form>
</body>
</html>
<?php
//if(isset($_POST['valeur1'])){
    $a=$_POST['valeur1'];
    echo $a;
echo "nom :".$_POST['valeur1'];
echo '<br>';
echo ($_POST['valeur1']-32)*(5/9);//}


echo '<br>';
echo '<hr>';
?>

<!DOCTYPE html>
<body>
<br>
<form method="post">
    prenom <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"/>
    nom <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"/>
    <br>
    debutant<input
           type="radio"
           name="12"
           value="debutant">
    confirmé <input
        type="radio"
        name="12"
        value="confirmé">
<br>
<input type="submit" value="valider"/>
<input type="reset" value="suprimer" />
</form>
</body>
</html>
<?php
$test=$_POST['prenom'];
$testt=$_POST['nom'];
$testtt=$_POST['12'];
echo $test;
echo $testt;
echo $testtt;
?>
<br>
<hr>
<br>
<form method="post" enctype="multipart/form-data">
    <p>
        Fichier <input type="file" name="fichier1">
        Fichier <input type="file" name="fichier2">
        Valider <input type="submit" value="Envoi">
    </p>
</form>
<?php
$fichier1Name=$_FILES["fichier1"]["name"];
$fichier1Type=$_FILES["fichier1"]["type"];
$fichier1Size=$_FILES["fichier1"]["size"];
$fichier1Tmp_Name=$_FILES["fichier1"]["tmp_name"];
$fichier1Error=$_FILES["fichier1"]["error"];

$fichier2Name=$_FILES["fichier2"]["name"];
$fichier2Type=$_FILES["fichier2"]["type"];
$fichier2Size=$_FILES["fichier2"]["size"];
$fichier2Tmp_Name=$_FILES["fichier2"]["tmp_name"];
$fichier2Error=$_FILES["fichier2"]["error"];

move_uploaded_file($_FILES["fichier1"]["tmp_name"],$fichier1Name);
move_uploaded_file($_FILES["fichier2"]["tmp_name"],$fichier2Name);
echo "
                        <table width=60% border=1>
                        <thead>
                         <tr><th></th><th>Fichier 1</th><th>Fichier 2</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>name</td><td>$fichier1Name</td><td>$fichier2Name</td></tr> 
                        <tr><td>type</td><td>$fichier1Type</td><td>$fichier2Type</td></tr> 
                        <tr><td>tmp_name</td><td>$fichier1Tmp_Name</td><td>$fichier2Tmp_Name</td></tr> 
                        <tr><td>error</td><td>$fichier1Error</td><td>$fichier2Error</td></tr>
                        <tr><td>size</td><td>$fichier1Size</td><td>$fichier2Size</td></tr>
                        <tr><td>Image</td><td><img src='$fichier1Name'></td><td><img src='$fichier2Name'></td></tr>
                        </tbody>
                        </table>";
?>
<br>
<hr>
<?php
setcookie ("cookie0","teset0",time()+9000 );
setcookie ("cookie1","teset1",time()+(3600*24*14) );
echo $_COOKIE['cookie1'];
echo '<br>';
echo $_COOKIE['cookie0'];
echo '<br>';
print_r($_COOKIE);
echo '<br>';
setcookie("cookie0"," ",time()+9000);
echo $_COOKIE['cookie0'];
echo '<br>';
setcookie("cookie1","",time()-1);
echo '<br>';
?>

<?php
$tab=array(
"nom1"=>"valeur1",
"nom2"=>"valeur2",
"nom3"=>"valeur3"
);

foreach ($tab as $x=> $x_value)
{
    setcookie($x,$x_value,time()+90000);
    echo $_COOKIE[$x];
}
?>

<br>
<hr>

<?php
session_id("12");
session_start();
echo "id".session_id();
$date =date("d-m-Y",time());
$_SESSION['date']=$date;
echo $_SESSION['date'];
echo '<a href="TP5.php"> LA PAGE</a>';

?>

<br>
<hr>

<?php
$file =fopen('test-fic.txt','a+');
fwrite($file, "\n12");
fclose($file);
$file=fopen('test-fic.txt','r');
$nbligne = 0;
while($ligne=fgets($file))
{
   $nbligne++;
   echo $nbligne.":".$ligne.'<br>';
}?>
<br>
<hr>
<?php
//$file=fopen('contact.txt','r');
//$nbligne = 0;
//while($ligne=fgets($file))
//{
//$nbligne++;
//echo $nbligne.":".$ligne.'<br>';
//}?>
<table>
    <?php
    $file=fopen('contact.txt','r');
    while($ligne=fgets($file))
    {
    $nbligne++;
        $ligne = "<tr><td>".str_replace(";" , "</td><td>", $ligne);
        echo $ligne.'</tr>';
    }?>



</table>
<br>
<hr>


<form method="post">
    prenom <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
    <br>
    nom <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"   >
    <br>
    <input type="submit" value="valider"/>
    <br>
</form>
<?php

$test=$_POST['prenom'];
$testt=$_POST['nom'];
$file = fopen("fiche.txt",'r+');
$nbligne=0;
?>
<table><?php
while($ligne=fgets($file))
{
    $nbligne++;
    $ligne = "<tr><td>".str_replace(";" , "</td><td>", $ligne);
    echo $ligne.'</tr>';
}
fwrite($file,"\n".$nbligne.";".$test.";".$testt);
fclose($file);

?>
</table>