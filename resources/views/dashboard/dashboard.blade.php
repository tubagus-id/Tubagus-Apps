<x-layout>
  <div class="main-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
      <div class="breadcrumb-title pe-3">MENU</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item">
              <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <!-- start buat ganti breadcrumb -->
            <li class="breadcrumb-item active" aria-current="page">
              Dashboard
            </li>
            <!-- end buat ganti breadcrumb -->
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-outline-primary">
            Settings
          </button>
          <button
            type="button"
            class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"
          >
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div
            class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"
          >
            <a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;"
              >Something else here</a
            >
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
      <div class="col-xxl-8 d-flex align-items-stretch">
        <div class="card w-100 overflow-hidden rounded-4">
          <div class="card-body position-relative p-4">
            {{-- welcomeback --}}
            <div class="row">
              <div class="col-12 col-sm-7">
                <div class="d-flex align-items-center gap-3 mb-5">
                  <img
                    src="assets/images/tuhi.jpg"
                    class="rounded-circle bg-grd-info p-1"
                    width="60"
                    height="60"
                    alt="user"
                  />
                  <div class="">
                    <p class="mb-0 fw-semibold">Welcome back</p>
                    <h4 class="fw-semibold mb-0 fs-4 mb-0">
                      Muhammad Tuhi!
                    </h4>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-5">
                  <div class="">
                    <h4
                      class="mb-1 fw-semibold d-flex align-content-center"
                    >
                      $65.4K<i
                        class="ti ti-arrow-up-right fs-5 lh-base text-success"
                      ></i>
                    </h4>
                    <p class="mb-3">Today's Sales</p>
                    <div class="progress mb-0" style="height: 5px">
                      <div
                        class="progress-bar bg-grd-success"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                  <div class="vr"></div>
                  <div class="">
                    <h4
                      class="mb-1 fw-semibold d-flex align-content-center"
                    >
                      78.4%<i
                        class="ti ti-arrow-up-right fs-5 lh-base text-success"
                      ></i>
                    </h4>
                    <p class="mb-3">Growth Rate</p>
                    <div class="progress mb-0" style="height: 5px">
                      <div
                        class="progress-bar bg-grd-danger"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-5">
                <div class="welcome-back-img pt-4">
                  <img
                    src="assets/images/gallery/welcome-back-3.png"
                    height="180"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <!--end row-->            
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div
              class="d-flex align-items-start justify-content-between mb-3"
            >
              <div class="">
                <h6 class="mb-0 fw-bold">Campaign Stats</h6>
              </div>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="dropdown-toggle-nocaret options dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  <span class="material-icons-outlined fs-5"
                    >more_vert</span
                  >
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Another action</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Something else here</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-primary"
                  >
                    <span class="material-icons-outlined text-white"
                      >calendar_today</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Campaigns</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">54</p>
                    <p class="mb-0 fw-bold text-success">28%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-success"
                  >
                    <span class="material-icons-outlined text-white"
                      >email</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Emailed</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">245</p>
                    <p class="mb-0 fw-bold text-danger">15%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-branding"
                  >
                    <span class="material-icons-outlined text-white"
                      >open_in_new</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Opened</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">54</p>
                    <p class="mb-0 fw-bold text-success">30.5%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-warning"
                  >
                    <span class="material-icons-outlined text-white"
                      >ads_click</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Clicked</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">859</p>
                    <p class="mb-0 fw-bold text-danger">34.6%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-info"
                  >
                    <span class="material-icons-outlined text-white"
                      >subscriptions</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Subscribed</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">24,758</p>
                    <p class="mb-0 fw-bold text-success">53%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-danger"
                  >
                    <span class="material-icons-outlined text-white"
                      >inbox</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Spam Message</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">548</p>
                    <p class="mb-0 fw-bold text-danger">47%</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 bg-transparent">
                <div class="d-flex align-items-center gap-3">
                  <div
                    class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-deep-blue"
                  >
                    <span class="material-icons-outlined text-white"
                      >visibility</span
                    >
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Views Mails</h6>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">9845</p>
                    <p class="mb-0 fw-bold text-success">68%</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
        <div class="card w-100 rounded-4">
          <div class="card-header border-0 p-3 border-bottom">
            <div class="d-flex align-items-start justify-content-between">
              <div class="">
                <h5 class="mb-0">New Users</h5>
              </div>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="dropdown-toggle-nocaret options dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  <span class="material-icons-outlined fs-5"
                    >more_vert</span
                  >
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Another action</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Something else here</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="user-list p-3">
              <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/01.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Elon Jonado</h6>
                    <p class="mb-0">elon_deo</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/02.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Alexzender Clito</h6>
                    <p class="mb-0">zli_alexzender</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/03.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Michle Tinko</h6>
                    <p class="mb-0">tinko_michle</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/04.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">KailWemba</h6>
                    <p class="mb-0">wemba_kl</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/05.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Henhco Tino</h6>
                    <p class="mb-0">Henhco_tino</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/06.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Gonjiko Fernando</h6>
                    <p class="mb-0">gonjiko_fernando</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img
                    src="assets/images/avatars/08.png"
                    width="45"
                    height="45"
                    class="rounded-circle"
                    alt=""
                  />
                  <div class="flex-grow-1">
                    <h6 class="mb-0">Specer Kilo</h6>
                    <p class="mb-0">specer_kilo</p>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer bg-transparent p-3">
            <div
              class="d-flex align-items-center justify-content-between gap-3"
            >
              <a href="javascript:;" class="sharelink"
                ><i class="material-icons-outlined">share</i></a
              >
              <a href="javascript:;" class="sharelink"
                ><i class="material-icons-outlined">textsms</i></a
              >
              <a href="javascript:;" class="sharelink"
                ><i class="material-icons-outlined">email</i></a
              >
              <a href="javascript:;" class="sharelink"
                ><i class="material-icons-outlined">attach_file</i></a
              >
              <a href="javascript:;" class="sharelink"
                ><i class="material-icons-outlined">event</i></a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div
              class="d-flex align-items-start justify-content-between mb-3"
            >
              <div class="">
                <h5 class="mb-0">Recent Orders</h5>
              </div>
              <div class="dropdown">
                <a
                  href="javascript:;"
                  class="dropdown-toggle-nocaret options dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  <span class="material-icons-outlined fs-5"
                    >more_vert</span
                  >
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="javascript:;">Action</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Another action</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:;"
                      >Something else here</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="order-search position-relative my-3">
              <input
                class="form-control rounded-5 px-5"
                type="text"
                placeholder="Search"
              />
              <span
                class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50"
                >search</span
              >
            </div>
            <div class="table-responsive">
              <table class="table align-middle">
                <thead>
                  <tr>
                    <th>Item Name</th>
                    <th>Amount</th>
                    <th>Vendor</th>
                    <th>Status</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <img
                            src="assets/images/top-products/01.png"
                            class="rounded-circle"
                            width="50"
                            height="50"
                            alt=""
                          />
                        </div>
                        <p class="mb-0">Sports Shoes</p>
                      </div>
                    </td>
                    <td>$149</td>
                    <td>Julia Sunota</td>
                    <td>
                      <p
                        class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2"
                      >
                        Completed
                      </p>
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-1">
                        <p class="mb-0">5.0</p>
                        <i class="material-icons-outlined text-warning fs-6"
                          >star</i
                        >
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <img
                            src="assets/images/top-products/02.png"
                            class="rounded-circle"
                            width="50"
                            height="50"
                            alt=""
                          />
                        </div>
                        <p class="mb-0">Goldan Watch</p>
                      </div>
                    </td>
                    <td>$168</td>
                    <td>Julia Sunota</td>
                    <td>
                      <p
                        class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2"
                      >
                        Completed
                      </p>
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-1">
                        <p class="mb-0">5.0</p>
                        <i class="material-icons-outlined text-warning fs-6"
                          >star</i
                        >
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <img
                            src="assets/images/top-products/03.png"
                            class="rounded-circle"
                            width="50"
                            height="50"
                            alt=""
                          />
                        </div>
                        <p class="mb-0">Men Polo Tshirt</p>
                      </div>
                    </td>
                    <td>$124</td>
                    <td>Julia Sunota</td>
                    <td>
                      <p
                        class="dash-lable mb-0 bg-warning bg-opacity-10 text-warning rounded-2"
                      >
                        Pending
                      </p>
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-1">
                        <p class="mb-0">4.0</p>
                        <i class="material-icons-outlined text-warning fs-6"
                          >star</i
                        >
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <img
                            src="assets/images/top-products/04.png"
                            class="rounded-circle"
                            width="50"
                            height="50"
                            alt=""
                          />
                        </div>
                        <p class="mb-0">Blue Jeans Casual</p>
                      </div>
                    </td>
                    <td>$289</td>
                    <td>Julia Sunota</td>
                    <td>
                      <p
                        class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2"
                      >
                        Completed
                      </p>
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-1">
                        <p class="mb-0">3.0</p>
                        <i class="material-icons-outlined text-warning fs-6"
                          >star</i
                        >
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="">
                          <img
                            src="assets/images/top-products/06.png"
                            class="rounded-circle"
                            width="50"
                            height="50"
                            alt=""
                          />
                        </div>
                        <p class="mb-0">Fancy Shirts</p>
                      </div>
                    </td>
                    <td>$389</td>
                    <td>Julia Sunota</td>
                    <td>
                      <p
                        class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2"
                      >
                        Canceled
                      </p>
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-1">
                        <p class="mb-0">2.0</p>
                        <i class="material-icons-outlined text-warning fs-6"
                          >star</i
                        >
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-layout>
      
