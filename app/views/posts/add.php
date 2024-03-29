<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?=URLROOT;?>/posts/" class="btn btn-light"><i class="fa fa-backward"></i></a> 
<div class="card card-body bg-light mt-5">
	<h2>Add post</h2>
	<p class="" id="">Создать пост с этой формой</p>
	<form action = "<?=URLROOT?>/posts/add/" method="post">
		<div class="form-group">
			<label for="title">Title: <sup>*</sup></label>
			<input type="text" name="title" class="form-control
			<?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?> "
			value="<?=$data['title']?>" >
			<span class="invalid-feedback"><?=$data['title_err']?></span>
		</div>
		<div class="form-group">
			<label for="body">Body: <sup>*</sup></label>
			<textarea name="body" class="form-control
			<?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?> " ><?=$data['body']?></textarea>
			<span class="invalid-feedback"><?=$data['body_err']?></span>
		</div>
		<input type="submit" class="btn btn-success" value="добавить">
	</form>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
