<?php
// $defaultView: 0 = html, 1 = css.
function makeWhiteboard($id, $editable, $showCode, $minRows, $height,
        $html, $css, $defaultView) {
    $viewHtml = 0;
    $viewCss = 1;
    
    $whiteboardCode = '';
    $whiteboardCode .=
            '<div class="whiteboard" id="'.$id.'">
                <div class="whiteboardPadding">
                <div class="codeDiv'.
                    ($showCode ? '' : ' hidden')
                    .'" id="'.$id.'-codeDiv">
                    <div class="codeDivPadding">
                        <a href="javascript:void(0);"
                            class="whiteboardLabel'.
                            ($defaultView == $viewHtml ? ' active' : '').
                            ($editable ? ' editable' : '').
                            '" id="'.$id.'-htmlLink">HTML</a>
                        <a href="javascript:void(0);"
                            class="whiteboardLabel'.
                            ($defaultView == $viewCss ? ' active' : '').
                            ($editable ? ' editable' : '')
                            .'" id="'.$id.'-cssLink">CSS</a>
                    
                        <div class="codeAreaPadding">
                        <textarea class="codeArea'.
                            ($editable ? ' editable' : '').
                        '" rows="'.$height.'" id="'.$id.'-codeArea"'.
                        ($editable ? '' : 'readonly="readonly"').'></textarea>
                        </div>
                    </div>
                </div>
                <div class="previewDiv" id="'.$id.'-previewDiv">
                    <div class="previewDivPadding">
                        <span class="whiteboardLabel">'.
                        ($showCode ? ($editable ? 'Preview' : 'Result') : 'Result')
                        .':</span><div style="clear: both;"></div>
                        <div class="previewArea" id="'.$id.'-previewArea">
                            <iframe id="'.$id.'-iframe" src=""></iframe>
                        </div>
                    </div>
                </div>';
                
    if ($showCode) {
        $whiteboardCode .= '
                <form name="downloadButtonForm"     action="/php/download-whiteboard.php">
                    <input type="hidden" name="type" />
                    <input type="hidden" name="contents" />
                    <input type="submit" name="downloadButton" value="Download '
                        .($defaultView == $viewHtml ? 'HTML' : 'CSS' )
                        .' as file" />
                </form>';
    }
    $whiteboardCode .='
                </div>
            </div>
            <script>
                var codeArea = $("#'.$id.'-codeArea");
                var codeDiv = $("#'.$id.' .codeDiv");
                $("#'.$id.'-htmlLink").data(\'value\', \''.$html.'\');
                $("#'.$id.'-cssLink").data(\'value\', \''.$css.'\');
                $("#'.$id.'-codeArea").val(\''.
                ($defaultView == $viewHtml ? $html : $css).'\');
            </script>';
    return $whiteboardCode;
}
?>