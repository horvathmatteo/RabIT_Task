<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<style>
h1 {
    text-align: center;
    font-size: 50px;
}

table {
    width: 100%;
    border-collapse: collapse; 
}

table th {
    background-color:darkblue;
    color:white;
    padding: 25px 10px;
    text-align: center;
    font-size: 40px;
}

table td {
    text-align: center;
    font-size: 30px;
}
</style>
</head>
<body>

<h1>Advertisements</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created by</th>
    </tr>
    <?php
        $data = appController::listAds();
        foreach($data as $ads){
            echo "<tr>";
            echo "<td>".$ads['title']."</td>";
            echo "<td>".$ads['m_name']."</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html> 