<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $score = 81; ?>
    <?php if ($score >= 90): ?>
    <strong>A</strong>
    <?php elseif ($score >= 80): ?>
    <strong>B</strong>
    <?php elseif ($score >= 70): ?>
    <strong>C</strong>
    <?php else: ?>
     <strong>F</strong>
     <?php endif ?>
</body>
</html>
