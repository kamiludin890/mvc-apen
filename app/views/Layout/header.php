<head>
    <link href="<?= BASEURL ?>/css/style.css" rel="stylesheet" />
    <title><?= ptku ?></title>
    <link href="<?= BASEURL ?>/img/icon.jpg" rel="icon">
    <script src="<?= BASEURL ?>/js/jquery.js"></script>
    <script src="<?= BASEURL ?>/js/chart.js"></script>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a><?= $data['usernameId']['nama']  ?></a>
        <a href="<?= BASEURL ?>/Logout">Log Out</a>
        <a href="<?= BASEURL ?>/Dashboard">Dasboard</a>
        <a href="<?= BASEURL ?>/Produk_Control">Produk</a>
        <a href="<?= BASEURL ?>">COMINGSOON</a>
    </div>
    <div id="main">
        <div class=".d-flex text-s">
            <span style="font-size:30px;cursor:pointer;margin-right:10px;" onclick="openNav()" id="openNav">&#9776;</span>
            <a id="fs200"><?= $data['judul'] ?></a>
        </div>
        <div>