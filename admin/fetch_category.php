<?php
//$connect = mysqli_connect("localhost", "root", "", "sjagospk_rain");
include('include/dbconnection.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_cat
	WHERE id_cat LIKE '%".$search."%'
 	OR name_cat LIKE '%".$search."%'
	";
}
else
{
	$query = "SELECT * FROM tbl_cat ORDER BY id_cat DESC limit 20 ";
}
$result = mysqli_query($con, $query);
$cnt=1;
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
					<thead>
                    	<tr class="headings">
                            <th>Category Name</th>                                                                
                            <th>Date</th>  
                            <th>Others Information</th>  
                            <th colspan="1" class="column-title" id="tbaction"><i class="fa fa-cogs"></i>
						</tr> </thead>'
                        ;
//	$cnt=$cnt+1;
    while($row = mysqli_fetch_array($result))
	{
      $orgDate = $row['cat_date'];  
        $newDate = date("d-m-Y", strtotime($orgDate)); 
       
		$output .= '
			<tr>
            
            <td id="tbdbdata">'.$row["name_cat"].'</td>
			<td id="tbdbdata">'.$newDate.'</td>
            <td id="tbdbdata">'.$row["cat_other"].'</td>
            
                <td  id="tbdbdata"><a href="delete_category.php?delid='.$row["id_cat"].'"><i class="btn btn-danger btn-small" title="Delete"><i class="fa fa-trash" title="Delete"></i></i></a></td>
			</tr>
		';
	}
	echo $output;  
}
else
{
	echo 'Data Not Found';
}
?>