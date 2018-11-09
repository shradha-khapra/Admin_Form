<html>
  <head>
    <title>FINAL FORM</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    <style>
    h1{
    	font-family: 'Lora', serif; text-align:center;
    }
    h3{
    	font-family: 'Spectral', serif; text-align:center;
    }
     #main{
	  margin:0px auto; width: 50%;
      }	
      input{
      	border:none;
      	box-shadow: none;
      }
    </style>  
  </head>
  <body>
  	<div id='main'>
  	<?php 

     $title=$_POST['f_title'];
     $description=$_POST['f_description'];
     $total=$_POST['total'];
     $x=1;
     echo "<h1><b>".$title."</b></h1><br>";
     echo "<h3>".$description."</h3><br>";
     while($x<=$total)
     {
     	echo "<h4>".$_POST['qs'.$x]."</h4>";
     	if($_POST[$x]=='q_text')
     		echo "<input name='qs".$x."' placeholder='Enter your ANSWER' class='form-control border-primary'><br>";
     	else if($_POST[$x]=='q_radio')
     	{   $st1= (string)$x;
     		$st1='options'.$st1;
     		$options=$_POST[$st1]; 
     		$op=1;
     		while($op<=$options)
     		{
                $st2=(string)$op;
                $st2='op'.$st2.(string)$x; 
                echo "<input type='radio' name='ans".$x."' value='option".$op."'>";
     	    	echo $_POST[$st2]."<br>";
     			$op++; 
     		}
     	}
     	else if($_POST[$x]=='q_checkbox')
     	{   $st1= (string)$x;
     		$st1='options'.$st1;
     		$options=$_POST[$st1]; 
     		$op=1;
     		while($op<=$options)
     		{
                $st2=(string)$op;
                $st2='op'.$st2.(string)$x; 
                echo "<input type='checkbox' name='ans".$x."' value='option".$op."'>";
     	    	echo $_POST[$st2]."<br>";
     			$op++; 
     		}
     	}
     	echo "<br>";
     	$x++;
     } 
     echo "<button type='submit' class='btn btn-outline-primary'>SUBMIT</button>";
  	?>
  	</div>
  </body>	
</html>