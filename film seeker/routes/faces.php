<div class="row">
    <div class="col-12">
        <ol>
            <?php if ($faces): ?>
                <?php foreach ($faces as $key => $face): ?>
                    <?php 
                        // Assiging Colours to each face
                        $faceColorR = random_int(0, 200);
                        $faceColorG = random_int(0, 200);
                        $faceColorB = random_int(0, 200);
                        $color = [$faceColorR, $faceColorG , $faceColorB];
                        $_SESSION['faces'][$imagetoken][$key] = json_encode($face->info()['landmarks']);
                        $_SESSION['faces']['colors'][$key] = $color;

                     ?>
                    <br><br>                    
                <?php endforeach ?>
            <?php endif ?>
        </ol>
    </div>
</div>