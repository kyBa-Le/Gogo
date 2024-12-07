<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="profile-container">
        <div class="profile-header">
            <h1>My Profile</h1>
            <button class="custom-btn custom-btn-primary profile">Save changes</button>
        </div>
        <div class="profile-content">
            <div class="info-container">
                <div class="icon-text">
                    <i class="fas fa-user"></i>
                    <b>Your information</b>
                </div>
                <p>Update your personal information below</p>
            </div>
            <div class="user-informations">
                <div class="avatar-wrapper">
                    <div class="profile-label">Profile photo</div>
                    <input type="file" id="avatarInput" accept="image/*">
                    <div class="avatar" id="avatarPreview">
                        <img src="https://via.placeholder.com/150" alt="Profile Photo">
                    </div>
                    <div class="edit-icon" id="editButton">
                        <img src="https://img.icons8.com/material-rounded/24/ffffff/edit.png" alt="Edit">
                    </div>
                </div>
                <div class="contents" id="contents">
                </div>
            </div>
        </div>
    </div>
    <?php require_once "components/loading.php"?>
    <script src=".././scripts/userInformation.js" type="module"> </script>
</body>
</html>