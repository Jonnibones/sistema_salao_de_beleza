<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>/src/img/sob.png" type="image/x-icon" />
    <title><?php echo $title; ?></title>
    
</head>

<body style="margin:0px;">
    <?php echo view('template/header'); ?>
    <?php echo view('main/' . $view_principal); ?>
    <?php echo view('template/footer'); ?>
</body>

</html>
