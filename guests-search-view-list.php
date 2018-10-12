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
            <div class="col-md-6 col-xl-8 d-flex align-items-center justify-content-between">
              <h1 class="b-main__title">Search</h1>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="row">
                <div class="col-md-8 offset-md-4" >

                  <a href="#popup" class="btn btn-outline-primary b-btn w-100 js-popupLink">Add New Guest</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="b-panel">
          <div class="b-form">
            <form action="">
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Last Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>
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
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Arrival:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">First Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Status:</label>
                    <div class="col-sm-8">
                      <!--<input type="text" class="form-control b-input">-->
                      <select class="custom-select b-select js-selectSingle -hidden"">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>

                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Departure:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                    </div>
                  </div>
                </div>
              </div>
              <div class="js-advancedWrapper">
                <div class="row">
                  <div class="col-12">
                    <div class="b-form__advanced d-flex align-items-center">
                      <span class="b-form__advancedText js-advancedBtn">Advanced Search</span>
                      <span class="b-form__advancedLine"></span>
                    </div>
                  </div>
                </div>
                 <div class="js-advancedSearch -hidden">
                  <div class="row ">
                    <div class="col-12 pt-4">
                      <div class="b-main__subtitle mb-3">
                        Advanced Search
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Country:</label>
                        <div class="col-sm-8">
                          <select class="custom-select b-select js-selectSingle -hidden"">
                          <option value="1">--Select One--</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">State / Province:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">How they heard
                          about us:</label>
                        <div class="col-sm-8">
                          <select class="custom-select b-select js-selectSingle -hidden"">
                          <option value="1">--Select One--</option>
                          <option value="2">1</option>
                          <option value="3">2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Phone:</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control b-input js-maskedPhone">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Email Address:</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control b-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                      <div class="form-group row d-flex align-items-center">
                        <div class="col-12 pt-2 d-flex justify-content-end">
                          <div class="b-checkbox -revert">
                            <input type="checkbox" name="r1" id="l1">
                            <label for="l1" class="b-checkbox__label">
                              Display Only Archived Guests
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="row">
                    <div class="col-md-8 pl-md-3">
                      <button class="btn text-center b-btn -red w-100">Search</button>
                    </div>
                  </div>

                </div>
              </div>
            </form>
          </div>

        </div>
        <div class="pt-4">
          <div class="row mb-4">
            <div class="col-sm-12 d-block d-sm-flex justify-content-between align-items-center b-flexHeader">
              <h1 class="b-main__subtitle">Total Results: 590</h1>
              <div class="d-flex align-items-center justify-content-end">
                <a href="#" class="b-helper__btn -excel"></a>
                <a href="#" class="b-helper__btn -copy"></a>
              </div>
            </div>
          </div>
          <div class="row b-table__wrapper ">
            <div class="col-12">
              <div class="table-responsive ">
                <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3">
                  <thead>
                    <tr>
                      <th>Party Name</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Relation to Primary</th>
                      <th>Arrival</th>
                      <th>Departure</th>
                      <th>Visit Status</th>
                      <th>Phone</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody class="">
                   <tr>
                     <td>Allen Party 02/28/18</td>
                     <td>Johnathan</td>
                     <td>Allen</td>
                     <td>Primary</td>
                     <td>02/28/18 </td>
                     <td>03/10/18 </td>
                     <td>Paid In Full</td>
                     <td>(555) 555-5555</td>
                     <td class="text-center"><a href="create-guest-profile.php" class="b-table__headerLink " >
                         <i class="icon-pencil"></i>
                       </a></td>
                   </tr>
                   <tr>
                     <td>Allen Party 02/28/18</td>
                     <td>Britt</td>
                     <td>Daniels</td>
                     <td>Wife</td>
                     <td>05/01/18 </td>
                     <td>05/16/18 </td>
                     <td>Confirmed</td>
                     <td>(555) 555-5555</td>
                     <td class="text-center"><a href="" class="b-table__headerLink " >
                         <i class="icon-pencil"></i>
                       </a></td>
                   </tr>
                   <tr>
                     <td>Allen Party 02/28/18</td>
                     <td>Nicole</td>
                     <td>Daniels</td>
                     <td>Sister in Law</td>
                     <td>02/28/18 </td>
                     <td>03/10/18 </td>
                     <td>Deferred Credit</td>
                     <td>(555) 555-5555</td>
                     <td class="text-center"><a href="" class="b-table__headerLink " >
                         <i class="icon-pencil"></i>
                       </a></td>
                   </tr>
                   <tr>
                     <td>Peterson Party 03/03/18</td>
                     <td>Daniel</td>
                     <td>Peterson</td>
                     <td>Primary</td>
                     <td>02/28/18 </td>
                     <td>03/10/18 </td>
                     <td>Deferred Credit</td>
                     <td>(555) 555-5555</td>
                     <td class="text-center"><a href="" class="b-table__headerLink " >
                         <i class="icon-pencil"></i>
                       </a></td>
                   </tr>
                   <tr>
                     <td>WBD Party 05/26/18</td>
                     <td>Dan</td>
                     <td>Reynolds</td>
                     <td>Primary</td>
                     <td>05/26/18 </td>
                     <td>05/29/18</td>
                     <td>Marketing</td>
                     <td>(555) 555-5555</td>
                     <td class="text-center"><a href="" class="b-table__headerLink " >
                         <i class="icon-pencil"></i>
                       </a></td>
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
<!---- popup----->
<div class="b-popup" id="popup">
  <div class="b-popup__wrapper">
    <div class="b-popup__window -big">
      <div class="b-popup__header d-flex align-items-center justify-content-between mb-3">
        <h1 class="b-main__title ">Add New Guest</h1>
        <a href="" class="b-popup__closeBtn js-popupClose"></a>
      </div>
      <div class="b-form">
        <form action="">
          <div class="b-panel -popup mb-4">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group row d-flex align-items-center">
                  <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">First Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control b-input">
                  </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                  <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Last Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control b-input">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group row d-flex align-items-center">
                  <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Cell Phone:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control b-input js-maskedPhone">
                  </div>
                </div>
                <div class="form-group row d-flex align-items-center">
                  <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Email:</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control b-input">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 col-lg-4">
                <button class="btn text-center b-btn -red w-100">Search Existing Guests</button>
              </div>
            </div>

          </div>

          <div class="b-main__subtitle mb-3">Matches Found:</div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive ">
                <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3">
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Latest Party Name</th>
                    <th>Latest Visit Dates</th>
                    <th colspan="2">Cell Phone</th>
                  </tr>
                  </thead>
                  <tbody class="">
                  <tr>
                    <td>Johnathan</td>
                    <td>Allen</td>
                    <td>jallen@yahoo.com</td>
                    <td>Allen Party-3/03/18</td>
                    <td>3/03/18 – 9/03/18</td>
                    <td>(555) 555-5555</td>
                    <td class="text-center"><a href="" class="btn btn-outline-primary b-btn  b-table__selectBtn">Select</a></td>
                  </tr>
                  <tr>
                    <td>Johnathan</td>
                    <td>Allen</td>
                    <td>jallenjr@gmail.com</td>
                    <td>Allen Party-3/03/18</td>
                    <td>3/03/18 – 9/03/18</td>
                    <td>(666) 666-6666</td>
                    <td class="text-center"><a href="" class="btn btn-outline-primary b-btn  b-table__selectBtn">Select</a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="b-panel -transparent">
            <div class="row">
              <div class="col-md-5 col-lg-4">
                <a href="create-guest-profile.php" class="btn text-center b-btn -red w-100">Create New Guest Profile</a>
              </div>
            </div>
          </div>


        </form>
      </div>

    </div>
  </div>

</div>
<!--- end --->

<?php require('inc/footer.php'); ?>