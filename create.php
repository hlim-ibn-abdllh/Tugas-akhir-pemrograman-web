<!-- app/views/laporan/create.php -->

<!-- Hero Banner -->
<div class="laporan-hero mb-4">
  <div class="laporan-hero-content text-center py-5">
    <span class="badge bg-awas mb-2 px-3 py-2"><i class="fa-solid fa-triangle-exclamation me-2"></i>Siaga Bencana</span>
    <h1 class="laporan-hero-title">Pusat Pengaduan Bencana</h1>
    <p class="laporan-hero-subtitle">Laporkan kejadian bencana di sekitar Anda melalui kanal yang tersedia.<br>Setiap laporan akan ditindaklanjuti oleh petugas BPBD.</p>
  </div>
</div>

<!-- Channel Cards -->
<div class="row g-4 mb-5">

  <!-- WhatsApp Channel -->
  <div class="col-md-6 col-lg-4">
    <div class="channel-card channel-wa h-100">
      <div class="channel-icon-wrap bg-wa">
        <i class="fa-brands fa-whatsapp"></i>
      </div>
      <h5 class="channel-title">WhatsApp Hotline</h5>
      <p class="channel-desc">Kirim laporan langsung via WhatsApp ke petugas BPBD yang siaga 24 jam. Sertakan foto dan lokasi Anda.</p>
      <div class="channel-numbers mb-3">
        <div class="channel-num-item">
          <span class="badge-kabupaten">Bangkalan</span>
          <a href="https://wa.me/6281234560001?text=Laporan+Bencana+Bangkalan:%20" target="_blank" class="channel-num-link">0812-3456-0001</a>
        </div>
        <div class="channel-num-item">
          <span class="badge-kabupaten">Sampang</span>
          <a href="https://wa.me/6281234560002?text=Laporan+Bencana+Sampang:%20" target="_blank" class="channel-num-link">0812-3456-0002</a>
        </div>
        <div class="channel-num-item">
          <span class="badge-kabupaten">Pamekasan</span>
          <a href="https://wa.me/6281234560003?text=Laporan+Bencana+Pamekasan:%20" target="_blank" class="channel-num-link">0812-3456-0003</a>
        </div>
        <div class="channel-num-item">
          <span class="badge-kabupaten">Sumenep</span>
          <a href="https://wa.me/6281234560004?text=Laporan+Bencana+Sumenep:%20" target="_blank" class="channel-num-link">0812-3456-0004</a>
        </div>
      </div>
      <a href="https://wa.me/6281234560000?text=Halo,%20saya%20ingin%20melaporkan%20kejadian%20bencana%20di:" target="_blank" class="btn-channel btn-wa">
        <i class="fa-brands fa-whatsapp me-2"></i>Buka WhatsApp
      </a>
    </div>
  </div>

  <!-- Telegram Channel -->
  <div class="col-md-6 col-lg-4">
    <div class="channel-card channel-tg h-100">
      <div class="channel-icon-wrap bg-tg">
        <i class="fa-brands fa-telegram"></i>
      </div>
      <h5 class="channel-title">Telegram Bot</h5>
      <p class="channel-desc">Gunakan bot Telegram MDEWS untuk melaporkan bencana secara terstruktur. Bot akan memandu Anda step-by-step.</p>
      <div class="channel-info-box mb-3">
        <div class="info-row"><i class="fa-solid fa-robot me-2 text-tg"></i><strong>Bot:</strong> @MDEWSBot</div>
        <div class="info-row"><i class="fa-solid fa-bullhorn me-2 text-tg"></i><strong>Channel Info:</strong> @MDEWS_Official</div>
        <div class="info-row"><i class="fa-solid fa-users me-2 text-tg"></i><strong>Grup Siaga:</strong> t.me/mdews_siaga</div>
      </div>
      <a href="https://t.me/MDEWSBot" target="_blank" class="btn-channel btn-tg">
        <i class="fa-brands fa-telegram me-2"></i>Buka Telegram Bot
      </a>
    </div>
  </div>

  <!-- Email Channel -->
  <div class="col-md-6 col-lg-4">
    <div class="channel-card channel-email h-100">
      <div class="channel-icon-wrap bg-email">
        <i class="fa-solid fa-envelope"></i>
      </div>
      <h5 class="channel-title">Email Resmi</h5>
      <p class="channel-desc">Kirim laporan tertulis resmi untuk keperluan administrasi dan tindak lanjut formal ke kantor BPBD kabupaten.</p>
      <div class="channel-info-box mb-3">
        <div class="info-row"><i class="fa-solid fa-at me-2 text-email"></i>bpbd.bangkalan@jatim.go.id</div>
        <div class="info-row"><i class="fa-solid fa-at me-2 text-email"></i>bpbd.sampang@jatim.go.id</div>
        <div class="info-row"><i class="fa-solid fa-at me-2 text-email"></i>bpbd.pamekasan@jatim.go.id</div>
        <div class="info-row"><i class="fa-solid fa-at me-2 text-email"></i>bpbd.sumenep@jatim.go.id</div>
      </div>
      <a href="mailto:mdews.madura@gmail.com?subject=Laporan%20Bencana&body=Nama:%0AKabupaten:%0AKecamatan:%0AJenis%20Bencana:%0ADeskripsi:" class="btn-channel btn-email">
        <i class="fa-solid fa-envelope me-2"></i>Kirim Email
      </a>
    </div>
  </div>

  <!-- Call Center -->
  <div class="col-md-6 col-lg-4">
    <div class="channel-card channel-phone h-100">
      <div class="channel-icon-wrap bg-phone">
        <i class="fa-solid fa-phone-volume"></i>
      </div>
      <h5 class="channel-title">Call Center BPBD</h5>
      <p class="channel-desc">Hubungi langsung hotline darurat BPBD yang beroperasi 24 jam untuk situasi mendesak yang membutuhkan respons cepat.</p>
      <div class="channel-info-box mb-3">
        <div class="info-row d-flex align-items-center gap-2">
          <i class="fa-solid fa-phone text-phone"></i>
          <span class="fw-bold fs-5 text-awas">117 <small class="fs-6 fw-normal text-muted">(BNPB Nasional)</small></span>
        </div>
        <div class="info-row"><i class="fa-solid fa-phone me-2 text-phone"></i>Bangkalan: (031) 3095-1234</div>
        <div class="info-row"><i class="fa-solid fa-phone me-2 text-phone"></i>Sampang: (0323) 321-5678</div>
      </div>
      <a href="tel:117" class="btn-channel btn-phone">
        <i class="fa-solid fa-phone me-2"></i>Hubungi Sekarang
      </a>
    </div>
  </div>

  <!-- SMS Channel -->
  <div class="col-md-6 col-lg-4">
    <div class="channel-card channel-sms h-100">
      <div class="channel-icon-wrap bg-sms">
        <i class="fa-solid fa-comment-sms"></i>
      </div>
      <h5 class="channel-title">SMS Pengaduan</h5>
      <p class="channel-desc">Untuk wilayah dengan sinyal internet lemah, kirim SMS dengan format yang ditentukan ke nomor pengaduan BPBD.</p>
      <div class="channel-info-box mb-3">
        <div class="info-row fw-bold text-sms fs-6">#LAPORAN [Jenis] [Kecamatan]</div>
        <div class="info-row text-muted small">Contoh: <code>#LAPORAN BANJIR BLEGA</code></div>
        <hr class="my-2">
        <div class="info-row"><i class="fa-solid fa-sim-card me-2 text-sms"></i>Kirim ke: <strong>1717</strong></div>
        <div class="info-row text-muted small">Tersedia di seluruh operator Indonesia</div>
      </div>
      <a href="sms:1717?body=%23LAPORAN%20" class="btn-channel btn-sms">
        <i class="fa-solid fa-comment-sms me-2"></i>Kirim SMS
      </a>
    </div>
  </div>



</div>

<!-- Divider -->
<div class="section-divider mb-5">
  <span class="section-divider-text"><i class="fa-solid fa-file-alt me-2"></i>FORMULIR LAPORAN ONLINE</span>
</div>

<!-- Online Form Section -->
<div class="row justify-content-center mb-5" id="formLaporan">
  <div class="col-lg-8">
    <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
      <div class="card-header bg-brand text-white py-3">
        <h5 class="mb-0 fw-bold"><i class="fa-solid fa-file-circle-plus me-2"></i>Formulir Laporan Kejadian</h5>
      </div>
      <div class="card-body p-4">

        <!-- Alert Info -->
        <div class="alert alert-info d-flex align-items-start gap-3 mb-4" role="alert">
          <i class="fa-solid fa-circle-info fa-lg mt-1 flex-shrink-0"></i>
          <div>
            <strong>Panduan Pelaporan:</strong> Isi formulir seakurat mungkin. Laporan Anda akan diverifikasi oleh petugas BPBD setempat. Pastikan izinkan akses lokasi GPS untuk memudahkan petugas menemukan lokasi kejadian.
          </div>
        </div>

        <form id="formLaporanOnline" action="<?= BASE_URL; ?>/laporan/submit" method="POST" enctype="multipart/form-data">

          <div class="row g-3">
            <!-- Nama Pelapor -->
            <div class="col-md-6">
              <label for="nama_pelapor" class="form-label fw-semibold">Nama Pelapor <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Nama lengkap Anda" required>
            </div>

            <!-- Nomor HP -->
            <div class="col-md-6">
              <label for="no_hp_pelapor" class="form-label fw-semibold">Nomor WhatsApp/HP <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="no_hp_pelapor" name="no_hp_pelapor" placeholder="08xxxxxxxxxx" required>
            </div>

            <!-- Jenis Bencana -->
            <div class="col-md-6">
              <label for="jenis_bencana" class="form-label fw-semibold">Jenis Bencana <span class="text-danger">*</span></label>
              <select class="form-select" id="jenis_bencana" name="jenis_bencana_id" required>
                <option value="" selected disabled>-- Pilih Jenis Bencana --</option>
                <option value="1">🌊 Banjir</option>
                <option value="2">☀️ Kekeringan</option>
                <option value="3">🌪️ Angin Puting Beliung</option>
                <option value="4">🏚️ Gempa Bumi</option>
                <option value="5">🌊 Gelombang Tinggi / Abrasi</option>
                <option value="6">🌋 Tsunami</option>
              </select>
            </div>

            <!-- Tingkat Keparahan -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Perkiraan Tingkat Keparahan <span class="text-danger">*</span></label>
              <div class="severity-selector d-flex gap-2 flex-wrap">
                <input type="radio" class="btn-check" name="tingkat" id="tingkat_hijau" value="hijau" required>
                <label class="btn btn-outline-success" for="tingkat_hijau"><i class="fa-solid fa-circle-dot me-1"></i>Ringan</label>

                <input type="radio" class="btn-check" name="tingkat" id="tingkat_kuning" value="kuning">
                <label class="btn btn-outline-warning" for="tingkat_kuning"><i class="fa-solid fa-circle-dot me-1"></i>Sedang</label>

                <input type="radio" class="btn-check" name="tingkat" id="tingkat_oranye" value="oranye">
                <label class="btn btn-outline-danger" for="tingkat_oranye" style="--bs-btn-hover-bg: #ef6c00; --bs-btn-border-color: #ef6c00; color: #ef6c00;"><i class="fa-solid fa-circle-dot me-1"></i>Parah</label>

                <input type="radio" class="btn-check" name="tingkat" id="tingkat_merah" value="merah">
                <label class="btn btn-outline-danger" for="tingkat_merah"><i class="fa-solid fa-circle-dot me-1"></i>Sangat Parah</label>
              </div>
            </div>

            <!-- Kabupaten -->
            <div class="col-md-6">
              <label for="kabupaten" class="form-label fw-semibold">Kabupaten <span class="text-danger">*</span></label>
              <select class="form-select" id="kabupaten" name="kabupaten" required>
                <option value="" selected disabled>-- Pilih Kabupaten --</option>
                <option value="1">Bangkalan</option>
                <option value="2">Sampang</option>
                <option value="3">Pamekasan</option>
                <option value="4">Sumenep</option>
              </select>
            </div>

            <!-- Nama Lokasi -->
            <div class="col-md-6">
              <label for="nama_lokasi" class="form-label fw-semibold">Nama Desa/Kecamatan <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" placeholder="Contoh: Kec. Blega" required>
            </div>

            <!-- GPS Location -->
            <div class="col-12">
              <label class="form-label fw-semibold">Titik Lokasi GPS</label>
              <div class="gps-box p-3 rounded-3 d-flex flex-column flex-md-row align-items-md-center gap-3">
                <div class="row g-2 flex-grow-1">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude" readonly>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude" readonly>
                  </div>
                </div>
                <button type="button" class="btn btn-outline-brand flex-shrink-0" id="btnGetLocation">
                  <i class="fa-solid fa-location-crosshairs me-1"></i>Ambil Lokasi
                </button>
              </div>
              <div id="locationStatus" class="form-text mt-1"></div>
            </div>

            <!-- Deskripsi -->
            <div class="col-12">
              <label for="deskripsi" class="form-label fw-semibold">Deskripsi Kejadian <span class="text-danger">*</span></label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan kondisi bencana yang Anda lihat secara detail: sejak kapan, seberapa parah, berapa perkiraan warga terdampak, dll." required></textarea>
            </div>

            <!-- Upload Foto -->
            <div class="col-12">
              <label for="foto" class="form-label fw-semibold">Foto Kejadian</label>
              <div class="foto-upload-area" id="fotoUploadArea">
                <input type="file" class="d-none" id="foto" name="foto" accept="image/*" onchange="previewFoto(this)">
                <div id="fotoPlaceholder" onclick="document.getElementById('foto').click()">
                  <i class="fa-solid fa-cloud-arrow-up fa-3x mb-3 text-brand"></i>
                  <p class="mb-1 fw-semibold">Klik untuk upload atau seret foto di sini</p>
                  <small class="text-muted">JPG, PNG, WEBP. Maks 5MB</small>
                </div>
                <img id="fotoPreview" src="" alt="Preview Foto" class="d-none img-fluid rounded-3" style="max-height: 250px; object-fit: cover;">
              </div>
            </div>

            <!-- Submit -->
            <div class="col-12 mt-2">
              <button type="submit" class="btn btn-awas btn-lg w-100 py-3 fw-bold" id="btnSubmitLaporan">
                <i class="fa-solid fa-paper-plane me-2"></i>Kirim Laporan Sekarang
              </button>
              <p class="text-muted small text-center mt-2">
                <i class="fa-solid fa-shield-halved me-1"></i>Data Anda aman dan hanya digunakan untuk keperluan penanganan bencana.
              </p>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Custom CSS for this page -->
<style>
  .laporan-hero {
    background: linear-gradient(135deg, #106EBE 0%, #205A28 100%);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
  }
  .laporan-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='20'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
  .laporan-hero-content { position: relative; z-index: 1; color: white; }
  .laporan-hero-title { font-size: 2rem; font-weight: 800; margin-bottom: 0.75rem; }
  .laporan-hero-subtitle { font-size: 1rem; opacity: 0.9; }

  .channel-card {
    background: white;
    border-radius: 16px;
    padding: 28px 24px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.07);
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .channel-card:hover { transform: translateY(-5px); box-shadow: 0 12px 35px rgba(0,0,0,0.12); }

  .channel-icon-wrap {
    width: 64px; height: 64px;
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem; color: white;
    margin-bottom: 16px;
  }
  .bg-wa { background: #25D366; }
  .bg-tg { background: #0088CC; }
  .bg-email { background: #EA4335; }
  .bg-phone { background: #C62828; }
  .bg-sms { background: #6A1B9A; }
  .bg-form { background: #106EBE; }

  .channel-title { font-size: 1.1rem; font-weight: 700; margin-bottom: 8px; color: #1a1a2e; }
  .channel-desc { font-size: 0.875rem; color: #666; line-height: 1.6; flex-grow: 1; margin-bottom: 16px; }

  .channel-numbers, .channel-info-box { font-size: 0.85rem; }
  .channel-num-item { display: flex; align-items: center; gap: 8px; padding: 4px 0; border-bottom: 1px solid #f0f0f0; }
  .badge-kabupaten { background: #f0f4ff; color: #106EBE; font-weight: 600; font-size: 0.75rem; padding: 2px 8px; border-radius: 20px; white-space: nowrap; }
  .channel-num-link { color: #333; text-decoration: none; font-weight: 500; }
  .channel-num-link:hover { color: #25D366; }

  .info-row { padding: 3px 0; color: #555; }
  .text-tg { color: #0088CC; }
  .text-email { color: #EA4335; }
  .text-phone { color: #C62828; }
  .text-sms { color: #6A1B9A; }
  .text-aman { color: #205A28; }
  .text-awas { color: #C62828 !important; }

  .btn-channel {
    display: flex; align-items: center; justify-content: center;
    padding: 10px 20px;
    border-radius: 10px;
    font-weight: 600; font-size: 0.9rem;
    text-decoration: none;
    border: none; cursor: pointer;
    transition: all 0.2s ease;
    font-family: 'Poppins', sans-serif;
  }
  .btn-wa { background: #25D366; color: white; }
  .btn-wa:hover { background: #1ebe5c; }
  .btn-tg { background: #0088CC; color: white; }
  .btn-tg:hover { background: #0077b5; }
  .btn-email { background: #EA4335; color: white; }
  .btn-email:hover { background: #d33124; }
  .btn-phone { background: #C62828; color: white; }
  .btn-phone:hover { background: #a51f1f; }
  .btn-sms { background: #6A1B9A; color: white; }
  .btn-sms:hover { background: #5a1485; }
  .btn-form { background: #106EBE; color: white; }
  .btn-form:hover { background: #0b4f8c; }

  .section-divider { text-align: center; position: relative; }
  .section-divider::before {
    content: ''; position: absolute; top: 50%; left: 0; right: 0;
    height: 1px; background: #e0e0e0;
  }
  .section-divider-text {
    position: relative; background: var(--color-bg-neutral);
    padding: 0 20px; color: #888; font-weight: 600; font-size: 0.9rem;
    text-transform: uppercase; letter-spacing: 1px;
  }

  .gps-box { background: #f0f7ff; border: 1px dashed #106EBE; }
  .foto-upload-area {
    border: 2px dashed #ccc; border-radius: 12px; padding: 40px 20px;
    text-align: center; cursor: pointer; transition: border-color 0.2s;
  }
  .foto-upload-area:hover { border-color: #106EBE; }

  .btn-awas { background-color: #C62828; color: white; border: none; transition: background 0.2s; }
  .btn-awas:hover { background-color: #9c1f1f; color: white; }
  .btn-outline-brand { border-color: #106EBE; color: #106EBE; }
  .btn-outline-brand:hover { background: #106EBE; color: white; }
  .bg-brand { background-color: #106EBE !important; }
  .bg-awas { background-color: #C62828 !important; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {



  // GPS Geolocation
  document.getElementById('btnGetLocation').addEventListener('click', function () {
    var statusEl = document.getElementById('locationStatus');
    if (!navigator.geolocation) {
      statusEl.innerHTML = '<span class="text-danger"><i class="fa-solid fa-circle-xmark me-1"></i>Browser tidak mendukung GPS.</span>';
      return;
    }
    statusEl.innerHTML = '<span class="text-muted"><i class="fa-solid fa-spinner fa-spin me-1"></i>Mengambil lokasi...</span>';
    navigator.geolocation.getCurrentPosition(
      function (pos) {
        document.getElementById('latitude').value = pos.coords.latitude.toFixed(7);
        document.getElementById('longitude').value = pos.coords.longitude.toFixed(7);
        statusEl.innerHTML = '<span class="text-success"><i class="fa-solid fa-circle-check me-1"></i>Lokasi berhasil diambil!</span>';
      },
      function () {
        statusEl.innerHTML = '<span class="text-danger"><i class="fa-solid fa-circle-xmark me-1"></i>Gagal mengambil lokasi. Pastikan GPS aktif dan izin diberikan.</span>';
      }
    );
  });

});

// Photo Preview
function previewFoto(input) {
  var preview = document.getElementById('fotoPreview');
  var placeholder = document.getElementById('fotoPlaceholder');
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.classList.remove('d-none');
      placeholder.classList.add('d-none');
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
