
<?php
include("config.php");
class dbData
{
  	function deleteData($qry)
	{
			mysql_connect(HOST,UNAME,PASS);
			mysql_select_db(DB);
			mysql_query($qry);
			mysql_close();
	}	
	 function updateData($tbl,$fld,$val,$wfld,$wval)
		{
			$qry="update $tbl  set ";
			for($i=0;$i<count($fld);$i++)
				{
					$qry.=$fld[$i]."='".$val[$i]."',";
				}
			$qry=substr($qry,0,strlen($qry)-1);
			$qry.=" where ".$wfld." = '".$wval."'";
			//echo $qry;
			
			//echo "<script> alert('successful inserted')</script>";
			mysql_connect(HOST,UNAME,PASS);
			mysql_select_db(DB);
			mysql_query($qry);
			
			mysql_close();
			
		}	
		function login($u,$p)
		{
		$qry="select * from user where UserName='$u' and Password='$p'";
			mysql_connect(HOST,UNAME,PASS);
			mysql_select_db(DB);
			$result=mysql_query($qry);
			$ty="";
			if(mysql_affected_rows()>0)
				{
				 $row=mysql_fetch_assoc($result);
				 $ty=$row["Type"];
				}
			mysql_close();
			return $ty;
		}
		
		
		function get_row($qry)
		{
			mysql_connect(HOST,UNAME,PASS);
			mysql_select_db(DB);
			$result=mysql_query($qry);
			$row=NULL;
			$rows = array();
			if(mysql_affected_rows()>0)
				{
					
					while($row=mysql_fetch_array($result))
					{
						$rows[] = $row;
					}
					
				}
			mysql_close();
			//echo $row;
			return $rows;
		}

  function insert($tbl,$fld,$val)
		{
			$qry="insert into $tbl (";
			for($i=0;$i<count($fld);$i++)
				{
					$qry.=$fld[$i].",";
				}
			$qry=substr($qry,0,strlen($qry)-1);
			$qry.=")values(";
			
			for($i=0;$i<count($val);$i++)
				{
				$qry.="'".$val[$i]."',";	
			    }
			$qry=substr($qry,0,strlen($qry)-1);
			$qry.=")";
			mysql_connect(HOST,UNAME,PASS);
			mysql_select_db(DB);
			$res =mysql_query($qry);
			
			mysql_close();
			if($res)
				echo "<script> alert('successful inserted')</script>";
			
			return $res;
			
		}
		
}
?>