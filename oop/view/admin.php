<?php session_start(); ?>
<html>
	<h4>CRUD - OOP PHP</h4>
	<p>
		<?=isset($_SESSION['username'])?'Welcome : '.$_SESSION['username']:'xx'; ?>
	</p>
	<p>
		<a href="add_user_view.php">Add New</a> | 
		<a href="../proccess/logout.php">Logout</a>
	</p>
	<p>
		<table width="50%">
			<thead>
				<tr>
					<th align="left">Nim</th>
					<th align="left">Nama</th>
					<th align="left">Alamat</th>
					<th align="left">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			
				require_once '../class/Factory.php';
				$user 	= Factory::getClass('Db');
				$page	= isset($_GET['nav'])?$_GET['nav']:1;
				$limit	= 3;
				
				$offset	= (empty($page) or $page==1)? 0 : ($page-1)*$limit;				
				$getData   = $user->query("SELECT * FROM mhs LIMIT {$offset},{$limit}")->result();
				$totalRows = $user->get('mhs')->num_rows();
				
				foreach($getData as $data):
					
					echo '
						
						<tr>
							<td>'.$data->nim.'</td>
							<td>'.$data->nama.'</td>
							<td>'.$data->alamat.'</td>
							<td><a href="../proccess/delete.php?id='.urlencode($data->id).'">Delete</a> | <a href="add_user_view.php?q=edit&id='.urlencode($data->id).'">Edit</a></td>
						</tr>
					
					';
				endforeach;
			?>			
			</tbody>
			
		</table>		
	</p>
	<p>
		<?php 
			$config = array(
						
					'limit' 	 =>$limit,
					'url'		 =>$_SERVER['PHP_SELF'].'?',
					'total_data' =>$totalRows,
					'uri_segment'=>$page,										
				);
			$paging = Factory::getClass("Pagination");						
			echo $paging->create_page($config);
		
		?>
	</p>
</html>