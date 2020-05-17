<?php
$root = 700;
			$sql="SELECT * FROM tree_details WHERE id ='" . $root . "'" ;
			$result = mysql_query($sql);
			$row=mysql_fetch_array($result);
	echo"<div class='row'>
      <div class='col-lg-4'>
		<div class=''>
		<div class='pull-left'>
            <img class='treeimg' src='img/1.jpg'>
        </div>
		<div class=''>
			<h4>" . $row['name'] . " (" . $row['nick_name'] . ")</h4>
			<p>". $row['occupation'] . "</p>
			<p>" . $row['place'] . "</p>
		</div>
		</div>
		</div>";
		//fetching spouse details
		if ($row['spouse_id'] <> 0){
			$sql="SELECT * FROM tree_details WHERE id ='" . $row['spouse_id'] . "'" ;
			$result = mysql_query($sql);
			$row=mysql_fetch_array($result);
			echo"<div class='col-lg-4'>
				<div class=''>
				<div class='pull-left'>
					<img class='treeimg' src='img/1.jpg'>
				</div>
				<div class=''>
					<h4>" . $row['name'] . " (" . $row['nick_name'] . ")</h4>
					<p>". $row['occupation'] . "</p>
					<p>" . $row['place'] . "</p>
				</div>
				</div>
			</div>";
		}
		else
		{
			echo"<div class='col-lg-6'>
				<div class=''>
				<div class='pull-left'>
					<img class='treeimg' src='img/1.jpg'>
				</div>
				<div class=''>
					<p>" . $row['name'] . " (" . $row['nick_name'] . ") is unmarried or we do not have spouse data</p>
				</div>
				</div>
			</div>";
		}
		echo "</div>";
		
		//fetching childern
		$sql="SELECT * FROM tree_details WHERE parent_id ='" . $root . "'" ;
		$result = mysql_query($sql);
			
		while($row=mysql_fetch_array($result)){
			echo"
				<div class='row'>
				<div class='col-lg-2'>
				</div>
				<div class='col-lg-4'>
				<div class=''>
				<div class='pull-left'>
					<img class='treeimg' src='img/1.jpg'>
				</div>
				<div class=''>
					<h4>" . $row['name'] . " (" . $row['nick_name'] . ")</h4>
					<p>". $row['occupation'] . "</p>
					<p>" . $row['place'] . "</p>
				</div>
				</div>
				</div>
				</div>
			";
		}
		
		
		/*	
			
			//finding child details
			$sql="SELECT * FROM tree_details WHERE parent_id ='" . $root . "'" ;
			$result = mysql_query($sql);
			
			while($row=mysql_fetch_array($result)){
				echo"
				
				<div class='panel panel-default'>
				<div id='collapseOne1' class='panel-collapse collapse in'>
					<div class='panel-body'>
						<div class='media accordion-inner'>
						<div class='pull-left'>
							<img class='img-responsive' src='img/accordion1.png'>
						</div>
						<div class='media-body'>
							<h4>" . $row['name'] . " (" . $row['nick_name'] . ")</h4>
							<p>". $row['occupation'] . "</p>
							<p>" . $row['place'] . "</p>
						</div>
						</div>
					</div>
					</div>
				</div>";	
			}
			
			//finding siblings
			$sql="SELECT * FROM tree_details WHERE parent_id = (select parent_id from tree_details where id =  '" . $root . "')" ;
			$result = mysql_query($sql);
			
			while($row=mysql_fetch_array($result)){
				if($row['id'] != $root){
					echo"
					<div class='panel panel-default'>
					<div id='collapseOne1' class='panel-collapse collapse in'>
						<div class='panel-body'>
							<div class='media accordion-inner'>
							<div class='pull-left'>
								<img class='img-responsive' src='img/accordion1.png'>
							</div>
							<div class='media-body'>
								<h4>" . $row['name'] . " (" . $row['nick_name'] . ")</h4>
								<p>". $row['occupation'] . "</p>
								<p>" . $row['place'] . "</p>
							</div>
							</div>
						</div>
						</div>
					</div>";	
				}
			}
			
		*/
?>