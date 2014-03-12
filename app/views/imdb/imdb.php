<!doctype html>
<html>
<head>
    <title><?php echo $show ?></title>
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
<h1><?php echo $show ?></h1>
<table class="dvds">
    <th class="dvds">Name</th>
    <th class="dvds">Season</th>
    <th class="dvds">Number</th>
    <?php foreach ($dvds as $k => $show) : ?>
        <?php $episodes=$show->episodes;
        ?>
        <?php foreach ($episodes as $episode) : ?>
            <tr>
                <td class="dvds">  <?php echo $episode->name; ?></td>
                <td class="dvds">  <?php echo $episode->season; ?></td>
                <td class="dvds">  <?php echo $episode->number; ?></td>

            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
</body>