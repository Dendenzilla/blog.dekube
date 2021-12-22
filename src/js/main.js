// Function to switch grid or line display
$(".display--switch > i").click(function(){
    // If the element isnt the selected one we toggle the classes and the grid layout
    if( !$(this).hasClass('selected')){
        if($(this).hasClass('fa-th')){
            console.log('gridded');
            localStorage.setItem('display', 'Grid'); 
        }else{
            localStorage.removeItem("display");
        }
        $(".display--switch > i").toggleClass('selected');
        $(".posts").toggleClass('squared');
    }
});
// Run once when laoding homepage to check if grid was set in localStorage
$( document ).ready(function() {
    if (localStorage.getItem("display") != null) {
        // if grid was set: toggle class to apply selected on grid i tag and square posts
        $(".display--switch > i").toggleClass('selected');
        $(".posts").addClass('squared reveal');
        $('.lds-facebook').addClass('hidden');
    }else{
        $(".posts").addClass('reveal');
        $('.lds-facebook').addClass('hidden');
    }
});