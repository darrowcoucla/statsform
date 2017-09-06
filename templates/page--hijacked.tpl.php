<div>
  <html>
    <head>
      <meta charset="utf-8">
      <title>JS Bin</title>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js" charset="utf-8"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.js"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.date.js"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.time.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>

      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.js"></script>

      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.date.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.time.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css">

      <link rel="stylesheet" type="text/css" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.css">
    
      <script type='text/javascript'>
        $(window).load(function(){
          var bcolor = "show huge ui blue button";

          $('#inputTime2').pickatime({
            editable: false,
            interval: 1
          });

          $('#inputTime').pickatime({
            format: 'h:i a',
            formatSubmit: 'HH:i',
            hiddenName: true,
            editable: false,
            interval: 1
          });

          $('#inputDatetime').pickadate({
            format: 'mm/dd/yy',
            formatSubmit: 'dd-yyyy-mm',
            hiddenName: true,
            selectYears: 2,
            selectMonths: true
          });
        });
      </script>

      <style id="jsbin-css">
        @charset "UTF-8";

        /* Global Styles */
        body {
          margin: 0px;
          padding: 9px;
          font-family: Helvetica;
          font-size: 16px;
        }

        #black {
          background-color: black;
          color: white;
        }
          .ui.equal.width.center.aligned.grid {
          height: 100%;
        }

        a.column {
          font-size: 50px;
          line-height: 80px;
        }

        .ui.secondary.inverted.menu {
          background-color: black;
          font-size: 20px;
        }

        .inverted.segment {
          height: 80px;
        }

        .ui.negative.button, .ui.negative.button:hover {
          background-color: #CF322D;
        }

        .ui.positive.button, .ui.positive.button:hover {
          background-color: #68863F;
        }

        .ui.styled.accordion {
          width: 100%;
        }

        .shift {
          width: 100%;
          height: 50%;
          background-color: #68863F;
          font-size: 30px;
          vertical-align: middle;
        }

        .ui.styled.accordion .title, .ui.styled.accordion .title:hover {
          background-color: grey;
          color: white;
        }

        .ui.styled.accordion .active.title, .ui.styled.accordion .active.title:hover {
          background-color: pink;
          color: black;
        }
      </style>
    </head>
    <body>

      <!-- MODAL #1 -->
      <!-- MODAL #1 -->
      <!-- MODAL #1 -->
      <div class="ui sp united large modal" id="modal1">
        <div class="header">
          Please select a main location
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="powell">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Powell Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Powell Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Young Research Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Young Research Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label"><center>Young Research Library</center></div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Science and Engineering Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Science and Engineering Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/sel_00.png">
                      <div class="ui large label">
                        <center>Science and Engineering Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Music Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Music Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/music_00.png">
                      <div class="ui large label">
                        <center>Music Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1945&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Biomedical Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Biomedical Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Biomedical Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Arts Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Arts Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Arts Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
            <!-- albums END -->

          </div>
          <!-- library choice END -->

        </div>
        <!-- content END -->

      </div>
      <!-- MODAL #1 END-->


      <!-- modal #2 -->
      <!-- modal #2 -->
      <!-- modal #2 -->
      <div class="ui united large modal" id="modal2">
        <div class="header">
          Please service point
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="A Level Service Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">A Level Service Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>A Level Service Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Science and Engineering Library Service">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Science and Engineering Library Service</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Science and Engineering Library Service</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Information Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Information Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Information Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Cashier Window">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Cashier Window</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Cashier Window</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Phone Answering Station">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Phone Answering Station</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Phone Answering Station</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #2 END-->

      <!-- HEADER ------------------------------------------------------------>
      <!-- HEADER ------------------------------------------------------------>
      <!-- HEADER ------------------------------------------------------------>
      <table class="ui celled padded table">
        <tbody>
          <tr>
            <td class="ui center aligned">
              <h2 class="ui center aligned">
                <div class="ui input right icon">
                  <i id="icon" class="large calendar icon"></i>
                  <input id="inputDatetime" name="inputDatetime" class="datepicker-fullscreen" type="text" placeholder="Date/Time" data-value="dhc">
                </div>
              </h2>
            </td>
            <td class="ui center aligned">
              <h2 class="ui center aligned">
                <div class="ui input right icon">
                  <i class="large clock icon"></i>
                  <input id="inputTime" name="inputTime" class="timepicker" type="text" placeholder="Date/Time" data-value="dhc">
                </div>
              </h2>
            </td>
            <td class="ui center aligned">
              <h2 class="ui center aligned">
                <div class="large ui labeled button" tabindex="0">
                  <div data-modal="modal1" class="show huge ui red button" id="result" name="result"><i class="university icon"></i>Young Research Library</div>
                  <a data-modal="modal2" class="show huge ui basic black left pointing label" id="servicePoint">Circulation Desk</a>
                </div>
              </h2>
            </td>
            <td class="ui center aligned" width="25%">
              <h2 class="ui center aligned">
                <div class="huge ui labeled button" tabindex="0">
                  <div class="huge ui text menu">
                    <div class="huge ui right dropdown item" id="select45">
                      <div id="userName" name="userName">Darrow Cole</div>
                      <i class="dropdown icon"></i>
                      <div class="huge menu" id="userMenu" name="userMenu">
                        <div class="item">My Settings</div>
                        <div class="item">Logout</div>
                      </div>
                    </div>
                  </div>
                </div>
              </h2>
            </td>
      
          </tr>
        </tbody>
      </table>
      <!-- HEADER END -->

      <p>
      <p>

      <div id="statsformToken" data-value="<?php print( $page['variables'] ); ?>">
      <div id="statsformPath" data-value="<?php print( $page['sf_path'] ); ?>">

      <!-- center aligned grid -->
      <div class="ui equal width height center aligned grid">

        <!-- ACCORDION -->
        <!-- ACCORDION -->
        <!-- ACCORDION -->
        <div class="ui styled accordion">

          <!-- ACCORDION Quick Questions ------------------------------------------------------------>
          <!-- ACCORDION Quick Questions ------------------------------------------------------------>
          <!-- ACCORDION Quick Questions ------------------------------------------------------------>
          <div class="title">
            <i class="dropdownOFF icon"></i>
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
                          <div class="value" id="directional">0</div> 
                          <div class="label"> Count </div>
                        </div>
                      </div>
                    </div>
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/directions.png">
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
                          <div class="value" id="lookUp">0</div> 
                          <div class="label"> Count </div>
                        </div>
                      </div>
                    </div>
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
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
                          <div class="value" id="policyVal">0</div> 
                          <div class="label"> Count </div>
                        </div>
                      </div>
                    </div>
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/policy.png"> 
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
                          <div class="value" id="referral">0</div> 
                          <div class="label"> Count </div>
                        </div>
                      </div>
                    </div>
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/research.png">
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
                          <div class="value" id="technicalVal">0</div> 
                          <div class="label"> Count </div>
                        </div>
                      </div>
                    </div>
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/technical.png"> 
                    <div class="header"> Technical Assistance </div>
                    <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                  </div> 
                </div>
              </div>

              <div class="eight wide column"> 
                <div class="ui fluid card ">
                  <button style = "height: 120px" class=" ui button" id="submit1"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                </div>
              </div>

            </div>
          </div>
          <!-- ACCORDION Quick Questions END -->


          <!-- ACCORDION Referral Section ------------------------------------------------------------>
          <!-- ACCORDION Referral Section ------------------------------------------------------------>
          <!-- ACCORDION Referral Section ------------------------------------------------------------>
          <div class="title">
            <i class="dropdownOFF icon"></i>
              Research Assistance
          </div>
          <div class="content">
    
            <!-- GRID -->
            <div class="ui equal width aligned grid">
    
              <div class="eight wide column">
                <div class="ui fluid card">
                  <div class="content">
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/research.png"> 
                    <div class="header"> Research Assistance </div>
                    <div class="meta"> Help patron with research strategy, advice, overview of resources (drop-in). </div>
                  </div> 
                </div>
              </div>
    
              <div class="eight wide column">
                <div class="ui fluid card">
                  <div class="content">
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/technical.png"> 
                    <div class="header"> Technical Assistance </div>
                    <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                  </div> 
                </div>
              </div>
    
              <div class="eight wide column">
                <div class="ui fluid card">
                  <div class="content">
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
                    <div class="header"> Look up Known Item </div>
                    <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                  </div> 
                </div>
              </div>
    
              <div class="eight wide column">
                <div class="ui fluid card">
                  <div class="content">
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/directions.png"> 
                    <div class="header"> Directional </div>
                    <div class="meta"> Location or directions provided e.g. rooms, events, contact information, etc. </div>
                  </div> 
                </div>
              </div>
    
              <div class="eight wide column">
                <div class="ui fluid card">
                  <div class="content">
                    <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/policy.png"> 
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
                    <div class="ui selection dropdownOFF">
                      <input type="hidden" name="department">
                      <i class="dropdownOFF icon"></i>
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
            <!-- GRID END -->
        
            <!-- GRID -->
            <div class="ui equal width aligned grid">

              <!-- eight wide -->
              <div class="eight wide column">

                <!-- aligned grid -->
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
    
                  <!-- ------------------------->
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
                  <!-- ------------------------->

                </div>
                <!-- aligned grid END -->

              </div>
              <!-- eight wide END -->

            </div>
            <!-- GRID END-->

          </div>
          <!-- ACCORDION Referral Section END -->

        </div>
        <!-- ACCORDION END -->

      </div>
      <!-- center aligned grid END -->


            <td class="ui center aligned">
              <h2 class="ui center aligned">
      
                <div id="temp-ajax-msg"></div>
      
              </h2>
            </td>


      <!--------------------------------------------------------------------------------->
      <!------- SCRIPTING TEMP LOCATION ------------------------------------------------->
      <!--------------------------------------------------------------------------------->
      
      <script type="text/javascript">
        $(document).on("click", ".show", function () {
          modal = $(this).attr('data-modal');
          $('#'+modal+'.modal').modal("setting", {
            closable: false,
            onApprove: function () {
              return false;
            }
          }).modal("show");
        }).on("click", ".ui.button", function () {
          switch ($(this).data("value")) {
            case 'powell':
              $("#result").html("UCLA Powell Library");
              document.getElementById('result').className = 'show huge ui green button';
              $(".ui.modal").modal("hide");
              break;
            case 'Young Research Library':
              $("#result").html("Young Research Library");
              document.getElementById('result').className = 'show huge ui red button';
              $(".ui.modal").modal("hide");
              break;
            case 'Science and Engineering Library':
              $("#result").html("Science and Engineering Library");
              document.getElementById('result').className = 'show huge ui blue button';
              $(".ui.modal").modal("hide");
              break;
            case 'Music Library':
              $("#result").html("Music Library");
              document.getElementById('result').className = 'show huge ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'Biomedical Library':
              $("#result").html("Biomedical Library");
              document.getElementById('result').className = 'show huge ui purple button';
              $(".ui.modal").modal("hide");
              break;
            case 'Arts Library':
              $("#result").html("Arts Library");
              document.getElementById('result').className = 'show huge ui pink button';
              $(".ui.modal").modal("hide");
              break;
            case 'Circulation Desk':servicePoint
              $("#servicePoint").html("Circulation Desk");
              document.getElementById('servicePoint').className = 'show huge ui basic black left pointing label';
              $(".ui.modal").modal("hide");
              break;
            case 'Science and Engineering Library Service':
              $("#servicePoint").html("Science and Engineering Library Service");
              document.getElementById('servicePoint').className = 'show huge ui basic brown left pointing label';
              $(".ui.modal").modal("hide");
              break;
            case 'A Level Service Desk':
              $("#servicePoint").html("A Level Service Desk");
              document.getElementById('servicePoint').className = 'show huge ui basic brown left pointing label';
              $(".ui.modal").modal("hide");
              break;
            case 'Information Desk':
              $("#servicePoint").html("Information Desk");
              document.getElementById('servicePoint').className = 'show huge ui basic grey left pointing label';
              $(".ui.modal").modal("hide");
              break;
            case 'Cashier Window':
              $("#servicePoint").html("Cashier Window");
              document.getElementById('servicePoint').className = 'show huge ui basic olive left pointing label';
              $(".ui.modal").modal("hide");
              break;
            case 'Phone Answering Station':
              $("#servicePoint").html("Phone Answering Station");
              document.getElementById('servicePoint').className = 'show huge ui basic pink left pointing label';
              $(".ui.modal").modal("hide");
              break;
          }
        });
      
      
        /// default setting - still needed?
        document.getElementById('result').className = 'show huge ui red button';
        document.getElementById('servicePoint').className = 'show huge ui basic black left pointing label';
      
        $('.ui.accordion')
          .accordion()
        ;
      
        /// ajax section
        (function ($) {

          Drupal.behaviors.statsformAjax = {
            attach: function (context, settings) {

              // Bind an AJAX callback to our link
              var statsformAjaxLink = $('#submit1');
//              var tempAjaxContainer = document.getElementById("inputDatetime");
              var tempAjaxContainer = document.getElementById("temp-ajax-msg");

              // SUBMIT Section
              statsformAjaxLink.click(function(event) {
                var statsformAjaxTokenElement = document.getElementById("statsformToken");
                var statsformInputDatetimeElement = document.getElementsByName("inputDatetime")[0].value;
                var statsformInputTimeElement = document.getElementsByName("inputTime")[0].value;
                var statsformInputLocationElement = result.textContent;
                var statsformInputServicePointElement = servicePoint.textContent;
                var statsformUserNameElement = userName.textContent;
                var statsformDirectionalElement = document.getElementById("directional").textContent;
                var statsformLookUpElement = document.getElementById("lookUp").textContent;
                var statsformPolicyValElement = document.getElementById("policyVal").textContent;
                var statsformReferralElement = document.getElementById("referral").textContent;
                var statsformTechnicalValElement = document.getElementById("technicalVal").textContent;

                // Prevent the default link action
                event.preventDefault();
                // Get the request URL without the query string
                ///var ajaxUrl = statsformAjaxLink.attr('href').split('?');
                $.ajax({
                  type: "POST",
                  url: "/statsform/ajax",
                  data: {
                    'from_js': true,
                    'statsformToken': statsformAjaxTokenElement.dataset.value,
///                 'statsformToken': 'badTokenTest'
                    'statsformInputDatetime': statsformInputDatetimeElement,
                    'statsformInputTime': statsformInputTimeElement,
                    'statsformInputLocation': statsformInputLocationElement,
                    'statsformInputServicePoint': statsformInputServicePointElement,
                    'statsformUserName': statsformUserNameElement,
                    'statsformDirectional': statsformDirectionalElement,
                    'statsformLookUp': statsformLookUpElement,
                    'statsformPolicyVal': statsformPolicyValElement,
                    'statsformReferral': statsformReferralElement,
                    'statsformTechnicalVal': statsformTechnicalValElement,
                  },
                  dataType: "json",
                  success: function (data) {
                    // Display the time from successful response
                    if (data.message) {
                      /// alert(data.message);
                      tempAjaxContainer.insertAdjacentHTML('beforeend', data.message);
                      $(".messages").remove();
                      $("#content").append('<br><br><br><br><br><br><div class="messages status">' + data.message + '</div>');
                    }
                  },
                  error: function (xmlhttp) {
                    // Error alert for failure
                    alert('Error occured: ' + xmlhttp.status);
                  }
                });
              });

              // LOGOUT section
              $('#select45').dropdown({
                onChange: function(value) {
                  var statsformAjaxTokenElement = document.getElementById("statsformToken");
                  var statsformInputDatetimeElement = document.getElementsByName("inputDatetime")[0].value;
                  var statsformInputTimeElement = document.getElementsByName("inputTime")[0].value;
                  var statsformInputLocationElement = result.textContent;
                  var statsformInputServicePointElement = servicePoint.textContent;
                  var statsformUserNameElement = userName.textContent;

                  // Get the request URL without the query string
                  ///var ajaxUrl = statsformAjaxLink.attr('href').split('?');
                  $.ajax({
                    type: "POST",
                    url: "/statsform/ajax",
                    data: {
                      // For server checking
                      'sfLogout': true,
                      'from_js': true,
                      'statsformToken': statsformAjaxTokenElement.dataset.value,
///                   'statsformToken': 'badTokenTest'
                      'statsformInputDatetime': statsformInputDatetimeElement,
                      'statsformInputTime': statsformInputTimeElement,
                      'statsformInputLocation': statsformInputLocationElement,
                      'statsformInputServicePoint': statsformInputServicePointElement,
                      'statsformUserName': statsformUserNameElement,
///                   'statsformUserMenu': statsformUserMenuElement
                    },
                    dataType: "json",
                    success: function (data) {
                      // Display the time from successful response
                      if (data.message) {
                        expr = /sfLoggedOut/;  // no quotes here
                        if (expr.test(data.message)) {
                          alert(data.message);
///                       window.location.href = "https://www-test.library.ucla.edu/Shibboleth.sso/logout?return=https://shb.ais.ucla.edu/shibboleth-idp/logout";
                          window.location.href = "/support/research-help";
                        }
                      tempAjaxContainer.insertAdjacentHTML('beforeend', data.message);
                      $(".messages").remove();
                      $("#content").append('<br><br><br><br><br><br><div class="messages status">' + data.message + '</div>');
                      }
                    },
                    error: function (xmlhttp) {
                      // Error alert for failure
                      alert('Error occured on Logout: ' + xmlhttp.status);
                    }
                  }); // ajax

                } // onchange
              }); // logout section

            } // attach
          }; // behaviors
        })(jQuery);

      </script>
      <!--------------------------------------------------------------------------------->
      <!------- SCRIPTING TEMP LOCATION ------------------------------------------------->
      <!--------------------------------------------------------------------------------->

    </body>
  </html>
</div>
