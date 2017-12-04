<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        header {
            font-family: Arial;
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
</head>
<body>
<header>
    Employees
</header>
<main>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Job</th>
                <th>Income</th>
                <th>Net Income</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    echo "<td>{$john->getFullName()}</td>";
                    echo "<td>{$john->job}</td>";
                    echo "<td>{$john->income}</td>";
                    echo "<td>{$john->calcNetIncome()}</td>";
                ?>
            </tr>
            <tr>
                <?php
                    echo "<td>{$ann->getFullName()}</td>";
                    echo "<td>{$ann->job}</td>";
                    echo "<td>{$ann->income}</td>";
                    echo "<td>{$ann->calcNetIncome()}</td>";
                ?>
            </tr>
            <tr>
                <?php
                    echo "<td>{$sam->getFullName()}</td>";
                    echo "<td>{$sam->job}</td>";
                    echo "<td>{$sam->income}</td>";
                    echo "<td>{$sam->calcNetIncome()}</td>";
                ?>
            </tr>
        </tbody>

    </table>

</main>
</body>
</html>