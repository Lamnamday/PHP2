<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $a = array(
        array(
            'id' => 1,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 2,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 4,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 5,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 6,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 7,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 8,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 9,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 10,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    $aChunk = array_chunk($a, 4);
    // echo "<pre>";
    // print_r($aChunk);
    // die;
    ?>

    <div class="container">
        <div class="row">
            
        <?php foreach ($aChunk as $key1 => $itemCol) : ?>
            <div class="col-md-4">
                <ul>
                    <?php foreach ($itemCol as $key => $item) : ?>
                        <li class="post-<?= $key ?>">
                            <?= $item['id'] ?> - <?= $item['first_name'] ?> - <?= $item['last_name'] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>

        </div>
    </div>

</body>

</html>