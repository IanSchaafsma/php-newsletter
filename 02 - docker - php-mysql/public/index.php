<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="header__title">Send email</h1>
    </header>
    <form class="form" action="contactform.php" method="post">
        <input class="form__input" type="text" name="name" placeholder="Full name" required>
        <input class="form__input" type="text" name="mail" placeholder="Email" required>
        <div class="form__checkboxWrapper">
            <div class="form__checkboxWrapperText">
                <p class="form__text">Nieuws1</p>
                <input class="form__checkbox" type="radio" name="news" id="news"> 
            </div>
            <div class="form__checkboxWrapperText">
                <p class="form__text">Nieuws2</p>
                <input class="form__checkbox" type="radio" name="news" id="news"> 
            </div>
        </div>
        <button class="form__submit" type="submit" name="submit">SEND EMAIL</button>
    </form>
</body>
</html>