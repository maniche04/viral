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
                height: 97%;
                font-weight: 400;
            }
           
            body {
                background: #dce5e7;    
                margin: 0;
                width: 100%;
                display: table;
                font-family: 'Open Sans';
                font-size: .9em;
                background-size: 100% 100%;
/*                background-image: url("https://intra.jizanperfumes.com/img/appbck.png");
*/
            }

                       


            .content {
                text-align: center;
                display: inline-block;
            }
            
            #mainnav a {
                color: white;
                font-size: .9em;
                text-align:center;
            }

            #mainheader {
                color: white;

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
                <div class = 'ui grid' id = 'desktopmenu'>
                   <div class='three wide center aligned column '>
                       <a id = 'mainlogo' class="link link--takiri" href="#">Takiri<span>takiri.com</span></a>
                   </div>
                   <div class='twelve wide center aligned column '>
                       <h5 class="ui horizontal artlabels divider header" >
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
                </div>
                <div class = 'ui grid' id = 'mobilemenu'>
                    <div class='sixteen wide center aligned column'>
                        <a id = 'mainlogo' class="link link--takiri" href="#">Takiri<span>takiri.com</span></a>
                    </div>
                    <div class='sixteen wide center aligned column'>
                        <h5 class="ui horizontal artlabels divider header" >
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
                </div>
        </div>
        <div class='ui basic segment' id = 'content'>
            <div class='ui stackable grid'>
                <div class='ten wide column'>
                    <div class='ui segments'>
                        <div class = 'ui segment'>
                            Top Segment
                        </div>
                        <div class = 'ui secondary segment'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis in metus non laoreet. Phasellus pretium tortor et orci sagittis, nec pharetra elit consectetur. Cras bibendum turpis sem, ut egestas ligula commodo quis. Ut ac tortor ac dolor suscipit pulvinar. Integer at malesuada enim. Nullam arcu ante, ultrices id lectus vel, fermentum dictum orci. Nulla eget varius turpis. Phasellus vitae suscipit dolor, ut malesuada ipsum. Nulla facilisi. Quisque feugiat blandit odio, eget consectetur libero sodales eget. Morbi orci turpis, elementum ac maximus non, fermentum in nisi.

                            Mauris consectetur vehicula suscipit. Donec commodo urna ac elit mattis pharetra. Phasellus dolor ligula, accumsan vel sagittis id, tristique nec mi. Morbi viverra neque sit amet quam tempus, eget luctus enim faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tristique finibus sem in consectetur. Praesent sagittis vel nunc ac sodales. Suspendisse fringilla vulputate interdum.

                            Sed dapibus ut nisi ac volutpat. In vel aliquam neque. Fusce pretium eget augue a tempus. Aenean interdum elementum ornare. Sed dictum augue quis nisi pretium aliquam. Ut ac ex nisi. Phasellus porta porta tortor, ut vulputate quam rutrum sit amet.

                            Nulla tempus leo at augue mollis, non porttitor ligula pharetra. Suspendisse tincidunt, dui sit amet ultricies pretium, massa erat scelerisque velit, et dignissim est enim nec nunc. Donec a nunc sit amet ipsum sodales sodales sed ac tortor. Proin vitae ultricies lacus. Maecenas a purus finibus, auctor augue quis, ultricies est. In porttitor sit amet tellus et mollis. Integer sollicitudin neque varius tellus consectetur, in iaculis augue finibus. Quisque at mattis mi. Cras dolor nulla, eleifend eu felis nec, porta interdum felis. Integer interdum turpis non neque laoreet porta. Sed nec tincidunt dui. Morbi tincidunt quam nulla, nec blandit sem aliquam vel. Donec sagittis dui ut ipsum ultrices gravida. Suspendisse eget sem ut lacus porttitor convallis at sit amet nisl. Aenean imperdiet non libero at lobortis. Duis semper magna neque, ac ultrices velit egestas in.

                            Praesent quis accumsan nunc. Phasellus suscipit quis augue et tempus. Quisque feugiat purus augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sed tristique est, sit amet suscipit quam. Nullam eget tincidunt turpis. Donec eu sapien sem. Sed ut cursus lacus, quis sollicitudin diam. Aliquam auctor commodo odio. Praesent vel molestie risus, sit amet maximus lorem. Sed condimentum urna placerat leo elementum, congue venenatis velit accumsan. Integer accumsan nulla ac lacus lacinia commodo. Curabitur vitae quam vehicula ligula aliquam sodales quis euismod tortor. Nam eget mauris sit amet dolor aliquet porta ac ut ipsum.

                            Sed molestie turpis quis lacinia dictum. Nunc ut dolor tempus, consectetur neque ac, ultrices mi. Maecenas eu nunc ultricies, eleifend neque ac, elementum nunc. Aliquam erat volutpat. Nullam eu lacinia orci, sit amet ornare urna. Cras dapibus hendrerit ultrices. Duis nec sem volutpat, tempor odio ut, commodo odio. In ac fermentum velit. Phasellus sit amet elementum lorem. Curabitur suscipit ligula at vestibulum volutpat. In imperdiet, libero vitae facilisis hendrerit, ante elit fermentum felis, id vulputate nibh tortor faucibus ante. Nullam in rutrum ante. Nulla quis arcu lectus.

                            Fusce dolor neque, pharetra a ultricies sed, eleifend et lectus. Donec non vestibulum leo. Nullam ac dignissim tellus. Vivamus ac placerat nisi. Sed dapibus, libero at dignissim aliquam, metus mauris aliquam erat, sed tristique massa felis in nisi. Vestibulum tempor, nunc efficitur aliquam blandit, ex ligula tempus orci, ac venenatis eros libero vel urna. Suspendisse sit amet quam eu ante scelerisque elementum vitae vitae quam.

                            Nunc sit amet nisi ut lectus sodales lobortis. Suspendisse commodo a erat nec blandit. Aliquam et mauris diam. Nunc dapibus gravida elit, nec tincidunt neque egestas id. Aliquam dictum luctus eros, non cursus mi maximus eget. Praesent ac suscipit est, ut euismod metus. Curabitur feugiat, massa eget porta commodo, eros ante iaculis justo, ac fermentum est est nec elit. Sed augue orci, porttitor fringilla magna nec, fermentum imperdiet orci. Donec ipsum orci, sodales at tincidunt ac, tempus eget justo. Quisque neque neque, eleifend dignissim urna nec, lacinia lobortis sapien. Praesent maximus eget odio at volutpat. Sed posuere ante ipsum, non fringilla dolor semper ac.

                            Praesent bibendum ultrices mattis. Duis est augue, finibus elementum luctus a, molestie feugiat diam. Vestibulum tempus felis at tempus fermentum. Pellentesque bibendum volutpat mauris eu elementum. Nam tempus vehicula erat id vehicula. Phasellus volutpat vel velit nec posuere. Vestibulum vel eros mi. Quisque ut est interdum, consequat quam tincidunt, pretium sem. Curabitur tincidunt tincidunt neque a dignissim.

                            Ut in pellentesque justo, eu pharetra nisl. Curabitur porta malesuada velit. Praesent nisl turpis, porttitor eu dictum quis, congue a urna. Praesent tincidunt suscipit facilisis. Curabitur sed vestibulum lorem. Aenean finibus aliquet interdum. Aliquam placerat porta enim. Proin mollis pulvinar erat vel iaculis. Integer non diam ornare, consequat diam ac, sagittis sem. Suspendisse enim ligula, convallis non molestie vitae, efficitur a dolor. Morbi viverra pellentesque nunc, sed placerat orci lacinia vel. Fusce interdum velit vitae eros vehicula, a ullamcorper dui posuere. Nulla vitae ex convallis, viverra enim vehicula, scelerisque lectus. Quisque dictum urna ligula, et cursus risus laoreet sit amet. Morbi eu risus ex. Quisque vestibulum mi elit.

                            Praesent in eleifend erat. Nunc odio massa, dignissim quis massa porttitor, placerat pulvinar lorem. Vestibulum feugiat bibendum metus sed pellentesque. Sed a purus at ipsum ornare ultrices. Vivamus feugiat felis sit amet lacus imperdiet, a porta ante ultricies. Nulla elementum eleifend erat, facilisis pulvinar metus scelerisque ullamcorper. Pellentesque vitae lorem sit amet lectus placerat dictum in id felis. Fusce lacinia, neque eu porttitor pellentesque, sem nisi sodales dui, sed semper ex quam vel lacus. Aliquam consectetur auctor ipsum, ut imperdiet quam imperdiet ut. Praesent condimentum sagittis arcu. Proin efficitur nulla sed ligula ultrices, non sodales est porttitor. Nullam suscipit in tellus sed mattis. Suspendisse volutpat dui vitae lacus dapibus posuere.

                            Duis blandit efficitur dui, a euismod arcu tincidunt at. Suspendisse dictum augue quis malesuada ultrices. In ut lorem et metus hendrerit sagittis nec eu est. Duis nunc felis, rutrum a tortor vitae, viverra sodales est. Donec dictum lectus eget vestibulum placerat. Donec tempus sit amet nibh eu dapibus. Integer vestibulum venenatis nunc a pellentesque. Nulla mollis et ipsum et finibus. Cras porta sed justo at commodo. Nunc nec faucibus lorem. Donec sed dignissim risus. Vivamus venenatis posuere ipsum vel mollis.

                            Aenean sit amet imperdiet sem, ut pharetra neque. Cras vel quam fringilla, blandit tortor at, interdum mi. Quisque pharetra gravida neque sed hendrerit. Aliquam eget felis at diam pellentesque placerat at a dui. Cras tincidunt porta cursus. Cras faucibus nisi sed neque viverra rhoncus sed at augue. Ut ac ante a lectus pretium consequat nec eget lorem. Nulla eget pretium lectus. Maecenas purus sapien, mattis ut ligula in, interdum volutpat enim. Sed semper massa sapien, id consequat ex luctus ut. Ut maximus vestibulum nunc, ut suscipit arcu elementum nec. In hac habitasse platea dictumst. Pellentesque aliquet vitae erat a imperdiet. Aenean velit massa, ultrices vel odio id, interdum suscipit diam. Nullam ac magna turpis. Quisque pharetra tincidunt augue, ac auctor metus tincidunt vitae.

                            Phasellus a erat arcu. Fusce egestas risus eu ullamcorper molestie. Nulla maximus lectus ante, ut aliquet lectus finibus consectetur. Suspendisse vulputate mi quam, vel ultrices mauris iaculis sed. Praesent laoreet turpis non arcu sagittis elementum. Praesent pretium leo vitae felis vestibulum venenatis. Praesent a dictum est. Mauris at fermentum lorem. Integer tempus tellus massa, et pharetra ante ultricies a. Nulla lectus velit, sagittis sit amet viverra ac, auctor maximus felis. Etiam a dui egestas, viverra elit nec, euismod justo. Fusce tempor dignissim libero vel malesuada.

                            Praesent maximus elementum est eu viverra. Nullam sed fermentum mi, ac bibendum turpis. Ut tempor lacinia vulputate. Vestibulum volutpat ex in ex iaculis tincidunt id in elit. Nam urna felis, hendrerit a ullamcorper at, lobortis in odio. Nulla porta nisi eu finibus gravida. Maecenas sed est vitae quam faucibus interdum vel a nisi. Sed auctor pretium turpis, quis pretium mauris finibus congue. Curabitur lacus mi, egestas ut odio a, aliquet bibendum eros. Mauris at dui ac dolor ultricies blandit eget dapibus dui. Ut vitae pulvinar mi. Vestibulum vulputate maximus nisi, a mollis massa bibendum et. Praesent porttitor pharetra tortor a dignissim. Nunc vitae viverra lacus. Nullam in suscipit justo.

                            Cras tincidunt eu erat at fringilla. Sed sit amet ipsum id odio dictum vulputate sed eu magna. In sit amet tortor est. Mauris nec dui eros. Praesent condimentum pharetra metus sit amet sollicitudin. Integer sit amet ligula eget erat lobortis auctor. Curabitur non iaculis nulla. Suspendisse cursus porttitor risus sit amet vehicula.

                            Maecenas non nibh dui. Nunc eget tempus eros. Aenean mattis leo et quam malesuada, vel accumsan lacus rhoncus. Nam consectetur mollis nibh vitae cursus. Proin purus est, posuere vitae massa vel, feugiat elementum lorem. Etiam a iaculis justo. Etiam in lacus metus. Suspendisse tincidunt, mauris id pulvinar ultrices, augue augue facilisis libero, nec laoreet arcu nunc at odio. Aliquam ultrices augue magna, ut congue enim facilisis eu. Aliquam ut cursus orci, non semper lorem. Aliquam pulvinar erat sed pharetra venenatis. Fusce porta odio est, ut imperdiet lorem bibendum at. Sed volutpat suscipit neque in dictum. Integer eget purus bibendum, porta leo at, porttitor odio. Pellentesque commodo eros euismod malesuada sodales. Aenean pretium lacus odio, a tempor elit tincidunt vitae.

                            Aliquam sit amet risus vitae arcu volutpat feugiat. Cras venenatis faucibus augue, vel elementum purus ornare at. Duis eget mauris pulvinar, tincidunt mi lobortis, vestibulum metus. Quisque in tincidunt dui. In hac habitasse platea dictumst. Nullam ac risus eget nulla euismod sagittis a id nisl. Mauris quam enim, vestibulum quis dui non, facilisis convallis felis. Aliquam sed rutrum lectus, vel consectetur velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras non hendrerit sem. Ut pellentesque dui eget est lobortis venenatis. Quisque ullamcorper eros lacus, rutrum sagittis risus lacinia eu. Quisque viverra tellus odio, sed dignissim odio auctor ut. Vestibulum imperdiet felis est, eu sodales risus bibendum nec. Proin sodales dolor est.

                            Etiam vulputate tellus vel lacus hendrerit, et venenatis quam elementum. Vivamus dignissim fringilla porta. Vestibulum euismod magna a dolor dapibus efficitur. Nam pretium risus porttitor neque scelerisque, eget congue sapien elementum. Praesent dictum bibendum lorem, non malesuada orci blandit et. Praesent velit nunc, efficitur eget rutrum a, convallis a mi. Pellentesque pellentesque egestas ex vitae facilisis. Sed quam dolor, vehicula ac nisi vitae, luctus congue ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus pellentesque metus a nunc elementum condimentum. In tincidunt turpis id dapibus placerat. Praesent egestas tempor nunc, non lobortis libero porttitor sit amet. Vestibulum ornare mi nec ultricies fringilla.

                            Maecenas nec elit sit amet tortor tempor mollis. Suspendisse posuere arcu ex, et feugiat urna consectetur sit amet. Ut ut aliquam augue, sit amet blandit erat. In eu lectus non lorem tempor interdum id at erat. Morbi maximus, metus in cursus congue, odio erat posuere turpis, quis rutrum elit lectus quis eros. Etiam ultrices tincidunt pharetra. Suspendisse potenti.

                            Ut at bibendum libero, at efficitur nulla. Vestibulum suscipit, nunc in venenatis sagittis, arcu ante dictum purus, dapibus gravida turpis enim id ante. Morbi rutrum, justo porta placerat fermentum, velit dolor commodo ante, at sodales mi est sed enim. Proin venenatis metus elit, in tempor ipsum ultricies ut. Fusce nec ex sit amet nunc vestibulum porta sit amet sed mi. In facilisis mauris at massa condimentum, eu ullamcorper tellus facilisis. Nulla facilisi.

                            Aenean eu ante at est iaculis viverra quis et arcu. Donec ornare ultricies sapien, quis egestas ex dapibus et. Pellentesque dictum nunc tincidunt ex laoreet mollis. Quisque non lobortis justo. Praesent pellentesque nisl nec mauris gravida volutpat. Vestibulum quis ipsum vel dui scelerisque vulputate non a lorem. Nullam leo nibh, tincidunt a purus vel, fringilla vestibulum dui. Duis semper varius libero, at pretium metus placerat vitae.

                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras dapibus rutrum metus, in auctor ante ullamcorper nec. Vestibulum eleifend justo ut nisl pharetra, in vulputate nibh tristique. Donec quis pretium metus. Quisque et dignissim odio. Integer urna nisl, venenatis nec efficitur in, maximus sed magna. Curabitur laoreet, urna eu condimentum accumsan, eros metus rhoncus mi, non mollis eros urna non lorem. Nunc elementum orci sit amet convallis suscipit. Aenean in lacinia justo. Nulla gravida odio id sapien placerat, sed sollicitudin nisl porttitor. Donec in massa tristique, sagittis neque nec, varius est.

                            Cras dictum metus quis neque vulputate, accumsan lacinia justo mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum varius felis eu urna vehicula, id tincidunt nisl laoreet. Donec lacinia egestas maximus. Sed a accumsan arcu. Aenean non ornare orci. Suspendisse in magna imperdiet, volutpat nisi eu, iaculis ipsum.

                            Cras bibendum lectus ac enim gravida fermentum. Etiam vel molestie sem. Sed blandit commodo sem, quis pretium elit eleifend ac. Maecenas facilisis mauris eu magna varius cursus. In tristique aliquet felis, ut scelerisque lorem euismod vel. Mauris sollicitudin tincidunt rhoncus. Vivamus a posuere erat, at auctor dolor. Sed at orci metus. Duis sit amet cursus mauris. Nulla mattis dolor dui, vel dictum magna mollis in.

                            Maecenas non arcu et enim interdum posuere. Vivamus at turpis odio. Donec auctor euismod lectus, sit amet hendrerit diam semper sed. Donec porttitor augue eget augue tincidunt, quis varius nisl vulputate. Pellentesque sit amet mollis elit. Nam luctus semper risus a luctus. Phasellus gravida facilisis diam, eget dignissim tortor. Morbi dignissim lobortis fringilla. Cras at placerat quam. Suspendisse potenti. Aliquam dui erat, malesuada id augue in, porttitor rhoncus dolor. Sed vehicula, arcu pharetra mattis gravida, erat purus tempus neque, id molestie odio tellus in lorem. Integer vitae lorem eget ligula iaculis tempus.

                            Praesent ante leo, ullamcorper sit amet gravida et, convallis at nisl. Pellentesque ornare leo vitae dolor consectetur feugiat. Etiam volutpat fermentum massa, condimentum dapibus quam semper volutpat. Pellentesque eu enim mi. Maecenas lacinia scelerisque nisi, maximus pulvinar erat venenatis laoreet. Proin auctor velit in metus efficitur tincidunt. Donec interdum purus ac est ultrices blandit. Suspendisse efficitur, odio nec consequat tincidunt, lorem elit aliquet turpis, et hendrerit tortor purus eu enim.

                            Nulla non nunc mattis, malesuada diam eu, egestas ante. Cras nunc nunc, condimentum quis bibendum at, viverra vitae sapien. Nulla ornare turpis mauris, id rhoncus magna lobortis non. Nunc ut sem quis neque ultricies tempor. Sed vehicula urna nec nibh posuere, nec lobortis dui iaculis. Quisque id enim nec ligula varius hendrerit. Cras lacus orci, rutrum quis congue ac, posuere placerat magna. Proin eleifend interdum sem sed dapibus. Aenean a risus nunc. In hac habitasse platea dictumst. Morbi nec ultrices neque. In accumsan condimentum ex et imperdiet. Nunc metus mauris, auctor accumsan convallis non, commodo sit amet lacus. Maecenas efficitur in leo non placerat. Phasellus pulvinar, ipsum in iaculis pretium, tortor velit dictum purus, at molestie nisi elit id nunc. Duis egestas dignissim nunc.

                            In dolor orci, tincidunt a blandit at, mattis eu nibh. Integer nibh eros, luctus tincidunt aliquam eget, malesuada eget risus. Curabitur sed est eu sapien rhoncus tempor et sit amet velit. Nulla ut mi ultricies, cursus nisl ut, interdum metus. Integer pellentesque, urna eu placerat ultricies, lacus mauris maximus diam, a luctus turpis ante sit amet mauris. Vivamus id interdum augue. Fusce at cursus velit, vitae faucibus nisi. Vestibulum metus sapien, scelerisque nec porttitor sed, accumsan sed massa. Nulla scelerisque ligula non odio mollis, sit amet pellentesque ante euismod. Fusce semper neque nunc, id vehicula metus varius a. Pellentesque leo arcu, scelerisque fringilla metus non, dapibus tristique massa.
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
