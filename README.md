# T22-PHP+MySQLi

1. PHP recap ($, ARRAYS, ARRAYS assoc)
2. MAIL
3. PhpMyAdmin
4. MYSQLI_CONNECT
5. MYSQLI_SELECT_DB
6. MYSQLI_QUERY
7. MYSQLI_NUM_ROWS, MYSQLI_FETCH_ARRAY
8. MYSQLI_CLOSE
9. COOKIES, SESSIONS

```
ZADT32201.
Gra RPG tekstowa http://animateria.pl/gra-rpg/

- Wczytaj przygotowaną treść tekstu linia po lini
- Wyświetl linia po lini treść gry
- Użyj kodu lini tdo przejścia między zdarzeniami.
- Przygotuj obsługę stron zawiertających tylko opisy oraz opisy wraz z pytaniami.

Na ocenę 5:
- umieść pliki gry zarówno na swoim koncie github, jak i na ftp 
(poświadczenia w opisie do porzedniej lekcji https://github.com/T3iL/T321-PHP)

- przygotuj fabułę zbudowaną z co najmniej 40 lokacji
- zabezpiecz przed przejściem dalej bez wyboru odpowiedzi
- zabezpiecz przed rozpoczynaniem od dowolnej lokacji (np przez wpisanie w url)

proszę o informację na MS teams ukończeniu zadania

ZADT32202.
Przygotuj aplikację licznik odwiedzin 
zliczający wszystkich użytkowników odwiedzających stronę którzy klikną przycisk.

ZADT32203.
Zaprojektuj i wykonaj formularz:

- użytkowników portalu randkowego [Mikołaj]
- sprzedaży ubezpieczeń komunikacyjnych [Michał]
- zamówienia wycieczki zagranicznej [Konrad]
- wyceny usługi sprzątania/remontowej [Marcin]

Zapisz wprowadzane dane do bazy danych oraz stwórz (na osobnej stronie) raport 
zawierający tabelę z wprowadzonymi danymi zabezpieczony hasłem i nazwą użytkownika.


```
DB CR-UD-
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['username']) && !empty($_GET['username'])){
    $insertsql = 'INSERT INTO subscribers (id, username)
    VALUES (NULL, "'. $_GET['username'] . '")';
    if (mysqli_query($conn, $insertsql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertsql . "<br>" . mysqli_error($conn);
    }

}


$readsql = "SELECT * FROM subscribers";

$result = mysqli_query($conn, $readsql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
      echo "<li>id: " . $row["id"]. " - Name: " . $row["username"]. "</li>";
    }
    echo "</ul>";
  
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<form>
<input type="text" name="username" />
<input type="submit" value="Dodaj usera" />
</form>
```

```php




<html>
    <body>
<?php
    if(file_exists('gra.txt')){
        echo "Jest plik";
        $my_file = fopen('gra.txt','r') or die;
        
        $myArray = array();

        while (!feof($my_file)) {
            $line = fgets($my_file);
            // $myArray[] = explode(' ', $line);
            $myArray[] = "<p>" . $line . "</p>";
         }

        fclose($my_file);
    }

    $counter = 0;

    if(isset($_GET['index'])){
        $counter = $_GET['index'] + 1;
    }

?>

<form>
    <input name="index" value="<?php echo $counter?>"/>
    <input type="submit" value="next">
</form>

<h2>
    <?php 
        echo $myArray[$counter];
    ?>
</h2>

</boddy>
</html>
```

### --------Baza on line

baza: szczeszek.home.pl
user: 01493838_uczentl
pass: to co poprzednio

phpmyadmn: https://sql.szczeszek.home.pl/sql/





### --------Info

https://jaki-jezyk-programowania.pl/technologie/php/

https://www.php.net/manual

https://miroslawzelent.pl/kurs-html/pozostale-kontrolki-formularzy/

https://miroslawzelent.pl/kurs-php/

http://www.newthinktank.com/2019/12/learn-php-one-video/

https://youtu.be/2eebptXfEvw

### --------On line editor
PHP: https://sandbox.onlinephpfunctions.com/
### ---------Assets
https://cdnjs.com/ | https://fontawesome.com | http://fontello.com/ | https://fonts.google.com/ |
### ---------Stock Img
https://www.pexels.com/ | https://unsplash.com | https://pixabay.com
### ---------Licence
[MIT](https://choosealicense.com/licenses/mit/)


