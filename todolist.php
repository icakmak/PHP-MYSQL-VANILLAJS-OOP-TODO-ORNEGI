<?php 
include('connect.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO LİST</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/list.js"></script>
    <script src="js/delete.js"></script>


</head>
<body class="container">
<span>Todo List</span>
<div style="float:right;margin: 5px;padding: 5px;">
    <a href="todoadd.php" class="button button1">Todo Add</a>
</div>

<hr>

<table>
    <thead>
        <tr>
            <th type="hidden">#</th>
            <th style="width: 10%">Title</th>
            <th style="width: 50%">Text</th>
            <th style="width: 10%">Start</th>
            <th style="width: 10%">Finish</th>
            <th style="width: 15%">#</th>
        </tr>
    </thead>
    <tbody id="tbody">
    <?php 
        $rows=$db->query("SELECT * FROM tbl_todo",PDO::FETCH_ASSOC);
        foreach($rows as $row){?>
        <tr>
            <td type="hidden"><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td style="text-align: center;"><?php echo $row['startDate']; ?></td>
            <td style="text-align: center;"><?php echo $row['finishDate']; ?></td>
            <td style="text-align: center;">
                <div class="row">
                    <button class="button button3" onclick="DataDelete(<?php echo $row['id']; ?>)">Delete</button>
                    <a href="todoup.php?id=<?php echo $row['id']; ?>" class="button button2">Update</a>

                </div>

            </td>
        </tr>
    <?php }?>
    </tbody>
</table>

</body>

</html>