<!-- main area -->
<div class="main-content">
    <div class="page-title">
        <div class="title">Animals</div>
        <div class="sub-title">Add</div>
    </div>
    <div class="card bg-white">
        <div class="card-header">
            <?php if (isset($message)) : ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif ?>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif ?>
        </div>
        <div class="card-block">
            <?php
            $attributes = array('name' => 'formAdd', 'id' => 'formAdd', 'class' => 'form-validation');
            echo form_open_multipart('', $attributes);
            ?>
            <div class="form-group">
                <label>Animal Code</label>
                <input type="text" id="code" name="code" class="form-control" readonly required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" id="category_id" style="width: 100%;">
                    <option>Select Category</option>
                    <?php foreach($categories as $row) : ?>
                        <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary m-r">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- /main area -->
</div>
<!-- /content panel -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    $('#category_id').change(function () {
        var cat_id = $(this).val();
        $.get('<?php base_url() ?>/admin/animals/getmaxcode/' + cat_id, function($response) {
            $('#code').val($response);
        });
    });
</script>