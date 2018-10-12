<?php
$pageName = '';
$siteName = '';
$uri = 'parties';
require('inc/header.php');
?>

<div class="b-mainContainer">
  <div class="b-breadcrumb hidden-xs-down">
    <div class="container">
      <ol class="breadcrumb b-breadcrumb__list p-0 m-0 d-flex align-items-center">
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Parties</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item active">
          Search and List View
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <div class="b-main__header">
          <div class="row mb-3">
          </div>
        </div>

        <div class="b-panel mb-4">
          <div class="b-form">
            <form action="">
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Party Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Estimated Arrival:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Estimated Departure:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Party Status:</label>
                    <div class="col-sm-8">
                      <select class="custom-select b-select js-selectSingle -hidden"">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 col-xl-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Total Guests:</label>
                        <div class="col-sm-8 col-md-4">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Fishing Guests:</label>
                        <div class="col-sm-8 col-md-4">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="b-panel mb-4">
          <div class="pt-1">
            <div class="b-main__subtitle mb-3">
             Primary Guest:
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1 b-guestRow__numberCol">
                <div class="b-guestRow__number">
                  1
                </div>
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">First Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Last Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-3 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Relation:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 offset-md-1 offset-xl-0 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Arrival:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker " placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Departure:</label>
                 <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-1 b-guestRow__col text-lest text-md-center">
                <label for="" class="col-form-label b-input__label -col mb-2">Fisher</label>
                <div class="b-checkbox">
                  <input type="checkbox" name="r1" id="l1" >
                  <label for="l1" class="b-checkbox__label">
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="b-panel mb-4">
          <div class="pt-1">
            <div class="b-main__subtitle mb-3">
              Additional Guest:
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1 b-guestRow__numberCol">
                <div class="b-guestRow__number">
                  2
                </div>
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">First Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Last Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-3 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Relation:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 offset-md-1 offset-xl-0 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Arrival:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker " placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Departure:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-1 b-guestRow__col text-lest text-md-center">
                <label for="" class="col-form-label b-input__label -col mb-2">Fisher</label>
                <div class="b-checkbox">
                  <input type="checkbox" name="r1" id="l1" >
                  <label for="l1" class="b-checkbox__label">
                  </label>
                </div>
              </div>
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1 b-guestRow__numberCol">
                <div class="b-guestRow__number">
                  3
                </div>
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">First Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Last Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-3 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Relation:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 offset-md-1 offset-xl-0 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Arrival:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker " placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Departure:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-1 b-guestRow__col text-lest text-md-center">
                <label for="" class="col-form-label b-input__label -col mb-2">Fisher</label>
                <div class="b-checkbox">
                  <input type="checkbox" name="r1" id="l1" >
                  <label for="l1" class="b-checkbox__label">
                  </label>
                </div>
              </div>
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1 b-guestRow__numberCol">
                <div class="b-guestRow__number">
                  4
                </div>
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">First Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Last Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-3 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Relation:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 offset-md-1 offset-xl-0 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Arrival:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker " placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Departure:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-1 b-guestRow__col text-lest text-md-center">
                <label for="" class="col-form-label b-input__label -col mb-2">Fisher</label>
                <div class="b-checkbox">
                  <input type="checkbox" name="r1" id="l1" >
                  <label for="l1" class="b-checkbox__label">
                  </label>
                </div>
              </div>
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1 b-guestRow__numberCol">
                <div class="b-guestRow__number">
                  5
                </div>
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">First Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Last Name:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-3 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Relation:</label>
                <input type="text" class="form-control b-input">
              </div>
              <div class="col-md-4 offset-md-1 offset-xl-0 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Arrival:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker " placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-4 col-xl-2 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Departure:</label>
                <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
              </div>
              <div class="col-md-1 b-guestRow__col text-lest text-md-center">
                <label for="" class="col-form-label b-input__label -col mb-2">Fisher</label>
                <div class="b-checkbox">
                  <input type="checkbox" name="r1" id="l1" >
                  <label for="l1" class="b-checkbox__label">
                  </label>
                </div>
              </div>
            </div>
            <div class="row b-guestRow">
              <div class="col-md-1">
              </div>
              <div class="col-md-10 b-guestRow__col">
                <label for="" class="col-form-label b-input__label -col mb-2">Group Notes:</label>
                <textarea name="" id="" class="form-control b-textarea"></textarea>
              </div>
            </div>
            <div class="row b-guestRow">
              <div class="col-md-11 offset-md-1 b-guestRow__col d-flex align-items-center justify-content-center d-md-block">
                <a href="search-view-list3.php" class="btn text-center b-btn -red ">Save Party Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!---- popup----->
  <div class="b-popup" id="delete">
    <div class="b-popup__wrapper">
      <div class="b-popup__window -confirm">
        <div class="b-popup__closeWrapper">
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <h1 class="b-main__confirmTitle ">Are you sure <br>you want to delete this user?</h1>
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-sm-12 col-md-10">
            <div class="row">
              <div class="col-sm-6 text-center mb-4 mb-sm-0">
                <a href="" class="btn text-center b-btn -red">Yes</a>
              </div>
              <div class="col-sm-6 text-center">
                <a href="" class="btn btn-outline-primary b-btn js-popupClose">No</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--- end --->
<?php require('inc/footer.php'); ?>