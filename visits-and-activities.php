<?php
$pageName = '';
$siteName = '';
$uri = 'guests';
require('inc/header.php');
?>

<div class="b-mainContainer">
  <div class="b-breadcrumb hidden-xs-down">
    <div class="container">
      <ol class="breadcrumb b-breadcrumb__list p-0 m-0 d-flex align-items-center">
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Guests</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Reynolds Party</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="#" class="b-breadcrumb__link">Dan Reynolds </a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item active">
          Visits and Activities
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <ul class="nav nav-tabs b-tab__nav mb-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link" href="create-guest-profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Visits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="files.php">Files</a>
          </li>
        </ul>

            <div class="row mb-4 pt-2">
              <div class="col-sm-12">
                <h1 class="b-main__title">Guests: Dan Reynolds</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="b-main__subtitle mb-4 mt-1">
                  Add Visit:
                </div>
              </div>
            </div>
            <div class="b-panel -transparent">
              <div class="row">
                <div class="col-lg-6 col-xl-5">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Party Name:</label>
                    <div class="col-sm-8">
                     <select class="custom-select b-select js-selectSingle -hidden" "="">
                        <option value="1"> Reynolds Party 08/25/18</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                </div>
                  <div class="col-lg-6 col-xl-5">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Visit Status:</label>
                      <div class="col-sm-8">
                        <select class="custom-select b-select js-selectSingle -hidden" "="">
                        <option value="1">--Select One--</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-lg-6 col-xl-5">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Relation to Primary:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>


                  <div class="col-lg-6 col-xl-5">

                    <div class="form-group row d-flex align-items-center">
                      <div class="col-sm-8 offset-sm-3 pt-2 d-flex align-items-center">
                        <div class="b-checkbox">
                          <input type="checkbox" name="r1" id="l3">
                          <label for="l3" class="b-checkbox__label">
                            Primary Contact for the Party
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="b-panel">
              <div class="js-arrival-departure-block">
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Arrival:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">By:</label>
                      <div class="col-sm-8">
                        <select class="custom-select b-select js-selectSingle -hidden js-selectArrivalBy" >
                        <option value="1">--Select One--</option>
                        <option value="plane">Plane</option>
                        <option value="3">Private Plane</option>
                        <option value="4">Boat</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Time:</label>
                      <div class="col-sm-8">
                        <div class="row">
                          <div class="col-4 ">
                            <input type="text" class="form-control b-input -smallPadding">
                          </div>
                          <div class="col-4 pl-0 pr-20">
                            <input type="text" class="form-control b-input -smallPadding">
                          </div>
                          <div class="col-4 -narrowSelect -smallPaddingSelect pl-0">
                            <select class="custom-select b-select js-selectSingle -hidden" >
                            <option value="1">AM</option>
                            <option value="2">PM</option>
                            </select>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="js-showArrivalByPlane -hidden">
                  <div class="row">
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Carrier:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Flight #:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Confirmation Code:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Room:</label>
                      <div class="col-sm-8">
                        <select class="custom-select b-select js-selectSingle -hidden" "="">
                        <option value="1">--Select One--</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4 offset-xl-4">
                    <div class="form-group row ">
                      <div class="col-sm-8 offset-sm-4 pt-2">
                        <div class="b-checkbox">
                          <input type="checkbox" name="r2" id="l22">
                          <label for="l22" class="b-checkbox__label">
                            Web Check-In Done
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Departure:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">By:</label>
                      <div class="col-sm-8">
                        <select class="custom-select b-select js-selectSingle js-selectDepartureBy -hidden" >
                          <option value="1">--Select One--</option>
                          <option value="plane">Plane</option>
                          <option value="3">Private Plane</option>
                          <option value="4">Boat</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Time:</label>
                      <div class="col-sm-8">
                        <div class="row">
                          <div class="col-4">
                            <input type="text" class="form-control b-input">
                          </div>
                          <div class="col-4 pl-0 pr-20">
                            <input type="text" class="form-control b-input">
                          </div>
                          <div class="col-4 -narrowSelect -smallPaddingSelect pl-0">
                            <select class="custom-select b-select js-selectSingle -hidden" >
                              <option value="1">AM</option>
                              <option value="2">PM</option>
                            </select>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="js-showDepartureByPlane -hidden">
                  <div class="row">
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Carrier:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Flight #:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-4">
                    <div class="form-group row d-flex align-items-center">
                      <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Confirmation Code:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control b-input">
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-xl-4 offset-xl-8">
                    <div class="form-group row ">
                      <div class="col-sm-8 offset-sm-4 pt-2">
                        <div class="b-checkbox">
                          <input type="checkbox" name="r2" id="l23">
                          <label for="l23" class="b-checkbox__label">
                            Web Check-In Done
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 ">
                  <button class="btn text-center b-btn -red">Add Arrival/Departure
                  </button>
                </div>
              </div>
            </div>
            <div class="b-panel -transparent">
              <div class="row">
                <div class="col-md-6 col-xl-5">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Captain Request:</label>
                    <div class="col-sm-8">
                      <select class="custom-select b-select js-selectSingle -hidden" "="">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-5">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Lodging Request:</label>
                    <div class="col-sm-8">
                      <select class="custom-select b-select js-selectSingle -hidden" "="">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4 pt-4">
                <div class="col-sm-12 ">
                  <a href="" class="btn text-center b-btn -red mr-0 mb-4 mr-md-3 mb-md-0">Save</a>
                  <a href="" class="btn text-center b-btn -red">Save and Back to Party Details</a>
                </div>  
              </div>
            </div>
            <div class="pt-4">
              <div class="row">
                <div class="col-12">
                  <div class="b-main__subtitle mb-4 mt-1">
                    HistorIcal Data
                  </div>
                </div>
              </div>
              <div class="table-responsive ">
                <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3 pl-20">
                  <thead>
                  <tr>
                    <th>Party Name </th>
                    <th class="text-center">Guests</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Visit Status</th>
                    <th class="text-center">Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Reynolds Party 08/25/2018</td>
                    <td class="text-center">3</td>
                    <td>05/26/18</td>
                    <td>05/29/18</td>
                    <td>Penciled In</td>
                    <td><a href="#edit" class="b-table__iconLink js-popupLink text-center"><i class="icon-pencil"></i></a></td>
                  </tr>
                  <tr>
                    <td>Reynolds Party 05/01/17</td>
                    <td class="text-center">3</td>
                    <td>05/01/17</td>
                    <td>05/06/17</td>
                    <td class="-redText">Cancelled</td>
                    <td><a href="#edit" class="b-table__iconLink js-popupLink text-center"><i class="icon-pencil"></i></a></td>
                  </tr>
                  <tr>
                    <td>Rosa Party 02/28/16</td>
                    <td class="text-center">6</td>
                    <td>02/28/16</td>
                    <td>03/10/16</td>
                    <td>Paid In Full</td>
                    <td><a href="#edit" class="b-table__iconLink js-popupLink text-center"><i class="icon-pencil"></i></a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>


      </div>
    </div>
  </div>
</div>
</div>
<?php require('inc/footer.php'); ?>