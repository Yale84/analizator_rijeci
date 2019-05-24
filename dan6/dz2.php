<form action="" method="POST" enctype="multipart/form-data">
Odaberite broj slika za upload:<br>
<p>
    <label for="brojzaupload">Ime:</label>
    <input type="number" name="brojzaupload" id="brojzaupload" placeholder="Upišite broj od 1 do 5.">
</p>
<p>
    <input type="submit" name="submit" value="Pošalji">
</p>
<?php
if (isset($_POST['submit'])){
    if (($_POST['brojzaupload']<1) || ($_POST['brojzaupload']>5)){
        echo 'Unesite valjani broj između 1 i 5.';
    } else {
        for ($i=0; $i < $_POST['brojzaupload']; $i++) { 
            include 'dz2forma.php';
        }
        ?>
        <br>
        <input type="submit" name="submit2" value="Prenesi">
        </form>
        <?php
    }
}

if (!is_dir ($upload_folder = 'C:/xampp/htdocs/download')){
    mkdir ('C:/xampp/htdocs/download');
}

if (isset($_POST['submit2'])){
$provjera= array(0);
for ($i=1; $i < (count($_FILES)+1); $i++) { 

    $filename = $_FILES['datoteka'.$i]['name'];
    $tempname = $_FILES['datoteka'.$i]['tmp_name'];
    $error = $_FILES['datoteka'.$i]['error'];
    $size = $_FILES['datoteka'.$i]['size'];
    $flag1 = 1;
    if ($error == UPLOAD_ERR_OK && $size != 0){
        $path = pathinfo($filename);
        $extension = $path['extension'];
        $new_name = time().rand(1000,100000).'.'.$extension;
        $destfile = $upload_folder.'/'.$new_name;
        if (move_uploaded_file($tempname,$destfile)) {
            $provjera[$i] = 1;
        } else {
            $provjera[$i] = 2;
        } 
    } else {
        echo 'Došlo je do pogreške prilikom uploada.';
        $flag1 = 2;
    }
}
$flag2 = 1;
for ($j=1; $j<(count($_FILES)); $j++) { 
    if ($provjera[$j] == 2){
         echo '<br>Došlo je do pogreške prilikom prijenosa datoteke '.$j;
        $flag2 = 2;
}    
}
    if ($flag2 == 1 && $flag1 == 1)  {
    echo '<br>Upload svih datoteka je bio uspješan.';

} 
}
?>
