<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel App</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <?php require(__DIR__ . '/header.php'); ?>
    <div class="container h-75 d-flex justify-content-center flex-column">
        <div class="container-centered">
            <ul class="nav nav-tabs nav-justified mb-2" id="tabs-switch" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="country-tab" data-mdb-toggle="tab" href="/country" role="tab" aria-controls="country-tabs" aria-selected="true">Paesi 🌍</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="trip-tab" data-mdb-toggle="tab" href="/trip" role="tab" aria-controls="trip-tabs" aria-selected="false">Viaggi ✈️</a>
                </li>
            </ul>
