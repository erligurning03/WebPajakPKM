<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\KuisLevel;
use App\Models\KuisJawaban;
use App\Models\KuisSoal;


class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kuislevels = [
            ['nama_kuis' => 'KUIS LEVEL DASAR', 'waktu_kuis' => 20],
            ['nama_kuis' => 'KUIS LEVEL MENENGAH', 'waktu_kuis' => 25],
            ['nama_kuis' => 'KUIS LEVEL AHLI', 'waktu_kuis' => 30],
        ];

        foreach ($kuislevels as $kuislevel) {
            KuisLevel::create($kuislevel);
        }

        $kuissoals = [
          //kuis level bawah

            [
                'no_soal' => 1,
                'isi_soal' => 'Apa kepanjangan DJP?',
                'jawaban_soal' => 'C',
                'pembahasan_soal' => '<p>Direktorat Jenderal Pajak adalah unit eselon satu di bawah Kementerian Keuangan Indonesia yang mempunyai tugas mengadministrasikan perpajakan di Indonesia. Dan Direktorat Jenderal Pajak mempunyai tugas merumuskan serta melaksanakan kebijakan dan standardisasi teknis di bidang perpajakan.</p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 2,
                'isi_soal' => 'Pajak adalah sebagai berikut, kecuali :',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '<p>Menurut Undang-undang Republik Indonesia Nomor 28 Tahun 2007, Pajak adalah kontribusi wajib kepada negara yang terutang oleh orang pribadi atau badan yang bersifat memaksa berdasarkan Undang-Undang, dengan tidak mendapatkan imbalan secara langsung dan digunakan untuk keperluan negara bagi sebesar-besarnya kemakmuran rakyat.</p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 3,
                'isi_soal' => 'Berikut ini adalah sumber pendapatan negara, kecuali…',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '<p>Sumber pendapatan negara adalah uang yang masuk ke kas negara dan digunakan untuk pendanaan proses pembangunan. Di Indonesia, sumber pendapatan negara dirancang dan dikelola dalam rancangan APBN (Anggaran Pendapatan dan Belanja Negara). Berdasarkan Undang-Undang No. 17 Tahun 2003 tentang Keuangan Negara, sumber pendapatan negara terbagi menjadi tiga jenis, yaitu :</p>

                <p>1. Penerimaan Negara Berupa Pajak: Pajak adalah suatu pungutan yang dikenakan pada wajib pajak yang mempunyai penghasilan atau kekayaan tertentu. Di Indonesia, sumber pendapatan negara yang utama berasal dari pajak. Jika dihitung dalam persentase, pajak menyumbang sekitar 80% dari total pendapatan negara.</p>

                <p>2. Penerimaan Negara Bukan Pajak (PNBP): PNBP adalah sumber penerimaan negara yang berasal dari seseorang atau badan tertentu atas pemanfaatan sumber daya. PNBP terdiri dari beberapa jenis, yaitu:<br>
                - Pemanfaatan Sumber Daya Alam seperti minyak dan gas<br>
                - Pendapatan Kekayaan yang Dipisahkan seperti saham dan obligasi<br>
                - Pendapatan Badan Layanan Umum, Pengelolaan Barang Milik Negara, serta Pengelolaan Dana</p>

                <p>3. Penerimaan Negara Berupa Hibah: Hibah adalah penerimaan negara yang berasal dari pihak lain yang diberikan secara sukarela dan tidak diwajibkan untuk dikembalikan.<br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 4,
                'isi_soal' => 'Berikut ini merupakan pajak yang dipungut oleh pemerintah pusat adalah…',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Pajak yang dipungut oleh pemerintah pusat adalah pajak yang dikelola oleh pemerintah pusat dan masuk ke dalam kas negara untuk digunakan sebagai APBN (Anggaran Pendapatan dan Belanja Negara). Berikut adalah beberapa jenis pajak yang termasuk pajak pusat di Indonesia :<br>
                1. Pajak Penghasilan (PPh): Pajak yang dikenakan kepada orang pribadi atau badan atas penghasilan yang diterima atau diperoleh dalam suatu Tahun Pajak.<br>
                2. Pajak Pertambahan Nilai (PPN): Pajak yang dikenakan atas penjualan barang dan jasa.<br>
                3. Pajak Penjualan atas Barang Mewah (PPnBM): Pajak yang dikenakan atas penjualan barang mewah seperti mobil, pesawat terbang, kapal laut, dan barang mewah lainnya.<br>
                4. Bea Meterai: Pajak yang dikenakan atas dokumen tertentu seperti surat perjanjian, akta, dan surat-surat lainnya.<br>
                5. Pajak Bumi dan Bangunan (PBB): Pajak yang dikenakan atas kepemilikan atau pemanfaatan suatu tanah dan bangunan.<br>
                Pajak yang dipungut oleh pemerintah pusat merupakan salah satu sumber pendapatan negara yang utama di Indonesia .Pendapatan yang diperoleh dari pajak pusat digunakan untuk membiayai belanja dan pembangunan negara seperti pembangunan jalan, sekolah, bantuan kesehatan, dan pembangunan fasilitas umum lainnya . <br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 5,
                'isi_soal' => 'Kepanjangan dari NPWP adalah…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Nomor Pokok Wajib Pajak (NPWP) adalah rangkaian nomor seri yang digunakan oleh kantor pajak untuk mengidentifikasi wajib pajak Indonesia. Setiap wajib pajak hanya diberikan satu NPWP saja. Nomor NPWP terdiri dari 15 digit angka, 9 digit angka pertama merupakan informasi kode wajib pajak, dan 6 digit terakhir merupakan informasi kode administrasi. NPWP diberikan kepada Wajib Pajak sebagai sarana dalam administrasi perpajakan yang dipergunakan sebagai tanda pengenal atau identitas diri dari Wajib Pajak dalam memenuhi hak dan kewajibannya.</p>

                <p>Wajib pajak harus memiliki NPWP jika menerima penghasilan kena pajak dari sebuah perusahaan atau pun dari usaha milik sendiri. NPWP juga diperlukan untuk melakukan seluruh aktivitas perpajakan seperti e-Filing dan bayar pajak . Selain itu, NPWP juga memiliki fungsi dan manfaat sebagai berikut :<br>
                1) Sebagai identitas Wajib Pajak<br>
                2) Sebagai sarana administrasi perpajakan<br>
                3) Menjaga ketertiban dan pengawasan dalam pembayaran pajak dan administrasi perpajakan<br>
                4) Menjadi persyaratan dalam pelayanan umum seperti pembukaan rekening koran dan pengajuan kredit di bank, pembuatan paspor, pendirian badan usaha dan lain-lain.</p>

                <p>Untuk memperoleh NPWP, wajib pajak harus registrasi terlebih dahulu. Biasanya, wajib pajak dapat meminta bantuan perusahaan tempat bekerja untuk mengurusnya, namun jika harus membuatnya sendiri, maka harus daftar NPWP online terlebih dahulu pada situs Direktorat Jenderal Pajak . Jika wajib pajak dengan sengaja tidak mendaftar atau memiliki NPWP, atau menyalahgunakan sehingga merugikan negara, maka akan dipidana paling lama 6 (enam) tahun penjara, dan didenda paling banyak 4 (empat) kali lebih besar jumlah pajak terutang yang belum atau kurang bayar.<br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 6,
                'isi_soal' => 'Setelah reformasi perpajakan pada tahun 1983, sistem perpajakan Indonesia menganut…',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '<p>Setelah reformasi perpajakan pada tahun 1983, sistem perpajakan Indonesia mengalami perubahan yang signifikan. Reformasi pajak ini dimulai dengan memperkenalkan prinsip self-assessment, menyederhanakan dan menurunkan tarif PPh, dan memberlakukan sistem perpajakan yang berlandaskan pada Pancasila dan Undang-undang Dasar . Reformasi pajak 1983 menghasilkan UU Nomor 7 tahun 1983 tentang Pajak Penghasilan (UU PPh), yang merupakan peraturan perundang-undangan pertama di Indonesia yang mengatur tentang Pajak Penghasilan setelah Indonesia merdeka.</p>

                <p>Tujuan dari reformasi perpajakan adalah untuk memberikan kepastian hukum dan keadilan dalam sistem perpajakan, serta meningkatkan penerimaan negara dari sektor perpajakan. Reformasi pajak juga bertujuan untuk memperbaiki sistem perpajakan yang sebelumnya dianggap tidak efektif dan tidak efisien. Reformasi pajak 1983 juga mencoba menjawab tuntutan dan kebutuhan rakyat tentang perlunya seperangkat peraturan perundang-undangan perpajakan secara fundamental.</p>

                <p>Beberapa perubahan yang dilakukan dalam reformasi pajak 1983 antara lain:<br>
                1) Memperkenalkan prinsip self-assessment-system<br>
                2) Menyederhanakan dan menurunkan tarif PPh<br>
                3) emberlakukan sistem perpajakan yang berlandaskan pada Pancasila dan Undang-undang Dasar 1945<br>
                4) Memperkenalkan asas sumber, jangka waktu untuk disebut wajib pajak, dan batasan penghasilan tidak kena pajak bagi wajib pajak orang pribadi<br>
                5) Memilah menjadi dua kelompok besar ketentuan perpajakan yaitu ketentuan umum dan ketentuan khusus</p>

                <p>Reformasi pajak 1983 merupakan tonggak sejarah penting dalam sistem perpajakan Indonesia, yang memberikan dampak positif bagi penerimaan negara dan kepastian hukum dalam sistem perpajakan.<br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 7,
                'isi_soal' => 'Laman yang digunakan untuk melakukan pelaporan pajak online adalah…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Laman yang digunakan untuk melakukan pelaporan pajak online adalah DJP Online, yaitu laman resmi Direktorat Jenderal Pajak yang dapat diakses melalui https://djponline.pajak.go.id/ . Untuk melakukan pelaporan pajak online, wajib pajak harus membuat akun terlebih dahulu di DJP Online. Setelah membuat akun, wajib pajak dapat melakukan login dengan memasukkan nomor NPWP atau NIK, password, dan captcha. Setelah login, wajib pajak dapat memilih menu lapor dan pilih e-filing serta buat SPT. Selanjutnya, wajib pajak dapat mengisi formulir SPT yang diberikan oleh DJP Online. Setelah selesai mengisi formulir, wajib pajak dapat mengirim SPT secara online.</p>

                <p>DJP Online juga menyediakan layanan e-Billing untuk membayar pajak secara online. Untuk melakukan pembayaran pajak online, wajib pajak dapat mengakses laman DJP Online dan login menggunakan nomor NPWP atau NIK, password, dan captcha. Setelah login, wajib pajak dapat memilih menu bayar dan pilih e-Billing. Selanjutnya, wajib pajak dapat memasukkan nomor tagihan dan jumlah yang harus dibayarkan. Setelah itu, wajib pajak dapat memilih metode pembayaran yang tersedia.</p>

                <p>Dalam melakukan pelaporan pajak online, wajib pajak harus memastikan bahwa data yang diisi sudah benar dan lengkap. Pelaporan pajak online dapat dilakukan kapan saja dan di mana saja selama 24 jam. Pelaporan pajak online juga memudahkan wajib pajak dalam memenuhi kewajiban perpajakan dan menghindari sanksi administrasi yang dikenakan oleh pihak pajak.<br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 8,
                'isi_soal' => 'Surat yang diterbitkan untuk melakukan tagihan pajak dan atau sanksi administrasi berupa bunga maupun denda adalah…',
                'jawaban_soal' => 'C',
                'pembahasan_soal' => '<p>Surat yang diterbitkan untuk melakukan tagihan pajak dan/atau sanksi administrasi berupa bunga maupun denda adalah Surat Tagihan Pajak (STP). STP diterbitkan oleh Kantor Pelayanan Pajak tempat Wajib Pajak terdaftar. STP digunakan untuk melakukan tagihan atas pajak atau sanksi administrasi berupa denda/bunga. STP diterbitkan jika terdapat kekurangan pembayaran pajak, pajak penghasilan dalam tahun berjalan yang tidak atau kurang dibayar, atau terhadap Wajib Pajak dikenakan sanksi administratif berupa denda dan/atau bunga. STP juga diterbitkan jika terdapat kesalahan dalam pembayaran pajak yang diakibatkan oleh salah tulis dan/atau salah hitung (bukan alpa atau sengaja) berdasarkan hasil penelitian oleh fiskus.</p>

                <p>Wajib pajak harus melunasi STP baik utang pajak maupun sanksi administrasi yang menyertainya sesuai nominal yang tercantum pada STP tersebut. Jangka waktu pelunasan STP adalah 1 bulan sejak penerbitan STP. Jika STP tidak dilunasi dalam jangka waktu yang ditentukan, maka akan dikenakan sanksi administrasi berupa bunga sebesar 2% per bulan dari jumlah pajak yang belum dilunasi. STP juga dapat digunakan sebagai alat yang digunakan untuk menagih pajak.</p>

                <p>Dalam menghadapi STP, wajib pajak harus memastikan bahwa data yang tercantum pada STP sudah benar dan lengkap. Jika terdapat kesalahan atau ketidaksesuaian pada STP, wajib pajak dapat mengajukan keberatan atau banding ke Kantor Pelayanan Pajak. STP merupakan salah satu produk hukum yang disiapkan oleh Direktorat Jenderal Pajak (DJP) untuk menghadapi Wajib Pajak yang tidak menunaikan kewajiban perpajakannya.<br>
                </p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 9,
                'isi_soal' => 'Orang pribadi atau badan, meliputi pembayar pajak, pemotong pajak, dan pemungut pajak, yang mempunyai hak dan kewajiban perpajakan sesuai dengan ketentuan peraturan perundang-undangan perpajakan adalah pengertian dari…',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Wajib Pajak menurut Undang-Undang KUP (Ketentuan Umum dan Tata Cara Perpajakan) adalah orang pribadi atau badan, meliputi pembayar pajak, pemotong pajak, dan pemungut pajak, yang mempunyai hak dan kewajiban perpajakan sesuai dengan ketentuan peraturan perundang-undangan perpajakan. Wajib Pajak harus mendaftarkan diri pada Kantor Direktorat Jenderal Pajak yang wilayah kerjanya meliputi tempat tinggal atau tempat kedudukan Wajib Pajak dan kepadanya diberikan Nomor Pokok Wajib Pajak (NPWP). Wajib Pajak memiliki kewajiban untuk menghitung, menyetor, dan melaporkan pajak yang terutang dalam suatu jangka waktu tertentu sebagaimana ditentukan dalam Undang-Undang KUP.</p>',
                'id_kuis' => 1
            ],
            [
                'no_soal' => 10,
                'isi_soal' => 'Yang menjadi objek Pajak Penghasilan ( PPh 21 ) adalah…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Objek Pajak Penghasilan (PPh 21) adalah penghasilan sehubungan dengan pekerjaan, jasa, atau kegiatan dengan nama dan dalam bentuk apa pun yang diterima atau diperoleh Wajib Pajak orang pribadi dalam negeri. Objek PPh 21 meliputi:<br>
                1) Penghasilan yang diterima atau diperoleh pegawai tetap berupa penghasilan yang bersifat teratur maupun tidak teratur<br>
                2) Penghasilan yang diterima atau diperoleh penerima pensiun secara teratur berupa uang pensiun atau penghasilan sejenisnya<br>
                3) Penghasilan berupa uang pesangon, uang manfaat pensiun, tunjangan hari tua, atau jaminan hari tua yang dibayarkan sekaligus, yang pembayarannya melewati jangka waktu 2 (dua) tahun sejak pegawai berhenti bekerja<br>
                4) Penghasilan Pegawai Tidak Tetap atau Tenaga Kerja Lepas, berupa upah harian, upah mingguan, upah satuan, upah borongan atau upah yang dibayarkan secara bulanan<br>
                5) Penghasilan berupa honorarium atau imbalan yang bersifat tidak teratur yang diterima atau diperoleh anggota dewan komisaris atau dewan pengawas yang tidak merangkap sebagai Pegawai Tetap pada perusahaan yang sama<br>
                6) Penghasilan berupa jasa produksi, tantiem, gratifikasi, bonus atau imbalan lain yang bersifat tidak teratur yang diterima atau diperoleh mantan pegawai<br>
                7) Penghasilan berupa penarikan dana pensiun oleh peserta program</p>

                <p>Wajib Pajak yang termasuk dalam subjek PPh 21 antara lain pegawai dengan status sebagai pegawai tetap maupun pegawai tidak tetap atau tenaga kerja lepas, penerima uang pesangon, pegawai yang pensiun, ahli waris, Wajib Pajak bukan pegawai yang menerima atau memperoleh penghasilan sehubungan dengan pemberian jasa. PPh 21 dipotong oleh pemberi penghasilan, seperti pemberi kerja, bendahara pemerintah, dana pensiun, badan, perusahaan dan penyelenggaraan kegiatan.<br>
                </p>',
                'id_kuis' => 1
            ],

            //kuis level menengah
            [
                'no_soal' => 1,
                'isi_soal' => 'Sanksi administrasi denda keterlambatan pelaporan SPT tahunan badan adalah…',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '<p>Sanksi administrasi denda keterlambatan pelaporan SPT tahunan badan adalah sebagai berikut :<br>
                1) Wajib Pajak badan yang terlambat melaporkan Surat Pemberitahuan (SPT) Tahunan Pajak Penghasilan (PPh) akan dikenakan sanksi denda sebesar <br>
                Rp 1.000.000.<br>
                2) Selain denda, Wajib Pajak badan juga akan dikenakan sanksi administrasi berupa bunga pajak yang dihitung berdasarkan suku bunga acuan Bank Indonesia (BI) sesuai dengan Undang-Undang Nomor 11 Tahun 2020 tentang Cipta Kerja dan Undang-Undang Nomor 7 Tahun 2021 tentang Harmonisasi Peraturan Perpajakan.</p>

                <p>Wajib Pajak badan harus melaporkan SPT Tahunan PPh sebelum tanggal 30 April setiap tahunnya. Jika terlambat melaporkan, maka Wajib Pajak badan akan dikenakan sanksi administrasi berupa denda dan bunga pajak. Besaran denda yang dikenakan adalah sebesar Rp 1.000.000. Selain itu, Wajib Pajak badan juga akan dikenakan sanksi administrasi berupa bunga pajak yang dihitung berdasarkan suku bunga acuan Bank Indonesia (BI) sesuai dengan Undang-Undang Nomor 11 Tahun 2020 tentang Cipta Kerja dan Undang-Undang Nomor 7 Tahun 2021 tentang Harmonisasi Peraturan Perpajakan. <br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 2,
                'isi_soal' => 'Batas waktu bagi pemotong PPh pasal 21 untuk memberikan bukti pemotongan PPh 21 atas penghasilan yang diterima atau diperoleh pegawai tetap adalah…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Batas waktu bagi pemotong PPh Pasal 21 untuk memberikan bukti pemotongan PPh 21 atas penghasilan yang diterima atau diperoleh pegawai tetap adalah paling lama satu bulan setelah tahun kalender berakhir. Contohnya, untuk tahun 2023, batas waktu pemberian bukti pemotongan PPh 21 bagi pegawai tetap adalah akhir Januari 2024. Bukti pemotongan PPh Pasal 21 bagi pegawai tetap berupa formulir 1721-A1 bagi karyawan swasta dan formulir 1721-A2 bagi pegawai negeri sipil (PNS). Pemotong PPh Pasal 21 atau pemberi kerja harus memberikan bukti pemotongan PPh Pasal 21 atas penghasilan yang diterima atau diperoleh pegawai tetap atau penerima pensiun berkala paling lama satu bulan setelah tahun kalender berakhir.</p>

                <p>Bukti pemotongan PPh Pasal 21 berfungsi sebagai bukti adanya pemotongan pajak yang dilakukan oleh pemberi penghasilan. Bukti pemotongan PPh Pasal 21 juga berfungsi sebagai syarat pelaporan SPT Tahunan PPh untuk orang pribadi yang dilakukan oleh karyawan. Ada beberapa jenis bukti pemotongan PPh Pasal 21, antara lain formulir 1721-A1 untuk pemotongan PPh Pasal 21 pada pegawai tetap, penerima pensiun, atau penerima tunjangan/jaminan hari tua berkala, formulir 1721-A2 untuk pegawai yang bekerja untuk negara, yaitu pegawai negeri sipil, anggota Tentara Nasional Indonesia (TNI), anggota Kepolisian Republik Indonesia, pejabat negara dan pensiunannya, dan formulir 1721-VI untuk pemotongan pajak atas pegawai tidak tetap atau tenaga kerja lepas.<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 3,
                'isi_soal' => 'Menurut Peraturan Pemerintah Republik Indonesia Nomor 93 Tahun 2010, Sumbangan dan/atau biaya yang tidak dapat dikurangkan sampai jumlah tertentu dari penghasilan bruto dalam rangka penghitungan penghasilan kena pajak bagi wajib pajak adalah …',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Menurut Peraturan Pemerintah Republik Indonesia Nomor 93 Tahun 2010, sumbangan dan/atau biaya yang tidak dapat dikurangkan sampai jumlah tertentu dari penghasilan bruto dalam rangka penghitungan penghasilan kena pajak bagi wajib pajak adalah :<br>
                1) Sumbangan penanggulangan bencana nasional<br>
                2) Sumbangan penelitian dan pengembangan<br>
                3) Sumbangan fasilitas pendidikan<br>
                4) Sumbangan pembinaan olahraga<br>
                5) Biaya pembangunan infrastruktur sosial<br>
                Namun, sumbangan dan/atau biaya tersebut dapat dikurangkan dari penghasilan bruto dengan syarat bahwa wajib pajak mempunyai penghasilan neto.<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 4,
                'isi_soal' => 'Yang bukan merupakan ciri ciri dari pajak adalah…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Pajak memiliki beberapa ciri-ciri yang perlu dipahami, antara lain :</p>

                <p>1) Bersifat memaksa: Pajak merupakan kewajiban bagi setiap warga negara yang harus dipenuhi sesuai dengan undang-undang yang berlaku. Pajak bersifat memaksa karena wajib pajak harus membayar pajak tanpa mendapatkan imbalan secara langsung.<br>
                2) Kontribusi wajib: Pajak merupakan kontribusi wajib dari wajib pajak ke kas negara. Setiap orang memiliki kewajiban untuk membayar pajak.<br>
                3) Tidak memperoleh balas jasa secara langsung: Wajib pajak tidak memperoleh balas jasa secara langsung dari pembayaran pajak yang dilakukan. Namun, pajak yang terkumpul dapat digunakan untuk membiayai kepentingan umum dan kesejahteraan masyarakat.<br>
                4) Diatur dalam undang-undang: Pajak diatur dalam undang-undang yang berlaku di suatu negara. Hal ini bertujuan untuk memastikan bahwa pajak yang dikenakan sesuai dengan ketentuan yang berlaku.<br>
                5) Dapat dipungut oleh pemerintah pusat maupun daerah: Pajak dapat dipungut oleh pemerintah pusat maupun daerah, tergantung pada jenis pajak yang dikenakan.<br>
                6) Dipergunakan untuk membiayai keperluan negara demi kemakmuran masyarakat: Pajak digunakan untuk membiayai keperluan negara, seperti pembangunan infrastruktur, kesehatan, dan pendidikan, demi kemakmuran masyarakat.</p>

                <p>Dengan memahami ciri-ciri pajak, diharapkan wajib pajak dapat memenuhi kewajibannya dengan tepat dan sesuai dengan ketentuan yang berlaku.<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 5,
                'isi_soal' => 'Objek pajak yang dikenai pajak final ketika diterima Orang Pribadi (OP), namun tidak bersifat final ketika diterima Badan adalah kecuali…',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '<p>Objek pajak yang dikenai pajak final ketika diterima Orang Pribadi (OP), namun tidak bersifat final ketika diterima Badan adalah sebagai berikut : <br>
                1) Bunga deposito/tabungan,<br>
                2) Diskonto Sertifikat Bank Indonesia (SBI)<br>
                3) Jasa giro dengan tarif sebesar 20%<br>
                4) PPh atas bunga obligasi (untuk OP) <br>
                5) Hadiah undian<br>
                6) Transaksi saham dan sekuritas lainnya<br>
                7) Pengalihan hak atas tanah dan/atau bangunan, tambahan kekayaan neto yang belum dikenakan pajak, penghasilan dari usaha berbasis syariah, dan imbalan jasa yang diterima oleh pemegang saham (untuk Badan).<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 6,
                'isi_soal' => 'Alasan Negara memungut pajak  menurut falsafah  hukum  yakni  Negara berhak memungut pajak  karena  Negara melindungi keselamatan jiwa, harta benda dan hak-hak rakyatnya, oleh karena  itu rakyat  harus  membayar  pajak atas jaminan perlindungan tersebut hal  ini  termasuk teori…',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Pajak merupakan iuran dari masyarakat untuk kas negara sesuai dengan undang-undang yang bisa dipaksakan tanpa mendapat timbal balik secara langsung. Negara memungut pajak karena Negara melindungi keselamatan jiwa, harta benda, dan hak-hak rakyatnya, oleh karena itu rakyat harus membayar pajak atas jaminan perlindungan tersebut. Hal ini termasuk dalam teori asuransi, di mana Negara memberikan perlindungan dan keamanan bagi rakyatnya, dan rakyat memberikan kontribusi berupa pajak untuk membiayai keperluan Negara demi kemakmuran masyarakat. Dengan membayar pajak, rakyat dapat turut serta dalam pembangunan Negara dan memperoleh manfaat dari fasilitas umum yang dibangun oleh Negara.<br>
                Teori asuransi pajak adalah teori yang menyatakan bahwa pajak merupakan bentuk asuransi sosial bagi masyarakat. Dalam teori ini, pajak dianggap sebagai iuran yang dibayarkan oleh masyarakat untuk memperoleh perlindungan dan manfaat dari Negara, seperti layanan kesehatan, pendidikan, dan infrastruktur. Dengan membayar pajak, masyarakat dapat memperoleh jaminan perlindungan dan manfaat dari Negara jika suatu saat mereka membutuhkannya. Pajak juga dianggap sebagai bentuk redistribusi kekayaan, di mana pajak yang terkumpul dapat digunakan untuk membiayai program-program sosial bagi masyarakat yang membutuhkan.</p>

                <p>Namun, teori asuransi pajak juga memiliki kritik dari beberapa pihak. Beberapa kritik menyatakan bahwa pajak tidak selalu memberikan manfaat yang sepadan dengan jumlah pajak yang dibayarkan oleh masyarakat. Selain itu, pajak juga dapat menimbulkan beban yang berat bagi masyarakat, terutama bagi mereka yang berpenghasilan rendah.</p>

                <p>Dalam prakteknya, Negara memungut pajak untuk membiayai keperluan Negara demi kemakmuran masyarakat. Pajak juga diatur dalam undang-undang yang berlaku di suatu negara dan bersifat memaksa. Oleh karena itu, wajib pajak harus memenuhi kewajibannya dengan tepat dan sesuai dengan ketentuan yang berlaku.<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 7,
                'isi_soal' => 'Fungsi pajak yang dipergunakan untuk mengatur atau mencapai tujuan tertentu dibidang ekonomi, politik, sosial, budaya, pertahanan dan keamanan seperti mengadakan perubahan tarif, memberikan pengecualian dan keringanan adalah fungsi…',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Fungsi pajak yang dipergunakan untuk mengatur atau mencapai tujuan tertentu dibidang ekonomi, politik, sosial, budaya, pertahanan dan keamanan seperti mengadakan perubahan tarif, memberikan pengecualian dan keringanan adalah fungsi regulasi. Dalam fungsi regulasi, pajak digunakan sebagai alat untuk mencapai tujuan-tujuan tertentu, seperti mendorong penyaluran dana dari dana yang tersimpan (private saving) ke bentuk investasi (public investment), mengatur pertumbuhan ekonomi, memberikan proteksi terhadap barang produksi dalam negeri, menghambat laju inflasi, mendorong ekspor, menarik serta mengatur investasi modal demi perekonomian produktif, dan lain sebagainya. Pajak juga dapat digunakan untuk memberikan keringanan pajak bagi sektor tertentu, seperti sektor usaha kecil dan menengah, atau memberikan pengecualian pajak bagi sektor tertentu yang dianggap penting bagi pembangunan nasional.</p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 8,
                'isi_soal' => 'Fiskus akan mengenakan pajak berdasarkan anggapan yang ditentukan dalam undang-undang yang selanjutnya setelah berakhirnya tahun pajak dilakukan pengenaan pajak berdasarkan keadaan yang sesungguhnya adalah... ',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Fiskus akan mengenakan pajak berdasarkan asumsi-asumsi yang ditentukan dalam undang-undang, dan setelah berakhirnya tahun pajak, pengenaan pajaknya akan menjadi berdasarkan kondisi sebenarnya.&quot; Artinya, fiskus akan membuat asumsi mengenai penghasilan dan pengeluaran wajib pajak berdasarkan undang-undang, kemudian setelah akhir tahun pajak akan merekonsiliasi pendapatan dan pengeluaran yang sebenarnya dengan asumsi yang dibuat sebelumnya. Apabila terdapat kejanggalan, maka fiskus akan menyesuaikan kewajiban perpajakannya.</p>

                <p>Penting untuk diketahui bahwa wajib pajak mempunyai kewajiban untuk melaporkan pendapatan dan pengeluarannya secara akurat dan jujur. Kegagalan untuk melakukannya dapat mengakibatkan hukuman dan denda. Oleh karena itu, wajib pajak disarankan untuk mencatat pendapatan dan pengeluarannya secara akurat sepanjang tahun untuk menghindari adanya perbedaan pada saat proses rekonsiliasi pajak.</p>

                <p>Ringkasnya, fiskus Indonesia akan mengenakan pajak berdasarkan asumsi-asumsi yang ditentukan dalam undang-undang, dan setelah berakhirnya tahun pajak, pengenaan pajaknya akan didasarkan pada kondisi sebenarnya. Wajib Pajak mempunyai kewajiban untuk melaporkan pendapatan dan pengeluarannya secara akurat dan jujur, dan jika tidak melakukan hal tersebut dapat mengakibatkan sanksi dan denda.</p>

                <p>Stelsel campuran merupakan kombinasi antara stelsel nyata dan stelsel anggapan, pada awal tahun, besarnya pajak dihitung berdasarkan suatu anggapan, kemudian pada akhir tahun besarnya pajak disesuaikan dengan keadaan yang sebenarnya. Bila besarnya pajak menurut kenyataan lebih besar dari pada pajak menurut anggapan, maka Wajib Pajak harus menambah, sebaliknya,jika lebih kecil kelebihannya dapat diterima kembali&rdquo;<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 9,
                'isi_soal' => 'Pemungutan PPN dan PPnBM di Indonesia dipungut berdasarkan UU No. 8 Tahun 1983 sebagaimana telah beberapa kali diubah terakhir menjadi…',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '<p>Pengenaan Pajak Pertambahan Nilai (PPN) dan Pajak Penjualan Barang Mewah (PPnBM) di Indonesia didasarkan pada Undang-Undang Nomor 8 Tahun 1983 yang telah beberapa kali diubah, terakhir dengan Undang-Undang Nomor 7 Tahun 2009. Namun demikian, hasil penelusuran tidak memberikan informasi perubahan peraturan terkini. Berikut beberapa poin penting terkait PPN dan PPnBM di Indonesia:</p>

                <p>1) PPN dikenakan atas penjualan barang atau jasa di Indonesia dan dibayar langsung oleh Pengusaha Kena Pajak (PKP) .<br>
                2) PPnBM merupakan pajak penjualan atas barang mewah, termasuk rumah baru tertentu, helikopter, dan kendaraan bermotor.<br>
                3) PPnBM kendaraan bermotor ditetapkan melalui PP 73/2019 sebagaimana diubah dengan PP 74/2021 yang mengubah banyak kategori pajak.<br>
                4) Pada bulan Agustus 2023, pemerintah Indonesia merumuskan insentif seperti PPN 0% untuk kendaraan listrik untuk menarik minat investor kendaraan listrik ke Indonesia. Pemerintah juga menghapuskan Pajak Penjualan Barang Mewah (PpnBM) atas impor mobil full built-up (CBU).<br>
                5) Peraturan Nomor 67/PMK.03/2020 memberikan insentif perpajakan bagi kontraktor KKS Gross Split tertentu, antara lain Pajak Pertambahan Nilai (PPN) dan Pajak Penjualan Barang Mewah (LST) tidak dipungut (PPN tidak dipungut) .</p>

                <p>Penting untuk diingat bahwa undang-undang dan kebijakan perpajakan dapat berubah seiring berjalannya waktu, dan sangatlah penting untuk selalu mengikuti perkembangan peraturan terbaru untuk memastikan kepatuhan. Wajib Pajak harus berkonsultasi dengan profesional perpajakan atau lembaga pemerintah untuk mendapatkan informasi yang akurat dan terkini mengenai undang-undang dan kebijakan perpajakan.<br>
                </p>',
                'id_kuis' => 2
            ],
            [
                'no_soal' => 10,
                'isi_soal' => 'Yang menjadi syarat penyerahan barang atau jasa dikenakan PPN, kecuali…',
                'jawaban_soal' => 'C',
                'pembahasan_soal' => '<p>Berikut persyaratan pengenaan Pajak Pertambahan Nilai (PPN) atas penyerahan barang atau jasa di Indonesia :</p>

                <p>Persyaratan penyerahan barang yang dikenakan PPN :<br>
                1) Barang yang diserahkan merupakan Barang Kena Pajak (BKP) atau Barang Kena Pajak Tidak Berwujud (JKP).<br>
                2) Penyerahan dilakukan di dalam Daerah Pabean.<br>
                3) Penyerahan dilakukan dalam rangka usaha atau pekerjaan.</p>

                <p>Persyaratan penyelenggaraan jasa yang dikenakan PPN:<br>
                1) Jasa yang diberikan merupakan Jasa Kena Pajak (JKP).<br>
                2) Penyerahan dilakukan dalam rangka usaha atau pekerjaan.</p>

                <p>BKP mengacu pada barang berwujud baik yang bergerak maupun tidak bergerak, dan barang tidak berwujud yang dikenakan pajak berdasarkan UU PPN. Semua barang dikenakan PPN, kecuali barang yang dikecualikan berdasarkan Pasal 4A ayat (2) UU PPN.</p>

                <p>JKP adalah suatu jasa yang berdasarkan suatu perjanjian atau perbuatan hukum yang menyebabkan tersedianya suatu barang, fasilitas, kemudahan, atau hak untuk dipergunakan, termasuk jasa yang dilakukan untuk menghasilkan barang atas pesanan atau permintaan dengan bahan dan petunjuk dari pemesan, yang dikenakan pajak berdasarkan UU PPN.</p>

                <p>Penting untuk diingat bahwa undang-undang dan kebijakan perpajakan dapat berubah seiring berjalannya waktu, dan sangatlah penting untuk selalu mengikuti perkembangan peraturan terbaru untuk memastikan kepatuhan. Wajib Pajak harus berkonsultasi dengan profesional perpajakan atau lembaga pemerintah untuk mendapatkan informasi yang akurat dan terkini mengenai undang-undang dan kebijakan perpajakan.<br>
                </p>',
                'id_kuis' => 2
            ],
            //Level sulit
            [
                'no_soal' => 1,
                'isi_soal' => 'Dokumen berikut yang dikenai Bea Meterai adalah.... ',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 2,
                'isi_soal' => 'Dokumen transaksi surat berharga, termasuk dokumen transaksi kontrak berjangka, dengan nama dan dalam bentuk apa pun terutang Bea Meterai pada saat…  ',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 3,
                'isi_soal' => 'Dokumen berikut yang tidak dikenai Bea Meterai adalah.... ',
                'jawaban_soal' => 'B',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 4,
                'isi_soal' => 'Pihak yang terutang atas dokumen berupa surat keterangan, surat pernyataan, atau surat lainnya yang sejenis, beserta rangkapnya adalah… ',
                'jawaban_soal' => 'C',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 5,
                'isi_soal' => 'Pihak yang terutang atas dokumen yang digunakan sebagai alat bukti di pengadilan adalah… ',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 6,
                'isi_soal' => 'Berikut ini merupakan sarana pembayaran Bea Meterai, kecuali… ',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 7,
                'isi_soal' => 'Sarana pembayaran Bea Meterai yang memerlukan izin yaitu… ',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 8,
                'isi_soal' => 'Pihak yang ditugaskan untuk mendistribusikan meterai elektronik adalah… ',
                'jawaban_soal' => 'A',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 9,
                'isi_soal' => 'Berikut adalah kondisi yang memungkinkan pembayaran Bea Meterai dengan menggunakan Surat Setoran Pajak, kecuali … ',
                'jawaban_soal' => 'D',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
            [
                'no_soal' => 10,
                'isi_soal' => 'Berikut ini merupakan jenis meterai dalam bentuk lain, kecuali… ',
                'jawaban_soal' => 'C',
                'pembahasan_soal' => '-',
                'id_kuis' => 3
            ],
        ];

        foreach ($kuissoals as $kuissoal) {
            KuisSoal::create($kuissoal);
        }

        $kuisJawabans = [
            //kuis bawah
            [
                'id_soal' => 1,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Direktorat Jenderal Penerimaan',
            ],
            [
                'id_soal' => 1,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Direktorat Jenderal Perpajakan',
            ],
            [
                'id_soal' => 1,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Direktorat Jenderal Pajak',
            ],
            [
                'id_soal' => 1,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Jenderal Perbendaharaan',
            ],
            [
                'id_soal' => 2,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Dapat dipaksakan berdasarkan Undang-undang',
            ],
            [
                'id_soal' => 2,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Kontribusi wajib warga negara',
            ],
            [
                'id_soal' => 2,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Digunakan bagi kemakmuran rakyat',
            ],
            [
                'id_soal' => 2,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Kontraprestasi langsung',
            ],

            [
                'id_soal' => 3,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Hibah',
            ],
            [
                'id_soal' => 3,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Pajak',
            ],
            [
                'id_soal' => 3,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Pajak negara bukan pajak',
            ],
            [
                'id_soal' => 3,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Penjualan Sumber daya alam',
            ],

            [
                'id_soal' => 4,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Pajak restoran',
            ],
            [
                'id_soal' => 4,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Pajak Penghasilan ( PPh )',
            ],
            [
                'id_soal' => 4,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Pajak parkir',
            ],
            [
                'id_soal' => 4,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Pajak hotel',
            ],

            [
                'id_soal' => 5,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Nomor Pokok Wajib Pajak',
            ],
            [
                'id_soal' => 5,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Nomor Pokok Wajib Pungut',
            ],
            [
                'id_soal' => 5,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Nomor Pajak Wajib Potong',
            ],
            [
                'id_soal' => 5,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Nomor Pemotongan Wajib Pajak',
            ],

            [
                'id_soal' => 6,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Hukum Pajak Formil',
            ],
            [
                'id_soal' => 6,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Hukum Pajak Materil',
            ],
            [
                'id_soal' => 6,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Official Assessment System',
            ],
            [
                'id_soal' => 6,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Self Assessment System',
            ],

            [
                'id_soal' => 7,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'https://djponline.pajak.go.id/',
            ],
            [
                'id_soal' => 7,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'ereg.pajak.go.id',
            ],
            [
                'id_soal' => 7,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'pajakonline.go.id',
            ],
            [
                'id_soal' => 7,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'onlinepajak.go.id',
            ],

            [
                'id_soal' => 8,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Surat Pemberitahuan',
            ],
            [
                'id_soal' => 8,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Surat Setoran Pajak',
            ],
            [
                'id_soal' => 8,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Surat Tagihan Pajak',
            ],
            [
                'id_soal' => 8,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Surat Ketetapan Pajak',
            ],

            [
                'id_soal' => 9,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Subjek Pajak',
            ],
            [
                'id_soal' => 9,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Wajib Pajak',
            ],
            [
                'id_soal' => 9,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Pelayanan Pajak',
            ],
            [
                'id_soal' => 9,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Objek Pajak',
            ],

            [
                'id_soal' => 10,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Penghasilan yang diterima oleh pegawai',
            ],
            [
                'id_soal' => 10,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Penjualan barang mewah',
            ],
            [
                'id_soal' => 10,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Penghasilan atas modal',
            ],
            [
                'id_soal' => 10,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Penghasilan atas bunga dan dividen',
            ],
            //kuis menengah
            [
                'id_soal' => 11,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Rp 4.500.000',
            ],
            [
                'id_soal' => 11,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Rp 3.000.000',
            ],
            [
                'id_soal' => 11,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Rp 2.000.000',
            ],
            [
                'id_soal' => 11,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Rp 1.000.000',
            ],
            [
                'id_soal' => 12,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Paling lama satu bulan setelah tahun kalender berakhir',
            ],
            [
                'id_soal' => 12,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Paling lama dua bulan setelah tahun kalender berakhir',
            ],
            [
                'id_soal' => 12,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Paling lama tiga bulan setelah tahun kalender berakhir',
            ],
            [
                'id_soal' => 12,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Paling lama empat bulan setelah tahun kalender berakhir',
            ],[
                'id_soal' => 13,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Bencana nasional. ',
            ],
            [
                'id_soal' => 13,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Kegiatan sosial.',
            ],
            [
                'id_soal' => 13,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Fasilitas pendidikan.',
            ],
            [
                'id_soal' => 13,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Pembinaan olahraga',
            ],[
                'id_soal' => 14,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Pajak sifatnya tidak  memaksa ',
            ],
            [
                'id_soal' => 14,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Pajak bersifat memaksa ',
            ],
            [
                'id_soal' => 14,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Pajak diatur didalam undang-undang',
            ],
            [
                'id_soal' => 14,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Pajak untuk membiaya keperluan negara',
            ],[
                'id_soal' => 15,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Bunga simpanan koperasi',
            ],
            [
                'id_soal' => 15,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Bunga deposito',
            ],
            [
                'id_soal' => 15,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Penghasilan persewaan tanah dan bangunan',
            ],
            [
                'id_soal' => 15,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Penghasilan pengalihan tanah atau bangunan',
            ],[
                'id_soal' => 16,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Teori Gaya Pikul',
            ],
            [
                'id_soal' => 16,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Teori Asuransi',
            ],
            [
                'id_soal' => 16,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Teori Kepentingan',
            ],
            [
                'id_soal' => 16,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Teori Asas daya beli',
            ],[
                'id_soal' => 17,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Fungsi Keuangan',
            ],
            [
                'id_soal' => 17,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Fungsi Regulasi',
            ],
            [
                'id_soal' => 17,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Fungsi Mengatur',
            ],
            [
                'id_soal' => 17,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Fungsi Controller',
            ],[
                'id_soal' => 18,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Stelsel Fictive',
            ],
            [
                'id_soal' => 18,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Stelsel Campuran ',
            ],
            [
                'id_soal' => 18,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Stelsel Simbolatifc',
            ],
            [
                'id_soal' => 18,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Stelsel Kreative',
            ],[
                'id_soal' => 19,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'UU No. 7 Tahun 2008',
            ],
            [
                'id_soal' => 19,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'UU No. 7 Tahun 2009',
            ],
            [
                'id_soal' => 19,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'UU No. 8 Tahun 2008',
            ],
            [
                'id_soal' => 19,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'UU No. 8 Tahun 2009',
            ],[
                'id_soal' => 20,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Dilakukan didalam daerah pabean',
            ],
            [
                'id_soal' => 20,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Yang diserahkan Barang Kena Pajak/ Jasa Kena Pajak',
            ],
            [
                'id_soal' => 20,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Ada unsur pengembalian',
            ],
            [
                'id_soal' => 20,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'Dalam kegiatan usaha/pekerjaan Pengusaha Kena Pajak ( PKP )',
            ],
            //kuis sulit
            [
                'id_soal' => 21,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'surat perjanjian ',
            ],
            [
                'id_soal' => 21,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'tanda bukti penerimaan uang negara dari kas negara ',
            ],
            [
                'id_soal' => 21,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'dokumen yang terkait lalu lintas orang dan barang ',
            ],
            [
                'id_soal' => 21,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'tanda terima pembayaran gaji ',
            ],
            [
                'id_soal' => 22,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'dokumen dibubuhi tanda tangan ',
            ],
            [
                'id_soal' => 22,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'dokumen digunakan di Indonesia ',
            ],
            [
                'id_soal' => 22,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'dokumen selesai dibuat ',
            ],
            [
                'id_soal' => 22,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'dokumen diserahkan kepada pihak untuk siapa dokumen tersebut dibuat ',
            ],
            [
                'id_soal' => 23,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'akta Pejabat Pembuat Akta Tanah beserta salinan dan kutipannya ',
            ],
            [
                'id_soal' => 23,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'surat gadai ',
            ],
            [
                'id_soal' => 23,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'dokumen transaksi surat berharga ',
            ],
            [
                'id_soal' => 23,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'surat pernyataan ',
            ],
            [
                'id_soal' => 24,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'pihak yang menerima dokumen ',
            ],
            [
                'id_soal' => 24,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'pihak yang menerbitkan dokumen ',
            ],
            [
                'id_soal' => 24,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'pihak yang menerima manfaat atas dokumen',
            ],
            [
                'id_soal' => 24,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'masing-masing pihak atas dokumen yang diterimanya ',
            ],
            [
                'id_soal' => 25,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'pihak yang menerima dokumen ',
            ],
            [
                'id_soal' => 25,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'pihak yang menerbitkan dokumen ',
            ],
            [
                'id_soal' => 25,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'pihak yang menerima manfaat atas dokumen ',
            ],
            [
                'id_soal' => 25,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'pihak yang mengajukan dokumen ',
            ],
            [
                'id_soal' => 26,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'kertas meterai ',
            ],
            [
                'id_soal' => 26,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'meterai tempel ',
            ],
            [
                'id_soal' => 26,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'meterai elektronik ',
            ],
            [
                'id_soal' => 26,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'meterai dalam bentuk lain yang ditetapkan oleh Menteri ',
            ],
            [
                'id_soal' => 27,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Surat Setoran Pajak ',
            ],
            [
                'id_soal' => 27,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'meterai elektronik ',
            ],
            [
                'id_soal' => 27,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'meterai dalam bentuk lain ',
            ],
            [
                'id_soal' => 27,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'meterai tempel ',
            ],
            [
                'id_soal' => 28,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'Direktorat Jenderal Pajak ',
            ],
            [
                'id_soal' => 28,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'Perusahaan Umum (Perum) Percetakan Negara Republik Indonesia ',
            ],
            [
                'id_soal' => 28,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'Perusahaan Umum (Perum) Percetakan Uang Republik Indonesia ',
            ],
            [
                'id_soal' => 28,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'PT Pos Indonesia (Persero) ',
            ],
            [
                'id_soal' => 29,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'pemeteraian kemudian dengan jumlah lebih dari 50 (lima puluh) dokumen ',
            ],
            [
                'id_soal' => 29,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'meterai tempel tidak tersedia atau tidak dapat digunakan ',
            ],
            [
                'id_soal' => 29,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'terjadi kegagalan sistem meterai elektronik ',
            ],
            [
                'id_soal' => 29,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'belum memiliki izin pembuatan meterai dalam bentuk lain ',
            ],
            [
                'id_soal' => 30,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'meterai teraan ',
            ],
            [
                'id_soal' => 30,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'meterai percetakan ',
            ],
            [
                'id_soal' => 30,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'meterai komputerisasi ',
            ],
            [
                'id_soal' => 30,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'meterai tempel ',
            ],

        ];


        foreach ($kuisJawabans as $kuisJawaban) {
            KuisJawaban::create($kuisJawaban);
        }
    }
    // DB::table('kuis_level')->insert([
    //     'nama_kuis' => 'Kuis level dasar',
    //     'waktu_kuis' => 5,
    //  ]);
}
