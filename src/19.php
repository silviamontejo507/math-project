<?php
// Define some constants
$rootPath = "/path/to/your/project/math-project/";
$dataFolder = "data";
$script = $rootPath . $dataFolder;

// Check if script exists and is not an error
if (file_exists($script)) {
    echo "Script already exists: $script\n";
} else {
    // Create the script for the project
    file_put_contents($script, "<?php\n"
        . "include_once 'config.php';\n"
        . "include_once 'library/dao/AutoDao.class.php';\n"
        . "\$d = new AutoDao();\n"
        . "if (!empty($_POST['action'])) {\n"
        . "    $method = $_POST['action'];\n"
        . "    if ($method == 'load') {\n"
        . "        $sql = \"SELECT * FROM table_name;\";\n"
        . "        $result = \$d->query($sql);\n"
        . "        echo json_encode($result); /* Update or insert the data here */\n"
        . "    } elseif ($method == 'insert') {\n"
        . "        $postdata = $_POST;\n"
        . "        if (!empty($postdata)) {\n"
        . "            $sql = \"INSERT INTO table_name VALUES(NULL, \";$postdata['id'].\");\n"
        . "            \$d->save(\$postdata);\n"
        . "        }\n"
        . "    } else { /* Update or delete the data */\n"
        . "        $sql = \"DELETE FROM table_name WHERE id = \";$postdata['id'].\";\n"
        . "        \$d->delete(\$postdata);\n"
        . "    }\n"
        . "}\n"
        . "\$d->close();\n"
        . "include $script\n");
} else {
    echo "Script does not exist: $script";
}
?>
