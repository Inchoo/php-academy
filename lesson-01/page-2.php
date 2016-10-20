<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Academy</title>
</head>
<body>

<h1>Page Two</h1>

<p>The php page ..</p>

<?php if(date('d.m.Y.') == '18.10.2016.'): ?>
<p>PHP Academy starts today, Woohoo!</p>
<?php endif ?>

<footer>
    <p>date: <?php echo date('d.m.Y.'); ?></p>
</footer>

</body>
</html>