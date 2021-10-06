<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" 
    rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
<div class="container">
        <h1><Center>Edit Product</Center></h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('product/update'); ?>" method="post">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="<?php echo $product_name; ?>">
                </div>
                <div class='form-group'>
                    <label>Price</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Price" value="<?php echo $product_price; ?>">
                </div>
                <input type="hidden" name="product_id" value="<?php echo $product_id;?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</body>
<!-- load jquery js file -->
<script src="<?php echo 
base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo 
base_url('assets/js/bootstrap.min.js');?>"></script>
</html>