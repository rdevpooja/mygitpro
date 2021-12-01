<div class="bg_col">
<div class="container">
    <div class="row pt-2">
        <div class="col-md-8 py-5">
        <h2 class="text-center"><span class="head_some five_clr"><?php echo $data['title']; ?></span></h2>
        <p class="text-center"><?php echo $data['remark'];?></p>
        <p class="text-center">
        <i class="fa fa-clock-o lighticon" aria-hidden="true"></i>
        <?php $dt = date_create($data['dt']);
            $dt_show = strToUpper(date_format($dt, 'M d, Y'));
            echo $dt_show.' '.$data['tm']; ?>
            
        </p>
        <p>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <?php echo $data['desc_r']; ?></p>
        </div>

        <!-- 2nd div -->
        <div class="col-md-4 py-5 div_scroll">
            <div class="item_series">
            
            <?php for($i = 0 ; $i < sizeof($rndm_stories);  $i++) {    
                echo $rndm_stories[$i]['title']; ?>
                <br/>
            <?php } ?>    
            </div>
        </div>
    </div>
        
</div>
</div>