<div class="box">
<div class="box-header">
    <h2 class="blue"><i class="fa-fw fa fa-plus"></i><?= lang('return_material'); ?></h2>
</div>
<div class="box-content">
<div class="row">
<div class="col-lg-12">

<p class="introtext"><?php echo lang('enter_info'); ?></p>

<?php
$attrib = array('data-toggle' => 'validator', 'role' => 'form');
echo form_open_multipart("products/return_material", $attrib)
?>

<div class="col-md-5">
    <div class="form-group all">
        <?= lang("product_name", "name") ?>
        <?= form_input('name', (isset($_POST['name']) ? $_POST['name'] : ($product ? $product->name : '')), 'class="form-control" id="name" required="required"'); ?>
    </div>
</div>
<div class="col-md-12">

    <div class="form-group all">
        <?= lang("product_details", "product_details") ?>
        <?= form_textarea('product_details', (isset($_POST['product_details']) ? $_POST['product_details'] : ($product ? $product->product_details : '')), 'class="form-control" id="details"'); ?>
    </div>

    <div class="form-group">
        <?php echo form_submit('add_product', $this->lang->line("add_product"), 'class="btn btn-primary"'); ?>
    </div>

</div>
<?= form_close(); ?>

</div>

</div>
</div>
</div>