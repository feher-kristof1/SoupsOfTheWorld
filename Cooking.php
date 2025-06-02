<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="stile.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="btn btn-alert">Vissza</a>
    <div class="container">
        <form method="POST" action="&?todo=insert">
            <label for="name">Name thy soup:</label>
            <input type="text" id="name" name="name" class="form-control">
            <br>
            <label for="ingredients">Share the ingerdients needed:</label>
            <input type="text" id="ingredients" name="ingredients" class="form-control">
            <br>
            <label for="preptime">Time needed to steel thy resolve and gather thy belongings:</label>
            <input type="number" id="preptime" name="preptime" class="form-control">
            <br>
            <label for="cookingtime">How long shall the cook endure the process:</label>
            <input type="text" id="cookingtime" name="cookingtime" class="form-control">
            <br>
            <label for="servings">Number of peasants fed per one batch:</label>
            <input type="text" id="servings" name="servings" class="form-control">
            <br>
            <label for="instructions">Thy orders to succeed in the ordeal:</label>
            <input type="text" id="instructions" name="instructions" class="form-control">
            <br>
            <button type="submit">Further the dephts of soup knowledge</button>
        </form>
    </div>
</body>
</html>