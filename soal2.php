<!DOCTYPE html>
<html>
<head>
	<title>Soal 2</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

	<?php $jml = $_GET['jml']; ?>

	<table>
		<?php for($a = $jml; $a > 0; $a--): ?>
			<tr>
				<?php for($b = $a; $b >0; $b--): ?>

			<?php  
				$total[$a] = explode(' ', $a);
				var_dump($total);
			?>
					<td style="font-weight: 900;" id="row" data-id="<?=$b?>"><?=$b?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>


	<style type="text/css">
		table, th, td{
			border: 1px solid black;
			width: 10vw;
			height: 5vh;
		}
	</style>

<script type="text/javascript">
	$(document).ready(function(){
		const row = $('#row');
		console.log(row)
	})
</script>
</body>
</html>