<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Macondo+Swash+Caps' rel='stylesheet' type='text/css'>
        <link href='{{url("sui/semantic.min.css")}}' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src='{{url("sui/semantic.min.js")}}'></script>
        <script type="text/javascript" src='{{url("js/modernizr.custom.js")}}'></script>
        <link href='{{url("css/style.css")}}' rel='stylesheet' type='text/css'>

        <style>
            html,
            body {
                height: 100%;
                font-weight: 400;
            }
           
            body {
                background: #00a2d3;    
                margin: 0;
                width: 100%;
                display: table;
                font-family: 'Open Sans';
                font-size: .9em;
            }
            
            .content {
                text-align: center;
                display: inline-block;
            }
            
            #mainnav a {
                color: white;
                font-size: .9em;
            }

            #mainheader {

/*                background: #00a2d3;*/
/*                background: #35bbe4;*/
            }

            #content {
/*                background: #35bbe4;*/
            }

            .artlabels {
                font-weight:400;
            }

        </style>
    </head>

    <body>
        <div class='ui raised segment' id = 'mainheader'>
            <div class='ui grid'>
                <div class='three wide column'>
                    <a id = 'mainlogo' class="link link--takiri" href="#">Takiri<span>takiri.com</span></a>
                </div>
                <div class='ten wide center aligned column'>
                    <h5 class="ui horizontal artlabels divider header">
                      C A T E G O R I E S
                    </h5>
                    <nav class="cl-effect-2" id="mainnav">
                        <a href="#cl-effect-2"><span data-hover="Ratatouille">Ratatouille</span></a>
                        <a href="#cl-effect-2"><span data-hover="Lassitude">Lassitude</span></a>
                        <a href="#cl-effect-2"><span data-hover="Murmurous">Murmurous</span></a>
                        <a href="#cl-effect-2"><span data-hover="Palimpsest">Palimpsest</span></a>
                        <a href="#cl-effect-2"><span data-hover="Assemblage">Assemblage</span></a>
                    </nav>
                </div>
                <div class='three wide column'>
                </div>
            </div>
        </div>
        <div class='ui basic segment' id = 'content'>
            <div class='ui grid'>
                <div class='ten wide column'>
                    <div class='ui segments'>
                        <div class = 'ui segment'>
                            Top Segment
                        </div>
                        <div class = 'ui secondary segment'>
                            
                        </div>
                    </div>
                </div>
                <div class='six wide column'>
                    <div class='ui segments'>
                        <div class = 'ui segment'>
                            Links
                        </div>
                        <div class = 'ui secondary segment'>
                            Content
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    $(document).ready(function(){

    });


    </script>
    

</html>
