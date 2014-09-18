<?php session_start();?>
<html>
	<h4>Simple CRUD with OOP-PHP</h4>
	<?php 
		if(!isset($_SESSION['username'])){
		
			echo '<a href="view/login.php">Login</a>';		
		} 
		
	?>
<!--
<table style="width: 500px;height: 200px;border-collapse:collapse;" border="1">

	<thead>
	   <tr>

		  <th>Judul1</th>
		  <th>Judul2</th>
		  <th>Judul3</th>
		  <th>Judul4</th>
	   </tr>
	</thead>

	<tbody>

	 <tr>

	  <td colspan="4">

	   <div style="max-height: 200px;width:100%;overflow-y:auto;overflow-x:hidden;" >

	   <table style="height:300px;width:500px;border-collapse:collapse;">

		<tbody>
		<?php //foreach(range(1,10) as $i): ?>
		 <tr >

			<td style="border-left:1px solid white;border-right:1px solid grey;border-bottom:1px solid grey;">td1 </td>
			<td style="border-right:1px solid grey;border-bottom:1px solid grey;">td2</td>
			<td style="border-right:1px solid grey;border-bottom:1px solid grey;">td2</td>
			<td style="border-right:1px solid grey;border-bottom:1px solid grey;">td2</td>
			
		<?php //endforeach;?>
		</tr>	
		</tbody>

	   </table>

	   </div>

	  </td>

	 </tr>

	</tbody>

</table>-->
	
</html>
