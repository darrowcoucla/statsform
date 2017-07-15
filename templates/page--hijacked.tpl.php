<div>
<html>
    <head>
        <title>Stats Redesign Project - 1</title>

        <!-- JQuery -->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>

        <!-- Semantic UI -->
        <link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
        <script src="../semantic/semantic.min.js"></script>

        <!-- Personally Defined CSS/Javascript -->
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

        <script>
        function myfunction1() {
            document.getElementsByName("bidhide")[0].value = "YRL";
            document.getElementById("statsform-page-one").submit();
        }
        function myfunction2() {
            document.getElementsByName("bidhide")[0].value =  "BIOMEDICAL";
            document.getElementById("statsform-page-one").submit();
        }
        function myfunction3() {
            document.getElementsByName("bidhide")[0].value =  "POWELL";
            document.getElementById("statsform-page-one").submit();
        }
        function myfunction4() {
            document.getElementsByName("bidhide")[0].value = "ARTS";
            document.getElementById("statsform-page-one").submit();
        }
        function myfunction5() {
            document.getElementsByName("bidhide")[0].value = "MUSIC";
            document.getElementById("statsform-page-one").submit();
        }
        </script>

        <!-- Google Font Montserrat --> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">   
    </head>
    <body>



<div class="ui united tiny modal" id="modal3">
 <div class="header"> Modal 3 </div>
 <div class="content">








        <!-- Content -->
      <div class="ui equal width height center aligned grid">
         <div class="row">
          <a class="six wide column" href="#" onclick="myfunction1()" id="YRL"> <div class="verticalalign"> 1YOUNG RESEARCH LIBRARY</div></a>
          <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/powellnight.jpg">
        </div>
        <a class="six wide column" href="#" onclick="myfunction2()" id="BL"> <div class="verticalalign"> BIOMEDICAL LIBRARY </div> </a>
    </div>

    <div class="row">
        <div class="four wide column"> <div align="left">
           <img class ="img-responsive" src="../img/Statsform_Stock_Photos/powellstudent.jpg"></div>
       </div>
       <a class="seven wide column" href="#" onclick="myfunction3()" id = "POWELL"> <div class="verticalalign">POWELL LIBRARY</div></a> 
       <div class="five wide column">
        <img class ="img-responsive" src="../img/Statsform_Stock_Photos/clicc.jpg"></div>
    </div>


    <div class="row">
        <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/books.jpg">
        </div>
        <a class="four wide column" href="#" onclick="myfunction4()" id="AL"><div class="verticalalign"> ARTS LIBRARY</div></a>
        <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/DAY3_SHOT5_YOUNGLIBRARY-2192_r_cmyk.jpg">
        </div>
        <a class="four wide column" href="#" onclick="myfunction5()" id="ML"><div class="verticalalign">MUSIC LIBRARY</div></a>
    </div>
</div>  
    
    <?php print render($page['content']); ?>
    </div> 

















      </div>
 <div class="actions">
  <div class="ui blue labeled icon button" id="btn-modal-3"> <i class="checkmark icon"></i> Close All and Finish. </div> </div>
</div>

	<button data-modal="modal3" id="call-modal-3" class="ui orange button">Call Modal 3 only</button>


        <!-- Menu -->
        <div class="ui secondary inverted menu">
            <div class="ui huge breadcrumb">
                <div class="active section" >
                    <a class="item">
                        Home
                    </a>
                </div>
            </div>
            <div class="right menu">
                <a class="item">
                    Login
                </a>
            </div>
        </div>

        <!-- Content -->
      <div class="ui equal width height center aligned grid">
         <div class="row">
          <a class="six wide column" href="#" onclick="myfunction1()" id="YRL"> <div class="verticalalign"> 1YOUNG RESEARCH LIBRARY</div></a>
          <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/powellnight.jpg">
        </div>
        <a class="six wide column" href="#" onclick="myfunction2()" id="BL"> <div class="verticalalign"> BIOMEDICAL LIBRARY </div> </a>
    </div>

    <div class="row">
        <div class="four wide column"> <div align="left">
           <img class ="img-responsive" src="../img/Statsform_Stock_Photos/powellstudent.jpg"></div>
       </div>
       <a class="seven wide column" href="#" onclick="myfunction3()" id = "POWELL"> <div class="verticalalign">POWELL LIBRARY</div></a> 
       <div class="five wide column">
        <img class ="img-responsive" src="../img/Statsform_Stock_Photos/clicc.jpg"></div>
    </div>


    <div class="row">
        <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/books.jpg">
        </div>
        <a class="four wide column" href="#" onclick="myfunction4()" id="AL"><div class="verticalalign"> ARTS LIBRARY</div></a>
        <div class="four wide column">
            <img class ="img-responsive" src="../img/Statsform_Stock_Photos/DAY3_SHOT5_YOUNGLIBRARY-2192_r_cmyk.jpg">
        </div>
        <a class="four wide column" href="#" onclick="myfunction5()" id="ML"><div class="verticalalign">MUSIC LIBRARY</div></a>
    </div>
</div>  
    
    <?php print render($page['content']); ?>
    </div> 

<script>
//Multiple Modals
// all first 3 modals will be called and showed but 'BORED MODAL' won't. Only when you click on the last button
// .united is a custom class and you can use anything.
$('.united.modal').modal({
	// this parameter will enable/disable the closing for the previous .united modals when the next will be opened :)
	allowMultiple: false,
});
// attach events
// haven't attached events over button of modal 3
///$('#modal1').modal('attach events', '#call-modals');
///$('#modal2').modal('attach events', '#btn-modal-1');
///$('#modal3').modal('attach events', '#btn-modal-2');
// disable the comment bellow to call the modal 4 after click on button into modal 3
//$('#modal4').modal('attach events', '#btn-modal-3');
// Individual events - unecessary but i does it.
$('.button').on('click', function(){
	// using the attribute data-modal to identify for what modal the button references
	modal = $(this).attr('data-modal');
	// creating the individual event attached to click over button
	$('#'+modal+'.modal').modal(
		'show'
	);
});
</script>