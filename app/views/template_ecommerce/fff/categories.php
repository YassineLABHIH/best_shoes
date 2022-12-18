<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); 

var_dump($_POST);
?>

<style type="text/css">
    .add_new_hide {
        width: 500px;
        height: 300px;
        background-color: #e1e1e1;
        position: absolute;
        padding: 6px;
        display: none;
    }

    .add_new_show {
        width: 500px;
        height: 300px;
        background-color: #e1e1e1;
        position: absolute;
        padding: 6px;
        display: block;
    }

    #close_add_new {
        float: right;
    }
</style>


<p>Categories page</p>


<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Product Categories <button class="btn btn-primary " id="add_new_button"><i class="fa fa-plus"> Add new</i></button></h4>
                <!--add new category-->
                <div class="add_new_hide" id="add_new">
                    <div>
                        <button class="btn btn-danger" id="close_add_new">Fermer</button>
                    </div>

                    <form class="form-inline" method="POST">
                        <div class="form-group mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="categoryName" class="sr-only">Category name</label>
                            <input type="text" name="categoryName" class="form-control"  placeholder="Category" required>
                        </div>
                        <button type="input" class="btn btn-primary mb-2" id="add_button_category">Ajouter</button>
                    </form>

                </div>
                <!--add new category end-->
                <hr>
                <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> Category</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                        <th><i class="fa fa-bookmark"></i> Price</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th><i class=" fa fa-edit"></i> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="basic_table.html#">Company Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dolor</td>
                        <td>12000.00$ </td>
                        <td><span class="label label-info label-mini">Enable</span></td>
                        <td>
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->

<?php $this->view("admin/footer", $data); ?>