<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
</head>
<body>
    <div class="main-container">
        <h1>Edit Product</h1>
        <form action="<?php echo base_url() . 'products/update/' . $product['id']; ?>" method="post">
            <p>Name: </p>
            <input type="hidden" value="<?= $product['id']?>">
            <input type="text" name="name" value="<?= $product['name'] ?>">
            <p>Description: </p>
            <input type="text" name="description"value="<?= $product['description'] ?>">
            <p>Price: </p>
            <input type="text" name="price" value="<?= $product['price'] ?>">
            <input type="submit" value="Update">
        </form>
        <a href="products/update/<?= $product['id']?>">Show</a>|<a href="<?=base_url()?>">Back</a>
    </div>
</body>
</html>