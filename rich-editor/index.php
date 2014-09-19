<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
<!-- include summernote css/js-->
<link href="dist/summernote.css" rel="stylesheet">

<!---
    Summernote Rich Text Editor Example with PHP & Mysql
    http://hackerwins.github.io/summernote/
-->


<body>
<div class="summernote container">
	
	<div class="row">
	    <div class="col-lg-7">
		<form id="postForm" action="save.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
			
			<b>Title</b>
			<input type="text" class="form-control" name="title">
			<br/>
			<textarea id="summernote" name="content" rows="10"></textarea>
			
			<br/>
			<button type="submit" class="btn btn-primary">Save</button>
			<button type="button" id="cancel" class="btn">Cancel</button>
		    
		</form>
		</div>
		
		<div class="col-lg-4">
		    <table class="table">
	            <thead>
	               <tr>
	                   <th>No</th>
	                   <th>Title</th>
	               </tr>
	            <thead>
	            <tbody>
	                <?php include "view.php"; ?>
	            </tbody>
	        </table>
		    
		</div>
		
	</div>
</div>

<!-- include libries(jQuery, bootstrap) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="dist/summernote.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "300px",
		styleWithSpan: false
	});
});
function postForm() {

	$('textarea[name="content"]').html($('#summernote').code());
}
</script>
</body>
</html>
