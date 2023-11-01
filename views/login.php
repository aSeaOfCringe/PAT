<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            background-image: url('css/back.jpg');
            background-size: cover;
            background-repeat: repeat;
        }

        form {
            padding: 25px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #6f42c1;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }

        .button-wrapper {
            text-align: center;
            margin-top: 20px;
        }

        .button-wrapper .purple-button {
            display: inline-block;
            width: 150px;
            padding: 10px 20px;
            background-color: #6f42c1;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: inherit;
            box-sizing: border-box;
            font-size: 16px;
        }

        .button-wrapper .purple-button:hover {
            background-color: #5a3f99;
        }

        .button-wrapper a.purple-link {
            color: #6f42c1;
            text-decoration: none;
            font-family: inherit;
            display: block;
            margin-top: 10px;
        }

        .button-wrapper a.purple-link:hover {
            color: #5a3f99;
        }
    </style>
</head>

<body>
    <div style="margin: auto;width: 50%;">

        <?php if ($errorInfo != "") { ?>
            <div class="centeredErrorBox">
                <b>Kļuda: </b>
                <?= $errorInfo; ?>
            </div>
        <?php } ?>
        <div class="centeredBox" id="action_form">
            <form action="login" method="post">
                <label for="username">E-pasts</label>
                <input name="username" id="username" type="text"><br><br>
                <label for="password">Parole</label>
                <input name="password" id="password" type="password"><br><br>
                <div class="button-wrapper">
                    <input type="submit" name="btnLogin" class="purple-button" value="Ielogoties">
                </div>
                <div class="button-wrapper">
                    <a href="register" class="purple-button">Reģistrēties</a>
                </div>
                <div class="button-wrapper">
                    <a href="restorePassword" class="purple-link">Aizmirsāt paroli?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>