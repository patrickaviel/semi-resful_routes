<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/show_style.css">
</head>
<body>
    <div class="main-container">
        <h1>Product 1</h1>
        <div class="label">
            <p>Name: </p>
            <p>Description: </p>
            <p>Price: </p>
        </div>
        <div class="info">
            <p><?=$product['name']?></p>
            <p><?=$product['description']?></p>
            <p><?=$product['price']?></p>
        </div>
        <div class="links">
        <a href="/products/edit/<?=$product['id']?>">Edit</a>|<a href="<?=base_url();?>">Back</a>
        </div>
        
    </div>
</body>
</html>