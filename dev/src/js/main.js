import '../sass/main.scss';
require('bootstrap-multiselect/dist/js/bootstrap-multiselect');
require('webpack-jquery-ui/datepicker');

function initCollapseTable() {
  $('.js-collapsedTable').on('click', function (e) {
    e.preventDefault();
    $(this).closest('table').find('.js-collapsedBody').slideToggle();
    $(this).closest('table').toggleClass('-opened');
  });
}
function initDatepicker(){
  $('.js-datepicker').datepicker();
}

function initSelect(){
  $('.js-selectSingle').multiselect({});
}
function initPopup(){
  $('.js-popupLink').on('click', function (e) {
    e.preventDefault();
    var target = $(this).attr('href');
    $(target).show();
  });
  $('.js-popupClose').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.b-popup').hide();
  });
}

function addAddress() {
  $('.js-addAddress').on('click', function (e) {
    e.preventDefault();
    $(this).parent().find('.js-additionalAddress').slideToggle();
    $(this).find('span').toggleClass('-opened');
  });
}
function initMaskedInput() {
  $('.js-maskedPhone').inputmask({'mask': '(999)999-9999'});
}
function showAdvancedSearch() {
  $('.js-advancedBtn').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.js-advancedWrapper').find('.js-advancedSearch').slideToggle();
    $(this).closest('.js-advancedWrapper').toggleClass('-opened');
  });
}
function selectGuest() {
  $('.js-selectGuestLabel').on('click', function () {
    if($(this).parent().find('.js-selectGuestInput').prop('checked')){
      $(this).text('Select Guest');
    } else{
      $(this).text('Record Selected');
    }
  });
}
function showArrivalRow() {
  $('.js-selectArrivalBy').on('change', function (e) {
   if($(this).val()==='plane'){
     $(this).closest('.js-arrival-departure-block').find('.js-showArrivalByPlane').slideDown();
   }else{
     $(this).closest('.js-arrival-departure-block').find('.js-showArrivalByPlane').slideUp();
   }
  });
}
function showDepartureRow() {
  $('.js-selectDepartureBy').on('change', function (e) {
   if($(this).val()==='plane'){
     $(this).closest('.js-arrival-departure-block').find('.js-showDepartureByPlane').slideDown();
   }else{
     $(this).closest('.js-arrival-departure-block').find('.js-showDepartureByPlane').slideUp();
   }
  });
}
function fileInputChange(){
  $('.js-fileInput').on('change', function(e){
    var fileName = e.target.files[0].name;
    $(this).closest('.b-uploaderBlock').find('.js-fileInput').val(fileName);
  });
}
$(window).on('load', function () {
  initSelect();
 /* initCollapseTable();


  initPopup();
  addAddress();
  initMaskedInput();
  showAdvancedSearch();
  selectGuest();
  showArrivalRow();
  showDepartureRow();
  fileInputChange();*/
  initDatepicker();
});