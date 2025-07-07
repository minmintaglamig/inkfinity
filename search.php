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
            <a href = "includes/save.php" class = "add-notes"> Add Notes </a>
        </div>
    </div>
</body>
</html>
