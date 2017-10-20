  <html>

    <head>

      <meta charset="utf-8">
      <title>JS Bin</title>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js" charset="utf-8"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.js"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.date.js"></script>
      <script type="text/javascript" src="http://amsul.ca/pickadate.js/vendor/pickadate/lib/picker.time.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.js"></script>
<!--
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
-->
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/accordion.js"></script>
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.js"></script>
<!--
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.accordion.js"></script>
-->
<!--
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/jquery.touchSwipe.min.js"></script>
-->

      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.date.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.time.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.css">
<!--
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css">
-->
      <link rel="stylesheet" type="text/css" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.css">

      <link rel="stylesheet" type="text/css" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.accordion.css">

      <link rel="stylesheet" type="text/css" href="/<?php print( $page['sf_path'] ); ?>/templates/responsive-full-background-image.css">
    
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
            format: 'dd mmm',
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
          .ui.container {
          height: auto;
        }
          .ui.main.container{
          background-color: rgba(255, 250, 243, 0.5);
          border-radius: 8px;
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
          background-color: #CF322D;
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

        .actions {
          margin: 0px;
          padding-bottom: 8px;
        }
        .ui.fluid.large.label {
          margin: 0px;
          padding-bottom: -5px;
        }
        .huge.icon {
          margin: 4px;
          padding-bottom: 0px;
        }
        .show.ui.positive.button.label {
          margin: 0px;
          padding-left: 34px;
        }

        /*-------------------
              And Sizes
        --------------------*/

        .ui.mini.buttons .button,
        .ui.mini.buttons .and,
        .ui.mini.button {
          font-size: 0.71428571rem;
        }

        .ui.tiny.buttons .button,
        .ui.tiny.buttons .and,
        .ui.tiny.button {
          font-size: 0.85714286rem;
        }

        .ui.small.buttons .button,
        .ui.small.buttons .and,
        .ui.small.button {
          font-size: 0.92857143rem;
        }

        .ui.buttons .button,
        .ui.buttons .and,
        .ui.button {
          font-size: 1rem;
        }

        .ui.large.buttons .button,
        .ui.large.buttons .and,
        .ui.large.button {
          font-size: 1.14285714rem;
        }

        .ui.big.buttons .button,
        .ui.big.buttons .and,
        .ui.big.button {
          font-size: 1.28571429rem;
        }

        .ui.huge.buttons .button,
        .ui.huge.buttons .and,
        .ui.huge.button {
          font-size: 1.42857143rem;
        }

        .ui.massive.buttons .button,
        .ui.massive.buttons .and,
        .ui.massive.button {
          font-size: 1.71428571rem;
        }



        /*-------------------
              And Buttons
        --------------------*/

        .ui.buttons .and {
          position: relative;
          width: 0.3em;
          height: 2.57142857em;
          z-index: 3;
        }

        .ui.buttons .and:before {
          position: absolute;
          text-align: center;
          border-radius: 500rem;
          content: 'and';
          top: 50%;
          left: 50%;
          background-color: #ffffff;
          text-shadow: none;
          margin-top: -0.89285714em;
          margin-left: -1.1em;
          width: 2.2em;
          height: 1.78571429em;
          line-height: 1.78571429em;
          color: rgba(0, 0, 0, 0.4);
          font-style: normal;
          font-weight: bold;
          box-shadow: 0px 0px 0px 1px transparent inset;
          z-index: 4444;
        }

        .ui.buttons .and[data-text]:before {
          content: attr(data-text);
        }

        /* Fluid And */

        .ui.fluid.buttons .and {
          width: 0em !important;
        }

        .ui.fluid.buttons .and:after {
          display: none;
        }
        .ui.borderless.column {
          background-color: rgba(255, 255, 255, 0.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
          margin-bottom: 15px;
        }
        .ui.message {
          background-color: rgba(255, 255, 255, 0.0);
          border-style: none;
          border-style: hidden;
          border-radius: 8px;
        }
        .ui.sfWhite.button {
          background-color: rgba(255, 255, 255, 1.0);
        }
        .ui.combo.sfWhite.button {
          background-color: rgba(244, 244, 244, 1.0);
        }
        .ui.buttons {
          background-color: rgba(255, 255, 255, 0.7);
          border-radius: 8px;
        }
        .ui.button:hover {
          font-weight: bold;
          font-color: #ffffff;
        }

.dimmable.dimmed > .dimmer {
  overflow: auto !important;
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
                <div class="ui approve button" data-value="UCLA Powell Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">UCLA Powell Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>UCLA Powell Library</center>
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
                <div class="ui approve button" data-value="UCLA Music Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">UCLA Music Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/music_00.png">
                      <div class="ui large label">
                        <center>UCLA Music Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1945&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="UCLA Biomedical Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">UCLA Biomedical Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>UCLA Biomedical Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="UCLA Arts Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">UCLA Arts Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>UCLA Arts Library</center>
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
          Please pick a service point
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>The Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="A-Level Service Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">A-Level Service Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>A-Level Service Desk</center>
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
                <div class="ui approve button" data-value="The Information Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Information Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>The Information Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="The Cashier Window">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Cashier Window</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>The Cashier Window</center>
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


      <!-- HEADER -->
      <!-- HEADER -->
      <!-- HEADER -->

      <!-- SPACER -->
      <div class="ui stackable grid container">
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
      </div>

      <!-- HEADER CONTENT -->
      <div class="ui main stackable center aligned middle aligned grid container">
        <div class="sixteen column row">

          <!-- OUTER LEFT COLUMN -->
          <div class="ui seven wide column">
            <div class="content">
              <div class="ui stackable grid container">
                <div class="two column row">

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="modal1" class="show ui basic blue button" id="result" name="result">Choose <br>Library <br>Unit</button>
                    </div>
                  </div>

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="modal2" class="show ui basic black button" id="servicePoint" name="servicePoint">Choose <br>Service <br>Point</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- OUTER RIGHT COLUMN -->
          <div class="ui nine wide right floated column">
            <div class="ui main stackable middle aligned grid container">
              <div class="sixteen column row">

                <!-- INNER LEFT COLUMN -->
                <div class="ui six wide right floated column">
                  <div class="content">
                    <div class="ui center aligned">
                      <div class="ui fluid input right icon">
                        <i id="iconCal" class="large calendar icon"></i>
                        <input id="inputDatetime" name="inputDatetime" class="datepicker-fullscreen" type="text" placeholder="Date/Time" data-      value="dhc">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- INNER CENTER COLUMN -->
                <div class="ui six wide right floated column">
                  <div class="content">
                    <div class="ui center aligned">
                      <div class="ui fluid input right icon">
                        <i id="iconTim" class="large clock icon"></i>
                        <input id="inputTime" name="inputTime" class="timepicker" type="text" placeholder="Date/Time" data-value="dhc">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- INNER RIGHT COLUMN -->
                <div class="ui four wide right floated column">
                  <div class="content">
                    <div class="ui dropdown">
                      <div class="text">Hi Darrow</div>
                      <i class="dropdown icon"></i>
                      <div class="menu icon">
                        <div class="item disabled" data-value="0"><i class="user icon"></i>Darrow Cole</div>
                        <div class="item" data-value="1"><i class="edit icon"></i> Logout</div>
                      </div>
                     </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- OUTER RIGHT COLUMN - END -->

        </div> <!-- 16 column row -->
      </div> <!-- grid container -->
      <!-- HEADER CONTENT END -->

      <!-- HEADER END -->
      <!-- HEADER END -->
      <!-- HEADER END -->


      <div id="statsformToken" data-value="<?php print( $page['variables'] ); ?>"></div>
      <div id="sfUnit" data-value="<?php print( $page['sfUnit'] ); ?>"></div>
      <div id="sfUnitColor" data-value="<?php print( $page['sfUnitColor'] ); ?>"></div>
      <div id="sfServicePoint" data-value="<?php print( $page['sfServicePoint'] ); ?>"></div>
      <div id="sfServicePointColor" data-value="<?php print( $page['sfServicePointColor'] ); ?>"></div>
      <div id="statsformPath" data-value="<?php print( $page['sf_path'] ); ?>"></div>


      <!-- BODY -->
      <!-- BODY -->
      <!-- BODY -->

      <div class="ui stackable grid container">
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
      </div>

      <!-------------------------- TAB overview - START -------------------------->
      <div class="ui tab" data-tab="overview">

        <!-- PAGE TOP CONTENT -->
        <div class="ui main stackable grid container">
          <div class="three column row">
            <div class="ui main stackable center aligned middle aligned grid container">
              <div class="sixteen column row">
                <!-- OUTER LEFT COLUMN -->
                <div class="ui four wide left floated column">
                  <div class="ui buttons">
                    <div class="ui two item stackable tabs menu">
                      <a class="item" data-tab="overview">Quick Questions</a>
                      <a class="active item" data-tab="test_OFF_OFF">Research Assistance</a>
                    </div>
                  </div>
                </div>
              </div> <!-- 16 column row -->
            </div> <!-- grid container - END -->
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->

        <!-- MAIN PAGE CONTENT -->
        <div class="ui main stackable grid container"> <!-- Outer Grid1 -->
          <div class="sixteen column row">

            <div class="ui sixteen wide column"> <!-- 16 wide column1 -->
              <div class="content">
                <div class="active content">

                  <div class="ui equal width aligned grid"> <!-- Inner Grid1 -->

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
                          <div class="ui left aligned">
                            <div class="header"> Directional </div> 
                            <div class="meta"> Location or directions provided. E.G. rooms, events, contact info, etc. </div>
                          </div>
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
                          <div class="ui left aligned">
                            <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
                            <div class="header"> Look Up Known Item </div>
                          </div>
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
                          <div class="ui left aligned">
                            <div class="header"> Policy & Operations</div>
                            <div class="meta"> Hours, access privileges, borrowing, reservations, other policies. </div>
                          </div>
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
                          <div class="ui left aligned">
                            <div class="header"> Referral </div>
                            <div class="meta"> Referral to advance research support, library location, campus support, etc. </div>
                          </div>
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
                          <div class="ui left aligned">
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card ">
                        <button style = "height: 120px" class=" ui button" id="submit1"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                      </div>
                    </div>

                  </div> <!-- Inner Grid 1 - END -->

                </div>
              </div>
            </div> <!-- 16 wide column 1 - END -->

          </div>
        </div> <!-- Outer Grid 1 - END -->

      </div>
      <!-------------------------- TAB overview - END ---------------------------->

      <!-------------------------- TAB test_OFF - START -------------------------->
      <div class="ui active tab" data-tab="test_OFF">

        <!-- PAGE TOP CONTENT -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->

                <div class="ui four wide left floated column">
                  <div class="ui buttons">
                    <div class="ui two item stackable tabs menu">
                      <a class="item" data-tab="overview">Quick Questions</a>
                      <a class="active item" data-tab="test_OFF">Research Assistance</a>
                    </div>
                  </div>
                </div>

                <div class="ui three wide left floated column">
                  <div class="ui main stackable middle aligned grid container">
                    <div class="sixteen column row">
                      <div class="ui sixteen wide left floated column">

                        <div class="content">
                          <div class="ui left aligned">
                            <div class="ui test checkbox">
                              <input type="checkbox">
                              <label>Referral?</label>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="ui three wide left floated column">
                  <div class="content">
                    <div class="ui left aligned">
                      <select name="method" class="ui fluid selection dropdown">
                        <option value="init">Set Assistance Method</option>
                        <option value="angular">In-Person</option>
                        <option value="css">E-mail</option>
                        <option value="design">Telephone</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="ui three wide left floated column">
                  <div class="content">
                    <div class="ui left aligned">
                      <select name="status" class="ui fluid selection dropdown">
                        <option value="init">Indicate Patron Status</option>
                        <option value="angular">Unknown</option>
                        <option value="css">UCLA undergrad</option>
                        <option value="design">UCLA graduate student</option>
                        <option value="ember">UCLA faculty</option>
                        <option value="html">UCLA researcher/other</option>
                        <option value="ia">UCLA alumnus/a</option>
                        <option value="javascript">non-UCLA</option>
                      </select>
                    </div>
                  </div>
                </div>

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP CONTENT - END -->

        <!-- PAGE TOP2 CONTENT -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->

                <div class="ui three wide center floated column">
                  <div class="ui sixteen wide left floated column">
                    <div class="content">
                      <div class="ui left aligned">
                        <select name="dept" class="ui fluid selection dropdown">
                          <option value="init">Choose Deptartment / Unit</option>
                          <option value="angular">N/A</option>
                          <option value="css">Linguistics</option>
                          <option value="design">Computer Science</option>
                          <option value="ember">Communications</option>
                          <option value="html">Fine Arts</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ui three wide center floated column">
                  <div class="ui sixteen wide left floated column">
                    <div class="content">
                      <div class="ui left aligned">
                        <select name="dept" class="ui fluid selection dropdown">
                          <option value="init">Choose Course / Section</option>
                          <option value="angular">N/A</option>
                          <option value="css">Linguistics</option>
                          <option value="design">Computer Science</option>
                          <option value="ember">Communications</option>
                          <option value="html">Fine Arts</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="ui eight wide column">
                  <div class="ui huge fluid input">
                    <div class="ui big label">
                      Question <br>/ Topic
                    </div>
                    <input type="text">
                  </div>
                </div>

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP2 CONTENT - END -->

        <!-- MAIN PAGE CONTENT -->
        <div class="ui main stackable grid container"> <!-- Outer Grid2 -->
          <div class="sixteen column row">

            <div class="ui sixteen wide column"> <!-- 16 wide column2 -->
              <div class="content">
                <div class="active content">

                  <div class="ui equal width aligned grid"> <!-- Inner Grid2 -->

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
                          <div class="ui left aligned">
                            <div class="header"> Research Assistance </div>
                            <div class="meta"> Help patron with research strategy, advice, overview of resources (drop-in). </div>
                          </div>
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
                          <div class="ui left aligned">
                            <div class="header"> Technical Assistance </div>
                            <div class="meta"> Help with printers, computers, software, scanners, etc. </div>
                          </div>
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
                          <div class="ui left aligned">
                            <img class="ui tiny image left floated" src="/<?php print( $page['sf_path'] ); ?>/img/lookup.png"> 
                            <div class="header"> Look Up Known Item </div>
                          </div>
                          <div class="meta"> Find call numbers, books, articles, locations, etc. for known items requested by patron. </div>
                        </div>
                      </div>
                    </div>

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
                          <div class="ui left aligned">
                            <div class="header"> Directional </div> 
                            <div class="meta"> Location or directions provided. E.G. rooms, events, contact info, etc. </div>
                          </div>
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
                          <div class="ui left aligned">
                            <div class="header"> Policy & Operations</div>
                            <div class="meta"> Hours, access privileges, borrowing, reservations, other policies. </div>
                          </div>
                        </div> 
                      </div>
                    </div>


                    <div class="eight wide red column"> 
                      <div class="ui blue fluid card withCount">
                        <div class="content">

                          <div class="ui green inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="policyVal">0</div> 
                                <div class="label"> People </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="content">
                          <div class="ui orange inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="policyVal">0</div> 
                                <div class="label"> People </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="content">

                          <div class="ui orange inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="policyVal">0</div> 
                                <div class="label"> People </div>
                              </div>
                            </div>
                          </div>

                        </div> 
                      </div>
                    </div>

                    <div class="eight wide column"> 
                      <div class="ui fluid card ">
                        <button style = "height: 120px" class=" ui button" id="submit1"> <h1 style = "font-size:70px"> SUBMIT </h1> </button>
                      </div>
                    </div>

                  </div> <!-- Inner Grid2 - END -->

                </div>
              </div>
            </div> <!-- 16 wide column2 - END -->

          </div>
        </div> <!-- Outer Grid2 - END -->
        <!-- MAIN PAGE CONTENT  - END-->


      </div>
      <!-------------------------- TAB test_OFF - END ---------------------------->


























      <!-------------------------- REFERENCE ---------------------------->
      <!-- Save for data to set up test_OFF, above  -->
      <div class="ui tab" data-tab="test_OFF_OFF">

        <!-- HEADER CONTENT -->
        <div class="ui main stackable center aligned middle aligned grid container">
          <div class="sixteen column row">

            <!-- OUTER LEFT COLUMN -->
            <div class="ui four wide left floated column">

              <div class="ui buttons">
                <div class="ui two item stackable tabs menu">
                  <a class="item" data-tab="overview">Quick Questions</a>
                  <a class="active item" data-tab="test_OFF">Research Assistance</a>
                </div>
              </div>

            </div>
            <!-- OUTER LEFT COLUMN END -->

            <!-- OUTER RIGHT COLUMN -->
            <div class="ui nine wide right floated column">
              <div class="ui main stackable middle aligned grid container">
                <div class="sixteen column row">

                  <!-- INNER LEFT COLUMN -->
                  <!-- large screen -->
                  <div class="ui six wide right floated column">
                    <div class="content">
                      <div class="ui center aligned">
                        <div class="ui fluid input right icon">
                          <i id="iconCal" class="large calendar icon"></i>
                          <input id="inputDatetime" name="inputDatetime" class="datepicker-fullscreen" type="text" placeholder="Date/Time" data-      value="dhc">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- INNER CENTER COLUMN -->
                  <!-- large screen -->
                  <div class="ui six wide right floated column">
                    <div class="content">
                      <div class="ui center aligned">
                        <div class="ui fluid input right icon">
                          <i id="iconTim" class="large clock icon"></i>
                          <input id="inputTime" name="inputTime" class="timepicker" type="text" placeholder="Date/Time" data-value="dhc">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- INNER RIGHT COLUMN -->
                  <div class="ui four wide right floated column">
                    <div class="content">
                      <div class="ui dropdown">
                        <div class="text">Hi Darrow</div>
                        <i class="dropdown icon"></i>
                        <div class="menu icon">
                          <div class="item disabled" data-value="0"><i class="user icon"></i>Darrow Cole</div>
                          <div class="item" data-value="1"><i class="edit icon"></i> Logout</div>
                        </div>
                       </div>
                    </div>
                  </div>

                </div> <!-- 16 column row -->
              </div> <!-- grid container -->
            </div>
            <!-- OUTER RIGHT COLUMN END -->

          </div> <!-- 16 column row -->
        </div> <!-- grid container -->
        <!-- HEADER CONTENT END -->

        <div class="content">

          <div class="ui equal width aligned grid"> <!-- grid container -->

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

            <div class="eight wide column"> <!-- eight wide column -->
              <form class="ui form"> <!-- Form -->

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
              </form> <!-- Form - END -->
            </div> <!-- eight wide column -->

          </div> <!-- grid container - END -->

          <div class="ui equal width aligned grid"> <!-- grid container2 -->

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

                <div class="eight wide column"> <!-- Eight Wide Column -->
                  <form class="ui form"> <!-- Form2 -->

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

                  </form> <!-- Form2 -->
                </div> <!-- Eight Wide Column - END -->

              </div>

            </div>

          </div>

        </div>

      </div>
      <!-- BODY END -->
      <!-- BODY END -->
      <!-- BODY END -->




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
            case 'UCLA Powell Library':
              $("#result").html("UCLA <br>Powell <br>Library");
              document.getElementById('result').className = 'show ui green button';
              $(".ui.modal").modal("hide");
              break;
            case 'Young Research Library':
              $("#result").html("Young <br>Research <br>Library");
              document.getElementById('result').className = 'show ui red button';
              $(".ui.modal").modal("hide");
              break;
            case 'UCLA SEL Library':
              $("#result").html("UCLA <br>SEL <br>Library");
              document.getElementById('result').className = 'show ui blue button';
              $(".ui.modal").modal("hide");
              break;
            case 'UCLA Music Library':
              $("#result").html("UCLA <br>Music <br>Library");
              document.getElementById('result').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'UCLA Biomedical Library':
              $("#result").html("UCLA <br>Biomedical <br>Library");
              document.getElementById('result').className = 'show ui purple button';
              $(".ui.modal").modal("hide");
              break;
            case 'UCLA Arts Library':
              $("#result").html("UCLA <br>Arts <br>Library");
              document.getElementById('result').className = 'show ui pink button';
              $(".ui.modal").modal("hide");
              break;
            case 'The Circulation Desk':
              $("#servicePoint").html("The <br>Circulation <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'Science and Engineering Library Service':
              $("#servicePoint").html("SEL <br>Library <br>Service");
              document.getElementById('servicePoint').className = 'show ui brown button';
              $(".ui.modal").modal("hide");
              break;
            case 'A-Level Service Desk':
              $("#servicePoint").html("A-Level <br>Service <br>Desk");
              document.getElementById('servicePoint').className = 'show ui brown button';
              $(".ui.modal").modal("hide");
              break;
            case 'The Information Desk':
              $("#servicePoint").html("The <br>Information <br>Desk");
              document.getElementById('servicePoint').className = 'show ui gray button';
              $(".ui.modal").modal("hide");
              break;
            case 'The Cashier Window':
              $("#servicePoint").html("The <br>Cashier <br>Window");
              document.getElementById('servicePoint').className = 'show ui olive button';
              $(".ui.modal").modal("hide");
              break;
            case 'Phone Answering Station':
              $("#servicePoint").html("Phone <br>Answering <br>Station");
              document.getElementById('servicePoint').className = 'show ui pink button';
              $(".ui.modal").modal("hide");
              break;
          }
        });
      
      
        /// default setting - still needed? ===> yes

              // set on page load (from login page thru the drupal module)


  var sfUnit = document.getElementById("sfUnit").dataset.value;
  var sfServicePoint = document.getElementById("sfServicePoint").dataset.value;

  sfUnit = sfUnit.replace(/ /g, " <br>");
  sfServicePoint = sfServicePoint.replace(/ /g, " <br>");


/// Tabs
$(document).ready(function() {
  $('.menu .item').tab();
});



//  sfUnit = "dfgdfg";

              // set Unit name
              $("#result").html( sfUnit );

              // set Unit color
              $sfUnitColor = document.getElementById("sfUnitColor").dataset.value;
              $sfUnitColor = 'show ui '+ $sfUnitColor + ' button';
              document.getElementById('result').className = $sfUnitColor;

              // set Service Point name
              $("#servicePoint").html( sfServicePoint );
//              $("#servicePoint").html( document.getElementById("sfServicePoint").dataset.value );
//              $("#servicePoint").html("asdasd");

              // set Service Point color
              $sfServicePointColor = document.getElementById("sfServicePointColor").dataset.value;
              $sfServicePointColor = 'show ui ' + $sfServicePointColor + ' button';
              document.getElementById('servicePoint').className = $sfServicePointColor;

///              $("#servicePoint").html("Circulation Desk");
///              document.getElementById('servicePoint').className = 'show huge ui basic black left pointing label';
///
///
///
///$("#servicePoint").html("Phone Answering Station");
///document.getElementById('servicePoint').className = 'show huge ui basic pink left pointing label';
///
///
///
///        document.getElementById('result').className = 'show huge ui blue button';
///        document.getElementById('servicePoint').className = 'show huge ui basic black left pointing label';



        $('.ui.accordion')
          .accordion()
        ;


$('.combo.dropdown')
  .dropdown({
    action: 'combo'
  })
;

$('.clear.example .button')
  .on('click', function() {
    $('.clear.example .ui.dropdown')
      .dropdown('clear')
    ;
  })
;

$('.ui.dropdown')
  .dropdown()
;

$('.dropdown')
  .dropdown({
    // you can use any ui transition
    transition: 'drop'
  })
;





        $('.test.checkbox').checkbox('attach events', '.toggle.button');
        $('.test.checkbox').checkbox('attach events', '.check.button', 'check');
        $('.test.checkbox').checkbox('attach events', '.uncheck.button', 'uncheck');








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
                          alert("Log out - Yes/No?");
///                       alert(data.message);
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
