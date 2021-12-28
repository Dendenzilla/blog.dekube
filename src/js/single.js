$( document ).ready(function() {
    // for each codebit on the page
    $('.enlighter-origin').each(function(){
        // Retrieving the codebit language
        let codeLanguage = $(this).attr("data-enlighter-language");
        console.log(codeLanguage);
        // Creating a span in the codebit with the language's name
        $(this).prev('div.enlighter-default').append("<span class='codeName'>" + codeLanguage + "</span>");
    });

    $('.enlighter-btn-copy').click(function(){
        console.log('copy?');
        $(this).addClass('alert--copied');
        setTimeout(
            function() 
            {
                $('.enlighter-btn-copy').delay(600).removeClass('alert--copied');
            }, 1000);
    })
});



