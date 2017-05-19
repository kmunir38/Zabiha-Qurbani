<!-- main area -->
<div class="main-content">
    <div class="page-title">
        <div class="title">Booking</div>
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
            <!-- <div class="form-group">
                <label>Category</label>
                <select style="width: 100%;">
                    <option>Select Category</option>
                    <?php foreach($category as $row) : ?>
                        <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                    <?php endforeach ?>
                </select>
            </div> -->
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" id="category" style="width: 100%;">
                    <option>Select Category</option>
                    <option value="1">Cow</option>
                    <option value="2">Goat</option>
                </select>
            </div>
            <div class="form-group">
                <label>Shares</label>
                <input type="number" id="shares" name="shares" class="form-control" placeholder="Shares">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" min="11" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                <div id="error" style="display: none;" class="alert alert-danger"></div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <!--                    <a id="submit" onclick="submit()" class="btn btn-primary m-r">Submit</a>-->
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

    $('#category').change(function () {
        var category = $(this).val();
        if(category == '1') {
            $('#shares').attr('disabled', false);
        } else if(category == '2') {
            $('#shares').attr('disabled', 'disabled');
        }
    });


    // $('#email').focusout(function () {
    //     var email = $(this).val();
    //     $.get('/admin/affiliate/checkEmail', {email: email}, function (response) {
    //         if (response) {
    //             $('#error').css("display", "block");
    //             $('#error').text('Email Allready Taken');
    //         }
    //         else {
    //             $('#error').css("display", "none");
    //         }
    //     });
    // });
</script>