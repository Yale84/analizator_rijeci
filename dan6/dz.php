Multiload
1. Korisnik odabire koliko datoteka želi uploadati, max 5 komada
2. Nakon odabira pojavljuje se obrazac s 
onoliko polja za odabir datoteke koliko je korisnik odabrao
3. nakon pritiska na gumb upload sve se datoteke moraju uploadati
4. Provjeriti da li mapa za upload postoji 
i ako ne postoji stvoriti je dinamički (koristeći php ugrađene funkcije)
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
