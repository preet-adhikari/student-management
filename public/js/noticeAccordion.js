$(document).ready( function () {
    accordionToggle();
});

function accordionToggle(){

    //Display the first notice on page load
    $('.noticeAccordion:first-child').find('.noticeView').stop().addClass("activeAcc");

    $( ".noticeAccordion .noticeHeading" ).click( function (e){
        e.preventDefault();
    //    First we add activeAcc class to current block,
    //    Then we remove active class from siblings
        $(this).closest(".noticeAccordion").siblings().removeClass("activeAcc");
        $(this).closest(".noticeAccordion").toggleClass("activeAcc");

    //    Toggle current accordion
    //    Collapse others that were previously opened
        $(this).closest(".noticeAccordion").siblings().find('.noticeView').stop().hide();
        $(this).closest(".noticeAccordion").find('.noticeView').stop().toggle();
    });
}
