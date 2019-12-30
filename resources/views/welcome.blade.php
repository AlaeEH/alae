<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alae el Hani</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navigation stroke">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block">
                    <!-- hidden spacer to center brand on mobile --></span>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ml-auto flex-nowrap nav-line">
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item nav-active">Over mij</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Mijn werk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="bg-header">
            <p class="h2 text" style="float: left;">Hallo<br>Mijn naam is <strong class="sterk">Alae</strong><br>Ik ben een full-stack developer</p>
            <div class="avatar" style="float: left;"><img class="rounded-circle mx-auto" src="../resources/images/alae.jpg"></div>
            <p class="h2 text-right text" style="float: right; padding-top: 75px;">En dit is mijn persoonlijke website</p>
        </div>

        <!--  About me -->
        <div class="row about">
            <div class="column">
                <div class="aboutMe vl">
                    @if($time < $morning)
                        <p class="h2 text">Goedemorgen!</p>
                    @elseif($time > $morning)
                        <p class="h2 text">Goedemiddag!</p>
                    @elseif($time < $evening)
                        <p class="h2 text">Goedenavond!</p>
                    @endif
                    <p>
                        Al sinds jongs af aan heb ik passie gehad voor computers. Al gauw ging mijn interesse naar hoe zo iets nou werkt. Op 12 jarige leeftijd ben ik begonnen met mobile hacks ontwikkelen, websites maken via website builders en heb ik ook tientallen desktops gebouwd.
                        <br><br>
                        Dit was voor mij niet genoeg, ik wil mijzelf blijven ontwikkelen, daarom heb ik in 2017 ervoor gekozen om te gaan studeren. Software engineering, een studie aan het ROC van Amsterdam in de Bijlmer. Daar binnen heb ik mij gespecialiseerd in het ontwikkelen van (web)applicaties, zowel front-end als back-end.
                        <br><br>
                        Daarnaast hou ik er van om mijn vrije tijd te besteden in de sportschool. Na ruim 1 jaar trainen, honderden shakes, honderden uren in de gym en talloze bakjes eten weet ik 1 ding zeker: Het is meer dan een sport, meer dan een hobby en zelfs meer dan een levensstijl... Het is een passie! Hoewel ik zeker begrijp dat niet iedereen mij snapt, kan ik altijd zeggen: alle moeite die je erin stopt, krijg je in veelvoud terug!
                    </p>
                </div>
            </div>

            <!-- Skills -->
            <div class="column">
                <div class="skills">
                    <p class="h2 text">Skills</p>
                    <p>In 2017 ben ik begonnen met de opleiding applicatieontwikkelaar te MBO College zuidoost - Roc van Amsterdam. Tijdens mijn opleiding heb ik veel geleerd over het object georienteerd programmeren. We hebben ons het meest gespecialiseerd in het framework Laravel <br>Dit is vooral waarmee ik gewerkt heb:</p>
                    <div class="progress">
                        <div class="progressText">HTML</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                    <div class="progress">
                        <div class="progressText">CSS/SASS</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                    </div>
                    <div class="progress">
                        <div class="progressText">PHP</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                    </div>
                    <div class="progress">
                        <div class="progressText">Javascript</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                    </div>
                    <div class="progress">
                        <div class="progressText">Java</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                    </div>
                    <div class="progress">
                        <div class="progressText">Laravel</div>
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Work -->
        <div class="myWork">
            <div class="container">
                <p class="h2 myWorkText text-center">Mijn werk</p>
                <div class="card-deck">
                    <div class="card shadow-lg">
                        <img src="../resources/images/thuisbezorgd1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Thuisbezord</h5>
                            <p class="card-text">Dit is een compleet thuisbezorgd applicatie waarbij je als klant eten kunt bestellen en bestellingen kunt inzien na het betalen. Als klant kan je ook een restaurant registreren en geheel je eigen menu aanmaken, vervolgens kunnen klanten dan van je restaurant bestellen.</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary" href="">Bezoek site</a>
                        </div>
                    </div>
                    <div class="card shadow-lg">
                        <img src="../resources/images/alae.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card shadow-lg">
                        <img src="../resources/images/alae.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-offset-0 col-sm-12">
                        <h2 class="text-center text">Contact</h2><br>
                        <form id="form-data" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Naam">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Onderwerp">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Bericht..."></textarea>
                            </div>
                            <div class="text-center"><button type="submit" class="btn btn-primary mb-2">Verstuur</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/post.js') }}"></script>
