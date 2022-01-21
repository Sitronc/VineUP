$('.m-nav-toggle').click(function(e){
    e.preventDefault();
    $('.m-right').toggleClass('is-open');
    $('.m-nav-toggle').toggleClass('is-open');
})