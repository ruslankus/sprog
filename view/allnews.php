<html>
<head>
    <title>All news</title>
</head>
<body>
    <?php foreach($arrNews as $record):?>
    <div>
        <h3><?php echo $record['title'];?></h3>
        <p><?php echo $record['text'];?></p>
    </div>

    <?php endforeach;?>
</body>
</html>
