<?php

function makeSolution($content) {
    $output =
    '<div class="solutionBox">
        <a class="solutionButton" href="javascript:void(0)">Show solution</a>
        <div class="solution">'.
            $content.   
        '</div>
    </div>
    <div style="clear: both"></div>';
    
    return $output;
}

function makeLoadingDiv() {
    $output = 
    '<img src="/images/icons/loading.gif" width="32" height="32"
        alt="Loading..." title="Loading..." />
    <span class="loadingText">Loading...</span>';
    return $output;
}

?>