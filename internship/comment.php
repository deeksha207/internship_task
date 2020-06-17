
<html>
	<head>
        <title>JSON Database</title>
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="index1.css" />
	</head>
	<body>
        <div>
        <header>
          <div class="mine1">Advanced Security</div>
          <div class="mine">Welcome,admin<i class="fa fa-arrow-down hit" id="hat"></i></div>
          <div class="hide" id="hide_me">
              <ul>
                  <li><i class="fa fa-user"></i>My Profile</li>
                  <li><i class="fa fa-sign-out"></i>Logout</li>
              </ul>
          </div>
        </header>
        <div class="division">
          <div class="set1">
            <ul>
              <li><a href="comment.php"><i class="fa fa-home space"></i></a>Home</li>
              <li><a href="profile.php"><i class="fa fa-user space"></i></a>My Profile</li>
              <li><i class="fa fa-users space"></i>Users</li>
              <li><i class="fa fa-male space"></i>Users Roles</li>
            </ul>
          </div>
          <div class="comment">
          <?php	
			$myObject = json_decode(file_get_contents('a2.json'));
				
				echo "
					<table border='2px' style='width:400px; border:2px solid black;'>
						<thead>
							<tr>
								
								<th>Comment</th>
							</tr>
						</thead>
					";
				
				foreach($myObject as $x){
					
				echo "
						<tr>
							
							<td>".$x->comment."</td>
						</tr>
					";
				}
				
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
		$formdata = array(
			  
			  'comment'=> $_POST['comment']
		   );
		   
		$current_data = file_get_contents('a2.json');  
		$array_data = json_decode($current_data, true); 
		$array_data[] = $formdata;  
		$final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
		if(file_put_contents('a2.json', $final_data)) 
		{
				echo "
						<tr>
							
							<td>".$_POST['comment']."</td>
						</tr>
					";
		}					
	}
	
	echo "
		</table>
		";
?>
	<form method="POST" action="comment.php">
		
		<h2>Comment </h2>
			<input type="text" required="required" placeholder="Comment" name="comment">
			<br>
			<br>
		<input type="submit">
    </form>
</div>
</div>
	
	</body>
</html>	


