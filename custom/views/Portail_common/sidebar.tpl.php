<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetPerson', 'compare'));
?>
<div id="sidebar" class="aside">

    <div id="CoupeDeFrance">
      <img src="custom/img/CoupeRobotique.png">      
    </div>
    
    <div id="Portail">
        <h2>Portail</h2>
        <ul>
            <li><a href="?type=archive">Voir tous les titres (Archive)</a></li>
            <li><a href="?type=rss10"><img src="custom/img/feed.png" alt="feed" height="12" width="12"></a>&nbsp;<a href="?type=rss10">10 derniers posts (RSS)</a></li>
            <li><a href="?type=atom10"><img src="custom/img/feed.png" alt="feed" height="12" width="12"></a>&nbsp;<a href="?type=atom10">10 derniers posts (ATOM)</a></li>
            <li><a href="http://www.planete-sciences.org/blogs/trophees-robotique/feed/"><img src="custom/img/feed.png" alt="feed" height="12" width="12"> </a><a title="Portail des équipes des Trophées de Robotique" href="http://www.planete-sciences.org/blogs/trophees-robotique/actualites/">Équipes des trophées</a> <a href="index.php"></a></li>
        </ul>
    </div>
    
    <div id="Logos">
        <img src="custom/img/logo.png" alt="Logo Eurobot" width="100">
        <a href="http://www.planete-sciences.org"><img src="custom/img/logo_PS.png" alt="Site de Planète Sciences" width="100"></a>
    </div>
    
    <div id="sidebar-people" class="section">
        <h2>Équipes (<?php echo count($all_people); ?>)</h2>
        <ul>
            <?php foreach ($all_people as $person) : ?>
            <li>
                <a href="<?php echo htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8'); ?>" title="Feed"><img src="postload.php?url=<?php echo urlencode(htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8')); ?>" alt="" height="12" width="12" /></a>
                <a href="<?php echo $person->getWebsite(); ?>" title="Website"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <p>
        <img src="custom/img/opml.png" alt="feed" height="12" width="12" /> <a href="custom/people.opml">Liste des flux</a>
        </p>
    </div>
    
    <div id="Contact">
        <h2>Contacts</h2>
        <ul>
            <li><a href="http://www.planete-sciences.org/forums/viewtopic.php?f=1&amp;t=14941">Fil de discussion</a></li>
            <li><a href="mailto:equipe@poivron-robotique.fr">Email : equipe@poivron-robotique.fr </a></li>
          </ul>
    </div>
</div>
