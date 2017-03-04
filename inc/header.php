<?php session_start();

?>
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $sitename; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo BASEURL; ?>css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/navbar-top.css">
      <link rel="stylesheet" href="<?php echo BASEURL; ?>css/carousel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>


<main class="container">
