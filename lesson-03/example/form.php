<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        input, textarea { display: block; }
    </style>
</head>
<body>

<header>
    <ul>
        <li><a href="index.php">Naslovnica</a></li>
        <li><a href="form.php">Prijavi se</a></li>
        <li>Login (za admine)</li>
    </ul>
</header>

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

    <!-- fix form -->

    <label>Ime i prezime</label>
    <input name="name" />

    <label>Mail adresa</label>
    <input name="name" />

    <label>Smjer</label>
    <input name="name" />

    <label>Godina studija</label>
    <label><input name="godina" type="radio" />1</label>
    <input name="godina" type="radio" />
    <input name="godina" type="radio" />

    <label>Što te motiviralo da se prijaviš?</label>
    <textarea>

    </textarea>


    <label>Imaš li predznanje vezano uz web development?</label>
    <textarea>

    </textarea>

    U kojim jezicima si do sada programirao?
    <input name="godina" type="checkbox" />
    <input name="godina" type="checkbox" />

    Uploadaj primjer svoga koda:
    <input type="file">

</main>

<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>