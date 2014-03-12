<!doctype html>
<html>
<head>
    <title>TV Show Search</title>
</head>
<body>
<?php if (Session::has('noshow')) : ?>
    <p style="color: red;">
        <?php echo Session::get('noshow') ?>
    </p>
<?php endif; ?>
<form method="get" action="/imdb">
    <div>
        TV Show Name:
        <input type="text" name="show"/>
    </div>
    <div>
        <input type="submit" value="Search" />
    </div>
</form>
</body>
</html>