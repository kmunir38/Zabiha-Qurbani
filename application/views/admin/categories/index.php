<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/datatables/media/css/jquery.dataTables.css">
<div class="main-content">
    <div class="page-title">
        <div class="title">Categories</div>
        <!-- <div class="sub-title">UI datatables</div> -->
    </div>
    <div class="card bg-white">
        <div class="card-header">
            View Categories
        </div>
        <div class="card-block">
            <table class="table table-bordered table-striped datatable editable-datatable responsive align-middle bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Shares</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($categories as $row) : ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->name ?></td>
                    <td><?php echo $row->shares ?></td>
                    <td><?php echo $row->updated_at ?></td>
                    <td><a href="<?php echo base_url() ?>admin/categories/edit/<?php echo $row->id; ?>" style="font-size: 20px;" class="label label-info"> <i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url() ?>admin/categories/delete/<?php echo $row->id; ?>" style="font-size: 20px;" class="label label-danger"> <i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- page scripts -->
<script src="<?php echo base_url(); ?>assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
<!-- end page scripts -->
<!-- initialize page scripts -->
<script src="<?php echo base_url(); ?>assets/scripts/helpers/bootstrap-datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/scripts/tables/table-edit.js"></script>
<!-- end initialize page scripts -->