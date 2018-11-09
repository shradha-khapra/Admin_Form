<html>
<head>
	<title>
	   Editable_Form
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
      #main{
	  margin:0px auto; width: 50%;
      }
      h1{
      	font-family: 'Lora', serif; text-align:center;
      }
       h4{
    	font-family: 'Spectral', serif; text-align:center;
    }
    input{
    	text-align:center;
    }
</style>
</head>
	<body>
	   <div id="main">
		  <h1><b>ADMIN EDITABLE FORM</b><br> (case sensitive)</h1>
		  <div id='initial'>
		     <h4>How many questions would you like to add to the form?</h4><br><br>
		     <input name='no_of_qs' placeholder='ADD NUMBER OF QUESTIONS' id='no_qs' type='NUMBER' class='form-control'><br><br>
		     <button id='done' class="btn btn-outline-primary">DONE</button>
		  </div>
		  <br><br>
		  <form action="admin.php" method="POST" id='myform' style='visibility: hidden'>
             <input name='f_title' placeholder='Enter form TITLE' class='form-control'><br>
             <input name='f_description' placeholder='Enter form DESCRIPTION' class='form-control'><br>
             <input name='total' id='total' type="NUMBER" style="visibility: hidden;" >
             <div id="qs">
           	
             </div><br>
             <button type="submit" class="btn btn-outline-primary">SUBMIT</button>
		  </form>
       </div>		 
	</body>
</html>
<script>
	 
	var qs=document.getElementById('qs');
    var form=document.getElementById('myform');
    var done=document.getElementById('done');
    var initial=document.getElementById('initial');
    var no_of_qs=0,x=1;
   

//    $("qs1"+tqs).change(function(){
//     console.log("The text has been changed.");
// });

    
    done.addEventListener('click',function(){
       document.getElementById('total').value=no_of_qs=document.getElementById('no_qs').value;
       myform.style.visibility='visible';
       // initial.style.visibility='hidden';
       initial.innerHTML='';
        while(x<=no_of_qs)
        {
            qs.innerHTML+='<input name="qs'+x+'" placeholder="Enter QUESTION" class="form-control"><br><div id="'+x+'"></div><input type="radio" name="'+x+'" value="q_text" onclick="q_radio1('+x+')">text ques<br>'+
                          '<input type="radio" name="'+x+'" value="q_radio" onclick="q_radio2('+x+')">qs with radio <br>'+
                          '<input type="radio" name="'+x+'" value="q_checkbox" onclick="q_radio2('+x+')">ques with checkbox<br><br><br>';
            x++;
        }
        

    })
    function q_radio2(id){
         document.getElementById(id).innerHTML='<input name="options'+id+'" placeholder="Enter NUMBER OF OPTIONS to be added" id="options'+id+'" onChange="fun(this.value,'+id+')" class="form-control"><br>';
        }
   function fun(val,id){
   	var op=1; console.log(val);
   	document.getElementById(id).innerHTML="";
   	while(op<=val){
   	document.getElementById(id).innerHTML+='<input name="op'+op+id+'" placeholder="Enter OPTION" class="form-control">';
   	op++;
   }
    document.getElementById(id).innerHTML+='<input name="options'+id+'" value='+val+' style="visibility:hidden;" type="NUMBER">';
   }
   function q_radio1(id){
         document.getElementById(id).innerHTML='';
     }


</script>	