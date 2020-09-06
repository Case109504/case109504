<div class="row">
    <div class="col-6">
        <h5>判斷結果</h5>
        <hr>
        <ol>
            <?php foreach ($web->entities() as $key => $entity): ?>
                <li><h6>
                <?php 
                    if($entity->info()['score']>1){
                    echo '<div class="box">
                    <a href="introduction.php?video_name='.$row["video_name"].'" class="button fit" data-poptrox="ignore">影片介紹</a>
                    </div>';
                    echo ucfirst($entity->info()['description']) ?></h6><strong><?php number_format($entity->info()['score'] * 100 , 2);}
                    
                ?>
                </strong></li>
            <?php endforeach ?>
        </ol>
    </div>
</div>