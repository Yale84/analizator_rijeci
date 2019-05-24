<form action="" method="POST" enctype="multipart/form-data">
    <h3>Upload</h3>
    <input type="file" name="datoteka" id="datoteka">
    <br><br>
    <input type="submit" name="upload" value="Prenesi">
</form>
<?php

$upload_folder = 'uploads';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

if(isset($_POST['upload'])){
    $filename = $_FILES['datoteka']['name'];
    $tmpname = $_FILES['datoteka']['tmp_name'];
    $error = $_FILES['datoteka']['error'];
    $size = $_FILES['datoteka']['size'];

    if($error == UPLOAD_ERR_OK && $size != 0) {
        $path = pathinfo($filename);
        //print_r($path);
        $ext = $path['extension'];
        $new_name = time().rand(1000, 10000).'.'.$ext;
        echo $new_name;
        $destfile=$upload_folder.'/'.$new_name;

        if (move_uploaded_file($tmpname,$destfile)) {
            echo 'Upload je bio uspješan!<br>';
            echo '<a href="'.$destfile.'">Prikaži originalnu sliku</a>';
            echo "<p><img src=$destfile width=500 /></p>";
        }else {
            echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
        }
    }else{
        echo 'Došlo je do pogreške prilikom uploada!';
    }
}

?>