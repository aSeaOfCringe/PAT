<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            background-image: url('css/back.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }
        #action_form {
            position: absolute;
            width: 400px; 
            left: 50%;
            top: 30%;
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
        .restore-header {
            color: #6f42c1;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div id="action_form">
    <form action="login" method="post">
        <div class="restore-header">Atjaunot Paroli</div>
        <label for="email">Ē-pasts</label>
        <input name="email" id="email" type="text"><br><br>
        <div class="button-wrapper">
            <input type="submit" class="purple-button" value="Atjaunot paroli">
        </div>
    </form>
</div>
</body>
</html>
