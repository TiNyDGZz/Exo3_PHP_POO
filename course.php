<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>COURSE</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script>
        document.onscroll = function() {
            if( $(window).scrollTop() > $('header').height()) {
                $('.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
            }
            else {
                $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
            }
        };
    </script>
</head>
<body>
<!-- Jumbotron Header -->
<header>
    <div class="fixed-bg">
        <div class="container text-center white padding-top">
            <h1 style="font-size: 70px;">COURSE</h1>
            <p style="font-size: 40px;">Ci dessous, voici la liste des voitures participant à la course ainsi que la course et les résultats de la course</p>
            <p><a class="btn btn-primary btn-large" href="#gagnant">JE VEUX VOIR LE RESULTAT</a>
            </p>
        </div>
    </div>
</header>
<!-- Begin Navbar -->
<div id="nav">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-bar"></span>
                <span class="glyphicon glyphicon-bar"></span>
                <span class="glyphicon glyphicon-bar"></span>
            </a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="#pres">Présentation</a>
                    </li>
                    <li>
                        <a href="#course">Course</span></a>
                    </li>
                    <li>
                        <a href="#res">Résultat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /.navbar -->
</div>

<div class="container">
<div id="pres">
<h1 class="text-center">Présentation des voitures</h1>

    <?php

    require 'Voiture.php';
    require 'VoitureAtt.php';


    /***** veron *****/
    $lamborghini = new VoitureAtt('Lamborghini');
    $lamborghini->setMarque('Lamborghini');
    $lamborghini->setModele('Countach');
    $lamborghini->setColor('Jaune');
    $lamborghini->setNbPortes(2);
    $lamborghini->setVitesse(rand(250, 300));

    /***** PEUGEOT *****/
    $peugeot = new VoitureAtt('Peugeot');
    $peugeot->setMarque('Peugeot');
    $peugeot->setModele('504');
    $peugeot->setColor('Kaki');
    $peugeot->setNbPortes(5);
    $peugeot->setVitesse(rand(250, 300));

    /***** ASTON MARTIN *****/
    $aston = new VoitureAtt('Aston Martin');
    $aston->getMarque('Aston Martin');
    $aston->setModele('DB9 Vintage');
    $aston->setColor('Bleue Nuit');
    $aston->setVitesse(rand(250, 300));

    /***** FORD *****/
    $ford = new VoitureAtt('Ford');
    $ford->setMarque('Ford');
    $ford->setModele('Mustang');
    $ford->setColor('Noire');
    $ford->setVitesse(rand(250, 300));

    /***** FERRARI *****/
    $ferrari = new VoitureAtt('Ferrari ');
    $ferrari->setMarque('Ferrari');
    $ferrari->setModele('Enzo');
    $ferrari->setColor('Rouge');
    $ferrari->setNbPortes(2);
    $ferrari->setVitesse(rand(250, 300));

    /***** CLONE FORD *****/
    $ford2 = clone $ford;
    $ford2->setColor('Orange');
    $ford2->setModele('Fiesta');
    $ford2->setVitesse(rand(250, 300));
    ?>
    ​
    ​
    <table class="table table-bordered">
        ​
        <thead>
        <tr>
            <th>Marque</th>
            <th>Couleur</th>
            <th>KM/H</th>
            <th>Portes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $lamborghini->getMarque().' '.$lamborghini->getModele() ?></td>
            <td class="text-center"><?php echo $lamborghini->getColor() ?></td>
            <td class="text-center"><?php echo $lamborghini->getVitesse() ?></td>
            <td class="text-center"><?php echo $lamborghini->getNbPortes() ?></td>
        </tr>
        <tr>
            <td><?php echo $peugeot->getMarque()    .' '.$peugeot->getModele() ?></td>
            <td class="text-center"><?php echo $peugeot->getColor() ?></td>
            <td class="text-center"><?php echo $peugeot->getVitesse() ?></td>
            <td class="text-center"><?php echo $peugeot->getNbPortes() ?></td>
        </tr>
        <tr>
            <td><?php echo $aston->getMarque()      .' '.$aston->getModele() ?></td>
            <td class="text-center"><?php echo $aston->getColor() ?></td>
            <td class="text-center"><?php echo $aston->getVitesse() ?></td>
            <td class="text-center"><?php echo $aston->getNbPortes() ?></td>
        </tr>
        <tr>
            <td><?php echo $ford->getMarque().' '.$ford->getModele() ?></td>
            <td class="text-center"><?php echo $ford->getColor() ?></td>
            <td class="text-center"><?php echo $ford->getVitesse() ?></td>
            <td class="text-center"><?php echo $ford->getNbPortes() ?></td>
        </tr>
        <tr>
            <td><?php echo $ford2->getMarque().' '.$ford2->getModele() ?></td>
            <td class="text-center"><?php echo $ford2->getColor() ?></td>
            <td class="text-center"><?php echo $ford2->getVitesse() ?></td>
            <td class="text-center"><?php echo $ford2->getNbPortes() ?></td>
        </tr>
        <tr>
            <td><?php echo $ferrari->getMarque().' '.$ferrari->getModele() ?></td>
            <td class="text-center"><?php echo $ferrari->getColor() ?></td>
            <td class="text-center"><?php echo $ferrari->getVitesse() ?></td>
            <td class="text-center"><?php echo $ferrari->getNbPortes() ?></td>
        </tr>
        ​
        </tbody>
        ​
    </table>
​
​    <div id="course">
        <h1 class="text-center">Course</h1>
    </div>

    ​
    <?php

    $distance = rand(250, 400);
    echo 'La longueur de la course est de '.$distance.'km <br>';

    function temps($temps){
    $heures = ceil($temps);
    $expl = explode('.', $temps);
    if(isset($expl[1])) {
    $minutes = round(end($expl) * 0.6);
    } else {
    $minutes = '00';
    }
    if($minutes < 10){
    return $heures . 'h0' . $minutes . '<br>';
    } else {
    return $heures . 'h' . $minutes . '<br>';
    }
    }

    $tempsLamborghini   =   number_format($distance / $lamborghini->getVitesse(), 2);
    $tempsPeugeot       =   number_format($distance / $peugeot->getVitesse(), 2);
    $tempsAston         =   number_format($distance / $aston->getVitesse(), 2);
    $tempsFord          =   number_format($distance / $ford->getVitesse(), 2);
    $tempsFerrari       =   number_format($distance / $ferrari->getVitesse(), 2);
    $tempsFord2         =   number_format($distance / $ford2->getVitesse(), 2);

    ?>
        ​<div id="course">
        <h1 class="text-center"> Résultat de la course </h1>
        ​
    <?php

    $classement = array(
    "Lamborghini" => $tempsLamborghini,
    "Peugeot" => $tempsPeugeot,
    "Aston Martin" => $tempsAston,
    "Ford" => $tempsFord,
    "Ferrari" => $tempsFerrari,
    "Ford 2" => $tempsFord2
    );

    asort($classement);
    $i = 1; ?>
    ​
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Classement</th>
            <th>Marque</th>
            <th>Temps</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($classement as $key => $val) { ?>
        <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td class="text-center"><?php echo $key ?></td>
            <td class="text-center"><?php echo temps($val) ?></td>
            <?php ;} ?>
        </tr>
        </tbody>
    </table>
    </div>
    ​
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>



</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>