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
            <div class="col-md-6 col-xl-8 d-flex align-items-center justify-content-between">
              <h1 class="b-main__title">Search</h1>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="row">
                <div class="col-md-8 offset-md-4" >

                  <a href="#popup" class="btn btn-outline-primary b-btn w-100 js-popupLink">Create New Party</a>
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
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Departure:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control b-input js-datepicker -datepicker" placeholder="MM/DD/YYYY">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Status:</label>
                    <div class="col-sm-8">
                      <!--<input type="text" class="form-control b-input">-->
                      <select class="custom-select b-select js-selectSingle -hidden">
                      <option value="1">--Select One--</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      </select>

                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Captain Request:</label>
                    <div class="col-sm-8">
                      <select class="custom-select b-select js-selectSingle -hidden">
                        <option value="1">--Select One--</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4">
                  <div class="form-group row d-flex align-items-center">
                    <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Lodging Request:</label>
                    <div class="col-sm-8">
                      <select class="custom-select b-select js-selectSingle -hidden">
                        <option value="1">--Select One--</option>
                        <option value="2">1</option>
                        <option value="3">2</option>
                      </select>
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
          <div class="b-main__subtitle mb-3">
            Total Results: 45
          </div>
          <div class="row b-table__wrapper ">
            <div class="col-12">
              <div class="table-responsive ">
                <table class="table b-table -nested -noBorder -hover  -aroundBordered mb-3">
                  <thead>
                    <tr>
                      <th><a href="#" class="b-table__expand js-collapsedTable"></a></th>
                      <th><span class="cursor-pointer js-collapsedTable">Reynolds Party  05/26/18</span></th>
                      <th>3 Guests</th>
                      <th>Upcoming</th>
                      <th colspan="2">03/03/18 – 03/08/18</th>
                      <th>
                        <a href="#popup" class="b-table__headerLink js-popupLink" >
                          <i class="icon-pencil"></i>
                          <span>Edit Party</span>
                        </a>
                      </th>
                      <th>
                        <a href="" class="b-table__headerLink">
                          <i class="icon-user"></i>
                          <span>Add Guest</span>
                        </a>
                      </th>
                      <th>
                        <a href="" class="b-table__iconLink text-center">
                          <i class="icon-paper"></i>
                        </a>
                      </th>
                      <th>
                        <a href="" class="b-table__iconLink text-center">
                          <i class="icon-copy"></i>
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="b-table__inserted js-collapsedBody">
                    <tr>
                      <td colspan="2">Guests</td>
                      <td>Relation</td>
                      <td>Arrival</td>
                      <td>Departure</td>
                      <td>Fisher</td>
                      <td>Visit Status</td>
                      <td colspan="3">Phone</td>
                    </tr>
                    <tr>
                       <td colspan="2">Dan Reynolds</td>
                       <td>Primary</td>
                       <td>05/26/18</td>
                       <td>05/29/18</td>
                       <td>Yes</td>
                       <td>Paid in Full</td>
                       <td>(555) 555-5555</td>
                       <td></td>
                       <td><a href="#delete" class="b-table__iconLink text-center js-popupLink"><i class="icon-trash"></i></a></td>
                    </tr>
                    <tr>
                       <td colspan="2">Solana Rosa</td>
                       <td>Employee</td>
                       <td>05/24/18</td>
                       <td>05/29/18</td>
                       <td>Yes</td>
                       <td>Penciled In</td>
                       <td>(555) 555-5555</td>
                       <td></td>
                       <td><a href="#delete" class="b-table__iconLink text-center js-popupLink"><i class="icon-trash"></i></a></td>
                    </tr>
                    <tr>
                       <td colspan="2">Nicole Putnam</td>
                       <td>Employee</td>
                       <td>05/24/18</td>
                       <td>05/29/18</td>
                       <td>No</td>
                       <td>Confirmed</td>
                       <td>(555) 555-5555</td>
                       <td></td>
                       <td><a href="#delete" class="b-table__iconLink text-center js-popupLink"><i class="icon-trash"></i></a></td>
                    </tr>
                  </tbody>
                </table>

                <table class="table b-table -nested -noBorder -hover -aroundBordered mb-3">
                  <thead>
                  <tr>
                    <th><a href="#" class="b-table__expand js-collapsedTable"></a></th>
                    <th><span class="cursor-pointer js-collapsedTable">Peterson Party  03/03/18</span></th>
                    <th>40 Guests</th>
                    <th>Paid In Full</th>
                    <th colspan="2">03/03/18 – 08/08/18</th>
                    <th>
                      <a href="#popup" class="b-table__headerLink js-popupLink" >
                        <i class="icon-pencil"></i>
                        <span>Edit Party</span>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__headerLink">
                        <i class="icon-user"></i>
                        <span>Add Guest</span>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__iconLink text-center">
                        <i class="icon-paper"></i>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__iconLink text-center">
                        <i class="icon-copy"></i>
                      </a>
                    </th>
                  </tr>
                  </thead>
                  <tbody class="b-table__inserted js-collapsedBody">
                  <tr>
                    <td colspan="2">Guests</td>
                    <td>Relation</td>
                    <td>Arrival</td>
                    <td>Departure</td>
                    <td>Fisher</td>
                    <td>Visit Status</td>
                    <td colspan="3">Phone</td>
                  </tr>
                  <tr>
                    <td colspan="2">Dan Reynolds</td>
                    <td>Primary</td>
                    <td>05/26/18</td>
                    <td>05/29/18</td>
                    <td>Yes</td>
                    <td>Paid in Full</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td colspan="2">Solana Rosa</td>
                    <td>Employee</td>
                    <td>05/24/18</td>
                    <td>05/29/18</td>
                    <td>Yes</td>
                    <td>Penciled In</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td colspan="2">Nicole Putnam</td>
                    <td>Employee</td>
                    <td>05/24/18</td>
                    <td>05/29/18</td>
                    <td>No</td>
                    <td>Confirmed</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
                  </tr>
                  </tbody>
                </table>

                <table class="table b-table -nested -noBorder -hover -aroundBordered ">
                  <thead>
                  <tr>
                    <th><a href="#" class="b-table__expand js-collapsedTable"></a></th>
                    <th>Allen Party  05/26/18</th>
                    <th>2 Guests</th>
                    <th>Paid In Full</th>
                    <th colspan="2">03/03/18 – 03/08/18</th>
                    <th>
                      <a href="#popup" class="b-table__headerLink js-popupLink" >
                        <i class="icon-pencil"></i>
                        <span>Edit Party</span>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__headerLink">
                        <i class="icon-user"></i>
                        <span>Add Guest</span>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__iconLink text-center">
                        <i class="icon-paper"></i>
                      </a>
                    </th>
                    <th>
                      <a href="" class="b-table__iconLink text-center">
                        <i class="icon-copy"></i>
                      </a>
                    </th>
                  </tr>
                  </thead>
                  <tbody class="b-table__inserted js-collapsedBody">
                  <tr>
                    <td colspan="2">Guests</td>
                    <td>Relation</td>
                    <td>Arrival</td>
                    <td>Departure</td>
                    <td>Fisher</td>
                    <td>Visit Status</td>
                    <td colspan="3">Phone</td>
                  </tr>
                  <tr>
                    <td colspan="2">Dan Reynolds</td>
                    <td>Primary</td>
                    <td>05/26/18</td>
                    <td>05/29/18</td>
                    <td>Yes</td>
                    <td>Paid in Full</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td colspan="2">Solana Rosa</td>
                    <td>Employee</td>
                    <td>05/24/18</td>
                    <td>05/29/18</td>
                    <td>Yes</td>
                    <td>Penciled In</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
                  </tr>
                  <tr>
                    <td colspan="2">Nicole Putnam</td>
                    <td>Employee</td>
                    <td>05/24/18</td>
                    <td>05/29/18</td>
                    <td>No</td>
                    <td>Confirmed</td>
                    <td>(555) 555-5555</td>
                    <td></td>
                    <td><a href="" class="b-table__iconLink text-center"><i class="icon-trash"></i></a></td>
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
    <div class="b-popup__window">
      <div class="b-popup__header d-flex align-items-center justify-content-between mb-3">
        <h1 class="b-main__title ">Create / Edit Party</h1>
        <a href="" class="b-popup__closeBtn js-popupClose"></a>
      </div>
      <div class="b-form">
        <form action="">
          <div class="b-panel -popup mb-4">
            <div class="form-group row d-flex align-items-center">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Party Name:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control b-input">
              </div>
            </div>
            <div class="form-group row d-flex align-items-center">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Estimated Arrival:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control b-input js-datepicker -datepicker">
              </div>
            </div>
            <div class="form-group row d-flex align-items-center">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Estimated Departure:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control b-input js-datepicker -datepicker">
              </div>
            </div>
            <div class="form-group row d-flex align-items-center">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Total Guests:</label>
              <div class="col-sm-8">
                <div class="row d-flex align-items-center">
                  <div class="col-sm-3 mb-3 mb-md-0">
                    <input type="text" class="form-control b-input">
                  </div>
                  <label for="" class="col-sm-6 col-form-label b-input__label text-md-right">Fishing Guests:</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control b-input">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row ">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Group Notes:</label>
              <div class="col-sm-8">
                <textarea class="form-control b-textarea"> </textarea>
              </div>
            </div>
            <div class="form-group row d-flex align-items-center mb-0">
              <label for="" class="col-sm-4 col-form-label b-input__label text-sm-right">Party Status:</label>
              <div class="col-sm-8">
                <select class="custom-select b-select js-selectSingle -hidden">
                <option value="1">--Select One--</option>
                <option value="2">1</option>
                <option value="3">2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row pl-2">
            <div class="col-sm-4 pl-sm-0 mb-3 mb-sm-0">
              <button class="btn text-center b-btn -red w-100">Save</button>
            </div>
            <div class="col-sm-8">
              <a href="search-view-list2.php" class="btn text-center b-btn -red ">Save and Fill Out Party Details</a>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

</div>
<!--- end --->
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