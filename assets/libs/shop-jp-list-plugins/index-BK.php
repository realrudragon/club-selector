<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="container .container-fluid">
      <main class="main">
        <?php //main ?>
        <div class="row mt-5">
          <div class="col-md-4 col-12 .container">
            <div class="card">
              <div class="card-body">
                <?php // ?>
                <div class="input-group mb-3">
                  <input data-jplist-control="textbox-filter" data-group="group1" data-name="my-filter-1" data-path=".badge" type="text" value="" placeholder="ค้นหา Tags" data-clear-btn-id="tags-clear-btn" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <input data-jplist-control="textbox-filter" data-group="group1" data-name="my-filter-2" data-path=".author-name" type="text" value="" placeholder="ค้นหา Name" data-clear-btn-id="author-clear-btn" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <input data-jplist-control="textbox-filter" data-group="group1" data-name="my-filter-2" data-path=".description" type="text" value="" placeholder="ค้นหา Description" data-clear-btn-id="desc-clear-btn" class="form-control">
                </div>
                <?php // ?>
                <div class=".align-items-start mb-3">
                  <select data-jplist-control="select-sort" data-group="group1" data-name="sort">
                    <option value="0" data-path="default" data-name="sort" data-group="group1">Sort by</option>
                    <option value="1" data-path=".author-name" data-order="asc" data-type="text" selected="" data-name="sort" data-group="group1">Author Name A-Z</option>
                    <option value="2" data-path=".author-name" data-order="desc" data-type="text" data-name="sort" data-group="group1">Author Name Z-A</option>
                    <option value="3" data-path=".likes" data-order="asc" data-type="number" data-name="sort" data-group="group1">Likes ASC</option>
                    <option value="4" data-path=".likes" data-order="desc" data-type="number" data-name="sort" data-group="group1">Likes DESC</option>
                    <option value="5" data-path=".create-date" data-order="asc" data-datetime-format="{month} {day}, {year}" data-type="datetime" data-name="sort" data-group="group1">Created ASC</option>
                    <option value="6" data-path=".create-date" data-order="desc" data-datetime-format="{month} {day}, {year}" data-type="datetime" data-name="sort" data-group="group1">Created DESC</option>
                  </select>
                </div>
                <?php // ?>
                <div class="btn-group mb-3" role="group" aria-label="Button group with nested dropdown">
                  <button type="button" class="btn btn-secondary"
                    data-jplist-control="buttons-text-filter" data-path="default" data-group="group1" data-mode="radio" data-selected="true" data-text="" data-name="buttons-text-filter"
                  >
                    ทั้งหมด
                  </button>
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      รวมรายการ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" data-jplist-control="buttons-text-filter" data-path=".badge" data-group="group1" data-mode="radio" data-text="soup" data-name="buttons-text-filter">Soup</a>
                      <a class="dropdown-item" data-jplist-control="buttons-text-filter" data-path=".badge" data-group="group1" data-mode="radio" data-text="pumpkin" data-name="buttons-text-filter">pumpkin</a>
                    </div>
                  </div>
                </div>
                <?php // ?>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <label>
                        <input type="checkbox" data-jplist-control="checkbox-path-filter" data-path=".xxx" data-group="group1" class="mr-1" data-name="cb-badge">
                        XXX
                      </label>
                    </div>
                    <div class="input-group-text">
                      <label>
                        <input type="checkbox" data-jplist-control="checkbox-path-filter" data-path=".galaxy" data-group="group1" data-name="cb-badge" class="mr-1">
                        galaxy
                      </label>
                    </div>
                  </div>
                </div>
                <?php // ?>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <label>
                        <input type="radio" data-jplist-control="radio-buttons-path-filter" data-path="default" data-group="group1" name="radio-filter" class="mr-1 jplist-selected" checked="">
                        All Seasons
                      </label>
                    </div>
                  </div>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <label>
                        <input type="radio" data-jplist-control="radio-buttons-path-filter" data-path=".xxx" data-group="group1" name="radio-filter">
                        xxx
                      </label>
                    </div>
                  </div>
                </div>
                <?php // ?>
                <div class="align-items-center mb-3">
                  <div
                    data-jplist-control="slider-range-filter" data-path=".length .val"
                    data-group="group1" data-name="length-range-slider"
                    data-min="50" data-from="50" data-to="10000" data-max="10000"
                  >
                    <div class="" style="font-size: 10.5px;">
                      <span class="range-slider-value">
                        ราคา: <span data-type="value-1"></span>
                      </span>
                      -
                      <span class="range-slider-value ml-1" data-type="value-2"></span>
                    </div>
                    <div class="jplist-slider" data-type="slider"></div>
                    <div class="jplist-slider-values ml-1" style="font-size: 10.5px;">
                     	<b>ต่ำสุด:</b> <span data-type="min"></span>,
                     	<b>จำนวน 1:</b> <span data-type="value-1"></span>,
                     	<b>จำนวน 2:</b> <span data-type="value-2"></span>,
                     	<b>สูงสุด:</b> <span data-type="max"></span>
                	 </div>
                  </div>
                </div>
                <?php // ?>
                <div class="btn-group mb-3">
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".likes" data-group="group1" data-name="likes" data-selected="true" data-from="0" data-to="1000000">
                    All
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light jplist-selected" type="button" data-path=".likes" data-group="group1" data-name="likes" data-from="0" data-to="100">
                    0 - 100 Likes
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".likes" data-group="group1" data-name="likes" data-from="101" data-to="200">
                    101 - 200 Likes
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".likes" data-group="group1" data-name="likes" data-from="201">
                    201+ Likes
                  </button>
                </div>
                <?php // ?>
                <div class="btn-group">
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light jplist-selected" type="button" data-path=".create-date-year" data-group="group1" data-name="date" data-selected="true" data-from="2000" data-to="3000">
                    All
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".create-date-year" data-group="group1" data-name="date" data-from="2014" data-to="2015">
                    2014 - 2015
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".create-date-year" data-group="group1" data-name="date" data-from="2016" data-to="2017">
                    2016 - 2017
                  </button>
                  <button data-jplist-control="buttons-range-filter" class="btn btn-light" type="button" data-path=".create-date-year" data-group="group1" data-name="date" data-from="2018">
                    2018+
                  </button>
                </div>
                <?php // ?>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-12 .container">
            <div class="card">
              <div class="card-body">
                <?php // ?>
                <div class="row" data-jplist-group="group1">
                  <?php // ?>
                  <div class="col-12">

                    <div class="col-lg-4 col-sm-6 mb-4" data-jplist-item>
                      <div class="card box-shadow">
                        <div class="food-img">
                          <a href="https://unsplash.com/photos/w6ftFbPCs9I">
                            <img src="http://dev.nanmeebooks-v-1-0-0.com/assets/layout-house/ecom/images/banner/12-5.jpg" width="100%" alt="" title="" />
                          </a>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <b class="header">Name</b>
                            <a href="https://unsplash.com/@calya1" class="author-name"> Aayla1</a> name
                          </li>
                          <li class="list-group-item">
                            <b class="header">Likes</b>
                            <span class="likes">100</span>
                          </li>
                          <li class="list-group-item">
                            <b class="header length-header">ราคา:</b>
                            <span class="length">
                              <span class="val">4,665</span>
                            </span>
                          </li>
                          <li class="list-group-item description">
                            <span class="description-content">Bowls of orange</span>
                          </li>
                        </ul>
                        <div class="card-body">
                          <small class="galaxy">galaxy</small>
                          <small class="xxx">xxx</small>
                        </div>
                        <div class="card-body">
                          <span class="badge badge-info">soup</span>
                          <span class="badge badge-secondary">healthy</span>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Created at <span class="create-date">October 17, 2016</span>
                            <span class="create-date-year" style="display: none">2016</span>
                          </small>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4" data-jplist-item>
                      <div class="card box-shadow">
                        <div class="food-img">
                          <a href="https://unsplash.com/photos/w6ftFbPCs9I">
                            <img src="http://dev.nanmeebooks-v-1-0-0.com/assets/layout-house/ecom/images/banner/12-5.jpg" width="100%" alt="" title="" />
                          </a>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <b class="header">Name</b>
                            <a href="https://unsplash.com/@calya1" class="author-name">Cayla1</a> name
                          </li>
                          <li class="list-group-item">
                            <b class="header">Likes</b>
                            <span class="likes">200</span>
                          </li>
                          <li class="list-group-item">
                            <b class="header length-header">ราคา:</b>
                            <span class="length">
                              <span class="val">203</span>
                            </span>
                          </li>
                          <li class="list-group-item description">
                            <span class="description-content">vvvvvvv</span>
                          </li>
                        </ul>
                        <div class="card-body">
                          <small class="xxx">xxx</small>
                        </div>
                        <div class="card-body">
                          <span class="badge badge-info">leaf</span>
                          <span class="badge badge-secondary">pumpkin</span>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Created at <span class="create-date">October 17, 2018</span>
                            <span class="create-date-year" style="display: none">2018</span>
                          </small>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4" data-jplist-item>
                      <div class="card box-shadow">
                        <div class="food-img">
                          <a href="https://unsplash.com/photos/w6ftFbPCs9I">
                            <img src="http://dev.nanmeebooks-v-1-0-0.com/assets/layout-house/ecom/images/banner/12-5.jpg" width="100%" alt="" title="" />
                          </a>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <b class="header">Name</b>
                            <a href="https://unsplash.com/@calya1" class="author-name">bee</a> name
                          </li>
                          <li class="list-group-item">
                            <b class="header">Likes</b>
                            <span class="likes">810</span>
                          </li>
                          <li class="list-group-item">
                            <b class="header length-header">ราคา:</b>
                            <span class="length">
                              <span class="val">500</span>
                            </span>
                          </li>
                          <li class="list-group-item description">
                            <span class="description-content">aaaa</span>
                          </li>
                        </ul>
                        <div class="card-body">
                          <small class="galaxy">galaxy</small>
                        </div>
                        <div class="card-body">
                          <span class="badge badge-info">leaf</span>
                          <span class="badge badge-secondary">pumpkin</span>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Created at <span class="create-date">September 26, 2017</span>
                            <span class="create-date-year" style="display: none">2017</span>
                          </small>
                        </div>
                      </div>
                    </div>

                  </div>
                  <?php // ?>
                  <div class="col-12">
                    <div class="col text-center" data-jplist-control="no-results" data-group="group1" data-name="no-results">No Results Found</div>
                  </div>
                  <?php // ?>

                </div>
                <?php // ?>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-12">
            <div class="card">
              <div class="card-body">
                <?php // ?>
                <div class=".align-items-start">
                  <nav
                    data-jplist-control="pagination" data-group="group1" data-items-per-page="12" data-current-page="0"
                    data-disabled-class="disabled" data-selected-class="active" data-jump="top" data-name="pagination1" class=""
                  >
                    <ul class="pagination d-inline-flex">
                      <li class="page-item d-none d-sm-none d-lg-inline-block" data-type="first"><a class="page-link" href="#">«</a></li>
                      <li class="page-item" data-type="prev"><a class="page-link" href="#">‹</a></li>
                    </ul>
                    <ul class="pagination d-none d-sm-none d-lg-inline-flex" data-type="pages">
                      <li class="page-item" data-type="page"><a class="page-link" href="#">{pageNumber}</a></li>
                    </ul>
                    <ul class="pagination d-inline-flex">
                      <li class="page-item" data-type="next"><a class="page-link" href="#">›</a></li>
                      <li class="page-item d-none d-sm-none d-lg-inline-block" data-type="last"><a class="page-link" href="#">»</a></li>
                    </ul>
                    <span data-type="info" class="d-none d-sm-none d-md-inline-flex badge badge-secondary ml-3 p-2">
                      {startItem} - {endItem} of {itemsNumber}
                    </span>
                    <div class="dropdown d-inline-flex ml-lg-3" data-type="items-per-page-dd" data-opened-class="show">
                      <button data-type="panel" class="btn btn-primary dropdown-toggle" type="button">
                        Dropdown button
                      </button>
                      <div data-type="content" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" data-value="1">1 per page</a>
                        <a class="dropdown-item" href="#" data-value="12">12 per page</a>
                        <a class="dropdown-item" href="#" data-value="24">24 per page</a>
                        <a class="dropdown-item" href="#" data-value="0">View All</a>
                      </div>
                    </div>
                  </nav>
                </div>
                <?php // ?>
                <div class=".align-items-start">
                  <button data-jplist-control="reset" data-group="group1" class="btn btn-secondary" data-name="reset" type="button">
                    Reset
                  </button>
                </div>
                <?php // ?>
              </div>
            </div>
          </div>
        </div>
        <?php //main ?>
      </main>
    </section>
    <?php //JS ?>
    <!-- <link href="https://www.jplist.org/js/jplist.styles.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://www.jplist.org/examples/css/wallpapers.css" rel="stylesheet" type="text/css" />
    <!-- IE / Edge babel polyfill -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
    <!-- jPList Library -->
    <script src="https://www.jplist.org/js/1.2.0/jplist.min.js"></script>
    <script>
        jplist.init();
    </script>
    <style media="screen">
      /* [data-jplist-group]{
        display: flex;
        font-size: 16px;
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin: 0 20px;
        box-sizing: border-box;
      } */

      /* [data-jplist-item]{
      border-bottom: 1px dotted #ccc;
      width: 100%;
      text-align: center;
      padding: 10px 0;
      } */

      /**
      * slider styles
      */
      /* [data-jplist-control="slider-range-filter"]{
        display: flex;
        flex-direction: column;
        font-size: 12px;
        align-items: center;
        width: 100%;
      } */

      .range-slider-value{
        width: 100px;
        box-sizing: border-box;
        padding: 0 5px;
      }

      .jplist-slider {
        width: 100%;
        height: 20px;
        background-color: #fff;
        margin: 15px;
        margin: 15px;
        border-radius: .25rem;
        position: relative;
        box-sizing: border-box;
      }

      .jplist-slider::before {
        content: '';
        display: block;
        width: 100%;
        height: 3px;
        background: #fff;
        position: absolute;
        z-index: 100;
        left: 0;
        top: 50%;
        transform: translate(0, -50%);
        opacity: 0;
      }

      .jplist-slider-holder-1,
      .jplist-slider-holder-2 {
        width: 20px;
        height: 100%;
        border-radius: .25rem;
        display: block;
        cursor: pointer;
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-50%, 0);
        z-index: 200;
        transition: 0.3s background-color;
        padding: 0;
        margin: 0;
        font-size: 0;
        line-height: 0;
      }

      .jplist-slider-holder-1 {
        background: #000;
      }

      .jplist-slider-holder-2 {
        background: #106CD6;
      }

      .jplist-slider-holder-1:active,
      .jplist-slider-holder-2:active{
        background: #00448c;
        box-shadow: 0px 0px 10px #fff;
      }

      .jplist-slider-range {
        width: 0;
        height: 20px;
        background: #ccc;
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
        background-size: 1rem 1rem;
      }

      .jplist-slider-values{
        width: 100% !important;
      }

      [data-type="value-1"],
      [data-type="value-2"]{
      color: #e83e8c;
      }

      [data-jplist-control="no-results"]{
        padding: 20px 0;
        color: #3e6894;
      }

      .jplist-slider {
        margin: 10px 0px 10px 0px !important;
      }
    </style>
    <?php //JS ?>
  </body>
</html>
