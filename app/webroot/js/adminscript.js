$('.mob-start').on('click',  function(){
    $('.sidebar').addClass('sidebar-active');
});
$('.close-sidebar').on('click',  function(){
    $('.sidebar').removeClass('sidebar-active');
});


$('.menu-item').on("click", function showBlock(e) {
    const target = e.target
    if(target.nextElementSibling.classList.contains('menu__li-children')) {
        if (target.classList.contains('active')) {
            $(target.nextElementSibling).slideUp();
            target.classList.remove('active')
        } else {
            $('.menu__li-children').slideUp();
            $(target.nextElementSibling).slideDown();
            // console.log(target.nextElementSibling)
            $('.menu-item').removeClass('active')
            target.classList.add('active')
        }
    }

  });