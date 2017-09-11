<?php require('partials/head.php'); ?>
	<h2>Classic HTML Gallery</h2>
	<div>
		<form method="POST" action = "/store" enctype="multipart/form-data">
			<label>Upload an image</label>
			<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
			<button name = "submit">Upload</button>
			<?php if($_GET['upload'] == 1) echo "Images Uploaded";?>
		</form>
		<?php $count = 0; ?>
		<table class="center">
			<tbody>
				<tr>
					<?php foreach ($images as $i): ?>
						<td><img src="/public/uploads/<?php echo $i->filename; ?>"></td>
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
							<td><img src="/public/uploads/<?php echo $v->filename; ?>"></td>	

							<?php 
								$count++;
								if($count == 10)
								break;	
							?>
					<?php endif;	?>
					<?php endforeach; ?>
				</tr>
				<tr>
					
				</tr>
			
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
<?php require('partials/footer.php'); ?>