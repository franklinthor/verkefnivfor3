<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/franklinthor/jokes/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo html($pageTitle);?></title>
    <link rel="stylesheet" type="text/css" href="../style/form.css">
</head>
<body class="main">
<ul id="navbarUl">
    <li class="navbarLi"><a class="active" href="../authors/index.php">Authors</a></li>
    <li class="navbarLi"><a href="../categories/index.php">Categories</a></li>
</ul>

<h1 class="header"><?php echo html($pageTitle);?></h1>
<form action="?<?php echo html($action);?>" method="post">
    <div class="header3">
        <label for="name">Name:
            <input type="text" name="name" id="name" value="<?php echo html($name);?>">
        </label>
    </div>
    <div class="header2">
        <input type="hidden" name="id" value="<?php echo html($id)?>">
        <input type="submit" value="<?php echo html($button);?>">
    </div>
</form>
</body>
</html>