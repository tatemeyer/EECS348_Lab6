<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multiplication Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #003366 0%, #1a4d7a 100%);
            min-height: 100vh;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #2c3e50;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-wrap: wrap;
        }

        nav li {
            flex: 1;
            min-width: 150px;
            text-align: center;
        }

        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        nav li a:hover {
            background-color: #FFB81C;
            color: #003366;
        }

        h1 {
            text-align: center;
            color: white;
            margin: 30px 0 10px;
            font-size: 2.2em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .content {
            max-width: 900px;
            margin: 30px auto;
            background: rgba(255,255,255,0.95);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        }

        .content h2 {
            color: #003366;
            margin-bottom: 24px;
        }

        .form-group {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
            font-size: 1em;
        }

        .form-group input[type="number"] {
            padding: 10px 14px;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
            width: 100px;
            text-align: center;
            transition: border-color 0.2s;
        }

        .form-group input[type="number"]:focus {
            outline: none;
            border-color: #003366;
        }

        .submit-btn {
            padding: 10px 24px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
        }

        .submit-btn:hover {
            background-color: #FFB81C;
            color: #003366;
            transform: translateY(-1px);
        }

        .error-msg {
            color: #c0392b;
            font-weight: 600;
            padding: 12px 16px;
            background: #f8d7da;
            border-radius: 6px;
            border: 1px solid #f5c6cb;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            overflow-x: auto;
            display: block;
        }

        th, td {
            border: 1px solid #b0bec5;
            padding: 10px 14px;
            text-align: center;
            font-size: 0.95em;
        }

        th {
            background-color: #003366;
            color: white;
            font-weight: 700;
        }

        tr:nth-child(even) td {
            background-color: #e8f0fe;
        }

        tr:nth-child(odd) td {
            background-color: #ffffff;
        }

        tr:hover td {
            background-color: #fff3cd;
        }

        td:first-child {
            background-color: #1a4d7a;
            color: white;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.html">Profile</a></li>
            <li><a href="css_font_control.html">CSS Font Control</a></li>
            <li><a href="password_verification.html">JS Password Verification</a></li>
            <li><a href="php_table.php">PHP Multiplication Table</a></li>
        </ul>
    </nav>

    <h1>PHP Multiplication Table</h1>

    <div class="content">
        <h2>Practice Four: Multiplication Table</h2>

        <form method="GET" action="php_table.php">
            <div class="form-group">
                <label for="num">Generate table from 1 to:</label>
                <input type="number" id="num" name="num" min="1" max="20"
                    value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>"
                    placeholder="e.g. 5">
                <button type="submit" class="submit-btn">Generate</button>
            </div>
        </form>

        <?php
        if (isset($_GET['num'])) {
            $n = intval($_GET['num']);

            if ($n < 1 || $n > 20) {
                echo '<p class="error-msg">Please enter a number between 1 and 20.</p>';
            } else {
                echo '<table>';

                // Header row: blank corner + column indexes 1..n
                echo '<tr><th>&times;</th>';
                for ($col = 1; $col <= $n; $col++) {
                    echo "<th>$col</th>";
                }
                echo '</tr>';

                // Data rows
                for ($row = 1; $row <= $n; $row++) {
                    echo '<tr>';
                    // Row index cell
                    echo "<td>$row</td>";
                    for ($col = 1; $col <= $n; $col++) {
                        echo '<td>' . ($row * $col) . '</td>';
                    }
                    echo '</tr>';
                }

                echo '</table>';
            }
        }
        ?>
    </div>
</body>

</html>