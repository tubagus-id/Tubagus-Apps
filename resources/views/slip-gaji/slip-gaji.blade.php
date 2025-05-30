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
              Slip Gaji
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
    <hr>

    <div class="row">
      <!-- Card 2 -->
      <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
        <div class="card w-100 border-top border-3 border-success rounded-4">
          <div class="card-body">
            <div
              class="d-flex align-items-start justify-content-between mb-3"
            >
              <div class="">
                <h5 class="mb-0">Daftar Semua Slip Gaji</h5>
              </div>
              <button type="button" class="btn btn-grd-primary" data-bs-toggle="modal" data-bs-target="#btnTambah"><i class="fa-solid fa-plus"></i>
                Tambah Slip Gaji
              </button>
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
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Penghasilan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($slipgaji as $no=>$data)                  
                  <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $data->perusahaan }}</td>
                    <td>{{ $data->bulan }}</td>
                    <td>{{ $data->tahun }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>                        
                        <a href="#" class="btn btn-secondary btn-sm"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-grd-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="btn btn-grd-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
        <div class="card w-100 border-bottom border-3 border-success rounded-4">
          <div class="card-body">
            <h5 class="mb-0 text-center">
              JUMLAH TOTAL PENGHASILAN :
              <span class="mb-0 text-info">
                Rp. 155.650.000
              </span>
            </h5>                                         
          </div>
        </div>
      </div>
      <!-- End Card 3 -->
    </div>
  </div>

  <x-modal></x-modal>
  
</x-layout>