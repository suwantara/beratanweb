<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                        <div class="about-experience bg-secondary rounded">
                            @php
                                $tahun = 2000;
                                $tahun_sekarang = now()->year;
                                $tahun_pengalaman = $tahun_sekarang - $tahun;
                            @endphp
                            <h1 class="display-1 mb-0" data-toggle="counter-up">{{ $tahun_pengalaman }}</h1>
                            <small class="fs-5 fw-bold">Tahun Pengalaman</small>
                        </div>
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="img/service-1.jpg">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid rounded" src="img/service-2.jpg">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid rounded" src="img/service-3.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="section-title bg-white text-start text-primary pe-3">Tentang Kami</p>
                <h1 class="mb-4">Kenali Peternakan Sapi Kami & Sejarah Kami</h1>
                <p class="mb-4">Sejak tahun 2000, <span class="fw-bold">Beratan Dairy Farm</span> berkomitmen kuat untuk menjaga kesejahteraan sapi-sapi kami serta
                    memastikan setiap proses produksi susu sapi memenuhi standar tertinggi. Dari pemeliharaan ternak hingga pengolahan produk,
                    kami memastikan setiap langkah dilakukan dengan penuh tanggung jawab dan kehati-hatian.</p>
                <div class="row g-5 pt-2 mb-5">
                    <div class="col-sm-6">
                        <img class="img-fluid mb-4" src="img/service.png" alt="">
                        <h5 class="mb-3">Layanan Terdedikasi</h5>
                        <span>Di peternakan kami, layanan adalah prioritas utama. Kami percaya bahwa kepuasan pelanggan adalah kunci kesuksesan.</span>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid mb-4" src="img/product.png" alt="">
                        <h5 class="mb-3">Produk Organik</h5>
                        <span>Kami hanya menggunakan metode alami dalam pemeliharaan sapi dan pengolahan produk.</span>
                    </div>
                </div>
                <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('components.section.detail', ['slug' => 'sejarah']) }}">
                    Lihat Selengkapnya
                </a>

            </div>
        </div>
    </div>
</div>
<!-- About End -->
