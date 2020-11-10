<!DOCTYPE html>
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

<h1>Existing users</h1>
<table>
    <tr>
        <th>Name</th>
    </tr>
    <?php
    
    $data = appController::listUsers();
    foreach($data as $user){
        echo "<tr>";
        echo "<td>".$user['m_name']."</td>";
        echo "</tr>";
    }

    ?>
</table>

</body>
</html> 