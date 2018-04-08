<?php include_once("admin_header.php"); ?>

<div class="container">
<div class="row">
	<div class="col-lg-6 col-lg-offset-6">
	<?= anchor('admin/store_article','Add Article',['class'=>'btn btn-lg btn-primary pull-right']);?>
</div>
</div>
<?php if($feedback =  $this->session->flashdata('feedback')):
		 $feedback_class = $this->session->flashdata('feedback_class');
			?>
    <div class="row">
      <div classs="col-lg-6">
        <div class="alert alert-dismissible <?= $feedback_class ?>">
           <?= $feedback?>
        </div>
      </div>
    </div>
  <?php endif;?>
	<table class="table table-straped">
		<thead>
			<th>Sr. No</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php if(count($articles)): ?>
		 		<?php foreach ($articles as $article): ?>
			<tr>
				<td>1</td>
				<td>
					<?= $article->title?>
				</td>
				<td>
					<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=> 'btn btn-primary'])?>
					<!-- <button class="btn btn-primary">Edit</button> -->
					<button class="btn btn-danger">Delete</button>
				</td>
			</tr>
			<?php endforeach;?>
		<?php else:?>
			<td colspan="3">
				No Record Found
			</td>
		<?php endif;?>
		</tbody>
	</table>
</div>
<?php include_once("admin_footer.php"); ?>