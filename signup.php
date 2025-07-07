<html>
<head>
   <title> Sign-up </title>
	<style>
       body, html {
           height: 100%;
           margin: 0;
           font-family: Playfair Display, Noir Pro;
       }
       .container {
           display: table;
           width: 100%;
           height: calc(100% - 40px);
           margin-top: -40px;
       }
       .column {
           display: table-cell;
           vertical-align: middle;
           padding: 8%;
       }
       .right-column {
           background-color: #3AAFA9;
           text-align: center;
           color: #17252A;
       }
       .left-column {
		   background-color: #2B7A78;
           text-align: center;
           color: #FEFFFF;
       }
       .form-container {
           display: inline-block;
           text-align: left;
           max-width: 300px;
           width: 100%;
       }
       .form-container h1 {
           font-size: 2em;
           margin: 1em 0;
       }
       .form-container label {
           display: block;
           margin-bottom: 0.5em;
           font-weight: bold;
       }
       .form-container input {
           width: 100%;
           padding: 0.5em;
           margin-bottom: 1em;
           border: 1px solid #ccc;
           border-radius: 4px;
       }
       .form-container button {
           background-color: #3AAFA9;
           color: #17252A;
           padding: 0.5em 1em;
           border: none;
           border-radius: 4px;
           cursor: pointer;
       }
       .form-container button:hover {
           background-color: #DEF2F1;
       }
       .form-container p {
           text-align: center;
           color: #17252A;
       }
       .form-container p a {
           color: #DEF2F1;
           text-decoration: none;
       }
       .form-container p a:hover {
           text-decoration: underline;
       }
       .welcomelogo {
           max-width: 50%;
           height: 60;
           margin-bottom: 1em;
       }
       .logo {
           max-width: 200px;
           height: auto;
           margin-bottom: 0.5em;
       }
       .right-column h1 {
           font-size: 3em;
           margin: 0.3em 0 0.2em 0;
       }
       .right-column p {
           font-size: 1.5em;
		   margin-top: 0.1em;
       }
   </style>
</head>
<body>
	<div class = "container">
		<div class = "column left-column">
		<img src = "https://img.icons8.com/?size=80&id=50968&format=png&color=17252A" alt = "welcome icon" class = "welcomelogo">
            <h1> WELCOME! </h1>
            <div class = "form-container">
                <form action = "includes/signuprec.php" method = "POST">
                    <label> Username: </label>
                    <input type = "text" name = "txtusername" placeholder = "Username" required>
                    <label> Email: </label>
                    <input type = "email" name = "txtemail" placeholder = "perez@gmail.com" required>
                    <label> Password: </label>
                    <input type = "password" name = "txtpassword" placeholder = "Password" required>
                    <center><button type = "submit" name = "btnsave"> Sign-up </button></center>
                   
                </form>
                <p> Already have an account? <a href = "login.php"> Log-in here </a></p>
            </div>
        </div>
        <div class = "column right-column">
            <img src = "https://i.pinimg.com/736x/96/cf/bb/96cfbb20ba2b0a1e9c8ed864c0f62bae.jpg" alt = "Inkfinity Logo" class = "logo">
            <h1> INKFINITY </h1>
            <p> :INFINITE NOTES </p>
        </div>
    </div>
</body>
</html>