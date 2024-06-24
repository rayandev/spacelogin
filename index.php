<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/errorBox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="error-box hide">
        <div><i class="fa-solid fa-xmark"></i></div>
        <div>
            <h4 class="err-box-title">Error</h4>
            <p class="err-box-subtitle">This is an Error</p>
        </div>
    </div>
    <form action="auth.php" method="post" id="Main_form">
        <section class="form_content">
            <input type="text" class="username" name="username" placeholder="Username">
            <input type="text" name="pass_input" class="pass_input" placeholder="Password">
            <div class="form_content_btns">
                <button type="submit">Sign In</button>
                <button>Sign Up</button>
            </div>
            <div class="form_content_forgot">
                <a href="#">Forgot password ?</a>
            </div>
        </section>
        <section class="form_img"><img src="./img/rock.jpg" alt=""></section>
    </form>

    <form action="auth.php" method="post" id="main-form-mobile">
        <section class="form-img-mobile"><img src="./img/rock.jpg" alt=""></section>
        <section class="form_content">
            <input type="text" class="username" placeholder="Username">
            <input type="password" class="pass_input" placeholder="Password">
            <div class="form_content_btns">
                <button>Sign In</button>
                <button>Sign Up</button>
            </div>
            <div class="form_content_forgot">
                <a href="#">Forgot password ?</a>
            </div>
        </section>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>

</html>