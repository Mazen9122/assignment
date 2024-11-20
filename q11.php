<html>
<head>
    <title>Changing BG Color</title>
    <style>
        body {
            background-color: <?php echo isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white'; ?>;
        }
    </style>
</head>
<body>
    <h1>Choose BG Color</h1>
    <form method="post" action="">
        <select name="color" onchange="this.form.submit()">
            <option value="white">White</option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="pink">pink</option>
            <option value="blue">Blue</option>
            <option value="gray">Gray</option>


        </select>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
        $selected_color = $_POST['color'];
        setcookie("bgcolor", $selected_color, time() + (86400 * 30), "/");
        echo "<script>window.location.reload();</script>";
    }
    ?>
</body>
</html>
