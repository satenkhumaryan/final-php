<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="icon" href="yvn.png">
</head>
<body>
	<?php include ("header.php") ?>
	<main>
		<div class="main-p" style="background-color: #D0D0D0; height: 599px;">
			<div class="main-p1">
				<?php 
				include ("admin/connect.php");
				$sql="SELECT * FROM `products`";
				$query = mysqli_query($db,$sql);

				if (mysqli_num_rows($query)>0) {
					while ($products=mysqli_fetch_assoc($query)) { ?>  
						<div class="main-pr" style="height: 435px;">
							<h2><strong><?php echo $products['name']; ?></strong></h1>
							<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։ <?php echo $products['info']; ?></p>
							<img src="<?php echo $products['image']; ?>" class="img" style="width: 230px; padding-left: 10px; padding-top: 10px;">
							<p style="font-size: 16px;"><?php echo $products['price']; ?></p>
							<a href="admin/update.php?id=<?php echo $products['id']; ?>">Update</a>
							<form action="admin/delete.php?id=<?php echo $products['id']; ?>" method="post">
								<input type="submit" name="delete" value="delete">
							</form>
							<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
						</div>
					<?php }
	}
				 ?>
				<!-- <div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px; padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
			</div>
			<div class="main-p1">
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px; padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
				<div class="main-pr">
					<h2><strong>Շապիկ</strong></h2>
					<p class="p1">Հետաքրքիր և նորաոճ շապիկ՝ որակյալ տպագրությամբ։</p>
					<img src="shirt.png" class="img" style="width: 230px; padding-left: 10px;padding-top: 10px;">
					<p style="font-size: 16px;">5000դր</p>
					<a href="single.php" style="text-decoration: none;"><p style="font-size: 10px; margin-top: 3px; color: #4a4a4a; text-align: right;">Տեսնել ավելին</p></a>
				</div>
 -->
			</div>
		</div>
	</main>
	<?php include ("footer.php") ?>
</body>
</html>

