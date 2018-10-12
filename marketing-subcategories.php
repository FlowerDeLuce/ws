<?php
$pageName = '';
$siteName = '';
$uri = 'master';
require('inc/header.php');
?>

<div class="b-mainContainer">
  <div class="b-breadcrumb hidden-xs-down">
    <div class="container">
      <ol class="breadcrumb b-breadcrumb__list p-0 m-0 d-flex align-items-center">
        <li class="breadcrumb-item b-breadcrumb__item">
          <a href="master-settings.php" class="b-breadcrumb__link">Master Settings</a>
        </li>
        <li class="breadcrumb-item b-breadcrumb__item active">
          Marketing Subcategories
        </li>
      </ol>
    </div>
  </div>
  <div class="b-main__page">
    <div class="container">
      <div class="b-main__content">
        <div class="b-main__header">
          <div class="row mb-3">
            <div class="col-sm-12 d-block d-md-flex align-items-center justify-content-between">
              <h1 class="b-main__title mb-md-0">Marketing Subcategories</h1>
              <a href="#edit" class="btn btn-outline-primary b-btn js-popupLink">Add New Marketing Subcategory</a>
            </div>
          </div>
          <div class="b-panel mb-4">
            <div class="row">
              <div class="col-md-6">
                <div class="row d-flex align-items-center">
                  <label for="" class="col-md-2 col-form-label b-input__label text-md-right pr15 ">Year:</label>
                  <div class="col-sm-12 col-md-10 col-lg-6">
                    <select class="custom-select b-select js-selectSingle -hidden"">
                    <option value="1">--Select One--</option>
                    <option value="2">1</option>
                    <option value="3">2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive ">
            <table class="table b-table -noBorder -hoverAll  -aroundBordered mb-3 pl-20">
              <thead>
              <tr>
                <th>Subcategory Name</th>
                <th>Category Name</th>
                <th>Year</th>
                <th>Cost </th>
                <th>Edit</th>
                <th class="text-center">Archive</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>TV Ad – Channel 5</td>
                <td>Advertising</td>
                <td>2018</td>
                <td>$1,500.00 / year</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Radio Ad – FM 304</td>
                <td>Advertising</td>
                <td>2018</td>
                <td>$1,500.00 / year</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>VFW</td>
                <td>Advertising</td>
                <td>2018</td>
                <td>$2,500.00</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>May Season Opening Brochure</td>
                <td>Brochures</td>
                <td>2018</td>
                <td>$800</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Summer Vacation Brochure</td>
                <td>Brochures</td>
                <td>2017</td>
                <td>$800</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Google AdWords: Sitka Fishing Lodge</td>
                <td>Google Search</td>
                <td>2017</td>
                <td>$1,000.00</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Marketing Block</td>
                <td>Marketing Block</td>
                <td>2017</td>
                <td>$1,000.00</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>January Email Blast</td>
                <td>Emails</td>
                <td>2017</td>
                <td>$300</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Labor Day Raffle</td>
                <td>Raffles</td>
                <td>2016</td>
                <td>$3,000.00</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>
              <tr>
                <td>Veteran’s Association Raffle</td>
                <td>Raffles</td>
                <td>2016</td>
                <td>$1,000.00</td>
                <td><a href="#edit" class="b-table__iconLink js-popupLink"><i class="icon-pencil"></i></a></td>
                <td><a href="" class="b-table__iconLink js-popupLink text-center"><i class="icon-archive"></i></a></td>
              </tr>

              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<!---- popup----->
  <div class="b-popup" id="edit">
    <div class="b-popup__wrapper">
      <div class="b-popup__window">
        <div class="b-popup__header d-flex align-items-center justify-content-between mb-3">
          <h1 class="b-main__title ">Add / Edit Marketing Subcategory</h1>
          <a href="" class="b-popup__closeBtn js-popupClose"></a>
        </div>
        <div class="b-form">
          <form action="">
            <div class="b-panel -popup mb-4">
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Subcategory Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control b-input">
                </div>
              </div>
              <div class="form-group row d-flex align-items-center">
                <label for="" class="col-sm-3 col-form-label b-input__label text-sm-right">Year:</label>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <select class="custom-select b-select js-selectSingle -hidden"">
                  <option value="1">--Select One--</option>
                  <option value="2">1</option>
                  <option value="3">2</option>
                  </select>
                </div>
                <label for="" class="col-sm-2 col-form-label b-input__label text-sm-right">Cost:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control b-input">
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-sm-12">
                <button class="btn text-center b-btn -red ">Save Marketing Subcategory</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

  </div>
  <!--- end --->

<?php require('inc/footer.php'); ?>