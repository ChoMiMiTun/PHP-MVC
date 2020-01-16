<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('asset/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('asset/summernote/summernote-bs4.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('asset/fontawesome-free/css/all.min.css'); ?>">

    <!-- Custom Css -->

    <style>
        .title {
            text-align: center;
            margin-top: 150px;
        }
    </style>

    <title>
        <?php echo $title ?? 'PHP MVC' ?>
    </title>
</head>

<body>
    <?php require "nav.php"; ?>
    <?php require "../app/view/$view.php"; ?>

    <!-- Script -->

    <script src="<?php echo asset('asset/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo asset('asset/popper/umd/popper.min.js') ?>"></script>
    <script src="<?php echo asset('asset/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset('asset/summernote/summernote-bs4.js') ?>"></script>

    

    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 200
        });
    </script>

</body>

</html>