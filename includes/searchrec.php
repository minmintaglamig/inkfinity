<html>
<head>
    <title> INKFINITY: INFINITE NOTES </title>
    <style type = "text/css">
        body, html {
            height: 100%;
            margin: 0;
            font-family: Playfair Display, Noir Pro;
            background-color: #3AAFA9;
            color: #17252A;
        }
        .container {
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            margin-bottom: 0.5em;
            overflow: hidden;
            padding: 10px 0;
            width: 100%;
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
            width: 100%;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            color: #17252A;
            font-family: Playfair Display, Noir Pro, sans-serif;
            font-size: 19px;
            text-align: center;
            background-color: #DEF2F1;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #2B7A78;
            color: #FEFFFF;
        }
        .btn {
            display: inline-block;
            background-color: #2B7A78;
            color: #FEFFFF;
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            margin: 2px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 5px;
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
        <table>
            <thead>
                <tr>
                    <th> Title </th>
                    <th> Content </th>
                    <th> Author </th>
                    <th> Actions </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'dbh.php';

                    $title = $_POST['txttitle'];

                    $sql = "SELECT * FROM tblnotes WHERE title = '$title'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["content"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo '<td class="btn-container">
                                    <button class="btn edit"><a href="../edit.php?id=' . $row["id"] . '&edittitle=' . urlencode($row["title"]) . '&editcontent=' . urlencode($row["content"]) . '">Edit</a></button>
                                    <button class="btn delete"><a href="deleterec.php?delid=' . $row["id"] . '">Delete</a></button>
                                    <button class="btn print" onclick="window.print()">Print</button>
                                  </td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'> No results found! </td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>