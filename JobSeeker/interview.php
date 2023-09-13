<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
}
	else{
		header('location:../index.php');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<script>
function myFunction() {
  var x = document.getElementById("hello2");
 
    x.style.display = "block";
  
}
function complete(){
    alert("Mock Test submitted sucessfully"); 
    
}
</script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
#hello2{
    display: none;
}
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
                    <br><br>
                <button onclick="myFunction()">Start Mock Interview</button>

                <div id="hello2" >
                <form action="index.php" method='post' onsubmit="complete()">
    <h1>Technical questions</h1>
    <ol>
    <li>What is a default and conversion constructor?<br></li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What are the advantages and disadvantages of multiple inheritance?</li>
    <textarea rows="5" cols="50" name="techans2"></textarea> 
    <li>What is a singleton class?</li>
    <textarea rows="5" cols="50" name="techans3"></textarea> 
    <li>What is a stream?</li>
    <textarea rows="5" cols="50" name="techans4"></textarea> 
    <li>What is a view?</li>
    <textarea rows="5" cols="50" name="techans5"></textarea> 
    <li>What is an object?</li>
    <textarea rows="5" cols="50" name="techans6"></textarea> 
    <li>What is polymorphism? </li>
    <textarea rows="5" cols="50" name="techans7"></textarea> 
    <li>Is string class final?</li>
    <textarea rows="5" cols="50" name="techans8"></textarea> 
    <li>What is the difference between overriding and overloading?</li>
    <textarea rows="5" cols="50" name="techans9"></textarea> 
    <li>What is a character stream?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is a file?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is a class? What is a superclass?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is inheritance?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What are the primary components of a computer system?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is a chipset?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is an operating system? What are the popular operating systems used today?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is primary and secondary memory?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What are the commonly used computer processors?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is a constructor?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    <li>What is an interface?</li>
    <textarea rows="5" cols="50" name="techans1"></textarea> 
    </ol>
    <h1>Other questions</h1>
    <ol>
    <li>Tell me about yourself</li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>Please tell me something about you which is not in the CV </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>Describe yourself in one word. </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>What are your hobbies? </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>What are your strengths and weaknesses? </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>How did you come across this job? </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>What makes you think you are suitable for this job?</li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>Tell us what you know about our organization. </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>Tell us what you know about the role you have applied for. </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>How do you see yourself in 5 years? </li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    <li>What do you consider as the biggest achievement in your life so far?</li>
    <textarea rows="5" cols="50" name="otherans1"></textarea>
    </ol>
    <input type="Submit" Value="Submit">            
                </form>

               </div><!-- /hello2 -->
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->



            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>

                

           
