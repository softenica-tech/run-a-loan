<?php
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/';
$basePath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

if ($basePath === '' || $basePath === '.') {
    $basePath = '';
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" > 
<base href="<?php echo htmlspecialchars($basePath . '/'); ?>">
<link rel="shortcut icon" href="images/footer-mark.png" type="image/png"> 
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- fontawesomne  -->
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="css/style.css" rel="stylesheet"/>
<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wdth,wght@0,75..125,200..900;1,75..125,200..900&display=swap" rel="stylesheet">
