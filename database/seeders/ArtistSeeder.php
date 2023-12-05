<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Artist::factory()
        //     ->count(20)
        //     ->create();
        
        DB::table('artists')->insert([
            [
                'nama' => 'Raden Saleh Sjarif Boestaman',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Raden_Saleh.jpg/566px-Raden_Saleh.jpg',
                'biodata' => 'Saleh Sjarif Boestaman (ER, EYD: Saleh Syarif Bustaman; Mei 1807 – 23 Februari 1880) atau dikenal sebagai Raden Saleh adalah seorang pelukis Hindia Belanda beretnis Arab-Jawa yang menjadi pionir seni modern Indonesia (saat itu Hindia Belanda). Lukisannya merupakan perpaduan Romantisisme yang sedang populer di Eropa saat itu dengan elemen-elemen yang menunjukkan latar belakang Jawa si pelukis.'
            ],
            [
                'nama' => 'Agus Djaya',
                'gambar' => 'https://greatbanyanart.com/cdn/shop/collections/Agus_Djaya_-_Budaya_1000x1000.jpg',
                'biodata' => 'Agus Djaya (nama lengkap Raden Agoes Djajasoeminta, 1 April 1913 – 24 April 1994) merupakan pelukis asal Indonesia. Di zaman pendudukan Jepang, ia direkomendasikan oleh Bung Karno untuk menjadi Ketua Pusat Kebudayaan Bagian Senirupa (1942-1945). Pada zaman revolusi kemerdekaan ia aktif sebagai Kolonel Intel dan F.P (Persiapan Lapangan). Namun, setelah kemerdekaan ia kembali aktif ke dunia seni rupa.'
            ],
            [
                'nama' => 'Fadjar Sidik',
                'gambar' => 'http://2.bp.blogspot.com/-gY04HHx-qTQ/TwmFSP-BFbI/AAAAAAAAAFk/--LDhvbVFSE/s1600/1258541029-a.jpg',
                'biodata' => 'Fadjar Sidik lahir di Surabaya, dan meninggal di rumahnya di Yogyakarta. Ia meninggalkan lukisan-lukisan yang sampai sekarang masih bisa dibilang sebagai lukisan yang sangat menginspirasi. Selama 40 tahun ia diuji untuk mempertahankan keyakinan estetik abstraknya secara kuat. Fadjar Sidik telah menjadi agen perubahan dalam lukis modern di Indonesia.'
            ],
            [
                'nama' => 'Abas Alibasyah',
                'gambar' => 'https://2.bp.blogspot.com/-al2wjhxkOLE/V52ByTAwOjI/AAAAAAAAe6M/dVm4bNF3WdYrjZx1H9XdGSX0-50Vje1GACLcB/s1600/Abas%2BAlibasyah.jpg',
                'biodata' => 'Abas lahir di Purwakarta, Jawa Barat pada 11 Maret 1926. Selain sebagai pelukis, Abas juga dikenal sebagai pendidik, pejuang serta organisatoris. Ayahnya, Hoesen Adimihardja asal Purwakarta adalah seorang pegawai pada jawatan pengairan.'
            ],
            [
                'nama' => 'Affandi Koesoema',
                'gambar' => 'https://www.infogitu.com/wp-content/uploads/2023/06/Pelukis-Maestro-Affandi.jpg',
                'biodata' => 'Affandi Koesoema (18 Mei 1907 – 23 Mei 1990) adalah seorang pelukis yang dikenal sebagai Maestro Seni Lukis Indonesia. Affandi merupakan pelukis Indonesia yang paling terkenal di dunia internasional, berkat gaya ekspresionis dan romantismenya yang khas. Pada tahun 1950-an dia banyak mengadakan pameran tunggal di India, Inggris, Eropa, dan Amerika Serikat. Affandi tergolong sebagai pelukis yang produktif karena telah melukis lebih dari 2.000 lukisan.'
            ],
            [
                'nama' => 'Dullah',
                'gambar' => 'https://www.dictio.id/uploads/db3342/original/3X/f/e/fe0a54884a80c8b99785b26669025a6fc5183785.jpg',
                'biodata' => 'Dullah (17 September 1919 – 1 Januari 1996) adalah salah satu pelukis aliran realisme ternama Indonesia. Ia adalah salah satu pelukis dan kurator seni rupa istana, semasa kepemimpinan Presiden Soekarno.Dullah lahir di Surakarta, dari keluarga dari keluarga pembatik.Ia belajar melukis dari S. Sudjojono dan Affandi, sewaktu menjadi anggota kelompok Seniman Indonesia Moeda (SIM).Semasa pendudukan Belanda di Yogyakarta, Dullah dan pelukis-pelukis muda lainnya banyak mengabadikan berbagai peristiwa perjuangan dan peperangan yang terjadi, sehingga ia juga dikenal sebagai "pelukis revolusioner".Atas rekomendasi S. Soedjono, pada masa pendudukan Jepang, Dullah pernah bergabung dengan Poetera (Poesat Tenaga Rakjat). Salah satu poster perjuangan terawal, Boeng, Ajo Boeng, menggambarkan laki-laki memutus belenggu dengan latar bendera merah putih, dilukis oleh Affandi dengan menggunakan Dullah sebagai modelnya.'
            ],
            [
                'nama' => 'Harijadi Sumadidjaja',
                'gambar' => 'http://archive.ivaa-online.org/img/artists/small/1333962809.jpg',
                'biodata' => 'Harijadi Sumadidjaja lahir di Ketawangrejo, Kutoarjo, Jawa Tengah, 25 Juli 1919. Ia seorang pelukis otodidak. Sejak tahun 1946 bergabung dengan Sanggar Seniman Masjarakat dan Seniman Indonesia Moeda (SIM) di Yogyakarta. Selama perjuangan kemerdekaan Harijadi menjadi anggota Tentara Peladjar.'
            ],
            [
                'nama' => 'I Gusti Ketut Kobot',
                'gambar' => 'http://m2indonesia.com/wp-content/uploads/2015/10/image00661.jpg',
                'biodata' => 'Semasa berumur 13 tahun, ia suka bermain di bawah pohon yang rimbun. Dipungutinya daun lebar yang berguguran. Dikumpulkan dan disobek-sobeknya dengan sebilah pisau, hingga mirip gambar wayang. Memang itu maksudnya, meskipun Kobot tak mengerti cerita wayang. Pada suatu hari seorang keturunan raja, Cokorda Oka Gambir, singgah di rumah orang tua Kobot. Bangsawan itu menemukan Wayang daun Kobot yang berserakan. Ia bertanya, siapa membuat wayang-wayang ini ? Ayah Kobot menjawab tersipu, itu mainan anak saya. Cokorda berpikir, kemudian meminta Kobot datang ke rumahnya.'
            ],
            [
                'nama' => 'I Ketut Soki',
                'gambar' => 'https://i.pinimg.com/564x/5f/9d/0e/5f9d0e944a51ef2a387d80dd10076127.jpg',
                'biodata' => 'I Ketut Soki adalah salah satu ikon di kalangan pelukis di Penestanan, Ubud, Bali. Ia lebih memilih membiarkan orang membeli lukisannya dengan harga lebih murah daripada melihatnya pulang dengan tangan kosong jika tidak punya cukup uang. Ia juga membeli lukisan dari tetangganya yang membutuhkan uang. Baginya, hubungan baik jauh lebih penting dibandingkan menimbun kekayaan.'
            ],
            [
                'nama' => 'Itji Tarmizi',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/jv/6/69/1340971159.jpg',
                'biodata' => 'Itji Tarmizi (21 Juli 1939 – 27 November 2001) adalah seorang seniman senirupa Indonesia. Lukisan Itji Tarmizi beraliran realisme-sosialis, bahkan dia dianggap salah satu maestro di aliran itu. Dia adalah salah satu pelukis pada zaman orde lama periode 1950-1960-an, di mana pada masa itu tengah berlangsung sosialisme yang gegap gempita.'
            ],
            [
                'nama' => 'Kartono Yudhokusumo',
                'gambar' => 'https://kartonopainting.files.wordpress.com/2016/09/img_0524.jpg',
                'biodata' => 'Kartono Yudhokusumo adalah seorang pelukis dekoratif. Lahir di Medan, Sumatra Utara tahun 1924 dan wafat di Bandung tahun 1957, akibat kecelakaan sepeda motor. Sejak kecil ia tumbuh dalam lingkungan kesenian. Ayahnya seorang guru seni rupa di Jawa Tengah.'
            ],
            [
                'nama' => 'Otto Djaya',
                'gambar' => 'https://silviagalikano.com/wp-content/uploads/2016/12/master-landscape_edited.jpg',
                'biodata' => 'Otto Djaya atau lengkapnya Raden Otto Djaya Suntara merupakan pelukis handal asal Indonesia yang berkarya dalam beberapa zaman: Mulai era Pemerintahan Hindia Belanda, Pendudukan Kerajaan Jepang, Revolusi Fisik, Orde Lama, Orde Baru, sampai Jaman Reformasi. Meski ia bersikeras tidak mau terjebak dalam gaya-gaya klasik manapun, Otto adalah pelukis beraliran ekpresionis. Karya-karya lukisannya digemari dan diakui hingga mancanegara. Salah satu pengkoleksi karyanya adalah Presiden Republik Indonesia pertama, Ir. Soekarno. Otto merupakan seniman lukis sekaligus pejuang kemerdekaan'
            ],
            [
                'nama' => 'Sanggar Bumi Tarung',
                'gambar' => 'https://ypkp1965.org/wp-content/uploads/2016/09/bumitarung.1-655x360.jpg',
                'biodata' => ''
            ],
            [
                'nama' => 'Basoeki Abdullah',
                'gambar' => 'https://museumbasoekiabdullah.or.id/assets/uploads/profil/2_BasGaya.jpg',
                'biodata' => 'Fransiskus Xaverius Basuki Abdullah (ejaan lama: Basoeki Abdullah; 25 Januari 1915 – 5 November 1993)[1][2] adalah salah seorang maestro pelukis Indonesia. Ia dikenal sebagai pelukis aliran realis dan naturalis. Ia pernah diangkat oleh Presiden Soekarno sebagai pelukis Istana Merdeka, Jakarta,[3] dan karya-karyanya menghiasi istana-istana negara dan kepresidenan Indonesia, di samping menjadi barang koleksi di penjuru dunia.'
            ],
            [
                'nama' => 'Trubus Soedarsono',
                'gambar' => 'https://4.bp.blogspot.com/-hXfEgLUtzVI/UHjW9gf1GaI/AAAAAAAAPL4/jkpMc8IVXno/s1600/Trubus.jpg',
                'biodata' => 'Trubus Soedarsono (lahir di Yogyakarta, 23 April 1926 - meninggal pada tanggal 11 September 1966 pada umur 40 tahun) adalah pematung dan pelukis naturalis Indonesia yang dikenal karena aliran realismenya yang sangat kuat. Trubus tidak sempat menamatkan pendidikan Sekolah Dasar (SD) karena orang tuanya yang bekerja sebagai buruh tani tidak memiliki uang yang cukup. Sejak kelas 3 SD, Trubus telah membuat dan menggambar sendiri boneka wayang yang digunakannya ketika dia menjadi dalang di acara sunatan teman-temannya. Pada masa kecilnya, Trubus mampu membuat ukiran, topeng kayu, tembem, kelana, dan kepala barongan untuk pertunjukkan tradisional jatilan atau reog. Selain mempelajari cara melukis secara otodidak semasa kecil, saat beranjak remaja Trubus juga pernah belajar kepada Affandi maupun Sindoesoedarsono Soedjojono di Jakarta pada tahun 1942-1945. Trubus diduga meninggal pada tanggal 11 September 1966 saat terjadi pembunuhan kepada orang-orang yang dicurigai berhubungan dengan komunis karena pada masa itu, Trubus sedang aktif di Pelukis Rakyat yang dekat dengan aktivitas Lembaga Kebudajaan Rakjat (Lekra) yang berada di bawah pimpinan PKI.'
            ],
            [
                'nama' => 'Sapto Hoedojo',
                'gambar' => 'https://i.pinimg.com/originals/34/76/7c/34767c9148b9a7081939400def893d19.png',
                'biodata' => 'Siapa yang tidak kenal dengan pelukis “kondang” dari Yogyakarta ini? Rambut perak, kulit hitam, menyukai kacamata warna gelap, sepatu putih, gelang plus kalung emas bermedali. Itulah pelukis Sapto Hoedojo, yang bernama lengkap Doktor Raden Mas Sapto Hoedojo FRSA (Felloe Royal School of Art), kelahiran Sala (Jawa Tengah) 6 Februari 1925.'
            ],
            [
                'nama' => 'S. Sudjojono',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/id/7/75/Sindudarsono-sudjojono.jpg',
                'biodata' => 'Sindoedarsono Soedjojono (14 Desember 1913 – 25 Maret 1985)[1] beliau merupakan pelukis legendaris di Indonesia.[2] Dengan diawali oleh Trisno Soemardjo, Sudjojono dijuluki sebagai Bapak Seni Rupa Modern Indonesia. Julukan ini diberikan kepadanya karena Sudjojono adalah seniman pertama Indonesia yang memperkenalkan modernitas seni rupa Indonesia dengan konteks kondisi faktual bangsa Indonesia. Ia memperkenalkan jiwa ketok atau "jiwa tampak" sebagai identitas seni Indonesia. Ia biasa menulis namanya dengan “S. Sudjojono”.'
            ],
            [
                'nama' => 'Suromo D. S.',
                'gambar' => 'https://d220hvstrn183r.cloudfront.net/attachment/99194531939654000266',
                'biodata' => 'Suromo Darpo Sawego adalah seorang seniman lukisan grafis asal Surakarta yang lahir pada tahun 1919. Suromo pertama kali belajar melukis dengan pelukis Pirngadie pada 1935. Kemudian ia bekerja dengan arsitek Robert Deppe yang berkecimpung dalam seni dekoratif dan keramik. Dari Robert Deppe, ia belajar melukis kaca. Karya nya terpampang menghiasi jendela-jendela bangunan penting di kota Batavia'
            ],
            [
                'nama' => 'Tatang Ganar',
                'gambar' => 'https://www.datatempo.co/cover/custom/foto/2015/06/17/r_06A05907.jpg',
                'biodata' => 'Tatang Ganar adalah seorang pelukis Modern & Kontemporer Asia Indonesia yang lahir pada tahun 1936. Karya Tatang Ganar telah beberapa kali ditawarkan di lelang, dengan harga realisasi berkisar antara 249 USD hingga 1,918 USD, tergantung pada ukuran dan media karya seninya. Sejak tahun 2010 rekor harga lelang artis ini adalah 1,918 USD untuk Pasar Burung, dijual di Masterpiece Auction - Online pada tahun 2021. Artis tersebut meninggal pada tahun 2004.'
            ],
            [
                'nama' => 'Yerie Yulanda',
                'gambar' => 'http://archive.ivaa-online.org/img/artists/small/1636621374.jpg',
                'biodata' => 'Yerie Yulanda, seniman asal Singkawang, Kalimantan Barat, yang sering terlibat dalam berbagai pameran di Kalimantan maupun di Yogyakarta. Singkawang, kota asal Yerie, memiliki satu-satunya Rumah Sakit Kusta di Kalimantan. Sementara, para penderita kusta banyak mendapat diskriminasi dan stigma negatif karena penyakitnya yang dianggap mudah menular. Kali ini, Yerie ingin melihat ulang posisi kaum disabilitas di Singkawang yang berpredikat sebagai Kota Toleransi di Indonesia, melalui proses kolaborasi penciptaan karya bersama.'
            ],
            [
                'nama' => 'Hendra Gunawan',
                'gambar' => 'https://serupa.id/wp-content/uploads/2018/10/hendra-gunawan-biografi-dan-analisis-karya-aliran-gaya.jpg',
                'biodata' => 'Hendra Gunawan lahir di Bandung, Jawa Barat, 11 Juni 1918. Dia belajar melukis dari Wahdi Sumanta (1917-1996) dan Affandi (1907-1990). Tahun 1935, Hendra bersama Sudarso (1914-2006) dan Barli Sasmitawinata (lahir 1921), bergabung dengan kedua gurunya membentuk Kelompok Lima di Bandung. Hendra juga mendukung grup teater Poesaka Soenda di Bandung, terutama sebagai pelukis dekor pada tahun 1940. Setelah kemerdekaan, Hendra terlibat dalam berdirinya organisasi Pelukis Rakyat di Yogyakarta pada tahun 1947.'
            ]
        ]);
    }
}
