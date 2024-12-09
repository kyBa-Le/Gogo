<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
          integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--    Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signIn.css">
</head>
<body>
    <div class="sign-up-background">
        <div class="overlay"></div>
    </div>
    <div class="d-flex justify-content-start">
        <img id="home-button" src="assets/images/logo.png" alt="Gogo" onclick="window.location.href='/'">
    </div>
    <div class="form-container text-center" id="form-container">
        <h1 style="color: #EB662B">Please sign in to book tour</h1>
        <form class="text-center" id="signIn-form">
            <label class="text-start" for="email" style="color: white">
                Email
                <input type="email" name="email" id="email" required placeholder="Enter your email">
            </label>
            <label class="text-start" for="password" style="color: white">
                Password
                <input type="password" name="password" id="password" required placeholder="Enter your password">
            </label>
            <div style="all: unset" id="error-place"></div>
            <label class="text-end" for="">
                <button type="button" class="w-25" id="sign-in-button">Sign in</button>
            </label>
        </form>
        <div class="d-flex justify-content-between" id="option-navigation" style="color: white">
            <a href="/sign-up">Sign up new account</a>
            <a href="/forget-password">Forget password?</a>
        </div>
        <?php require_once "components/loading.php" ?>
    </div>
    <div id="success-box" style="display: none">
        <img src="assets/images/check.png" alt="Check">
        <div>Sign in successful</div>
        <p>You are directed to home page</p>
    </div>
    <script src="scripts/signIn.js" type="module"></script>
</body>
</html>
