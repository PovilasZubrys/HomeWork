<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND9</title>
</head>
<style>
body {
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
  
    background: white;
    color: black;

    <?php else: ?>

    background: black;
    color: white;

    <?php endif ?>
}
</style>
<body>
    <form action="" action="post">

    <?php $countAll = rand(3, 10) ?> 

    <?php foreach(range('A', 'K') as $key => $checkbox):  ?>
    <?php if ($key + 1 == $countAll) break ?>
    <input type="checkbox" name="box[<? $checkbox ?>]"><label><?= $checkbox ?></label>
    
    <?php endforeach ?> 
    <button type="submit">GO</button>
    </form>
</body>
</html>