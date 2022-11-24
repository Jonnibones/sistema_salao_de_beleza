<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="<?php echo base_url(); ?>/src/img/sob.png">
</head>

<body>
    <?php echo view('template/header'); ?>
    <?php echo view('main/' . $view_principal); ?>
    <?php echo view('template/footer'); ?>
</body>

</html>
