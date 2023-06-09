<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci-API</title>
    <link rel="stylesheet" href="style.css">
    <script type="Text/JavaScript" src="index.js"></script>
    <script type="Text/JavaScript" src="jquery-3.7.0.min.js"></script>
</head>

<body>
    <?php session_start(); ?>
    <nav id="index_flex">
        <nav id="index">
            <h1>Fibonacci-API</h1>
                <label>ระบุจำนวน 1 - 100</label>
                <input type="text" name="count" id="count" value="" required>
                <input type="submit" value="GET" onclick="submit()">
            <hr>
            <h2>ผลลัพธ์</h2>
            <nav id="codebox">
<pre><code id="result">
</code></pre>
            </nav>
        </nav>
    </nav>
</body>

</html>