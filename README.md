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
- zabezpiecz przed rozpoczynaniem od dowolnego pytania (np przez wpisanie w url)

proszę o informację na MS teams ukończeniu zadania

ZADT32202.
Przygotuj aplikację licznik odwiedzin 
zliczający wszystkich użytkowników odwiedzających stronę którzy klikną przycisk.

ZADT32203.
Stwórz formularz rejestracyjny:

- użytkowników portalu randkowego
- sprzedaży ubezpieczeń komunikacyjnych
- zamówienia wycieczki zagranicznej
- wyceny usługi sprzątania/remontowej
Zapisz wprowadzane dane do bazy danych oraz stwórz (na osobnej stronie) raport 
zawierający tabelę z wprowadzonymi danymi zabezpieczony hasłem i nazwą użytkownika.


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

https://sql.szczeszek.home.pl/sql/

01493838_uczentl



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


