<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <title>Error - 404 not Found</title>
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <link rel="stylesheet" href="assets/css/(style).css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./assets/css/yui-3.14.css">
    
</head>
    <style>
        h1 { margin-top:10px; 
             margin-bottom:80px;
             font-size:80px;
            }
        button{
            font-size:24px !important;
            width:200px;
            height:50px;
            font-weight:bold;
            animation-name: transition_disponible;
            animation-duration: 5s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
    </style>
<body>

<?php include __DIR__ . "/components/header.php";?>

<section class="ultimos" id="ultimos">
    <div class="main-text">
        <center>
            <h1><i class="fa fa-frown-o"></i></h1>
            <h2>No se encuentra.</h2>
            <button onclick="window.history.back();"><i class="fa fa-arrow-circle-left"></i> <span> Retroceder</span>.</button>
        </center>
    </div>
</section>

<?php include __DIR__ . "/components/footer.php";?>
</body>
    
</html>