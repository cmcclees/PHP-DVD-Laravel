<!doctype html>
<html>
<head>
    <title>Dvd Search</title>
</head>
<body>
<form method="get" action="/dvds">
    <div>
        Dvd Title:
        <input type="text" name="title"/>
    </div>
    <div>
        Genre:
        <select name="genres">
            <option value="all">All</option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?php echo $genre->id; ?>">
                    <?php echo $genre->genre_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Rating:
        <select name="ratings">
            <option value="all">All</option>
            <?php foreach ($ratings as $rating) : ?>
                <option value="<?php echo $rating->id; ?>">
                    <?php echo $rating->rating_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Search" />
    </div>
</form>
</body>
</html>