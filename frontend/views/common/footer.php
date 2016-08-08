<?
use yii\bootstrap\Nav;
?>
<footer>
    <div class="container main_footer">
        <div class="row menu">
            
                
                <?
                $menuItems = [
                    ['label' => 'Home', 'url' => '#'],
                    ['label' => 'About', 'url' => '#'],
                    ['label' => 'Contact', 'url' => '#'],
                    ['label' => 'Rules', 'url' => '#'],
                ];
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => $menuItems,
                ]);
                ?>
            
            
        </div>
    </div>
</footer>