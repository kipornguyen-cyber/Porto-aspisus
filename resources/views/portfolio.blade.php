<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f4ef">
    <meta name="description" content="Portofolio Aspisus, web developer yang membangun website untuk pendidikan, kesehatan mental, dan ide-ide bermakna.">
    <title>Aspisus — Web Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-paper font-sans text-ink antialiased">
    <header class="site-header sticky top-0 z-50 border-b border-ink/10 bg-paper/90 backdrop-blur-xl">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8 lg:px-12" aria-label="Navigasi utama">
            <a class="flex items-center gap-2.5 text-lg font-semibold tracking-tight" href="#home" aria-label="Aspisus, kembali ke beranda">
                <span class="grid size-9 place-items-center rounded-full bg-lime text-sm font-bold">A.</span>
                <span>aspisus<span class="text-orange">.</span></span>
            </a>

            <button class="grid size-10 place-items-center rounded-full border border-ink/15 md:hidden" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="Buka menu navigasi" data-menu-toggle>
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke-linecap="round" /></svg>
            </button>

            <div class="nav-menu hidden items-center gap-8 text-sm font-medium md:flex" id="primary-menu" data-menu>
                <a class="transition-colors hover:text-orange" href="#tentang">Tentang</a>
                <a class="transition-colors hover:text-orange" href="#karya">Karya</a>
                <a class="transition-colors hover:text-orange" href="#keahlian">Keahlian</a>
                <a class="rounded-full bg-ink px-5 py-2.5 text-white transition-colors hover:bg-orange" href="#kontak">Ayo ngobrol <span aria-hidden="true">↗</span></a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero-section relative overflow-hidden" id="home">
            <div class="mx-auto grid max-w-7xl items-center gap-12 px-5 pb-20 pt-14 sm:px-8 sm:pb-24 sm:pt-20 lg:grid-cols-[1.08fr_0.92fr] lg:gap-6 lg:px-12 lg:pb-28 lg:pt-20">
                <div class="relative z-10">
                    <p class="mb-7 inline-flex items-center gap-2 rounded-full border border-ink/10 bg-white/70 px-4 py-2 text-xs font-medium tracking-wide text-ink/70 sm:text-sm">
                        <span class="size-2 rounded-full bg-lime ring-4 ring-lime/20"></span>
                        Web developer · Indonesia
                    </p>
                    <h1 class="max-w-3xl text-[clamp(3.6rem,9vw,7.5rem)] font-semibold leading-[0.91] tracking-[-0.075em]">Web yang baik<br>terasa <span class="font-serif italic font-normal tracking-[-0.08em] text-orange">berarti.</span></h1>
                    <p class="mt-7 max-w-xl text-base leading-7 text-ink/65 sm:text-lg sm:leading-8">Halo, gue Aspisus. Gue merancang dan membangun website yang rapi, mudah dipakai, dan membantu ide baik menjangkau lebih banyak orang.</p>
                    <div class="mt-9 flex flex-wrap items-center gap-4">
                        <a class="inline-flex items-center gap-3 rounded-full bg-ink px-6 py-3.5 text-sm font-medium text-white transition-transform hover:-translate-y-0.5" href="#karya">Lihat karya <span aria-hidden="true">↓</span></a>
                        <span class="text-sm text-ink/55">Fokus di pendidikan & kesehatan mental</span>
                    </div>
                    <div class="mt-14 flex items-center gap-5 border-t border-ink/10 pt-6 sm:mt-16">
                        <div class="flex -space-x-2" aria-hidden="true"><span class="grid size-9 place-items-center rounded-full border-2 border-paper bg-lime text-xs">✳</span><span class="grid size-9 place-items-center rounded-full border-2 border-paper bg-orange text-xs text-white">⌘</span><span class="grid size-9 place-items-center rounded-full border-2 border-paper bg-ink text-xs text-white">↗</span></div>
                        <p class="text-sm leading-5 text-ink/60">Dari ide awal sampai<br><span class="font-medium text-ink">siap dipakai orang.</span></p>
                    </div>
                </div>

                <div class="portrait-stage relative mx-auto w-full max-w-[530px] lg:ml-auto lg:mr-2">
                    <div class="portrait-orbit absolute inset-[5%_3%_3%_8%] rounded-[48%_52%_45%_55%/48%_43%_57%_52%] bg-lime"></div>
                    <div class="portrait-grid absolute inset-0 rounded-[48%_52%_45%_55%/48%_43%_57%_52%]"></div>
                    <img class="portrait-image relative z-10 mx-auto block w-[88%] drop-shadow-[0_25px_30px_rgba(30,35,25,0.12)]" src="{{ asset('aspisus.png') }}" alt="Aspisus tersenyum sambil membawa buku" fetchpriority="high">
                    <div class="absolute left-0 top-[23%] z-20 -rotate-6 rounded-2xl border border-ink/10 bg-white px-4 py-3 shadow-lg shadow-ink/10 sm:left-2 sm:px-5">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-ink/45">Sedang membangun</p>
                        <p class="mt-1 text-sm font-semibold">hal yang berdampak <span class="text-orange">✳</span></p>
                    </div>
                    <div class="absolute bottom-[12%] right-0 z-20 rotate-3 rounded-2xl bg-ink px-4 py-3 text-white shadow-lg shadow-ink/15 sm:right-1 sm:px-5">
                        <p class="text-[10px] uppercase tracking-[0.18em] text-white/50">Stack favorit</p>
                        <p class="mt-1 text-sm font-medium">Laravel <span class="text-lime">·</span> UI <span class="text-lime">·</span> ☕</p>
                    </div>
                    <span class="absolute right-[9%] top-[11%] z-20 grid size-12 rotate-12 place-items-center rounded-full bg-orange text-2xl text-white shadow-lg sm:size-14" aria-hidden="true">✳</span>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 h-px w-full bg-ink/10"></div>
        </section>

        <section class="bg-ink py-5 text-paper" aria-label="Bidang yang dikerjakan">
            <div class="ticker-track mx-auto flex max-w-7xl items-center justify-center gap-7 overflow-hidden px-5 text-xs font-medium uppercase tracking-[0.2em] sm:gap-12 sm:text-sm">
                <span>Website pendidikan</span><span class="text-lime">✳</span><span>Digital yang manusiawi</span><span class="text-lime">✳</span><span>Website kesehatan mental</span>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-5 py-24 sm:px-8 sm:py-28 lg:px-12" id="tentang">
            <div class="grid gap-10 lg:grid-cols-[0.7fr_1.3fr] lg:gap-20">
                <div>
                    <p class="section-kicker"><span>01</span> — Sedikit tentang gue</p>
                    <h2 class="mt-5 max-w-sm text-4xl font-semibold leading-tight tracking-[-0.055em] sm:text-5xl">Teknologi harus terasa <span class="font-serif italic font-normal text-orange">dekat.</span></h2>
                </div>
                <div class="lg:pt-10">
                    <p class="max-w-2xl text-lg leading-8 text-ink/70">Buat gue, website bukan cuma soal tampilan. Pengalaman yang sederhana dan jelas bisa bikin belajar terasa lebih mudah, mencari bantuan terasa lebih nyaman, dan sebuah layanan lebih mudah dipercaya.</p>
                    <p class="mt-5 max-w-2xl text-base leading-7 text-ink/60">Karena itu, gue senang berkolaborasi dengan orang-orang yang ingin membawa manfaat melalui pendidikan dan kesehatan mental. Kita mulai dari kebutuhan nyata, lalu merancang solusi yang pas.</p>
                    <div class="mt-9 grid max-w-2xl gap-3 sm:grid-cols-3">
                        <div class="rounded-2xl border border-ink/10 bg-white/60 p-4"><p class="text-xl">✳</p><p class="mt-3 text-sm font-semibold">Berpusat pada pengguna</p></div>
                        <div class="rounded-2xl border border-ink/10 bg-white/60 p-4"><p class="text-xl">⌘</p><p class="mt-3 text-sm font-semibold">Rapi dari desain ke kode</p></div>
                        <div class="rounded-2xl border border-ink/10 bg-white/60 p-4"><p class="text-xl">↗</p><p class="mt-3 text-sm font-semibold">Siap bertumbuh bersama</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#ebeae3] py-24 sm:py-28" id="karya">
            <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-12">
                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                    <div><p class="section-kicker"><span>02</span> — Pilihan karya</p><h2 class="mt-5 text-4xl font-semibold tracking-[-0.055em] sm:text-6xl">Dibuat dengan <span class="font-serif italic font-normal text-orange">tujuan.</span></h2></div>
                    <p class="max-w-xs text-sm leading-6 text-ink/60">Dua ruang berbeda. Satu benang merah: membuat hal penting terasa lebih mudah diakses.</p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-2">
                    <article class="project-card overflow-hidden rounded-[1.75rem] bg-[#c8d9b5]">
                        <div class="project-art school-art relative min-h-[270px] overflow-hidden p-6 sm:min-h-[330px] sm:p-9">
                            <div class="mini-site school-site">
                                <div class="mini-site-nav"><span class="mini-site-brand"><span class="school-crest">N</span><span>SMA NUSANTARA<small>Sekolah unggul, generasi tangguh</small></span></span><div class="mini-site-links"><span>Beranda</span><span>Profil</span><span>Akademik</span><span>Info</span></div><span class="mini-site-nav-cta">Pendaftaran ↗</span></div>
                                <div class="school-hero"><div class="school-copy"><span class="mini-eyebrow"><i></i> PENERIMAAN SISWA BARU 2026</span><h4>Tumbuh jadi<br><em>generasi hebat.</em></h4><p>Temukan ruang belajar yang mendukung minat, karakter, dan masa depanmu.</p><div class="mini-site-actions"><span class="school-button">Jelajahi sekolah <b>↗</b></span><span class="school-secondary">▶ &nbsp;Lihat profil</span></div></div>
                                    <div class="school-scene" aria-hidden="true"><span class="scene-sun"></span><span class="scene-cloud cloud-one"></span><span class="scene-cloud cloud-two"></span><span class="scene-hill hill-one"></span><span class="scene-hill hill-two"></span><div class="campus-building"><span class="building-roof"></span><span class="building-face"><i></i><i></i><i></i><i></i><b></b></span></div><span class="scene-tree tree-one"></span><span class="scene-tree tree-two"></span><span class="scene-label">BELAJAR BERSAMA, BERKARYA NYATA</span></div>
                                </div>
                                <div class="school-facts"><span><b>850+</b><small>Siswa aktif</small></span><i></i><span><b>42</b><small>Guru berdedikasi</small></span><i></i><span><b>A</b><small>Akreditasi sekolah</small></span><span class="facts-note">Membentuk masa depan, mulai hari ini <b>↗</b></span></div>
                            </div>
                            <span class="absolute right-7 top-7 grid size-11 rotate-12 place-items-center rounded-full bg-[#fff4d6] text-lg">✳</span>
                            <span class="absolute bottom-6 left-7 rounded-full border border-ink/15 bg-white/65 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-widest">01 / Pendidikan</span>
                        </div>
                        <div class="p-6 sm:p-8"><div class="flex items-start justify-between gap-4"><div><p class="text-xs font-semibold uppercase tracking-[0.16em] text-ink/45">Website sekolah</p><h3 class="mt-2 text-2xl font-semibold tracking-tight">Ruang belajar digital</h3></div><span class="grid size-10 shrink-0 place-items-center rounded-full border border-ink/15 text-lg" aria-hidden="true">↗</span></div><p class="mt-4 max-w-lg text-sm leading-6 text-ink/65">Website sekolah yang merangkum informasi penting, kabar terbaru, dan aktivitas belajar dalam satu tempat yang mudah dijelajahi.</p><div class="mt-5 flex flex-wrap gap-2"><span class="project-tag">Informasi sekolah</span><span class="project-tag">Berita & kegiatan</span><span class="project-tag">Responsif</span></div></div>
                    </article>

                    <article class="project-card overflow-hidden rounded-[1.75rem] bg-[#e6c9bd]">
                        <div class="project-art therapy-art relative min-h-[270px] overflow-hidden p-6 sm:min-h-[330px] sm:p-9">
                            <div class="mini-site therapy-site">
                                <div class="mini-site-nav"><span class="mini-site-brand"><span class="therapy-crest">s.</span><span>sela psikologi<small>Tempat aman untuk bertumbuh</small></span></span><div class="mini-site-links"><span>Tentang</span><span>Layanan</span><span>Artikel</span></div><span class="therapy-nav-cta">Konsultasi ↗</span></div>
                                <div class="therapy-hero"><div class="therapy-copy"><span class="mini-eyebrow"><i></i> RUANG AMAN UNTUK CERITAMU</span><h4>Pelan-pelan,<br>kamu <em>nggak sendiri.</em></h4><p>Temani langkahmu memahami diri bersama psikolog profesional.</p><span class="therapy-button">Mulai konsultasi <b>↗</b></span><span class="therapy-assurance">Privat &nbsp;·&nbsp; Aman &nbsp;·&nbsp; Tanpa menghakimi</span></div>
                                    <div class="therapy-artwork" aria-hidden="true"><span class="therapy-sun"></span><span class="therapy-arch"></span><span class="artwork-leaf leaf-a"></span><span class="artwork-leaf leaf-b"></span><span class="artwork-leaf leaf-c"></span><span class="artwork-leaf leaf-d"></span><span class="artwork-stem"></span><span class="therapy-art-caption">kamu boleh<br>mulai dari sini</span></div>
                                </div>
                                <div class="therapy-services"><span><i>01</i><b>Konseling individual</b><small>Ruang untuk memahami diri</small></span><span><i>02</i><b>Konseling pasangan</b><small>Belajar tumbuh bersama</small></span><span class="therapy-more">Kenali layanan <b>↗</b></span></div>
                            </div>
                            <span class="absolute right-7 top-7 grid size-11 place-items-center rounded-full bg-[#fff4d6] text-xl">♡</span>
                            <span class="absolute bottom-6 left-7 rounded-full border border-ink/15 bg-white/65 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-widest">02 / Kesehatan mental</span>
                        </div>
                        <div class="p-6 sm:p-8"><div class="flex items-start justify-between gap-4"><div><p class="text-xs font-semibold uppercase tracking-[0.16em] text-ink/45">Website psikolog</p><h3 class="mt-2 text-2xl font-semibold tracking-tight">Ruang untuk didengar</h3></div><span class="grid size-10 shrink-0 place-items-center rounded-full border border-ink/15 text-lg" aria-hidden="true">↗</span></div><p class="mt-4 max-w-lg text-sm leading-6 text-ink/65">Website layanan psikolog dengan suasana yang hangat, informasi layanan yang jelas, dan perjalanan awal yang terasa nyaman.</p><div class="mt-5 flex flex-wrap gap-2"><span class="project-tag">Profil psikolog</span><span class="project-tag">Info layanan</span><span class="project-tag">Ramah pengguna</span></div></div>
                    </article>
                </div>
                <p class="mt-5 text-xs text-ink/45">Preview UI konseptual, dirancang untuk menggambarkan jenis proyek.</p>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-5 py-24 sm:px-8 sm:py-28 lg:px-12" id="keahlian">
            <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">
                <div><p class="section-kicker"><span>03</span> — Cara gue berkarya</p><h2 class="mt-5 text-4xl font-semibold leading-tight tracking-[-0.055em] sm:text-5xl">Sederhana buat pengguna. <span class="font-serif italic font-normal text-orange">Serius di proses.</span></h2><p class="mt-5 max-w-md leading-7 text-ink/60">Gue suka proses kolaboratif: ngobrol, memetakan kebutuhan, bikin solusi, lalu memoles detailnya sampai terasa pas.</p></div>
                <div class="grid gap-3 sm:grid-cols-2">
                    <div class="skill-card"><span class="skill-number">01</span><div><h3>Web development</h3><p>Membangun pengalaman web yang cepat, jelas, dan responsif.</p></div><span class="skill-symbol">⌘</span></div>
                    <div class="skill-card"><span class="skill-number">02</span><div><h3>UI implementation</h3><p>Menerjemahkan kebutuhan dan desain menjadi antarmuka yang rapi.</p></div><span class="skill-symbol">✳</span></div>
                    <div class="skill-card"><span class="skill-number">03</span><div><h3>Laravel & backend</h3><p>Menyusun fondasi aplikasi dan fitur yang mendukungnya.</p></div><span class="skill-symbol">{ }</span></div>
                    <div class="skill-card"><span class="skill-number">04</span><div><h3>Kolaborasi</h3><p>Menyamakan tujuan dan menjaga proses tetap transparan.</p></div><span class="skill-symbol">↗</span></div>
                </div>
            </div>
        </section>

        <section class="px-5 pb-16 sm:px-8 sm:pb-20 lg:px-12" id="kontak">
            <div class="contact-panel relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-ink px-6 py-12 text-paper sm:px-12 sm:py-16 lg:px-16 lg:py-20">
                <span class="absolute -right-12 -top-16 size-56 rounded-full border border-white/10 sm:right-12 sm:top-[-110px] sm:size-80" aria-hidden="true"></span><span class="absolute -right-3 -top-7 size-40 rounded-full border border-white/10 sm:right-20 sm:top-[-60px] sm:size-56" aria-hidden="true"></span>
                <div class="relative z-10 max-w-2xl"><p class="section-kicker !text-white/55"><span class="!text-lime">04</span> — Punya ide?</p><h2 class="mt-5 text-4xl font-semibold leading-tight tracking-[-0.055em] sm:text-6xl">Yuk, bikin sesuatu yang <span class="font-serif italic font-normal text-lime">berarti.</span></h2><p class="mt-5 max-w-lg text-base leading-7 text-white/65">Ceritain sedikit soal ide atau kebutuhanmu. Kita bisa mulai dari obrolan santai.</p><a class="mt-8 inline-flex items-center gap-3 rounded-full bg-lime px-6 py-3.5 text-sm font-semibold text-ink transition-transform hover:-translate-y-0.5" href="mailto:?subject=Ngobrol%20soal%20proyek%20website">Kirim email <span aria-hidden="true">↗</span></a></div>
            </div>
        </section>
    </main>

    <footer class="mx-auto flex max-w-7xl flex-col gap-3 border-t border-ink/10 px-5 py-6 text-xs text-ink/50 sm:flex-row sm:items-center sm:justify-between sm:px-8 lg:px-12">
        <p>© {{ date('Y') }} Aspisus. Dibuat dengan niat baik <span class="text-orange">♥</span></p>
        <a class="transition-colors hover:text-ink" href="#home">Kembali ke atas ↑</a>
    </footer>
</body>
</html>
