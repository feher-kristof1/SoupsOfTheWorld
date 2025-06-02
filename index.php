<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="title">
        <h1>Soups of the world</h1>
    </div>
    <div class="container">
    <a href="Cooking.php" class="btn btn-secondary">Add new Soup</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Ingredients</td>
                    <td>Preptime(min)</td>
                    <td>Cooking time(min)</td>
                    <td>Servings</td>
                    <td>Instructions</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "DB.php";
        
                    $SModel = new soup("localhost", "root", "", "soups");
                    $Soups = $SModel->getSoups();
                    $todo = $_POST["todo"]?? 'list';
                    if ($todo == "list") {
                        echo $SModel->makeTable($Soups);
                    }
                    if ($todo == "insert") {
                        $name = htmlspecialchars($_POST["name"]);
                        $ing = htmlspecialchars($_POST["ingredients"]);
                        $ptime = htmlspecialchars($_POST["preptime"]);
                        $ctime = htmlspecialchars($_POST["cookingtime"]);
                        $servings = htmlspecialchars($_POST["servings"]);
                        $instr = htmlspecialchars($_POST["instructions"]);
                        $SModel->addSoup($name,$ing,$ptime,$ctime,$servings,$instr);
                    }
                ?>
            </tbody>
        </table>
    </div>

    
</body>
</html>