<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>


<div class="container col-6 mb-5">

<div class="text-center text-danger">
<?php check_error() ?>
</div>

<div class="text-center text-success">
<?php check_message() ?>
</div>

<form action="" method="POST">
<div class="input-group">
  <input type="text" name="category" class="form-control" placeholder="New category" aria-label="New category" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <input type="submit" class="btn btn-primary" value="Add">
  </div>
</div>
</form>
</div>


<?php while($row = $category_list) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
     </tr>
     <?php endwhile; ?>



<?php $this->view("admin/footer", $data); ?>