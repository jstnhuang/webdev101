function loadTutorial(maxPage) {
    $('#allPages').hide();
    var pageNum = getPageNum(maxPage);
    $('.pageLink').click(function() {
        loadPageOnPageLinkClick(maxPage, $(this))
    });
    loadPage(pageNum, maxPage);
}

function loadPage(pageNum, maxPage) {
    var currentPage = $('#currentPage');
    var loadingDiv = $('.loading');
    
    currentPage.css('visibility', 'hidden');
    loadingDiv.show();    
    
    var pageSelector = '#page-' + pageNum;
    currentPage.html($(pageSelector).html());
    $('#currentPage .solution').show();
    $('#currentPage .whiteboard').each(function() {
        var id = $(this).attr('id');
        initWhiteboardById(id);
    });
    $('#currentPage .solution').hide();
    $('#currentPage .solutionBox a').click(toggleSolution);
    
    // Make prev/next buttons.
    $('.pageButtons').html(makePrevNextButtons(pageNum, maxPage));
    $('.pageButtons .pageLink').click(function() {
        loadPageOnPageLinkClick(maxPage, $(this))
    });
    
    loadingDiv.hide();
    currentPage.css('visibility', 'visible');
    currentPage.hide();
    currentPage.fadeIn('slow');
}

function loadPageOnPageLinkClick(maxPage, anchor) {
    var loadPageNum = getPageNumHash(maxPage, anchor.attr('href'));
    loadPage(loadPageNum, maxPage);
}

function toggleSolution(e) {
    var solution = $(this).siblings('.solution');
    var solutionBox = solution.parent();
    
    var toggleButton = $(this);
    solution.toggle('fast', function() {
        if (toggleButton.html() == 'Show solution') {
            toggleButton.html('Hide solution');
        }
        else {
            toggleButton.html('Show solution');
        }
    });
}

function getPageNumHash(maxPage, hash) {
    if (hash == '' || /#page-\d+$/.test(hash) == false) {
        hash == '#page-1';
    }
    var pageNum = parseInt(hash.substring(6));
    if (isNaN(pageNum) || pageNum < 1 || pageNum > maxPage) {
        pageNum = 1;
    }
    
    return pageNum;
}

function getPageNum(maxPage) {
    var hash = window.location.hash;
    return getPageNumHash(maxPage, hash);
}

function makePrevNextButtons(currentPage, maxPage) {
    var prevPage = currentPage - 1;
    var nextPage = currentPage + 1;
    var output = "";
    
    if (prevPage > 0) {
        output +=
        "<a class=\"pageLink prevLink\" href=\"#page-" + prevPage + "\">\
            <div class=\"prev pageButton\">\
            <img src=\"/images/icons/left-arrow.png\" width=\"27px\"\
                height=\"23px\" alt=\"Previous page\" title=\"Previous page\" />\
            <span class=\"prev\">Previous page</span></div>\
        </a>";
    }
    if (nextPage <= maxPage) {
        output +=
        "<a class=\"pageLink nextLink\" href=\"#page-" + nextPage + "\">\
            <div class=\"next pageButton\">\
            <img src=\"/images/icons/right-arrow.png\" width=\"27px\"\
                height=\"23px\" alt=\"Next page\" title=\"Next page\" />\
            <span class=\"next\">Next page</span>\
            </div>\
        </a>";
    }
    else {
        output +=
        "<a class=\"pageLink nextLink\" href=\"/tutorials\">\
            <div class=\"next pageButton\">\
            <img src=\"/images/icons/right-arrow.png\" width=\"27px\"\
                height=\"23px\" alt=\"Back to tutorial list\"\
                title=\"Back to tutorial list\" />\
            <span class=\"next\">Back to tutorial list</span>\
            </div>\
        </a>";
    }
    return output;
}