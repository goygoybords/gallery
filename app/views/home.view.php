<?php require('partials/head.php'); ?>
	<h2>Classic HTML Gallery</h2>
	<div>
		<form method="POST" action = "/store" enctype="multipart/form-data">
			<label>Upload an image</label>
			<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
			<button name = "submit">Upload</button>
		</form>
		<table class="center">
			<tbody>
				<tr>
					<td><a href="index00.html" name="thumb00"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index01.html" name="thumb01"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index02.html" name="thumb02"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index03.html" name="thumb03"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
				</tr>
				<tr>
					<td><a href="index04.html" name="thumb04"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index05.html" name="thumb05"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index06.html" name="thumb06"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index07.html" name="thumb07"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
				</tr>
				<tr>
					<td><a href="index08.html" name="thumb08"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index09.html" name="thumb09"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index10.html" name="thumb10"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index11.html" name="thumb11"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
				</tr>
				<tr>
					<td><a href="index12.html" name="thumb12"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index13.html" name="thumb13"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index14.html" name="thumb14"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
					<td><a href="index15.html" name="thumb15"><img src="/public/uploads/DonMoen_WithAThankfulHeart.jpg" alt="Click!"></a></td>
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