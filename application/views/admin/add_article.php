<?php include_once( 'admin_header.php'); ?>
<div class="container">
    <?php echo form_open( 'admin/store_article',[ 'class'=> 'form-horizontal']);?>
    <?php echo form_hidden( 'user_id',$this->session->userdata('user_id')); ?>
    <fieldset>
        <legend>Add Artical</legend>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                        <?php echo form_input([ 'name'=> 'title','class' => 'form-control','id' => 'title','placeholder' => 'Article Title','value'=>set_value('title')]);?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error( 'title'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="article" class="col-lg-2 control-label">Article</label>
                    <div class="col-lg-10">
                        <?php echo form_textarea([ 'name'=> 'body','class' => 'form-control','id' => 'article','placeholder' => 'Article body','value'=>set_value('body')]);?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error( 'body'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="col-lg-5 col-lg-offset-2">
                        <?php echo form_reset([ 'name'=>'reset','value'=>'Reset','class'=>'btn btn-default']), form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<?php include_once( 'admin_footer.php');?>