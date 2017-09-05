<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/categories/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
    <link rel="stylesheet" type="text/css" href="../style/categories.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/filter.js">

    </script>
</head>
<body class="main">
<ul id="navbarUl">
    <li class="navbarLi"><a class="active" href="../authors/index.php">Authors</a></li>
    <li class="navbarLi"><a href="../categories/index.php">Categories</a></li>
</ul>
<div>
    <h1 class="header">Manage Categories</h1>
    <p id="addNewCategory"><a href="worker.php?add">Add new category</a></p>
</div>
<div class= "header2">
    <ul>
        <?php foreach ($categories as $category):?>

            <li id= "list">
                <form action="" method="post">
                    <div class= "submitButton">
                        <div>
                             <?php echo html($category['name']); ?>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                        <input type="submit" name="action" value="Edit">
                        <input type="submit" name="action" value="Delete">
                    </div>
                </form>
            </li>

        <?php endforeach; ?>
    </ul>
</div>
<div id="filter" class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
</body>
</html>