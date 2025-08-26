<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap & Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a0f7dcf96e.js" crossorigin="anonymous"></script>
    <!-- Stylesheets / Scripts -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Append modified timestamp after js/css file path - 
    fix browser caching issues that prevents the js/css file to update --> 
    <link rel="stylesheet" href='assets/css/styles.css?v=<?=filemtime('assets/css/styles.css')?>'>
    <script defer src="assets/js/project-data.js?v=<?=filemtime('assets/js/project-data.js')?>"></script>
    <script defer src="assets/js/script.js?v=<?=filemtime('assets/js/script.js')?>"></script>
    
    <title><?= $PageTitle ?> | John Octavio</title>
</head>
<body class="container-fluid">
    <div class="row min-vh-100 poppins-regular position-relative overflow-x-hidden">