<?php

function makePhotoFeature ($imgPath, $height, $caption) {
    $output = 
    '<div class="photo feature pageBox">
        <div class="imgHolder">
            <img src="'.$imgPath.'" width="1024" height="'.$height.'"
                alt="'.$caption.'" title="'.$caption.'"/>
        </div>
        <div class="caption">'.$caption.'</div>
    </div>';
    return $output;
}

function makeTutorialFeature ($title, $pages) {
    $output = '<div class="tutorial feature pageBox">';
    $half = ceil(count($pages)/2);
    $count = 0;
    
    $output .= "<h2>$title</h2>";
    
    $output .= '<ol class="pageListing">';
    for (; $count < $half; $count++) {
        $output .= '<li><a class="pageLink nextLink" href="#page-'.
        ($count+1).'">'.$pages[$count].'</a></li>';
    }
    $output .= '</ol>';
    
    $output .= '<ol class="pageListing" start="'.($half+1).'">';
    for (; $count < count($pages); $count++) {
        $output .= '<li><a class="pageLink" href="#page-'.
        ($count+1).'">'.$pages[$count].'</a></li>';
    }
    $output .= '</ol>';
    $output .= '<div class="pageButtons"></div>'.'</div>';
    
    return $output;
}

?>

