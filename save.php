<html>
<head>
    <title> Add Note </title>
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
        .btnAdd {
            text-align: right;
        }
        .btnAdd button {
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
        </div>
        <h1><center> Add Note </center></h1>
        <div class = "main">
            <div class = "box">
                <form action = "includes/saverec.php" method = "POST">
                    <div class = "input-group">
                        <label> Title: </label>
                        <input type = "text" name = "txttitle" placeholder = "Title" required>
                    </div>
                    <div class = "input-group">
                        <label> Content: </label>
                        <textarea name = "txtcontent" rows = "8" placeholder = "Type Something..." required></textarea>
                    </div>
                    <div class = "btnAdd">
                        <button type = "submit" name = "btnsave"> Add Note </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
