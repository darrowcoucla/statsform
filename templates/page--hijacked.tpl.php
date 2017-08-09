<div>
<html>
    <head>
        <title>Stats Redesign Project - 1</title>





    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include jQuery Mobile stylesheets -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <!-- Include the jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!-- Semantic UI -->
    <link rel="stylesheet" type="text/css" href="../sites/all/modules/custom/statsform/templates/semantic.min.css">
    <script src="../sites/all/modules/custom/statsform/templates/semantic.min.js"></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/components/accordion.js"></script>


    <!-- Customization -->
    <link rel="stylesheet" type="text/css" href="../sites/all/modules/custom/statsform/templates/custom.accordion.css?v=1" />
    <!-- IScroll Link here -->
    <script type="text/javascript" src="../sites/all/modules/custom/statsform/templates/custom.accordion.js?v=1"></script>









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
 <div class="header"> Modal 33 </div>

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







	<button data-modal="modal3" id="call-modal-3" class="ui red button">Call Modal 3 only</button>


        <!-- Menu -->

        <!-- Content -->
      <div class="ui equal width height center aligned grid">









    <!-- Menu -->
    <div class="ui menu"> 
        <a href="../index.html" class="header item" rel="external" data-ajax="false">Home</a> 
    </div>

    <!-- Calendar -->
    <div class="ui calendar" id="calendar"> 
        <div class="ui input left icon"> 
            <i class="calendar icon"> </i> 
            <input type="text" placeholder="      Date">
        </div> 
    </div>
    <br />


    <!-- Accordion Start -->
    <div class="ui styled accordion">

        <!-- Quick Questions Section -->
        <div class="active title">
            <i class="dropdown icon"></i>
            Quick Questions
        </div>
        <div class="active content">
            <div class="ui equal width aligned grid">
                <div class="eight wide column"> 
                    <div class="ui fluid card withCount">
                        <div class="content"> 
                            <div class="ui inverted segment left floated" id="directions"> 
                                <div class="ui tiny inverted statistics left floated"> 
                                    <div class="statistic">
                                        <div class="value"> 0 
                                        </div> 
                                        <div class="label"> Count </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui tiny image left floated" src="../../img/directions.png"> 
                            <div class="header"> Directional </div> 
                            <div class="meta"> Location or directions provided. E.G. rooms, events, contact info, etc. </div> 
                        </div>
                    </div>
                </div>
                <div class="eight wide column"> 
                    <div class="ui fluid card withCount">
                        <div class="content">
                            <div class="ui inverted segment left floated" id="lookup">
                                <div class="ui tiny inverted statistics left floated"> 
                                    <div class="statistic">
                                        <div class="value"> 0
                                        </div> 
                                        <div class="label"> Count </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui tiny image left floated" src="../../img/lookup.png"> 
                            <div class="header"> Look Up Known Item </div>
                            <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                        </div> 
                    </div>

                </div>
                <div class="eight wide column"> 
                    <div class="ui fluid card withCount">
                        <div class="content">
                            <div class="ui inverted segment left floated" id="policy">
                                <div class="ui tiny inverted statistics left floated"> 
                                    <div class="statistic">
                                        <div class="value"> 0
                                        </div> 
                                        <div class="label"> Count </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui tiny image left floated" src="../../img/policy.png"> 
                            <div class="header"> Policy & Operations</div>
                            <div class="meta"> Hours, access privileges, borrowing, reservations, other policies. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column"> 
                    <div class="ui fluid card withCount">
                        <div class="content">
                            <div class="ui inverted segment left floated" id="research">
                                <div class="ui tiny inverted statistics left floated"> 
                                    <div class="statistic">
                                        <div class="value"> 0
                                        </div> 
                                        <div class="label"> Count </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui tiny image left floated" src="../../img/research.png">
                            <div class="header"> Referral </div>
                            <div class="meta"> Referral to advance research support, library location, campus support, etc. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column"> 
                    <div class="ui fluid card withCount">
                        <div class="content">
                            <div class="ui inverted segment left floated" id="technical">
                                <div class="ui tiny inverted statistics left floated"> 
                                    <div class="statistic">
                                        <div class="value"> 0
                                        </div> 
                                        <div class="label"> Count </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui tiny image left floated" src="../../img/technical.png"> 
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column"> 
                    <div class="ui fluid card ">
                        <button style = "height: 120px" class=" ui button"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                    </div>
                </div>


            </div>
        </div>





        <!-- Referral Section -->
        <div class="title">
            <i class="dropdown icon"></i>
            Research Assistance
        </div>
        <div class="content">
            <div class="ui equal width aligned grid">
                <div class="eight wide column">
                    <div class="ui fluid card">
                        <div class="content">
                            <img class="ui tiny image left floated" src="../../img/research.png"> 
                            <div class="header"> Research Assistance </div>
                            <div class="meta"> Help patron with research strategy, advice, overview of resources (drop-in). </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="ui fluid card">
                        <div class="content">
                            <img class="ui tiny image left floated" src="../../img/technical.png"> 
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="ui fluid card">
                        <div class="content">
                            <img class="ui tiny image left floated" src="../../img/lookup.png"> 
                            <div class="header"> Look up Known Item </div>
                            <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="ui fluid card">
                        <div class="content">
                            <img class="ui tiny image left floated" src="../../img/directions.png"> 
                            <div class="header"> Directional </div>
                            <div class="meta"> Location or directions provided e.g. rooms, events, contact information, etc. </div>
                        </div> 
                    </div>
                </div>
                <div class="eight wide column">
                    <div class="ui fluid card">
                        <div class="content">
                            <img class="ui tiny image left floated" src="../../img/policy.png"> 
                            <div class="header"> Policy & Operations </div>
                            <div class="meta"> Hours, access privileges, borrowing, space reservations, other policies. </div>
                        </div> 
                    </div>
                </div>

                <div class="eight wide column">
                    <form class="ui form">
                        <div class="field">
                            <label>
                                Question Topic
                            </label>
                            <input type="text" name="topic" placeholder="Add topic here." height="200">
                        </div>
                        <div class="grouped fields">
                            <label for="referral">Referral?</label>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="referral" tabindex="0" class="hidden">
                                    <label>Yes</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="referral" tabindex="0" class="hidden">
                                    <label>No</label>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>
                                Department / Unit
                            </label>
                            <div class="ui selection dropdown">
                                <input type="hidden" name="department">
                                <i class="dropdown icon"></i>
                                <div class="default text">
                                    Choose your department
                                </div>
                                <div class="menu">
                                    <div class="item" data-value="none">N/A</div>
                                    <div class="item" data-value="linguistics">Linguistics</div>
                                    <div class="item" data-value="cs">Computer Science</div>
                                    <div class="item" data-value="commstudies">Communications</div>
                                    <div class="item" data-value="arts">Fine Arts</div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Course / Section</label>
                            <input type="text" name="course" placeholder="CRS###/SEC###">
                        </div>
                    </form>
                </div>
            </div>
             <div class="ui equal width aligned grid">
                <div class="eight wide column">
                    <div class="ui equal width aligned grid">
                        <div class="four wide column">
                            <div class="ui inverted segment">
                                <div class="ui tiny inverted statistics">
                                    <div class="statistic">
                                        <div class="value">
                                            0
                                        </div>
                                        <div class="label">
                                            People
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="four wide column">
                            <div class="ui inverted segment">
                                <div class="ui tiny inverted statistics">
                                    <div class="statistic">
                                        <div class="value">
                                            0
                                        </div>
                                        <div class="label">
                                            Minutes
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui form">
                          <div class="inline fields">
                            <label>How did you help the patron?</label>
                            <div class="field">
                              <div class="ui radio checkbox">
                                <input type="radio" name="frequency" checked="checked">
                                <label>In-Person</label>
                            </div>
                        </div>
                        <div class="field">
                          <div class="ui radio checkbox">
                            <input type="radio" name="frequency">
                            <label>E-mail</label>
                        </div>
                    </div>
                    <div class="field">
                      <div class="ui radio checkbox">
                        <input type="radio" name="frequency">
                        <label>Telephone</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="eight wide column">
         <form class="ui form">
            <div class="grouped fields">
                <label for="status" style = "font-size: 30px">Patron Status</label>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" checked="" class="hidden">
                        <label>Unknown</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>UCLA undergrad</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>UCLA graduate student</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>UCLA faculty</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>UCLA researcher/other</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>UCLA alumnus/a</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="status" tabindex="0" class="hidden">
                        <label>non-UCLA</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
            


</div>
</div>


<!--<div class="eight wide column">
    <form class="ui form">
        <div class="field">
            <label>
                Question Topic
            </label>
            <input type="text" name="topic" placeholder="Add topic here." height="200">
        </div>
        <div class="grouped fields">
            <label for="referral">Referral?</label>
            <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="referral" tabindex="0" class="hidden">
                    <label>Yes</label>
                </div>
            </div>
            <div class="field">
                <div class="ui radio checkbox">
                    <input type="radio" name="referral" tabindex="0" class="hidden">
                    <label>No</label>
                </div>
            </div>
        </div>
        <div class="field">
            <label>
                Department / Unit
            </label>
            <div class="ui selection dropdown">
                <input type="hidden" name="department">
                <i class="dropdown icon"></i>
                <div class="default text">
                    Choose your department
                </div>
                <div class="menu">
                    <div class="item" data-value="none">N/A</div>
                    <div class="item" data-value="linguistics">Linguistics</div>
                    <div class="item" data-value="cs">Computer Science</div>
                    <div class="item" data-value="commstudies">Communications</div>
                    <div class="item" data-value="arts">Fine Arts</div>
                </div>
            </div>
        </div>
        <div class="field">
            <label>Course / Section</label>
            <input type="text" name="course" placeholder="CRS###/SEC###">
        </div>
    </form>
</div> 
</div>
</div> !-->

<!-- Directions Modal -->
<div class="ui modal" id="directions-modal">
    <div class="content">
        <div class="header">
            <h1>
                Edit content for Directions
            </h1>
            <div class="ui massive form">
                <div class="field">
                    <label>
                        New count:
                    </label>
                    <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-directions-count">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lookup Modal -->
<div class="ui modal" id="lookup-modal">
    <div class="content">
        <div class="header">
            <h1>
                Edit content for Lookup
            </h1>
            <div class="ui massive form">
                <div class="field">
                    <label>
                        New count:
                    </label>
                    <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-lookup-count">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Policy Modal -->
<div class="ui modal" id="policy-modal">
    <div class="content">
        <div class="header">
            <h1>
                Edit content for Policy
            </h1>
            <div class="ui massive form">
                <div class="field">
                    <label>
                        New count:
                    </label>
                    <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-policy-count">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Research Modal -->
<div class="ui modal" id="research-modal">
    <div class="content">
        <div class="header">Research Assistance
            <h1>
                Edit content for Research Assistance
            </h1>
            <div class="ui massive form">
                <div class="field">
                    <label>
                        New count:
                    </label>
                    <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-research-count">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Technical Modal -->
<div class="ui modal" id="technical-modal">
    <div class="content">
        <div class="header">
            <h1>
                Edit content for Technical Assistance
            </h1>
            <div class="ui massive form">
                <div class="field">
                    <label>
                        New count:
                    </label>
                    <input placeholder="E.G.: 42" type="number" min="0" inputmode="numberic" pattern="[0-9]*" id="new-technical-count">
                </div>
            </div>
        </div>
    </div>
</div>

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
