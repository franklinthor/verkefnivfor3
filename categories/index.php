<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/categories/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Categories</title>
    <link rel="stylesheet" type="text/css" href="../style/authors.css">
</head>
<body class="main">
<ul id="navbarUl">
    <li class="navbarLi"><a class="active" href="../authors/index.php">Authors</a></li>
    <li class="navbarLi"><a href="../categories/index.php">Categories</a></li>
</ul>
<div class="header">
    <h1>Manage Categories</h1>
    <p><a href="worker.php?add">Add new category</a></p>
</div>
<div class= "header2">
    <ul>
        <?php foreach ($categories as $category):?>

            <li id= "list">
                <form action="" method="post">
                    <div class= "submitButton">
                        <?php echo html($category['name']); ?>
                        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                        <input type="submit" name="action" value="Edit">
                        <input type="submit" name="action" value="Delete">
                    </div>
                </form>
            </li>

        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>