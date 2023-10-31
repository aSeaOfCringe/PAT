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
            width: 600px; 
            left: 50%;
            top: 5%;
            margin-left: -300px;
            text-align: center; 
            background-color: #fff; 
            padding: 30px;
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
            display: grid;
            grid-gap: 10px;
        }
        form {
            display: grid;
            grid-template-columns: 1fr 1fr; 
            grid-gap: 10px;
            text-align: left;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #6f42c1; 
        }
        input, select, textarea {
            width: calc(100% - 20px); 
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #6f42c1; 
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
        }
        textarea {
            resize: none; 
        }
        .button-wrapper {
            text-align: right; /* Выравниваем кнопку "Iesniegt" по правому краю */
            margin-top: 20px;
            grid-column: span 2; /* Занимаем две колонки */
        }
        .purple-button {
            display: inline-block;
            width: 120px; /* Уменьшаем ширину кнопки "Iesniegt" */
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
        .purple-button:hover {
            background-color: #5a3f99;
        }
        .gender-label {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gender-label input {
            margin: 0;
        }
        .image-input {
            display: none;
        }
        .choose-image-button {
            background-color: #6f42c1;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .choose-image-button:hover {
            background-color: #5a3f99;
        }
    </style>
</head>
<body>
<div id="action_form">
    <form action="advertisment" method="post">
    <label for="animal-name">Vārds</label>
        <input name="animal-name" id="animal-name" type="text">
        <label for="animal_type">Dzīvnieks</label>
        <select name="animal_type" id="animal_type">
            <option value="dog">Suņi</option>
            <option value="cat">Kaķi</option>
            <option value="hamster">Grauzēji</option>
            <option value="birds">Putni</option>
            <option value="exotic">Eksotiskie dzīvnieki</option>
            <option value="fish">Zivis</option>
            <option value="others">Citi</option>
        </select>
        <label for="breed">Šķirne</label>
        <input name="breed" id="breed" type="text">
        <label for="age">Vecums</label>
        <input name="age" id="age" type="number">
        <label for="purpose">Nolūks</label>
        <select name="purpose" id="purpose">
            <option value="adoption">Adopcijai</option>
            <option value="lost">Pazaudēts</option>
            <option value="found">Atrasts</option>
        </select>
        <label>Dzimums</label>
        <div class="gender-label">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Vīrietis</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Sieviete</label>
        </div>
        <label for="additional_info">Papildus informācija</label>
        <textarea name="additional_info" id="additional_info" rows="5"></textarea>
        <input type="file" name="animal_image" id="animal_image" class="image-input">
        <label for="animal_image" class="choose-image-button">Izvēlieties attēlu</label>
        <div class="button-wrapper">
            <input type="submit" class="purple-button" value="Iesniegt">
        </div>
    </form>
</div>
</body>
</html>
