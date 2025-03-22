<?php
define('TEST_JAVASCRIPT_PATH', '/javascript');
define('TEST_CSS_PATH', '/stylesheet');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= TEST_CSS_PATH ?>/test.css">
    <title>Test Page</title>
</head>

<body>
    <div class="content" style="width: 100vw;height: 100vh;display: flex;align-items: center;justify-content: center;flex-direction: column;">
        <script src="<?= TEST_JAVASCRIPT_PATH ?>/testFunctions.js"></script>
        <div>
            <label style="font-weight: 600; font-size: 32px;">Website Under Developement! Soon to Completed!</label>
        </div>
        <div>
            <label style="font-weight: 600; font-size: 22px; color: #1e88e5;">by Agsoy, Jay Mark V.</label>
        </div>
    </div>
</body>

</html>