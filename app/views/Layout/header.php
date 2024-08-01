<head>
    <link href="<?= BASEURL ?>/css/style.css" rel="stylesheet" />
    <title>Dev APEN</title>
    <link href="<?= BASEURL ?>/img/favicon.ico" rel="icon">
    <script src="<?= BASEURL ?>/js/jquery.js"></script>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="">&times;</a>
        <div><a href="#">Profile <?= $data['usernameId']['user_name']  ?></a></div>
        <a href="<?= BASEURL ?>/Home">Dasboard</a>
        <a href="<?= BASEURL ?>/Produk">Produk</a>
        <a href="<?= BASEURL ?>"></a>
        <a href="<?= BASEURL ?>"></a>
    </div>

    <div id="main">
        <div class=".d-flex text-s">
            <span style="font-size:30px;cursor:pointer;margin-right:10px;" onclick="openNav()" id="openNav">&#9776;</span>
            <a id="fs200">Judul</a>
        </div>
        <div>