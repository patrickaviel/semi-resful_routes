<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
</head>
<body>
    <div class="main-container">
        <h1>Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

<?php           for($i=0;$i<count($products);$i++){                     ?>
                <tr>
                    <td><?= $products[$i]['name']       ?></td>
                    <td><?= $products[$i]['description'] ?></td>
                    <td><?= $products[$i]['price']  ?></td>
                    <td><a href="products/show/<?=$products[$i]['id']?>">Show</a>|<a href="products/edit/<?=$products[$i]['id']?>">Edit</a>|<a href="<?= base_url();?>/products/destroy/<?=$products[$i]['id']?>">Remove</a></td>
                </tr>
<?php           }                                                       ?>                
            </tbody>
        </table>    
        <?php echo $this->session->flashdata('up_product_success');  ?>
        <?php echo $this->session->flashdata('up_product_error');  ?>
        <a href="products/new">Add a new product</a>
    </div>
</body>
</html>