<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=BASEURL?>/css/style.css" rel="stylesheet" />
    <title><?=ptku?></title>
</head>

<body>
    <div class="d-flex">
        <div class="w-50">
            <h1><?=ptku?></h1>
        </div>
        <div class="ml-50">
            <h1></h1>
        </div>
    </div>
    <form method="POST" action="<?=BASEURL?>">
        <div class="d-colum">
            <h1>Login </h1>
            <input type="user" name="username" placeholder="contoh123" class="mt-10px">
            <input type="password" name="password" placeholder="contoh123" class="mt-10px">
        </div>
    </form>
    <script src="<?=BASEURL?>/js/style.js"></script>
</body>