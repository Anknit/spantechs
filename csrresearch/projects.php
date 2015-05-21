<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Venera Technologies Server Management</title>
		<style>
			body, div, a {
				font-size: 16px;
				font-family: Arial;
			}
			
			.links {
				margin-top: 120px;
				margin-left: 300px;
			}
			
			.links a {
				text-decoration: none;
				color: #366E96;
			} /* unvisited link */
			.links a:visited {
				color: #366E96;
			} /* visited link */
			.links a:hover {
				color: #00AA00;
			} /* mouse over link */
			.links a:active {
				color: #366E96;
			} /* selected link */
		</style>
	</head>
	<body cz-shortcut-listen="true">
		<div>
			<img src="Common/images/VT_Logo.PNG" width="133px" height="60px">
		</div>
		<div class="links">
			<ul>
			<?php 
				$DirectoryArr= scandir('.');
				//print_r($DirectoryArr);
				foreach ($DirectoryArr as $value){
				 $ExceptionArray = array(".","..",".svn","Common");
				 if(!in_array($value,$ExceptionArray) && is_dir($value)){
				?>
				 <li>
				  <a href="<?php echo $value."/";?>"><?php echo strtoupper($value); ?></a><br><br><br>
				 </li>
				<?php }}?>
			</ul>
		</div>
	
	</body>
</html>