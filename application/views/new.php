<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/new_style.css">
</head>
<body>
    <div class="main-container">
        <h1>Add a new product</h1>
        <div class="label">
            <p>Name: </p>
            <p>Description: </p>
            <p>Price: </p>
        </div>
        <form action="create" method="POST">
            <input type="text" name="name" id="">
            <input type="text" name="description" id="">
            <input type="text" name="price" id="">
            <input type="submit" value="Add">
        </form>
        <div class="succes">
            <?php echo $this->session->flashdata('add_product_success');  ?>
        </div>
        <div class="error">
            <?php echo $this->session->flashdata('add_product_errors');?>
        </div>
          <!-- //var_dump($this->session->flashdata('add_product_errors'));  -->
        <div class="links">
            <a href="<?=base_url();?>">Go Back</a>
        </div>
       
    </div>
</body>
</html>