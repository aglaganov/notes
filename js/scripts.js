jQuery(document).ready(function() {
    $('#fullpage').fullpage({
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['lightblue', '#1BBC9B', '#7E8F7C'],
        css3: true
    });
    hljs.initHighlightingOnLoad();
});