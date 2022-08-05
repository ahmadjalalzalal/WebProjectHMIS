<?php
include("adheader.php");
include("dbconnection.php");
if(isset($_POST[submit]))
{
	if(isset($_GET[editid]))
	{
		$sql ="UPDATE medicine SET medicinename='$_POST[medicinename]',medicinecost='$_POST[medicinecost]',description='$_POST[description]',status='$_POST[status]' WHERE medicineid='$_GET[editid]'";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('Medicine record updated successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}	
	}
	else
	{
		$sql ="INSERT INTO medicine(medicinename,medicinecost,description,status) values('$_POST[medicinename]','$_POST[medicinecost]','$_POST[description]','$_POST[status]')";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('Medicine record inserted successfully...');</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM medicine WHERE medicineid='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
?>


<div class="container-fluid">
	<div class="block-header">
            <h2 class="text-center">Add Medicine record</h2>
           
        </div>
  <div class="card">
   
    <form method="post" action="" name="frmmedicine" onSubmit="return validateform()">
    <table class="table table-hover">
      <tbody>
        <tr>
          <td width="34%">Medicine Name</td>
          <td width="66%"><input placeholder="Enter Here" class="form-control" type="text" name="medicinename" id="medicinename" value="<?php echo $rsedit[medicinename]; ?>" /></td>
        </tr>
        <tr>
          <td width="34%">Medicine cost</td>
          <td width="66%"><input placeholder="Enter Here" class="form-control" type="text" name="medicinecost" id="medicinecost" value="<?php echo $rsedit[medicinecost]; ?>" /></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea placeholder="Enter Here" class="form-control no-resize" name="description" id="description" cols="45" rows="5"><?php echo $rsedit[description] ; ?></textarea></td>
        </tr>
        <tr>
          <td>Status</td>
          <td> <select class="form-control show-tick" name="status" id="status">
            <option value="">Select</option>
            <?php
		  $arr = array("Active","Inactive");
		  foreach($arr as $val)
		  {
			  if($val == $rsedit[status])
			  {
			  echo "<option value='$val' selected>$val</option>";
			  }
			  else
			  {
				  echo "<option value='$val'>$val</option>";			  
			  }
		  }
		  ?>
            </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input class="btn btn-default" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("adfooter.php");
?>
<script type="application/javascript">

</script>