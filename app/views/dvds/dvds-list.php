<!doctype html>
<html>
<head>
    <title>My Dvds</title>
    <style>
        .dvds table, .dvds td, .dvds th
        {
            border:1px solid black;
            text-align:center;
            padding-left:4px;
            padding-right: 4px;
        }
        table {
            width:100%;

        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>My Dvds</h1>

<table class="dvds">
    <th class="dvds">Title</th>
    <th class="dvds">Genre</th>
    <th class="dvds">Rating</th>
    <th class="dvds">Label</th>
    <th class="dvds">Sound</th>
    <th class="dvds">Format</th>
    <th class="dvds">Release Date</th>
    <?php foreach ($dvds as $dvd) : ?>
        <tr>
            <td class="dvds">  <?php echo $dvd->title; ?></td>
            <td class="dvds">  <?php echo $dvd->genre->genre_name; ?></td>
            <td class="dvds">  <?php echo $dvd->rating->rating_name; ?></td>
            <td class="dvds">  <?php echo $dvd->label->label_name; ?></td>
            <td class="dvds">  <?php echo $dvd->sound->sound_name; ?></td>
            <td class="dvds">  <?php echo $dvd->format->format_name; ?></td>
            <td class="dvds">  <?php echo $dvd->release_date; ?></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>