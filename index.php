<!-- app/views/komunitas/index.php -->

<div class="row g-4 mb-5">
  <!-- Hero Section -->
  <div class="col-12">
    <div class="card shadow-sm border-0 rounded-4 overflow-hidden" style="background: linear-gradient(135deg, #0077B6 0%, #00B4D8 100%); color: white;">
      <div class="card-body p-4 p-md-5 d-flex flex-column flex-md-row align-items-center gap-4">
        <div class="flex-grow-1">
          <span class="badge bg-warning text-dark mb-3 px-3 py-2 fs-sm rounded-pill fw-bold">
            <i class="fa-solid fa-bell me-1"></i> Notifikasi Real-Time
          </span>
          <h1 class="display-5 fw-bold mb-3">Peringatan Dini di Genggaman Anda</h1>
          <p class="lead mb-4" style="color: rgba(255,255,255,0.85);">
            Tidak perlu selalu membuka website. Bergabunglah dengan Channel Komunitas resmi kami di WhatsApp dan Telegram untuk menerima peringatan dini bencana, info cuaca ekstrem, dan arahan evakuasi langsung di smartphone Anda.
          </p>
          <div class="d-flex flex-wrap gap-3">
            <a href="#wa-channel" class="btn btn-light btn-lg rounded-pill fw-semibold text-success shadow-sm">
              <i class="fa-brands fa-whatsapp me-2"></i>Gabung WhatsApp
            </a>
            <a href="#tg-channel" class="btn btn-outline-light btn-lg rounded-pill fw-semibold">
              <i class="fa-brands fa-telegram me-2"></i>Gabung Telegram
            </a>
          </div>
        </div>
        <div class="d-none d-md-block text-center" style="min-width: 280px;">
           <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://wa.me/channel/mdews" alt="QR Code MDEWS" class="img-fluid rounded-4 shadow-lg border border-4 border-white mb-2" style="max-width: 200px;">
           <div class="small fw-semibold mt-2 opacity-75"><i class="fa-solid fa-qrcode me-1"></i>Scan untuk bergabung</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Channel Options -->
  <div class="col-md-6" id="wa-channel">
    <div class="card shadow-sm border-0 rounded-4 h-100 position-relative overflow-hidden">
      <div class="position-absolute top-0 end-0 p-3 opacity-10">
        <i class="fa-brands fa-whatsapp fa-6x"></i>
      </div>
      <div class="card-body p-4 p-lg-5">
        <div class="d-flex align-items-center gap-3 mb-4">
          <div class="icon-circle bg-success text-white shadow" style="width: 60px; height: 60px; font-size: 28px;">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div>
            <h3 class="fw-bold mb-1">WhatsApp Channel</h3>
            <span class="badge bg-success-subtle text-success border border-success-subtle">Resmi MDEWS</span>
          </div>
        </div>
        
        <p class="text-muted mb-4">
          Channel satu arah untuk informasi super cepat. Dapatkan broadcast peringatan dini (Early Warning), status siaga kebencanaan per kabupaten, dan lokasi shelter evakuasi terdekat.
        </p>

        <div class="row align-items-center mb-4 bg-light rounded-4 p-3 g-0 border">
            <div class="col-4 text-center pe-3 border-end">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=https://wa.me/channel/mdews-bangkalan" alt="WA QR" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-8 ps-3">
                <h6 class="fw-bold mb-2">Cara Bergabung:</h6>
                <ol class="small text-muted mb-0 ps-3">
                    <li class="mb-1">Buka aplikasi WhatsApp</li>
                    <li class="mb-1">Scan QR Code di samping atau klik tombol di bawah</li>
                    <li>Klik "Ikuti" (Follow) di pojok kanan atas</li>
                </ol>
            </div>
        </div>

        <a href="#" class="btn btn-success w-100 rounded-pill py-2 fw-semibold shadow-sm">
          <i class="fa-brands fa-whatsapp me-2"></i>Buka di WhatsApp
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-6" id="tg-channel">
    <div class="card shadow-sm border-0 rounded-4 h-100 position-relative overflow-hidden">
      <div class="position-absolute top-0 end-0 p-3 opacity-10">
        <i class="fa-brands fa-telegram fa-6x"></i>
      </div>
      <div class="card-body p-4 p-lg-5">
        <div class="d-flex align-items-center gap-3 mb-4">
          <div class="icon-circle text-white shadow" style="background: #229ED9; width: 60px; height: 60px; font-size: 28px;">
            <i class="fa-brands fa-telegram"></i>
          </div>
          <div>
            <h3 class="fw-bold mb-1">Telegram Group</h3>
            <span class="badge text-primary border border-primary-subtle" style="background: #e3f2fd;">Interaktif</span>
          </div>
        </div>
        
        <p class="text-muted mb-4">
          Grup interaktif tempat Anda bisa berbagi informasi kondisi lapangan, bertanya kepada petugas BPBD/Relawan, dan mendapatkan update secara real-time dari bot otomatis kami.
        </p>

        <div class="row align-items-center mb-4 bg-light rounded-4 p-3 g-0 border">
            <div class="col-4 text-center pe-3 border-end">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=https://t.me/mdews_madura" alt="TG QR" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-8 ps-3">
                <h6 class="fw-bold mb-2">Cara Bergabung:</h6>
                <ol class="small text-muted mb-0 ps-3">
                    <li class="mb-1">Buka aplikasi Telegram</li>
                    <li class="mb-1">Scan QR Code di samping atau klik tombol di bawah</li>
                    <li>Klik "Join Group" di bagian bawah</li>
                </ol>
            </div>
        </div>

        <a href="#" class="btn w-100 rounded-pill py-2 fw-semibold shadow-sm text-white" style="background: #229ED9;">
          <i class="fa-brands fa-telegram me-2"></i>Buka di Telegram
        </a>
      </div>
    </div>
  </div>

  <!-- Regional Groups -->
  <div class="col-12 mt-2">
    <h4 class="fw-bold mb-4 border-bottom pb-2"><i class="fa-solid fa-users-line me-2 text-brand"></i>Grup Relawan Regional</h4>
    <div class="row g-3">
        <!-- Bangkalan -->
        <div class="col-sm-6 col-lg-3">
            <div class="card border border-warning-subtle bg-warning-subtle rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-warning text-dark mx-auto mb-3" style="width: 50px; height: 50px;"><i class="fa-solid fa-water"></i></div>
                    <h6 class="fw-bold mb-1">Relawan Bangkalan</h6>
                    <p class="small text-muted mb-3">Fokus: Banjir Blega & Modung</p>
                    <button class="btn btn-sm btn-outline-dark rounded-pill w-100"><i class="fa-brands fa-whatsapp me-1"></i>Join Grup</button>
                </div>
            </div>
        </div>
        <!-- Sampang -->
        <div class="col-sm-6 col-lg-3">
            <div class="card border border-success-subtle bg-success-subtle rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-success text-white mx-auto mb-3" style="width: 50px; height: 50px;"><i class="fa-solid fa-wind"></i></div>
                    <h6 class="fw-bold mb-1">Relawan Sampang</h6>
                    <p class="small text-muted mb-3">Fokus: Puting Beliung</p>
                    <button class="btn btn-sm btn-outline-success rounded-pill w-100"><i class="fa-brands fa-whatsapp me-1"></i>Join Grup</button>
                </div>
            </div>
        </div>
        <!-- Pamekasan -->
        <div class="col-sm-6 col-lg-3">
            <div class="card border border-danger-subtle bg-danger-subtle rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-danger text-white mx-auto mb-3" style="width: 50px; height: 50px;"><i class="fa-solid fa-sun"></i></div>
                    <h6 class="fw-bold mb-1">Relawan Pamekasan</h6>
                    <p class="small text-muted mb-3">Fokus: Kekeringan Pantura</p>
                    <button class="btn btn-sm btn-outline-danger rounded-pill w-100"><i class="fa-brands fa-whatsapp me-1"></i>Join Grup</button>
                </div>
            </div>
        </div>
        <!-- Sumenep -->
        <div class="col-sm-6 col-lg-3">
            <div class="card border border-primary-subtle bg-primary-subtle rounded-4 h-100">
                <div class="card-body text-center p-4">
                    <div class="icon-circle bg-primary text-white mx-auto mb-3" style="width: 50px; height: 50px;"><i class="fa-solid fa-water"></i></div>
                    <h6 class="fw-bold mb-1">Relawan Sumenep</h6>
                    <p class="small text-muted mb-3">Fokus: Abrasi & Gelombang</p>
                    <button class="btn btn-sm btn-outline-primary rounded-pill w-100"><i class="fa-brands fa-whatsapp me-1"></i>Join Grup</button>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>

<style>
  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
  }
</style>
