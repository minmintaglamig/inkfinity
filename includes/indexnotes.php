<?php
	include_once 'dbh.php';
	session_start();

	$username = $_SESSION['username'];

	$stmt = $conn->prepare("SELECT * FROM tblnotes WHERE username = ?");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$result = $stmt->get_result();
	$queryResults = $result->num_rows;

?>

<html>
<head>
    <title> INKFINITY: INFINITE NOTES </title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Playfair Display, Noir Pro;
            background-color: #3AAFA9;
            color: #17252A;
        }
        .container {
            padding: 15px;
        }
        .header {
            margin-bottom: 0.5em;
            overflow: hidden;
            padding: 10px 0;
        }
        .header h1 {
            float: left;
            font-size: 30px;
            margin: 0;
        }
        .header img {
            float: right;
        }
        .logo {
            max-width: 50px;
            height: auto;
            margin-bottom: 0;
        }
        hr {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .btnsearch {
            margin-top: 10px;
        }
        .search-container {
            display: inline-block;
        }
        .search-container input {
            padding: 8px;
            border: none;
            border-radius: 16px 0 0 16px;
            background-color: #FEFFFF;
            color: #17252A;
            width: 350px;
        }
        .search-container button {
            padding: 8px;
            border: none;
            border-radius: 0 16px 16px 0;
            background-color: #2B7A78;
            color: #FEFFFF;
            width: 100px;
        }
        .add-notes {
            float: right;
            padding: 8px 16px;
            border-radius: 16px;
            border: none;
            background-color: #2B7A78;
            color: #FEFFFF;
            cursor: pointer;
            text-decoration: none;
        }
        .note {
            background-color: #DEF2F1;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 10px auto;
            text-align: left;
        }
        .note h2 {
            margin: 0;
        }
        .note h4 {
            margin: 10px 0 0 0;
        }
        .note p {
            margin: 5px 0 0 0;
        }
    </style>
</head>
<body>
    <div class = "container">
        <div class = "header">
            <h1> INKFINITY: INFINITE NOTES </h1>
            <img src = "https://i.pinimg.com/736x/96/cf/bb/96cfbb20ba2b0a1e9c8ed864c0f62bae.jpg" alt = "Inkfinity Logo" class = "logo">
        </div>
        <hr>
        <div class = "btnsearch">
            <div class = "search-container">
                <form action = "searchrec.php" method = "POST" style = "display: inline-block;">
                    <input type = "text" name = "txttitle" placeholder = "Enter Note Title...">
                    <button type = "submit"> SEARCH </button>
                </form>
            </div>
            <a href = "../save.php" class = "add-notes"> Add Notes </a>
        </div>
        <h1> List of Notes: </h1>
        <div class = "notes-container">
            <?php
            if ($queryResults > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='note'>
                        <h2>" . $row['title'] . "</h2>
                        <h4><i> By: " . $row['username'] . "</i></h4>
                        <hr>
                        <p>" . $row['content'] . "</p>
                    </div>";
                }
            } else {
                echo "<h3><center><i>No notes found!</i></center></h3>";
            }
            ?>
        </div>
    </div>
</body>
</html>
