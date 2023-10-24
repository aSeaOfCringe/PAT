<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            background-color: #f2f2f2; /* Светло-серый фон */
        }
        #action_form {
            position: absolute;
            width: 400px;
            left: 50%;
            top: 30%; /* Изменил значение top */
            margin-left: -200px;
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
            border: 2px solid #6f42c1; /* Фиолетовая обводка */
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none; /* Убрал стандартную обводку */
        }
        .button-wrapper {
            text-align: center;
            margin-top: 20px;
        }
        .button-wrapper .purple-button {
            display: inline-block;
            width: 150px; /* Установил фиксированную ширину кнопки */
            padding: 10px 20px;
            background-color: #6f42c1;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin: 5px 10px; /* Убрал auto */
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
            margin-top: 10px; /* Увеличил отступ */
        }
        .button-wrapper a.purple-link:hover {
            color: #5a3f99;
        }
    </style>
</head>
<body>
<div id="action_form">
    <form action="profile" method="post">
        <label for="name">Vārds</label>
        <input name="name" id="name" type="text"><br><br>
        <label for="surname">Uzvārds</label>
        <input name="surname" id="surname" type="text"><br><br>
        <label for="email">Ē-pasts</label>
        <input name="email" id="email" type="text"><br><br>
        <label for="address">Adrese</label>
        <input name="address" id="address" type="text"><br><br>
        <label for="phone">Tālrūna numurs</label>
        <input name="phone" id="phone" type="text"><br><br>
        <label for="password">Parole</label>
        <input name="password" id="password" type="password"><br><br>
        <label for="confirm_password">Atkārtot paroli</label>
        <input name="confirm_password" id="confirm_password" type="password"><br><br>
        <div class="button-wrapper">
            <input type="submit" class="purple-button" value="Reģistrēties">
        </div>
    </form>
</div>
</body>
</html>
