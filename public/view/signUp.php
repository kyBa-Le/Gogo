<?php ?>
<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signUp.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid" id="signUp-container">
        <div class="form-container d-flex justify-content-between flex-column align-items-center">
            <div class="d-flex justify-content-start">
                <img src="assets/images/logo.png" alt="Gogo">
            </div>
            <div>
                <div class="text-center">
                    <h1>Let's create your account</h1>
                    <p>Sign up for Gogo to get more enjoy tours</p>
                </div>
                <form class="text-center" id="signUp-form"">
                    <label for="email">
                        <input type="email" name="email" id="email" required placeholder=" Enter your email">
                    </label>
                    <label for="username">
                        <input type="text" name="username" id="username" required placeholder=" Enter your username">
                    </label>
                    <label for="password">
                            <input type="password" id="password" name="password" required placeholder="Create a password">
                    </label>
                <label for="confirm-password">
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm the password">
                </label>
                    <label for="fullName">
                        <input type="text" name="fullName" id="fullName" required placeholder=" Enter your full name">
                    </label>
                    <label for="phone">
                        <input type="text" name="phone" id="phone" required placeholder=" Enter your phone number">
                    </label>
                    <label for="agree" class="d-flex align-items-center">
                        <div style="width: 15%"></div>
                        <input type="checkbox" name="agree" id="agree" required>
                        <p class="mb-0 ms-1">By signing up, I agree with your Privacy Policy</p>
                    </label>
                    <label for="">
                        <button id="sign-up-button" class="border-0 w-100" type="button">Sign up</button>
                    </label>
                </form>
            </div>
            <p class="text-center w-100" style="height: 5%">Already have account? <a href="/sign-in">Sign in</a></p>
        </div>
        <div class="demo-container">
            <div class="content-overlay-before"></div>
            <div class="content-overlay">
                <!-- Nội dung phía trên video -->
                <h1 class="artistic-heading">Welcome to Gogo Website</h1>
                <p class="artistic-subtext">Let's us make your life journey joyful!</p>
            </div>
        </div>
    </div>
    <div id="loading" style="display: none;">
        <div class="spinner"></div>
        <p>Processing your request...</p>
    </div>
    <div id="navigation-box" style="display: none">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="scripts/signUp.js" type="module"></script>
</body>
</html>
