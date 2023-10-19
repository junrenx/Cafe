<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAFE</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/login-page.css">
</head>
<body>
    <header>
        <div class="main-content-header">
            <div class="container">
                <div class="row">
                    <div class="col-6 my-5">
                        <div class="row py-4">
                            <div class="col-2">
                                <img src="./img/logo.png" height="50" width="50" alt="">
                            </div>
                            <div class="col-4">
                                <h2 class="text-white">CAFE TIME</h2>
                            </div>
                        </div>
                        <h1>WELCOME TO <span class="colorchange">CAFE TIME</span><br>HOUSE OF CAKE LOVERS OO YES</h1>
                    </div>
                    <div class="col-4">
                            <form action="includes/login.inc.php" method="post">
                                <div class="blurred-box">
                                <p class="error">
                                    <?php if (isset($_GET['error'])) {
                                        $errors = array(
                                            'usernotfound' => 'Invalid login, user not found',
                                            'wrongpassword' => 'Invalid login, wrong password',
                                            'emptyinput' => 'Invalid login, please try again'
                                        );
                                        $errorCode = $_GET['error'];
                                        if (array_key_exists($errorCode, $errors)) {
                                            echo "<p class='error'>" . $errors[$errorCode] . "</p>";
                                        }
                                    }
                                    ?>
                                    <h2 class="m-3 text-white">Login</h2>
                                    <div class="p-4 mx-4" style="width: 80%;">
                                    <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                                    <div class="my-4">
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                                </div></div>
                                <button type="submit" name="submit" class="login-btn text-center mx-5 mb-5">
                                    <span class=""> LOGIN </span>
                                </button>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
