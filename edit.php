<?php
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $title = isset($_GET['edittitle']) ? htmlspecialchars($_GET['edittitle']) : '';
    $content = isset($_GET['editcontent']) ? htmlspecialchars($_GET['editcontent']) : '';

    if ($id === 0) {
        echo "Invalid ID.";
        exit();
    }
?>

<html>
<head>
    <title> Edit Notes </title>
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
        .view-notes {
            float: right;
            padding: 8px 16px;
            border-radius: 16px;
            border: none;
            background-color: #2B7A78;
            color: #FEFFFF;
            cursor: pointer;
            text-decoration: none;
        }
        .main {
            display: block;
            text-align: center;
            padding-top: 20px;
        }
        .box {
            display: inline-block;
            background-color: #DEF2F1;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-top: 10px;
        }
        .input-group {
            margin-bottom: 16px;
            text-align: left;
        }
        .input-group input, .input-group textarea {
            width: calc(100% - 12px);
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #FFF;
            color: #17252A;
        }
        .btnEdit {
            text-align: right;
        }
        .btnEdit button {
            padding: 8px 16px;
            border-radius: 50px;
            border: none;
            background-color: #2B7A78;
            color: #FEFFFF;
            cursor: pointer;
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
                <form action = "includes/searchrec.php" method = "POST" style = "display: inline-block;">
                    <input type = "text" name = "txttitle" placeholder = "Enter Note Title...">
                    <button type = "submit"> SEARCH </button>
                </form>
            </div>
            <a href = "includes/indexnotes.php" class = "view-notes"> View Notes </a>
			
        <h1><center> Edit Note </center></h1>
        <div class = "main">
			<div class = "box">
				<form action = "includes/editrec.php" method = "POST">
					<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
					<div class = "input-group">
						<label> Title: </label>
						<input type = "text" name = "txttitle" value = "<?php echo $title; ?>" required>
					</div>
					<div class = "input-group">
						<label> Content: </label>
						<textarea name = "txtcontent" rows = "8" required ><?php echo $content; ?></textarea>
					</div>
					<div class = "btnEdit">
						<button type = "submit" name = "btnEdit"> Edit </button>
					</div>
				</form>
			</div>
        </div>
    </div>
</body>
</html>
