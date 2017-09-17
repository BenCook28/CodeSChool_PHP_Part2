<!-- We include files in index.php as shown below -->
<?php
    include('theFilePathFromIndex.php');
?>

<!-- PHP only files don't need a cosing PHP tag. -->
<!-- We require as shown below: -->
<?php
require __DIR__ . '/aa/src/app.php';
// If you include and the file doesn't exist, you'll get a warning.
// But if you require and the file doesn't exist, you'll get a fatal error.