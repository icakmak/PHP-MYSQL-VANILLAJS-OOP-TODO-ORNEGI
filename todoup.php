<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo Update</title>
    <script src="js/update.js"></script>
    <script src="js/select.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" onload="DataUpdate(<?php echo $_GET['id']?>)">
    <h4>Todo Add Form</h4>
    <hr>
    <input type="hidden" id="id" value="<?php echo $_GET['id']?>">
    <div class="">
        <label for="todoTitle">Todo Title</label>
        <input type="text" name="title" id="title" placeholder="Todo Title">
    </div>
    <div class="">
        <label for="todoText">Todo Text</label>
        <input type="text" name="text" id="text" placeholder="Todo Title">
    </div>
    <div class="">
        <label for="todoStart">Start Date</label>
        <input type="date" name="startDate" id="startDate" placeholder="Todo Title">
    </div>
    <div class="">
        <label for="todoFinish">Finish Date</label>
        <input type="date" name="finishDate" id="finishDate" placeholder="Todo Title">
    </div>
    <div class="center">

        <button class="button1 button w20" onclick="DataUpdate(<?php echo $_GET['id']?>)">TODO ADD</button>
        <a href="todolist.php" class="button button3 w20" style="width: 20%;">Cancel</a>
    </div>


</div>
<script>
    window.onload = function () {
        let id=document.getElementById('id').value;
        DataSelect(id);

    };
</script>

</body>
</html>
