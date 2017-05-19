<!-- main area -->
<div class="main-content">
    <div class="page-title">
        <div class="title">Categories</div>
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
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label>Shares</label>
                <input type="number" id="shares" name="shares" class="form-control" placeholder="Shares" required>
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