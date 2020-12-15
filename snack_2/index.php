<!-- Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

if(strlen($name) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age)){
    echo "Accesso riuscito";
} else {
    echo "Acesso negato";
};

echo "<br> <br> <br> queystring da inserire velocemente ( ?name=mario&email=mario@gmail.com&age=30 ) e testare se : <br>
1. name sia più lungo di 3 caratteri <br>
2. mail contenga un punto e una chiocciola <br>
3. age sia un numero.
"

?>
