<!DOCTYPE html>
<html>
<head>
	<title>Soal 2</title>
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>

	<?php $jml = (int)$_GET['jml'];  ?>

	<table>
		<?php 
			for($a = $jml; $a > 0; $a--): 
			 for($c = $a; $c > 0; $c--): 
			 	$total = $c.'-';
							// $list = array_merge(explode('-', (int)$total));
							// echo $total[0];\
							// var_dump($list);
							// var_dump($list)
						
			endfor; 
		?>
			<tr id="results">
				<th colspan="6">Total :  </th>
			</tr>

			<tr class="rows">
				<?php for($b = $a; $b >0; $b--): ?>
					<td style="font-weight: 900;"  id="row-<?=$b.'.'.$a?>" data-id="<?=$b?>"><?=$b?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>




	<style type="text/css">
		table, td{
			border: 1px solid black;
			width: 15vw;
			height: 5vh;
		}
		th{
			border: none;
			text-align: left;
		}
	</style>

<script type="text/javascript">
	// let gets = <?php echo json_encode($_GET); ?>;
	// let th = document.createElement('th')
	// // console.log(gets.jml)
	// for(let a = gets.jml; a > 0; a--){
	// 	for(let b = a; b > 0; b--){			
	// 		let rows = document.getElementById(`row-${b}.${a}`)
	// 		let result = rows.getAttribute('data-id')
	// 		console.log(result)
	// 		th.textContent=result
	// 	}
	// }
	// alert($_GET['jml']);

	
</script>
</body>
</html>