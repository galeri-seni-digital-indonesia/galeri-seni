<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Event::factory()
        //     ->count(20)
        //     ->create();

        DB::table('events')->insert([
            [
                'nama' => 'Palita Untuk Ambon oleh Liberty Music',
                'namaPenyelenggara' => 'Galeri Indonesia Kaya',
                'lokasi' => 'Galeri Indonesia Kaya',
                'tanggal' => '2023-12-02 15:00:00',
                'gambar' => 'https://indonesiakaya.com/wp-content/uploads/2023/11/gik-24november-1.jpg',
                'deskripsi' => '<p>Pertunjukan konser seni kebudayaan Maluku ini akan menampilkan seniman-seniman berdarah Ambon untuk mereprensentasikan api atau pelita insipirasi bagi anak-anak Maluku, dan merayakan musik dalam kesederhanaan. Pada acara kali ini, penonton akan dihibur dengan lagu-lagu Ambon yang dibagi menjadi beberapa lagu yang mencerminkan kehidupan bermasyarakat di Ambon, diantaranya lagu-lagu yang menceritakan tentang hidup rantau, permainan rakyat, penghormatan kepada orang tua, dan tempat-tempat di Ambon.</p><p>Acara ini bertujuan untuk memajukan seni kebudayaan Indonesia juga untuk mengembangkan talenta-talenta muda Indonesia, agar memiliki kesadaran dan kerinduan untuk lebih mencintai seni dan budaya tanah air, dan lebih mengenal warisan budaya bangsa agar terus dikembangkan dan dilestarikan bagi kemajuan bangsa dan negara terkhusus di bidang seni dan budaya.</p><p>Liberty Music bergerak di bidang musik dan entertainment, record label, dan sebagai penglola aset musik, yang bertujuan untuk memajukan industri musik Indonesia.</p>',
                'linkEvent' => 'https://indonesiakaya.com/event/palita-untuk-ambon-oleh-liberty-music/',
            ],
            [
                'nama' => 'Musikal "Kapan Resign?"',
                'namaPenyelenggara' => 'Galeri Indonesia Kaya',
                'lokasi' => 'Galeri Indonesia Kaya',
                'tanggal' => '2023-12-03 15:00:00',
                'gambar' => 'https://indonesiakaya.com/wp-content/uploads/2023/11/musikal-kapan-resign-1.jpg',
                'deskripsi' => '<p>Melalui keberhasilan karya produksi teater original Musikal ‘Kapan Resign?’ pada tanggal 6-8 Oktober 2023, Jaksical telah mengangkat isu sosial di dunia pekerjaan dan mengajak lebih dari 1,200+ penonton untuk memandang isu-isu sosial dari perspektif yang lebih mendalam.<p></p>Dalam ritme kehidupan yang semakin kompleks, problematika di dunia pekerjaan tidak hanya mencakup tekanan dan kesehatan mental, namun juga menyentuh aspek keluarga dan ketenangan jiwa. Generasi sandwich, yang merangkap peran sebagai orang tua dan anak sekaligus, sering kali harus menghadapi tantangan luar biasa dalam menjaga keseimbangan antara karir dan tanggung jawab keluarga.<p></p>Lewat seni, musikal ini mengangkat kisah-kisah mengenai permasalahan yang banyak dialami oleh generasi sandwich dimana mereka terjebak di antara beban pekerjaan yang menuntut dan kebutuhan keluarga yang mengharukan.<p></p>Musikal ‘Kapan Resign?’ akan kembali hadir di Galeri Indonesia Kaya dan menampilkan pementasan lagu & seni teater yang akan dilakoni oleh para pemain dengan sentuhan yang sedikit berbeda. Sampai bertemu pada pementasan Musikal ‘Kapan Resign?’ di Galeri Indonesia Kaya pada hari Minggu, 3 Desember 2023 dan please #StayWaras</p>',
                'linkEvent' => 'https://indonesiakaya.com/event/musikal-kapan-resign/',
            ],
            [
                'nama' => 'Abhinaya Reksa Buwana Fest 2023',
                'namaPenyelenggara' => 'Pemerintah Jogja',
                'lokasi' => ' Kalurahan Mangunan, Bantul',
                'tanggal' => '2023-12-02 09:00:00',
                'gambar' => 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2023/11/abinaya-1.jpg',
                'deskripsi' => 'Abhinaya Reksa Buwana merupakan event tahunan yang diharapkan menjadi perekat pemersatu (sakiyeg saeko kapti) melalui bangunan sosial masyarakat antara rakyat (kawula) dan para pemimpinnya (pemerintah) bersatu padu (golong-gilig) berbagi peran menciptakan tatanan kehidupan yang harmonis antara manusia, alam dan penciptanya',
                'linkEvent' => 'https://visitingjogja.jogjaprov.go.id/40305/abhinaya-reksa-buwana-2-desember-2023/',
            ],
            [
                'nama' => 'Sumonar 2023',
                'namaPenyelenggara' => 'Sumonar Fest',
                'lokasi' => 'Galeri Museum Affandi, DI Yogyakarta',
                'tanggal' => '2024-11-25 10:00:00',
                'gambar' => 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2023/11/sumonar-1.jpg',
                'deskripsi' => 'Event  tahunan yang menghadirkan berbagai karya seni, baik lokal maupun mancanegara ',
                'linkEvent' => 'https://visitingjogja.jogjaprov.go.id/40271/sumonar-2023-25-november-5-desember-2023/',
            ],
            [
                'nama' => '18TH JOGJA-NETPAC ASIAN FILM FESTIVAL',
                'namaPenyelenggara' => 'Jaffjogja',
                'lokasi' => 'Yogyakarta',
                'tanggal' => '2024-11-25 13:00:00',
                'gambar' => 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2023/10/jogja-netpac.jpg',
                'deskripsi' => '<p>Uminescence mengedepankan pentingnya perfilman Asia yang memiliki karakteristiknya tersendiri dan terus memancarkan keindahannya ke seluruh dunia.<p></p>Dengan bangga kami persembahkan artwork artist tahun ini, Oom Leo @oomleo, yang telah mencurahkan kreativitasnya untuk membuat Official Poster edisi ke-18</p>',
                'linkEvent' => 'https://visitingjogja.jogjaprov.go.id/40117/18th-jogja-netpac-asian-film-festival-25-november-2-december-2023/',
            ],
            [
                'nama' => 'Klasika Amerta Budaya',
                'namaPenyelenggara' => 'Gending Budaya',
                'lokasi' => 'Concert Hall Taman Budaya Yogyakarta',
                'tanggal' => '2024-12-05 19:00:00',
                'gambar' => 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2023/11/gending-budaya.jpg',
                'deskripsi' => 'Gending Budaya kembali menghadirkan penampilan spektakuler dengan rangkaian pertunjukan karawitan dan tari yang akan ditampilkan oleh Mahasiswa Bisnis Perjalanan Wisata, Departemen Bahasa Seni dan Manajemen Budaya, Universitas Gadjah Mada',
                'linkEvent' => 'https://visitingjogja.jogjaprov.go.id/40220/gending-budaya-klasika-amerta-budaya-5-desember-2023/Dinas Kebudayaan DIY',
            ],
            [
                'nama' => 'KONSER SIMFONI: ÚLTIMA CARTA',
                'namaPenyelenggara' => 'Dinas Kebudayaan DIY',
                'lokasi' => 'Taman Budaya Yogyakarta',
                'tanggal' => '2024-12-02 09:00:00',
                'gambar' => 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2023/11/parade-gangsa.jpg',
                'deskripsi' => 'This concert is not just a year-end performance from Orkes Mahasiswa 2022 – 2023 period. This final performance also being the first step towards for regeneration of the next Orkes Mahasiswa management.',
                'linkEvent' => 'https://visitingjogja.jogjaprov.go.id/40279/konser-simfoni-ultima-carta-7-desember-2023/',
            ],
        ]);
    }
}
