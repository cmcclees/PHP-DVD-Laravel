<!doctype html>
<html>
<head>
    <title>Create Dvd</title>
</head>
<body>
<?php if (Session::has('success')) : ?>
    <p style="color: green;">
        <?php echo Session::get('success') ?>
    </p>
<?php endif; ?>



<form action="<?php echo url('dvds') ?>" method="post">

    Title: <input type="text" name="title">

    <br />

    Rating:
    <select name="rating">
        <?php foreach ($ratings as $rating) : ?>
            <option value="<?php echo $rating->id ?>">
                <?php echo $rating->rating_name ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br />

    Genre:
    <select name="genre">
        <?php foreach ($genres as $genre) : ?>
            <option value="<?php echo $genre->id ?>">
                <?php echo $genre->genre_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Label:
    <select name="label">
        <?php foreach ($labels as $label) : ?>
            <option value="<?php echo $label->id ?>">
                <?php echo $label->label_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Sound:
    <select name="sound">
        <?php foreach ($sounds as $sound) : ?>
            <option value="<?php echo $sound->id ?>">
                <?php echo $sound->sound_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Format:
    <select name="format">
        <?php foreach ($formats as $format) : ?>
            <option value="<?php echo $format->id ?>">
                <?php echo $format->format_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br>

    <input type="submit" value="Create DVD">
</form>

</body>