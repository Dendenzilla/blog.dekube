// Function to switch grid or line display
$(".display--switch > i").click(function(){
    // If the element isnt the selected one we toggle the classes and the grid layout
    if( !$(this).hasClass('selected')){
        // if is grid <i> we toggle the display grid
        if($(this).hasClass('fa-th')){
            localStorage.setItem('display', 'Grid'); 
        }else{
            localStorage.removeItem("display");
        }
        // we then toggle the squared class
        $(".display--switch > i").toggleClass('selected');
        $(".posts").toggleClass('squared');
    }
});
// if theme selected is Light we apply it to the html tag then show the content and remove the loader
// Put outside the document.ready so it doenst blink with the dark theme
if (localStorage.getItem("theme") == 'Light'){
    $('html').attr("data-theme", "light");
    $(".posts").addClass('reveal');
    $('.lds-facebook').addClass('hidden');
}
// Website theme switcher
    $('#theme-switcher').click(function(){
        let siteTheme = $('html').attr("data-theme");
        if(siteTheme == 'dark'){
            $('html').attr("data-theme", "light");
            localStorage.setItem('theme', 'Light'); 
            $('#theme-switcher').children('i').toggleClass('fas far');
            
        }else{
            $('html').attr("data-theme", "dark");
            localStorage.setItem('theme', 'Dark');
            console.log('t1t1');
            $('#theme-switcher').children('i').toggleClass('fas far');
        }
    });
// Run once when laoding homepage to check if grid was set in localStorage
$( document ).ready(function() {
    if (localStorage.getItem("display") != null) {
        // if grid was set: toggle class to apply selected on grid <i> tag and square posts
        // then we hide the loader and show the posts
        $(".display--switch > i").toggleClass('selected');
        $(".posts").addClass('squared reveal');
        $('.lds-facebook').addClass('hidden');
    } else{
        $(".posts").addClass('reveal');
        $('.lds-facebook').addClass('hidden');
    }
});