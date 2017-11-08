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
      <script type="text/javascript" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.js"></script>

      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.date.css">
      <link rel="stylesheet" type="text/css" href="http://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.time.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css">

      <link rel="stylesheet" type="text/css" src="/<?php print( $page['sf_path'] ); ?>/templates/custom.tap.css">

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
          z-index: 8888;
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
        .ui.buttons {
          background-color: rgba(255, 255, 255, 1.0);
          border-color: black;
          border-radius: 8px;
          border: 1px;
        }
        .ui.button:hover {
          font-weight: bold;
          color: rgba(255, 255, 255, 0.8);
          font-color: #1122ff;
        }
      </style>

    </head>
    <body>
      <!-- MODAL #1 - Library Units -->
      <!-- MODAL #1 - Library Units -->
      <!-- MODAL #1 - Library Units -->
      <div class="ui sp united large modal" id="libraryUnits">
        <div class="header">
          Please select a main location
        </div>

        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
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
                <div class="ui approve button" data-value="Library Special Collections">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Library Special Collections</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Library Special Collections</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Clark Library">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Clark Library</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Clark Library</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
                <div class="ui approve button" data-value="Digital Library Program">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Digital Library Program</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Digital Library Program</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="East Asian">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">East Asian</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>East Asian</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Law">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Law</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Law</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Management">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Management</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Management</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Music">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Music</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Music</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Rieber Hall">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Rieber Hall</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/powellnight.png">
                      <div class="ui large label">
                        <center>Rieber Hall</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/sel_00.png">
                      <div class="ui large label">
                        <center>SEL</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SRLF">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SRLF</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/sel_00.png">
                      <div class="ui large label">
                        <center>SRLF</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1929&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="Social Science Data Archive">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Social Science Data Archive</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/sel_00.png">
                      <div class="ui large label">
                        <center>Social Science Data Archive</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1937&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Library Special Collections">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Library Special Collections</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/library.png">
                      <div class="ui large label">
                        <center>Library Special Collections</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>Providing service since 1945&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="actions">
                <div class="ui approve button" data-value="YRL">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">YRL</h2>
                      </div>
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label"><center>YRL</center></div>
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
      <!-- MODAL #3 - Library Units - END-->



      <!-- MODAL #2 - Service Points -->
      <!-- MODAL #2 - Service Points -->
      <!-- MODAL #2 - Service Points -->
      <div class="ui united large modal" id="unitServicePoints">
        <div class="header">
          Please pick a service point.
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
      <!-- MODAL #2 - Service Points END -->

      <!-- MODAL #3 - Service Points Arts -->
      <!-- MODAL #3 - Service Points Arts -->
      <!-- MODAL #3 - Service Points Arts -->
      <div class="ui united large modal" id="unitArts">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #3 - Service Points Arts - END -->

      <!-- MODAL #4 - Service Points Biomedical -->
      <!-- MODAL #4 - Service Points Biomedical -->
      <!-- MODAL #4 - Service Points Biomedical -->
      <div class="ui united large modal" id="unitBiomedical">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #4 - Service Points Biomedical - END -->

      <!-- MODAL #5 - Service Points Library Special Collections -->
      <!-- MODAL #5 - Service Points Library Special Collections -->
      <!-- MODAL #5 - Service Points Library Special Collections -->
      <div class="ui united large modal" id="unitLibrarySpecialCollections">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="LSC Biomed">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC Biomed</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>LSC Biomed</center>
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
      <!-- MODAL #5 - Service Points Library Special Collections - END -->

      <!-- MODAL #6 - Service Points Clark Library -->
      <!-- MODAL #6 - Service Points Clark Library -->
      <!-- MODAL #6 - Service Points Clark Library -->
      <div class="ui united large modal" id="unitClark">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Office">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Office</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Office</center>
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
      <!-- MODAL #6 - Service Points Clark Library - END -->

      <!-- MODAL #7 - Service Points Powell -->
      <!-- MODAL #7 - Service Points Powell -->
      <!-- MODAL #7 - Service Points Powell -->
      <div class="ui united large modal" id="unitPowell">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="InqLab1 (research and writing help)">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">InqLab1 (research and writing help)</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>InqLab1 (research and writing help)</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Inquiry Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Inquiry Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Inquiry Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Entrance Foyer">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Entrance Foyer</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Entrance Foyer</center>
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
      <!-- MODAL #7 - Service Points Powell - END -->

      <!-- MODAL #8 - Service Points Digital Library Program -->
      <!-- MODAL #8 - Service Points Digital Library Program -->
      <!-- MODAL #8 - Service Points Digital Library Program -->
      <div class="ui united large modal" id="unitDigitalLibraryProgram">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
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
      <!-- MODAL #8 - Service Points Digital Library Program - END -->

      <!-- MODAL #9 - Service Points East Asian -->
      <!-- MODAL #9 - Service Points East Asian -->
      <!-- MODAL #9 - Service Points East Asian -->
      <div class="ui united large modal" id="unitEastAsian">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #9 - Service Points East Asian - END -->

      <!-- MODAL #10 - Service Points Law -->
      <!-- MODAL #10 - Service Points Law -->
      <!-- MODAL #10 - Service Points Law -->
      <div class="ui united large modal" id="unitLaw">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #10 - Service Points Law - END -->

      <!-- MODAL #11 - Service Points Management -->
      <!-- MODAL #11 - Service Points Management -->
      <!-- MODAL #11 - Service Points Management -->
      <div class="ui united large modal" id="unitManagement">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #11 - Service Points Management - END -->

      <!-- MODAL #12 - Service Points Music -->
      <!-- MODAL #12 - Service Points Music -->
      <!-- MODAL #12 - Service Points Music -->
      <div class="ui united large modal" id="unitMusic">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="The Reference Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">The Reference Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>The Reference Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #12 - Service Points Music - END -->

      <!-- MODAL #13 - Service Points Rieber Hall -->
      <!-- MODAL #13 - Service Points Rieber Hall -->
      <!-- MODAL #13 - Service Points Rieber Hall -->
      <div class="ui united large modal" id="unitRieberHall">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Rieber Hall 115">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Rieber Hall 115</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Rieber Hall 115</center>
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
      <!-- MODAL #13 - Service Points Rieber Hall - END -->

      <!-- MODAL #14 - Service Points SEL -->
      <!-- MODAL #14 - Service Points SEL -->
      <!-- MODAL #14 - Service Points SEL -->
      <div class="ui united large modal" id="unitSel">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Reference desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL Boelter, Reference desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>SEL Boelter, Reference desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL Boelter, Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>SEL Boelter, Off-desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Boelter, Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL Boelter, Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>SEL Boelter, Circulation Desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="SEL Geology, Circulation Desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">SEL Geology, Circulation Desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/service_desk.png">
                      <div class="ui large label">
                        <center>SEL Geology, Circulation Desk</center>
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
      <!-- MODAL #14 - Service Points SEL - END -->

      <!-- MODAL #15 - Service Points SRLF -->
      <!-- MODAL #15 - Service Points SRLF -->
      <!-- MODAL #15 - Service Points SRLF -->
      <div class="ui united large modal" id="unitSrlf">
        <div class="header">
          Please pick a service point.
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
      
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL #15 - Service Points SRLF - END -->

      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <!-- MODAL #16 - Service Points Social Science Data Archive -->
      <div class="ui united large modal" id="unitSocialScienceDataArchive">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Office">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Office</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Office</center>
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
      <!-- MODAL #16 - Service Points Social Science Data Archive - END -->

      <!-- MODAL #17 - Service Points Library Special Collections -->
      <!-- MODAL #17 - Service Points Library Special Collections -->
      <!-- MODAL #17 - Service Points Library Special Collections -->
      <div class="ui united large modal" id="unitLibrarySpecialCollections">
        <div class="header">
          Please pick a service point.
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="LSC YRL, Reference desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC YRL, Reference desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>LSC YRL, Reference desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="LSC, Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">LSC, Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>LSC, Off-desk</center>
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
      <!-- MODAL #17 - Service Points Library Special Collections - END -->

      <!-- MODAL #18 - Service Points YRL -->
      <!-- MODAL #18 - Service Points YRL -->
      <!-- MODAL #18 - Service Points YRL -->
      <div class="ui united large modal" id="unitYrl">
        <div class="header">
          Please pick a service point.
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
                <div class="ui approve button" data-value="Access Services - A-level service desk ">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">Access Services - A-level service desk </h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>Access Services - A-level service desk </center>
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
      <!-- MODAL #18 - Service Points YRL - END -->















      <!-- modal #4b -->
      <!-- modal #4b -->
      <!-- modal #4b -->
      <div class="ui united large modal" id="libraryMsg">
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
      
    
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #4b END-->

      <!-- modal #6 -->
      <!-- modal #6 -->
      <!-- modal #6 -->
      <div class="ui united large modal" id="individualLogin">
        <div class="header">
          Please pick a Login Provider
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="UCLA Login">
                  <div class="ui card">

                    <div class="image">
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/b_ucla.jpg">
                    </div>

                    <div class="blurring dimmable image">
                      <div class="ui fluid large label">
                        <center>UCLA Login</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve disabled button" data-value="Future Login">
                  <div class="ui card">

                    <div class="image">
                      <img src="/<?php print( $page['sf_path'] ); ?>/img/social-icons2.png">
                    </div>

                    <div class="blurring dimmable image">
                      <div class="ui fluid large label">
                        <center>Future Login</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #6 END-->

      <!-- modal #5 -->
      <!-- modal #5 -->
      <!-- modal #5 -->
      <div class="ui united large modal" id="groupLogin">
        <div class="header">
          Please pick a User Group
        </div>
        <div class="content">
          <div id="libraryChoice">
            <div class="ui three stackable link cards" id="albums">
      
              <div class="actions">
                <div class="ui approve button" data-value="Group-A">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge spy icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Group-A</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="East Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge doctor icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>East Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="The Big Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge child icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>The Big Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="The Large Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge users icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>The Large Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Test Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge thumbs outline up icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Test Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="First Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge comment outline icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>First Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Group-A1">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge idea icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Group-A1</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Morning Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge book icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Morning Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="actions">
                <div class="ui approve button" data-value="Night Group">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui center">
                        <i class="huge paw icon"></i>
                      </div>
                      <div class="ui fluid large label">
                        <center>Night Group</center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>

        <div class="actions">
          <div class="ui black deny button">
            Cancel
          </div>
        </div>

      </div>
      <!-- MODAL #5 END-->
      <!-- MODALS END --------------------------------------------------------------------------------------- -->


      <!-- HEADER ------------------------------------------------------------------------------------------- -->
      <!-- HEADER ------------------------------------------------------------------------------------------- -->
      <!-- HEADER ------------------------------------------------------------------------------------------- -->
      <div class="ui stackable grid container">
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
        <div class="row">
          <div class="column">&nbsp;
          </div>
        </div>
      </div>

      <div class="ui main stackable grid container">
        <div class="three column row">

          <div class="ui column">

            <div class="ui icon message">
              <i class="university icon"></i>
              <div class="content">
                <div class="header" align="left">
                  1. Set Unit <br>
                  2. Set Service Point
                </div>
              </div>
            </div>
            <div class="content">
              <div class="ui stackable grid container">
                <div class="two column row">

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="libraryUnits" class="show ui basic blue button" id="result" name="result">Choose <br>Library <br>Unit</button>
                    </div>
                  </div>

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <button data-modal="modal4" class="show ui basic black button" id="servicePoint" name="servicePoint">Choose <br>Service <br>Point</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="column">

            <div class="ui icon message">
              <i class="users icon"></i>
              <div class="content">
                <div class="header" align="left">
                  Choose Login:<br>
                  Single or Group
                </div>
              </div>
            </div>
            <div class="column">
              <div class="ui stackable grid container">
                <div class="one column row">

                  <div class="ui column">
                    <div class="ui fluid buttons">
                      <!-- dhc - dont double huge the buttons! -->
                      <button data-modal="individualLogin" class="show ui basic orange button" id="statsformLogin" name="statsformLogin">Choose <br>Single <br>Login</button>
                      <div class="or" style="height: 4.57142857em"></div>
                      <button data-modal="groupLogin" class="show ui basic blue button" id="unitGroup" name="unitGroup">Choose <br>Group <br>Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="column">

            <div class="ui icon message">
              <i class="lock icon"></i>
              <div class="content">
                <div class="header">
                  Go to the single or<br>
                  group login page<br>
                </div>
              </div>
            </div>

            <div class="content">
            <div class="ui stackable grid container">
              <div class="one column row">



              <div class="ui massive fluid buttons">
                <div class="show ui basic green button" id="submit0" name="submit0">Submit</div>
              </div>



                </div>
              </div>
            </div>

          </div>


        </div>
      </div>


      <!--------------------------------------------------------------------------------->
      <!------- SCRIPTING TEMP LOCATION ------------------------------------------------->
      <!--------------------------------------------------------------------------------->
      
      <script type="text/javascript">






        $(document).on("click", ".show", function () {


        // if Unit button or Service Point button
        if( $(this).attr('id') == "result" ) {
          modal = 'libraryUnits';
        } else if( ($(this).attr('id') == "servicePoint") && (result.textContent == "Choose Library Unit") ) {
          alert("Please choose a Library Unit first.");
//          modal = 'libraryMsg';
        } else if( $(this).attr('id') == "servicePoint" ) {

          // remove any &nbsp; from 1-line or 2-line labels
          tc_copy = result.textContent;
          tc_copy = tc_copy.replace(/^Clark Library.*/, "Clark Library");
          tc_copy = tc_copy.replace(/^East Asian.*/, "East Asian");
          tc_copy = tc_copy.replace(/^Rieber Hall.*/, "Rieber Hall");
          tc_copy = tc_copy.replace(/^ Law.*/, "Law");
          tc_copy = tc_copy.replace(/^ Management.*/, "Management");
          tc_copy = tc_copy.replace(/^ Music.*/, "Music");
          tc_copy = tc_copy.replace(/^ SEL.*/, "SEL");
          tc_copy = tc_copy.replace(/^ SRLF.*/, "SRLF");
          tc_copy = tc_copy.replace(/^ YRL.*/, "YRL");

          switch (tc_copy) {
            case 'Library Special Collections':
              modal = 'unitLibrarySpecialCollections';
              break;
            case 'Social Science Data Archive':
              modal = 'unitSocialScienceDataArchive';
              break;
            case 'SRLF':
              modal = 'unitSrlf';
              break;
            case 'SEL':
              modal = 'unitSel';
              break;
            case 'Rieber Hall':
              modal = 'unitRieberHall';
              break;
            case 'Music':
              modal = 'unitMusic';
              break;
            case 'Management':
              modal = 'unitManagement';
              break;
            case 'Law':
              modal = 'unitLaw';
              break;
            case 'Choose Service Point':
              modal = 'unitServicePoints';
              break;
            case 'UCLA Arts Library':
              modal = 'unitArts';
              break;
            case 'UCLA Biomedical Library':
              modal = 'unitBiomedical';
              break;
            case 'Library Special Collections':
              modal = 'unitLibrarySpecialCollections';
              break;
            case 'Clark Library':
              modal = 'unitClark';
              break;
            case 'UCLA Powell Library':
              modal = 'unitPowell';
              break;
            case 'Digital Library Program':
              modal = 'unitDigitalLibraryProgram';
              break;
            case 'East Asian':
              modal = 'unitEastAsian';
              break;
            case 'YRL':
              modal = 'unitYrl';
              break;
            case 'UCLA Music Library':
              modal = 'unitMusic';
              break;
          }
        } else if( $(this).attr('id') == "statsformLogin" ) {
          modal = 'individualLogin';
        } else if( $(this).attr('id') == "unitGroup" ) {
          modal = 'groupLogin';
        } else if( $(this).attr('id') == "submit0" ) {
          return false;
        }


//          modal = $(this).attr('data-modal');                   // data-modal="modal4"
//	          modal = 'modal4b';                   // data-modal="modal4"
          $('#'+modal+'.modal').modal("setting", {
            closable: false,
            onApprove: function () {
              return false;
            }
          }).modal("show");
        }).on("click", ".ui.button", function () {
          switch ($(this).data("value")) {
            case 'Library Special Collections':
              $("#result").html("Library <br>Special <br>Collections");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Social Science Data Archive':
              $("#result").html("Social <br>Science <br>Data Archive");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'SRLF':
              $("#result").html(" <br>SRLF <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'SEL':
              $("#result").html(" <br>SEL <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Rieber Hall':
              $("#result").html("Rieber <br>Hall <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Music':
              $("#result").html(" <br>Music <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Management':
              $("#result").html(" <br>Management <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Law':
              $("#result").html(" <br>Law <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'East Asian':
              $("#result").html("East <br>Asian <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Clark Library':
              $("#result").html("Clark <br>Library <br> &nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Library Special Collections':
              $("#result").html("Library <br>Special <br>Collections");
              document.getElementById('result').className = 'show ui violet button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'UCLA Powell Library':
              $("#result").html("UCLA <br>Powell <br>Library");
              document.getElementById('result').className = 'show ui green button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'Digital Library Program':
              $("#result").html("Digital <br>Library <br>Program");
              document.getElementById('result').className = 'show ui green button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'YRL':
              $("#result").html(" <br>YRL <br>&nbsp;");
              document.getElementById('result').className = 'show ui teal button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'UCLA SEL Library':
              $("#result").html("UCLA <br>SEL <br>Library");
              document.getElementById('result').className = 'show ui blue button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'UCLA Music Library':
              $("#result").html("UCLA <br>Music <br>Library");
              document.getElementById('result').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'UCLA Biomedical Library':
              $("#result").html("UCLA <br>Biomedical <br>Library");
              document.getElementById('result').className = 'show ui purple button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;
            case 'UCLA Arts Library':
              $("#result").html("UCLA <br>Arts <br>Library");
              document.getElementById('result').className = 'show ui pink button';
              $(".ui.modal").modal("hide");
              document.getElementById('servicePoint').className = 'show basic ui black button';
              $("#servicePoint").html("Choose <br>Service <br>Point");
              document.getElementById("servicePoint").disabled = false;
              break;

            case 'Access Services - A-level service desk ':
              $("#servicePoint").html("Access Serv. <br>A-Level <br>Service Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;

            case 'LSC YRL, Reference desk':
              $("#servicePoint").html("LSC YRL, <br>Reference <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'LSC, Off-desk':
              $("#servicePoint").html("LSC, <br>Off-desk <br> <br>");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;

            case 'SEL Boelter, Reference desk':
              $("#servicePoint").html("SEL Boelter <br>Reference <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'SEL Boelter, Off-desk':
              $("#servicePoint").html("SEL Boelter <br>Off-Desk <br>&nbsp;");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'SEL Geology, Circulation Desk':
              $("#servicePoint").html("SEL Geology <br>Circulation <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'SEL Boelter, Circulation Desk':
              $("#servicePoint").html("SEL Boelter <br>Circulation <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;

            case 'Rieber Hall 115':
              $("#servicePoint").html("Rieber <br>Hall <br>115");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'Entrance Foyer':
              $("#servicePoint").html("Entrance <br>Foyer <br> <br>");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'InqLab1 (research and writing help)':
              $("#servicePoint").html(" <br>InqLab1 <br> <br>");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'Office':
              $("#servicePoint").html("&nbsp; <br>Office <br>&nbsp;");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'Inquiry Desk':
              $("#servicePoint").html("Inquiry <br>Desk <br> <br>");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'Off-desk':
              $("#servicePoint").html("&nbsp; <br>Off-Desk <br>&nbsp;");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'LSC Biomed':
              $("#servicePoint").html("LSC <br>Biomed <br>&nbsp;");
              document.getElementById('servicePoint').className = 'show ui yellow button';
              $(".ui.modal").modal("hide");
              break;
            case 'The Circulation Desk':
              $("#servicePoint").html("The <br>Circulation <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'The Reference Desk':
              $("#servicePoint").html("The <br>Reference <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'Reference Desk, 2nd Flr':
              $("#servicePoint").html("Reference <br>Desk, <br>2nd Flr");
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

            case 'Group-A':
              $("#unitGroup").html("Login with <br>Group-A");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'East Group':
              $("#unitGroup").html("Login with <br>East <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'The Big Group':
              $("#unitGroup").html("Login with <br>The Big <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'The Large Group':
              $("#unitGroup").html("Login with <br>The Large <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'Test Group':
              $("#unitGroup").html("Login with <br>Test <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'First Group':
              $("#unitGroup").html("Login with <br>First <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'Group-A1':
              $("#unitGroup").html("Login with <br>Group-A1");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'Morning Group':
              $("#unitGroup").html("Login with <br>Morning <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;
            case 'Night Group':
              $("#unitGroup").html("Login with <br>Night <br>Group");
              document.getElementById('unitGroup').className = 'show ui positive button label';
              document.getElementById('statsformLogin').className = 'show ui basic rgba(255, 255, 255, 0.15) button';
              $("#statsformLogin").html("Choose <br>Single <br>Login");
              $(".ui.modal").modal("hide");
              break;

            case 'UCLA Login':
              $("#statsformLogin").html("Set to use <br>UCLA <br>Login");
              document.getElementById('statsformLogin').className = 'show ui positive button';
              document.getElementById('unitGroup').className = 'show ui basic rgba(255, 255, 255, 0.15) button label';
              $("#unitGroup").html("Choose <br>Group <br>Login");
              $(".ui.modal").modal("hide");
              break;
          }
        });

        /// default setting - still needed?
        document.getElementById('result').className = 'show ui rgba(255, 255, 255, 0.15) button';
        document.getElementById('servicePoint').className = 'show ui rgba(255, 255, 255, 0.15) button';
        document.getElementById('statsformLogin').className = 'show ui rgba(255, 255, 255, 0.15) button';
        document.getElementById('unitGroup').className = 'show ui rgba(255, 255, 255, 0.15) button';
        document.getElementById('submit0').className = 'show ui rgba(255, 255, 255, 0.15) button';

        $('.ui.accordion')
          .accordion()
        ;

        $('#submit0').click(function() {

          var sfUnitColor = document.getElementById('result').className;
          var sfServicePointColor = document.getElementById('servicePoint').className;
        
          var sfUnitColorArray = sfUnitColor.split(" ");
          var sfServicePointColorArray = sfServicePointColor.split(" ");

          sfUnitColor = sfUnitColorArray[2];
          sfServicePointColor = sfServicePointColorArray[2];

          location.href = '/statsform/form?sfUnit='+result.textContent+'&sfServicepoint='+servicePoint.textContent+'&sfUnitColor='+sfUnitColor+'&sfServicePointColor='+sfServicePointColor;
        });

        document.getElementById("servicePoint").disabled = true;


        /// ajax section
        (function ($) {

          Drupal.behaviors.statsformAjax = {
            attach: function (context, settings) {

              // Bind an AJAX callback to our link
              var statsformLoginLink = $('#submit0OFF');
              var statsformAjaxLink = $('#submit1');
//              var tempAjaxContainer = document.getElementById("inputDatetime");
              var tempAjaxContainer = document.getElementById("temp-ajax-msg");

              // LOGIN Section
              // LOGIN Section
              // LOGIN Section
              statsformLoginLink.click(function(event) {
                var statsformAjaxTokenElement = document.getElementById("statsformToken");
                var statsformInputLocationElement = result.textContent;
                var statsformInputServicePointElement = servicePoint.textContent;

                // Prevent the default link action
                event.preventDefault();
                // Get the request URL without the query string
                ///var ajaxUrl = statsformAjaxLink.attr('href').split('?');
                $.ajax({
                  type: "POST",
                  url: "/statsform/login",
                  data: {
                    'from_js': true,
                    'statsformToken': statsformAjaxTokenElement.dataset.value,
///                 'statsformToken': 'badTokenTest'
                    'statsformInputLocation': statsformInputLocationElement,
                    'statsformInputServicePoint': statsformInputServicePointElement,
                  },
                  dataType: "json",
                  success: function (data) {
                    // Display the time from successful response
                    if (data.message) {
                      /// alert(data.message);
                      tempAjaxContainer.insertAdjacentHTML('beforeend', data.message);
                      $(".messages").remove();
                      $("#content").append(' <br> <br> <br> <br> <br> <br><div class="messages status">' + data.message + '</div>');
                    }
                  },
                  error: function (xmlhttp) {
                    // Error alert for failure
                    alert('Error occured: ' + xmlhttp.status);
                  }
                });
              });

              // SUBMIT Section
              // SUBMIT Section
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
                      $("#content").append(' <br> <br> <br> <br> <br> <br><div class="messages status">' + data.message + '</div>');
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
                      $("#content").append(' <br> <br> <br> <br> <br> <br><div class="messages status">' + data.message + '</div>');
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
      <!------- SCRIPTING TEMP LOCATION END --------------------------------------------->
      <!--------------------------------------------------------------------------------->

    </body>
  </html>
