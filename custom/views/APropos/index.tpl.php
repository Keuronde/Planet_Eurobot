<?php
$limit = $PlanetConfig->getMaxDisplay();
$count = 0;

header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <title><?php echo $PlanetConfig->getName(); ?></title>
    <?php include(dirname(__FILE__).'/../Portail_common/head.tpl.php'); ?>
</head>

<body>
    <script type="text/javascript">
    document.body.className += 'js';
    </script>
    <?php include_once(dirname(__FILE__).'/../Portail_common/sidebar.tpl.php'); ?>
    <div id="page">
        <?php include(dirname(__FILE__).'/top.tpl.php'); ?>
        

          <div class="article">
            <h2>A propos</h2>

              <h3>De ce site</h3>
              <p>Ce site récolte les informations qui se trouvent dans les flux RSS/Atom des blogs des équipes participant à la Coupe de France de Robotique. Il a pour but de mettre en valeur les informations publiées par ces équipes. Ce site propose un flux RSS ou Atom qui contient tous les flux des équipes recensées. Ce site propose aussi des flux coupés à 5, 21 ou 90 jours. Ces flux sont accessibles en se rendant sur la page html correspondant à la durée souhaitée. Ce site est basé sur <a href="http://moonmoon.org/">MoonMoon</a>.</p>
              <p>C'est sur une idée et un prototype de "ni" (présent sur le forum de Planète Sciences) que ce site à vu le jour. Une première version, basé Planet feed Reader voit le jour sur le site Poivron-robotique. A cause de fréquentes indisponibilités du site, l'équipe Cubot duplique ce portail à l'aide d'une autre technologie, MoonMoon. Enfin, Poivron propose d'élargir le contenu proposé par le portail, en couplant moonmoon à Spip, un système d'édition collaboratif.
              </p>
              <h3>De la Coupe de France de Robotique</h3>
              <p>La Coupe de France de Robotique est une compétition ludique. Chaque équipe doit construire un (ou plusieurs) robot qui devra marquer des points sur une table de jeu. Chaque robot devra être totalement autonome lors du match. Les règles et la table de jeu changent tous les ans. La Coupe de France de Robotique sert aussi aux équipes françaises de phase éliminatoire pour Eurobot. Plus d'informations sur le site de <a href="http://www.planete-sciences.org/robot/index.php?section=pages&amp;pageid=108">Planète Sciences</a> qui organise, avec la ville de la Ferté Bernard, cet événement.
              </p>
          </div>
          <div class="article">
            <h2>FAQ</h2>

              <h3>Mon site n'apparaît pas, pourquoi&nbsp;?</h3>
              <p>Nous utilisons, pour l'instant, uniquement les flux Rss fournis par Planète Sciences ou ceux publiés par les équipes sur le <a href="http://www.planete-sciences.org/forums/viewtopic.php?f=1&amp;t=14941">forum</a>. Si vous voulez que votre site apparaisse, laissez un message sur le forum ou envoyez-nous un <a href="http://www.poivron-robotique.fr/static-mail">message</a>. Vous pouvez aussi nous contacter à partr des lien
              </p>
              <h3>Mon site apparaît, mais je ne le souhaite pas&nbsp;!</h3>
              <p>Envoyez-nous un message, nous le supprimerons au plus vite de notre site
              </p>
              <h3>Pourra-t-on commenter les news sur ce site&nbsp;?</h3>
              <p>Non, le but de ce site est aussi de faire de la publicité aux équipes qui font un site. Pour commenter une news, il faudra aller sur leur site.</p>
              <h3>Si je veux proposer une amélioration&nbsp;?</h3>
              <p>Il ne faut surtout pas hésiter&nbsp;! Contactez-nous en utilisant l'un des deux liens disponibles dans la colonne de droite, rubrique "contact".
              </p>
          </div>

        
        
        <?php include(dirname(__FILE__).'/../Portail_common/footer.tpl.php'); ?>
    </div>
    <script src="app/js/mm.js" type="text/javascript"></script>
</body>
</html>
