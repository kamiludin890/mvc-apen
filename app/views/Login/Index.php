<head>
    <link href="<?= BASEURL ?>/css/style.css" rel="stylesheet" />
    <title><?= ptku ?></title>
</head>

<body>
    <div class="d-flex">
        <div id="w50">
            <h1><?= ptku ?></h1>
        </div>
        <div class="ml-50">
            <h1></h1>
        </div>
    </div>
    <form method="POST" action="<?= BASEURL ?>/Login">
        <div class="d-colum">
            <h1>Login </h1>
            <p class="mt-10px">User Name</p>
            <input type="user" name="username" placeholder="user123" style="width:20%;">
            <p class="mt-10px">Password</p>
            <input type="password" name="password" placeholder="password123" style="width:20%;">
            <input type="submit" name="login" value="Login" class="mt-10px" style="width:20%;">
        </div>
    </form>
    <script src="<?= BASEURL ?>/js/style.js"></script>
</body>