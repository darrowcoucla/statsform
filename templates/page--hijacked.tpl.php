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
        .ui.tb.buttons {
          background-color: rgba(255, 255, 255, 0.01);
          border-radius: 8px;
        }
        .ui.button:hover {
          font-weight: bold;
          font-color: #ffffff;
        }
        .ui.tabular.menu {
          border-style: hidden;
        }
        #grid1 {
          border: 2px solid rgba(242, 242, 242, 0.3);
        }
        #grid2 {
border: 2px solid rgba(255, 255, 255, 0.9);
border-radius: 0px;
        }
        #grid3 {
font-weight: lighter;
        }

.dimmable.dimmed > .dimmer {
  overflow: auto !important;
}
      </style>

    </head>
    <body>
      <!-- MODALS START --------------------------------------------------------------------------------------- -->

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
      
              <div class="actions">
                <div class="ui approve button" data-value="HSS/IS, Reference desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">HSS/IS, Reference desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>HSS/IS, Reference desk</center>
                      </div>
                      <div class="meta">
                        <span class="right"><i></i>310-555-5555&nbsp;</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="actions">
                <div class="ui approve button" data-value="HSS/IS, Off-desk">
                  <div class="ui card">
                    <div class="blurring dimmable image">
                      <div class="ui inverted dimmer">
                        <h2 class="ui aligned inverted header">HSS/IS, Off-desk</h2>
                      </div>
                      <img class="ui small image" src="/<?php print( $page['sf_path'] ); ?>/img/yrl_pods.png">
                      <div class="ui large label">
                        <center>HSS/IS, Off-desk</center>
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

      <!-- MODAL #19 - Library Message -->
      <!-- MODAL #19 - Library Message -->
      <!-- MODAL #19 - Library Message -->
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
      <!-- MODAL #19 - Library Message - END -->

      <!-- MODAL #20 - Individual Login -->
      <!-- MODAL #20 - Individual Login -->
      <!-- MODAL #20 - Individual Login -->
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
      <!-- MODAL #20 - Individual Login - END -->


      <!-- MODAL #21 - Group Login -->
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
      <!-- MODAL #21 - Group Login - END -->

      <!-- MODALS END --------------------------------------------------------------------------------------- -->


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
                        <input id="inputDatetime" name="inputDatetime" class="datepicker-fullscreen" type="text" placeholder="Date/Time" data-      value="23 Oct">
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
                        <div class="item disabled" data-value="0" id="userName" name="userName"><i class="user icon"></i>Darrow Cole</div>
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
      <div class="ui bottom attached active tab" data-tab="overview">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu">
            <a class="active item" data-tab="overview">Quick Questions</a>
            <a class="active grey item" data-tab="test_OFF">Research Assistance</a>
            <a class="active grey item" data-tab="test_OFF_OFF">Help</a>
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->

        <!-- MAIN PAGE CONTENT -->
        <div id="grid1" class="ui main stackable grid container"> <!-- Outer Grid1 -->
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
      <div class="ui bottom attached tab" data-tab="test_OFF">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu">
            <a class="active grey item" data-tab="overview">Quick Questions</a>
            <a class="active item" data-tab="test_OFF">Research Assistance</a>
            <a class="active grey item" data-tab="test_OFF_OFF">Help</a>
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->


        <!-- PAGE TOP CONTENT -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->

                <div class="ui eight wide floated column">
                    <div class="content">

                      <div class="ui huge fluid input">
                        <div class="ui big label">
                          Question <br>/ Topic
                        </div>
                        <input placeholder="Enter here..." type="text">
                      </div>

                    </div>
                </div>

                <div class="ui four wide column">
                  <div class="content">
                    <div class="ui left aligned">
                      <select name="status" class="ui fluid selection dropdown">
                        <option value="init">Patron Status&nbsp;&nbsp;</option>
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

                <div class="ui four wide column">
                  <div class="content">
                    <div class="ui left aligned">
                      <select name="method" class="ui fluid selection dropdown">
                        <option value="init">Assistance Method</option>
                        <option value="angular">In-Person</option>
                        <option value="css">E-mail</option>
                        <option value="design">Telephone</option>
                      </select>
                    </div>
                  </div>
                </div>

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP CONTENT - END -->

        <!-- PAGE TOP CONTENT -->
        <div class="ui main stackable grid container"> <!-- grid container1 -->
          <div class="three column row"> <!-- three column row -->
            <div class="ui main stackable center aligned middle aligned grid container"> <!-- grid container2 -->
              <div class="sixteen column row"> <!-- 16 column row -->

                <div class="ui four wide floated column">
                    <div class="content">
                      <div class="ui left aligned">
                        <select name="dept" class="ui fluid selection dropdown">
                          <option value="init">Dept or Unit</option>
                          <option value="angular">N/A</option>
                          <option value="css">Linguistics</option>
                          <option value="design">Computer Science</option>
                          <option value="ember">Communications</option>
                          <option value="html">Fine Arts</option>
                        </select>
                      </div>
                    </div>
                </div>

                <div class="ui eight wide floated column">
                    <div class="content">

                      <div class="ui huge fluid input">
                        <div class="ui big label">
                          Course <br>/ Section
                        </div>
                        <input placeholder="Enter here..." type="text">
                      </div>

                    </div>
                </div>

                <div class="ui three wide test column">
                  <div class="ui main stackable middle aligned grid container">
                    <div class="sixteen column row">
                      <div class="ui sixteen wide left floated column">

                        <div class="ui test content">
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

              </div> <!-- 16 column row2 - END -->
            </div> <!-- grid container -->
          </div> <!-- three column row - END -->
        </div> <!-- grid container1 -->
        <!-- PAGE TOP CONTENT - END -->

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

                    <div class="four wide column"> 
                      <div class="ui fluid card withCount">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="people">0</div> 
                                <div class="label">Count</div>
                              </div>
                            </div>
                          </div>
                          <div class="ui left aligned">
                            <div class="header">People</div>
                            <div class="meta"> Number of people served </div>
                          </div>
                        </div> 
                      </div>
                    </div>

                    <div class="four wide column"> 
                      <div class="ui fluid card withCount">
                        <div class="content">
                          <div class="ui inverted segment left floated" id="policy">
                            <div class="ui tiny inverted statistics left floated"> 
                              <div class="statistic">
                                <div class="value" id="minutes">0</div> 
                                <div class="label">Count</div>
                              </div>
                            </div>
                          </div>
                          <div class="ui left aligned">
                            <div class="header">Minutes</div>
                            <div class="meta"> Session in minutes </div>
                          </div> 
                        </div> 
                      </div>
                    </div>

                    <div class="eight wide right floated column"> 
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
      <!-- Save for data to set up test_OFF_OFF, above  -->
      <div class="ui bottom attached tab" data-tab="test_OFF_OFF">

        <!-- PAGE TOP CONTENT -->
        <div class="ui stackable bottom aligned bottom aligned grid container">
          <div class="ui top attached tabular menu">
            <a class="active grey item" data-tab="overview">Quick Questions</a>
            <a class="active grey item" data-tab="test_OFF">Research Assistance</a>
            <a class="active item" data-tab="test_OFF_OFF">Help</a>
          </div>
        </div>
        <!-- PAGE TOP CONTENT - END -->




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

            case 'HSS/IS, Reference desk':
              $("#servicePoint").html("HSS/IS <br>Reference <br>Desk");
              document.getElementById('servicePoint').className = 'show ui black button';
              $(".ui.modal").modal("hide");
              break;
            case 'HSS/IS, Off-desk':
              $("#servicePoint").html("HSS/IS <br>Off-Desk <br>&nbsp;");
              document.getElementById('servicePoint').className = 'show ui yellow button';
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
      
      
        /// default setting - still needed? ===> yes

              // set on page load (from login page thru the drupal module)


  var sfUnit = document.getElementById("sfUnit").dataset.value;
  var sfServicePoint = document.getElementById("sfServicePoint").dataset.value;

  // reinsert <br>'s and &nbsp;'s for display
  sfUnit = sfUnit.replace(/ /g, " <br>");
  sfUnit = sfUnit.replace(/%C2%A0/g, "&nbsp;");
  sfUnit = sfUnit.replace(/Data <br>/, "Data ");
  sfServicePoint = sfServicePoint.replace(/ /g, " <br>");
  sfServicePoint = sfServicePoint.replace(/^SEL <br>/, "SEL ");
  sfServicePoint = sfServicePoint.replace(/^LSC <br>/, "LSC ");
  sfServicePoint = sfServicePoint.replace(/^Access <br>/, "Access ");
  sfServicePoint = sfServicePoint.replace(/Service <br>/, "Service ");
  sfServicePoint = sfServicePoint.replace(/%C2%A0/g, "&nbsp;");

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




        $('.test.checkbox').checkbox('attach events', '.test.column');
        $('.test.checkbox').checkbox('attach events', '.test.content');
        $('.test.checkbox').checkbox('attach events', '.test.button');
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
                    if (data.message) { //dhc: data.data?
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
