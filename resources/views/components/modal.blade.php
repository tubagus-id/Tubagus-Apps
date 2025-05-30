{{-- Modal Tambah Slip Gaji --}}
<div class="modal fade" id="btnTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <form action="{{ route('slipgaji.submit') }}" method="post">
        @csrf
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Tambah Slip Gaji</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col mb-3">
              <label class="form-label">Perusahaan</label>
              <select class="form-select rounded-0" name="perusahaan">
                <option selected="">-- pilih perusahaan --</option>
                <option>PT. PARAGON TANGERANG</option>
                <option>PT. YANG LAIN</option>
                <option>PT. PUNYA SENDIRI</option>
              </select>
            </div>
            <div class="col mb-3">
              <label class="form-label">Bulan</label>
              <select class="form-select rounded-0" name="bulan">
                <option selected="">-- pilih bulan --</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>November</option>
                <option>Desember</option>
              </select>
            </div>
            <div class="col mb-3">
              <label class="form-label">Tahun</label>
              <select class="form-select rounded-0" name="tahun">
                <option selected="">-- pilih tahun --</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
                <option>2031</option>
                <option>2032</option>
                <option>2033</option>
                <option>2034</option>
                <option>2035</option>
              </select>
            </div>        
            <div class="col mb-3">
              <label class="form-label">Jumlah Penghasilan</label>
              <input type="text" name="jumlah" class="form-control rounded-0" placeholder="Masukan jumlah penghasilan" required>
            </div>
            <div class="col mb-3">
              <label class="form-label">Keterangan</label>
              <textarea name="keterangan" class="form-control rounded-0" placeholder="Keterangan..." rows="3"></textarea>
            </div>
            <div class="col mb-3">
              <label class="form-label">Lampiran PDF/Foto</label>
              <input type="file" name="lampiran" class="form-control rounded-0" placeholder="Keterangan">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  