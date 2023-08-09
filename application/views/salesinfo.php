<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Generate PDF report from database using Codeigniter</title>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width:
			100%;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>
</head>
<body>
	<div style="margin: 10px 0 0 10px;width: 600px">
		<h3>Sales Information</h3>

		<?php			
			
			$this->table->set_heading('Product Id', 'Name','Price', 'Sale Price', 'Sales Count', 'Sale Date');
			
			foreach ($salesinfo as $sf):
				$this->table->add_row($sf->id, $sf->name,$sf->price, $sf->sale_price, $sf->sale_count, $sf->sale_date);
			endforeach;
			
			echo $this->table->generate();
		?>
		
	</div>
</body>
</html>