<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Biodiversity Monitoring Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>DKBK Monitoring System</h2>

  <!-- Pills Navigation -->
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <!-- Generate 14 Pills -->
    <script>
      const pillNames = [
        "Aktiviti / Program",
        "Polisi / Pelan",
        "Libat Urus / Kolaborasi",
        "Sijil / Pensijilan",
        "Ekosistem / Kawasan Perlindungan",
        "Sumber Kewangan / Dana",
        "Penguatkuasaan / Undang-Undang",
        "Perhutanan / Perikanan",
        "Indeks / Pencemaran",
        "Pemuliharaan / Ex Situ",
        "Pelaporan / Bursa Malaysia",
        "Pengurusan Pengetahuan / Registri",
        "Penilaian Kapasiti / Latihan",
        "Struktur Organisasi / Jawatankuasa"
      ];
      pillNames.forEach((name, index) => {
        document.write(`
          <li class="nav-item" role="presentation">
            <button class="nav-link ${index === 0 ? 'active' : ''}" id="pills-${index}-tab" data-bs-toggle="pill" data-bs-target="#pills-${index}" type="button" role="tab">${name}</button>
          </li>
        `);
      });
    </script>
  </ul>

  <!-- Pills Content -->
  <div class="tab-content" id="pills-tabContent">

    <!-- Generate Forms for 14 Categories -->
    <script>
      const formFields = [
        // 1. Aktiviti / Program
        [
          "Nama Aktiviti/Program", "Tempoh Pelaksanaan", "Lokasi", "Bilangan Peserta", "Jantina Peserta",
          "Pendanaan/Kos Aktiviti", "Penganjur", "Rakan Kolaborasi", "Status Pelaksanaan"
        ],
        // 2. Polisi / Pelan
        [
          "Nama Polisi / Garis Panduan / Pelan", "Tarikh Penggubalan", "Jenis Sektor", "Agensi Kawal Selia"
        ],
        // 3. Libat Urus / Kolaborasi
        [
          "Jenis Sesi Libat Urus", "Jenis Kumpulan Pemegang Taruh", "Bilangan Peserta", "Tarikh", "Lokasi"
        ],
        // 4. Sijil / Pensijilan
        [
          "Disijilkan / Tidak Disijilkan", "Lokasi Kawasan Pelancongan", "Skim Pensijilan"
        ],
        // 5. Ekosistem / Kawasan Perlindungan
        [
          "Lokasi Kawasan", "Keluasan Kawasan", "Tarikh Diwartakan", "Jenis Pemegang Taruh"
        ],
        // 6. Sumber Kewangan / Dana
        [
          "Sumber Dana", "Jumlah Dana", "Skop Perbelanjaan"
        ],
        // 7. Penguatkuasaan / Undang-Undang
        [
          "Nama Undang-Undang / Peraturan / Pindaan Akta", "Tarikh Penilaian Semula", "Jenis Kesalahan", "Jumlah Kes Direkodkan"
        ],
        // 8. Perhutanan / Perikanan
        [
          "Jenis Sektor Perhutanan", "Tarikh Pensijilan", "Bilangan Kolam Akuakultur", "Jumlah Hasil", "Bilangan Nelayan Berdaftar", "Data Pendaratan Ikan"
        ],
        // 9. Indeks / Pencemaran
        [
          "Indeks Pencemaran Marin / Air Tawar", "Tarikh Penerbitan", "Langkah Pengurangan", "Perincian Tindakan"
        ],
        // 10. Pemuliharaan / Ex Situ
        [
          "Nama Pelan Strategik Pemulihan", "Tarikh Pelaksanaan Pelan", "Nama Pusat Pemuliharaan", "Lokasi Penghijrahan"
        ],
        // 11. Pelaporan / Bursa Malaysia
        [
          "Nama Syarikat Melapor", "Jenis Industri", "Jumlah Dana Konservasi"
        ],
        // 12. Pengurusan Pengetahuan / Registri
        [
          "Nama Registri", "Jenis Registri - TK / Inovasi / Praktis", "Nama Prosedur / Sistem", "Status Pelaksanaan Prosedur"
        ],
        // 13. Penilaian Kapasiti / Latihan
        [
          "Pelaksanaan Penilaian Kapasiti - YA / TIDAK", "Tarikh Penilaian", "Nama Modul", "Bilangan Peserta", "Jantina Peserta", "Pendanaan / Kos Aktiviti", "Rakan Kolaborasi"
        ],
        // 14. Struktur Organisasi / Jawatankuasa
        [
          "Nama Jawatankuasa Pilihan Khas", "Jenis Sokongan", "Status Penubuhan MBC", "Tahun Penubuhan", "Senarai Jawatan Berkaitan Biodiversiti", "Bilangan Jawatan", "Nama Pasukan Petugas Khas", "Status Penubuhan Pasukan", "Tahun Penubuhan"
        ]
      ];

      formFields.forEach((fields, index) => {
        document.write(`
          <div class="tab-pane fade ${index === 0 ? 'show active' : ''}" id="pills-${index}" role="tabpanel">
            <form class="mt-3">
        `);
        fields.forEach(field => {
          document.write(`
            <div class="mb-3">
              <label class="form-label">${field}</label>
              <input type="text" class="form-control" placeholder="Masukkan ${field}">
            </div>
          `);
        });
        document.write(`
              <button type="submit" class="btn btn-primary">Hantar</button>
            </form>
          </div>
        `);
      });
    </script>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
