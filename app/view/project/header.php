<?php
if(!isset($page) || $page !== 'start') {
$currs = explode('.', $currentSlide);     
?>

<div class="walking-steps">
    <div class="step step1">
        <div class="slides">
            <?php ?>
            <ul>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 1); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 2); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 3); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 4); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 5); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 6); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 7); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 8); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 9); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 10); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 1, 11); ?>"><span class="sr-only">slide name</span></a></li>
            </ul>
        </div>
        <span class="title">1. Understanding Your Needs:</span>
        <span class="percentage"><?php echo ( ($currs[0] == 1 ? $currs[1] : count($slideindex[1]) )  . '/' . count($slideindex[1])); ?></span>
    </div>
    <div class="step step2">
        <div class="slides">
            <?php ?>
            <ul>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 1); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 2); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 3); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 4); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 5); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 6); ?>"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide <?php echo checkSlidePosition($step_number, $slide_number, 2, 7); ?>"><span class="sr-only">slide name</span></a></li>
            </ul>
        </div>
        <span class="title">2. Understand the technology:</span>
        <span class="percentage"><?php echo ( ( $currs[0] == 2 ? $currs[1] : count($slideindex[2]) ) . '/' . count($slideindex[2])); ?></span>
    </div>
    <div class="step step3">
        <div class="slides">
            <?php ?>
            <ul>
                
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
            </ul>
        </div>
        <span class="title">3. Try it out:</span>
        <span class="percentage"><?php echo ( ($currs[0] == 3 ? $currs[1] : count($slideindex[3]) ) . '/' . count($slideindex[3])); ?></span>
    </div>
    <div class="step step4">
        <div class="slides">
            <?php ?>
            <ul>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
                <li><a class="slide"><span class="sr-only">slide name</span></a></li>
            </ul>
        </div>
        <span class="title">4. Find a partner:</span>
        <span class="percentage"><?php echo (($currs[0] == 4 ? $currs[1] : count($slideindex[4]) ) . '/' . count($slideindex[4])); ?></span>
    </div>
    
</div>













<?php } ?>
<?php /*
<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-12">
            <h1><?php printTitle($currentSlide, $slide->title); ?></h1>
        </div>
        
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="step">
                STEP 1: UNDERSTAND YOUR NEEDS
            </div>
            <div class="step">
                STEP 2: UNDERSTAND THE TECH
            </div>
            <div class="step">
                STEP 3: TRY IT OUT
            </div>
            <div class="step">
                STEP 4: FIND A PARTNER
            </div>
        
            <div class="step">
                <?php
                for($i = 1; $i< count($slideindex[1]) + 1; $i++) {
                    
                    if($currentSlide === '1.' . $i) {
                        $status = '1'; }
                    elseif(
                           ((array_search((string)'1.' . $i, $slideindex['fullIndex'], true) < array_search((string)$currentSlide, $slideindex['fullIndex'], true))
                           && ($i < $slide_number))
                           || ($step_number > 1)) {
                        $status = '2';
                    }
                    elseif($i == 1 && $slide_number > 1){
                        $status = '2';
                    }
                    else {
                        $status = '0';    
                    }
                    
                ?>    
                <div class="slide-position slide-position-<?php echo $status; ?> step-1" style="width: <?php echo round( (100/count($slideindex[1])) , 4); ?>%;"></div>
                <?php    
                }
                ?>
            </div>
            <div class="step">
                <?php
                for($i = 1; $i< count($slideindex[2]) + 1; $i++) {
                    if($currentSlide === '2.' . $i) {
                        $status = '1'; }
                    elseif( ((array_search((string)'2.' . $i, $slideindex['fullIndex'], true) < array_search((string)$currentSlide, $slideindex['fullIndex'], true)) && ($i < $slide_number)) || ($step_number > 2) ) {
                        $status = '2';
                    }
                    /*
                    elseif($i == 1 && $slide_number > 1){
                        $status = '2';
                    }
                    */
                    /*
                    else {
                        $status = '0';    
                    }
                    
                ?>    
                <div class="slide-position slide-position-<?php echo $status; ?> step-2" style="width: <?php echo round( (100/count($slideindex[2])) , 4); ?>%;"></div>
                <?php    
                }
                ?>
            </div>
            <div class="step">
                <?php
                for($i = 1; $i < count($slideindex[3]) + 1; $i++) {
                    if($currentSlide === '3.' . $i) {
                        $status = '1'; }
                    elseif( ((array_search((string)'3.' . $i, $slideindex['fullIndex'], true) < array_search((string)$currentSlide, $slideindex['fullIndex'], true)) && ($i < $slide_number)) || ($step_number > 3) ) {
                        $status = '2';
                    }
                    /*
                    elseif($i == 1 && $slide_number > 1){
                        $status = '2';
                    }
                    */
                    
                    /*
                    else {
                        $status = '0';    
                    }
                    
                ?>    
                <div class="slide-position slide-position-<?php echo $status; ?> step-3" style="width: <?php echo round( (100/count($slideindex[3])) , 4); ?>%;"></div>
                <?php    
                }
                ?>
            </div>
            <div class="step">
            <?php
                for($i = 1; $i< count($slideindex[4]) + 1; $i++) {
                    if($currentSlide === '4.' . $i) {
                        $status = '1'; }
                    elseif( (array_search((string)'4.' . $i, $slideindex['fullIndex'], true) < array_search((string)$currentSlide, $slideindex['fullIndex'], true)) && ($i < $slide_number) ) {
                        $status = '2';
                    }
                    /*
                    elseif($i == 1 && $slide_number > 1){
                        $status = '2';
                    }
                    */
                    
                    /*
                    else {
                        $status = '0';    
                    }
                    
                ?>    
                <div class="slide-position slide-position-<?php echo $status; ?> step-4" style="width: <?php echo round( (100/count($slideindex[4])) , 4); ?>%;"></div>
                <?php    
                }
                ?>
        </div>
    
        
        </div>
    </div>
</div>
<?php }  */ ?>
