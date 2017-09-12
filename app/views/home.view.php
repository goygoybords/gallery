<?php require('partials/head.php'); ?>
	<h2>Classic HTML Gallery</h2>
	<div>
		<form method="POST" action = "/store" enctype="multipart/form-data">
			<label>Upload an image</label>
			<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" required>
			<br>
			<textarea name="tags" required >
				
			</textarea>
			<br>
			<button name = "submit">Upload</button>
			<?php if($_GET['upload'] == 1) echo "Image Uploaded";?>
		</form>
		<?php $count = 0; ?>
		<div class="containers">
		<table class="images">
			<tbody>
				<tr>
					<?php foreach ($images as $i): ?>
						<td>
							<img src="/public/uploads/<?php echo $i->filename; ?>">
							<a href=""><?php echo $i->tags; ?></a>
						</td>
						<?php 
							$count++; 
							if($count == 5)
								break;
						?>
					<?php endforeach; ?>
				</tr>
				<tr>
					<?php foreach ($images as $k => $v): ?>
					<?php if ($k > $count - 1): ?>
							<td>
								<img src="/public/uploads/<?php echo $v->filename; ?>">
								<a href=""><?php echo $i->tags; ?></a>
							</td>	
							<?php 
								$count++;
								if($count == 10)
									break;	
							?>
					<?php endif;	?>
					<?php endforeach; ?>
				</tr>
			</tbody>
		</table>
		</div>
		<input type="hidden" id = "last-id" value="<?php echo $count;?>">
		<div class="test">
			<tr>
					<?php $total = $count + 5; foreach ($images as $k => $v): ?>
					<?php if ($k > $count - 1): ?>
							<td>
								<img src="/public/uploads/<?php echo $v->filename; ?>">
								<a href=""><?php echo $i->tags; ?></a>
							</td>	

							<?php 
								$count++;
								if($count == $total)
									break;	
							?>
					<?php endif;	?>
					<?php endforeach; ?>
				</tr>
		</div>
	</div>
<?php require('partials/footer.php'); ?>