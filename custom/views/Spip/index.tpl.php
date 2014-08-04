<?php
$limit = $PlanetConfig->getMaxDisplay();
$count = 0;
setlocale(LC_ALL, 'fr_FR');
header('Content-type: text/html; charset=UTF-8');
?>
            <?php if (0 == count($items)) : ?>
                <div class="article">
                    <h3 class="article-title">
                        Aucun article
                    </h3>
                    <p class="article-content">Pas de nouvelles pour l'instant, revenez plus tard</p>
                </div>
            <?php else : ?>
                <?php foreach ($items as $item): ?>
                    <?php 
                    $arParsedUrl = parse_url($item->get_feed()->get_link());
                    $host = preg_replace('/[^a-zA-Z]/i', '-', $arParsedUrl['host']);
                    ?>
                    <div class="article <?php echo $host; ?>">
                        <h3 class="article-title">
                            <a href="<?php echo $item->get_permalink(); ?>" title="Voir l'article d'origine"><?php echo $item->get_title(); ?></a>
                        </h3>
                        <p class="article-info">
                            
                            <?php echo ($item->get_author()? $item->get_author()->get_name() : 'Anonymous'); ?>,
                            <?php 
                            $ago = time() - $item->get_date('U');
                            //echo '<span title="'.Duration::toString($ago).' ago" class="date">'.date('d/m/Y', $item->get_date('U')).'</span>';
                            echo '<span id="post'.$item->get_date('U').'" class="date">'.$item->get_date('d/m/Y').'</span>';
                            ?>
                            
                            |
                            
                            Source: <?php
                            $feed = $item->get_feed();
                            echo '<a href="'.$feed->getWebsite().'" class="source">'.$feed->getName().'</a>';
                            ?>
                        </p>
                        <div class="article-content">
                            <?php echo $item->get_content(); ?>
                        </div>
                    </div>
                    <?php if (++$count == $limit) { break; } ?>
                <?php endforeach; ?>
            <?php endif; ?>
