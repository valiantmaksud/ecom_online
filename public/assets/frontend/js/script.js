
//================  NAVBAR MEGA MENU JS  =================//
$(document).on('hover','.mega-menu-item', function() {
	let key = $(this).data('key');
    $(this).find('.mega_menu'+key).removeClass('d-none');
}, function() {
    $('.mega_menu').addClass('d-none');
});





//================  QUANTITY INCREASE DECREASE JS  =================//
$(document).on('click' ,'.quantity_plus', function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});

$(document).on('click' ,'.quantity_minus', function () {
    if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});




//================  ACCORDION JS  =================//
$(".accordion-body").click(function(){
    $(".country_form").addClass("open_form");
});


$(".accordion_cross").click(function(){
    $(".country_form").removeClass("open_form");
});





//================  SEARCH BOX TOGGLE JS  =================//
$("#search_btn").click(function() {
    $('#search_box').toggle();
});
$("#close_btn").click(function() {
    $('#search_box').hide();
});
$("#searchBtn").click(function() {
    $('#searchBox').toggle();
});
$("#closeBtn").click(function() {
    $('#searchBox').hide();
});




//================  MOBILE MENU JS  =================//
$(".menu_icon").click(function(){
    $(".mobile_menu").addClass("open");
});


$(".cross_btn").click(function(){
    $(".mobile_menu").removeClass("open");
});



//==============  CATEGORY SIDEBAR JS  ===============//
// $('.sidebar-category-button').click(function() {
//     $('.main-category-sidebar').toggle('slide');
// });

// $('.main-category-cross').click(function() {
//     $('.main-category-sidebar').toggle('slide');
// });



//================  TAB ACTIVE JS  =================//
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
});






// ====================================================
// 		 EDIT PROFILE SCRIPT
// ====================================================
$(document).ready(function() {

    $('#editNameBtn').click(function() {
      $('#editName').slideToggle("fast");
    });


    $('#editEmailBtn').click(function() {
        $('#editEmail').slideToggle("fast");
    });

    $('#editMobileBtn').click(function() {
        $('#editMobile').slideToggle("fast");
    });


    $('#editPasswordBtn').click(function() {
        $('#editPassword').slideToggle("fast");
    });


    $('#editGenderBtn').click(function() {
        $('#editGender').slideToggle("fast");
    });


    $('#editBirthdayBtn').click(function() {
        $('#editBirthday').slideToggle("fast");
    });

});

