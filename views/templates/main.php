<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITPark MVC Site</title>
    <link rel="stylesheet" href="/public/vendors/bootstrap502/css/bootstrap.css">

    <script src="/public/vendors/bootstrap502/js/jquery-3.6.0.min.js
"></script>

    <script src="/public/vendors/bootstrap502/js/bootstrap.bundle.js"></script>

</head>
<body>
<div class="container py-3">

    <?php
    /*$userInSession = SessionManager::getValue("user");
    if ($userInSession != null) {
        echo "<h1>{$userInSession->Name}</h1>";
    }else{
        echo "user not found";
    }*/
    ?>


    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">MVC example</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="/users/getall">Get ALL Users</a>

            </nav>
        </div>


    </header>


    <main>
        <?php require_once './views/' . $contentPage . '.php'; ?>
    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
            </div>
        </div>

    </footer>

</div>


</body>
</html>