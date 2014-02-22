<!doctype html>
<html>
<head>
    <title>My Songs</title>
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
            <td class="dvds">  <?php echo $dvd->genre_name; ?></td>
            <td class="dvds">  <?php echo $dvd->rating_name; ?></td>
            <td class="dvds">  <?php echo $dvd->label_name; ?></td>
            <td class="dvds">  <?php echo $dvd->sound_name; ?></td>
            <td class="dvds">  <?php echo $dvd->format_name; ?></td>
            <td class="dvds">  <?php
                $date = new \DateTime("$dvd->release_date");
                echo DATE_FORMAT($date,"m-d-Y");

                ?></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
