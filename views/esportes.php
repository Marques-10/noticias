<?php 
    if (is_array($viewData)) {
    foreach($viewData as $data):
?>
    <div class="container-notices">
        <div class="allNotices">      
            <div class="title-notice">
                <?php echo $data['title']; ?>
            </div>
            <div class="about-notice">
                <?php $data['about'] == 1 ? $e = "Esportes" : $e = ""; 
                    echo $e;
                ?>
            </div>
            <div class="notice-notice">
                <?php echo $data['notice']; ?>
            </div>

        </div>
    </div>
<?php
    endforeach;
    } else {
        echo $viewData;
    }
?>