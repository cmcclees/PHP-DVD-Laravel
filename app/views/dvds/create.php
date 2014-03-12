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
<?php if (Session::has('errors')) : ?>
    <p style="color: red;">
        <?php
        foreach ($errors->all() as $error)
        {
            echo $error;
        }
        ?>
    </p>
<?php endif; ?>


<form action="<?php echo url('dvds') ?>" method="post">

    Title: <input type="text" name="title" value="<?php echo Input::old('title') ?>">

    <br />

    Rating:
    <select name="rating">
        <?php foreach ($ratings as $rating) : ?>
            <option value="<?php echo $rating->id ?>"
                <?php if(Input::old('rating') == $rating->id) echo "selected";?>
                >
                <?php echo $rating->rating_name ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br />

    Genre:
    <select name="genre">
        <?php foreach ($genres as $genre) : ?>
            <option value="<?php echo $genre->id ?>"
                <?php if(Input::old('genre') == $genre->id) echo "selected";?>
                >
                <?php echo $genre->genre_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Label:
    <select name="label">
        <?php foreach ($labels as $label) : ?>
            <option value="<?php echo $label->id ?>"
                <?php if(Input::old('label') == $label->id) echo "selected";?>
                >
                <?php echo $label->label_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Sound:
    <select name="sound">
        <?php foreach ($sounds as $sound) : ?>
            <option value="<?php echo $sound->id ?>"
                <?php if(Input::old('sound') == $sound->id) echo "selected";?>
                >
                <?php echo $sound->sound_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br />

    Format:
    <select name="format">
        <?php foreach ($formats as $format) : ?>
            <option value="<?php echo $format->id ?>"
                <?php if(Input::old('format') == $format->id) echo "selected";?>
                >
                <?php echo $format->format_name ?>
            </option>
        <?php endforeach ?>
    </select>

    <br>

    <input type="submit" value="Create DVD">
</form>

</body>