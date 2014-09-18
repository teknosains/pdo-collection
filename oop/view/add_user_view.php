<?php session_start(); ?>
<html>
	<p>
		<a href="admin.php">Home</a>
	</p>
	<?php 
		
		require_once '../class/Factory.php';
		$obj = Factory::getClass("userAccount");
		$id = isset($_GET['id'])?$_GET['id']:'';
		if($id!='')
			$getData = $obj->getEditUser(array('id'=>$id)); 
	
		$mode = isset($_GET['q'])?'edit':'new';
	?>
	<form method="post" action="../proccess/processUser.php">
		
		Nim : 
		<p>
			<input type="text" name="nim"  value="<?=isset($getData->nim)?$getData->nim:''?>"/>
		</p>
		Nama :
		<p>
			<input type="text" name="nama"  value="<?=isset($getData->nama)?$getData->nama:''?>"/>
		</p>
		Alamat :
		<p>
			<input type="text" name="alamat" value="<?=isset($getData->alamat)?$getData->alamat:''?>"/>
		</p>
		<p>
			<input type="hidden" name="mode"   value="<?=$mode?>" />
			<input type="hidden" name="id"     value="<?=$id?>" />
			<input type="submit" name="submit" value="Save" />
		</p>
	</form>
	
	
</html>