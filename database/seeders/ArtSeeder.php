<?php

namespace Database\Seeders;

use App\Models\Art;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Art::factory()
        //     ->count(20)
        //     ->create();

        DB::table('arts')->insert([
            [
                'nama' => 'Penangkapan Pangeran Diponegoro',
                'tahun' => 1857,
                'ukuran' => '112 cm × 178 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Raden_Saleh_-_Diponegoro_arrest.jpg/640px-Raden_Saleh_-_Diponegoro_arrest.jpg',
                'deskripsi' => '<p>Penangkapan Pangeran Diponegoro (Belanda: Gevangenname van Prins Diponegoro) adalah sebuah lukisan 1857 karya Raden Saleh, yang menggambarkan ditangkapnya Pangeran Diponegoro oleh Letnan Jenderal Hendrik Merkus de Kock pada 28 Maret 1830.</p><p>Pada tahun 1829-1851, Raden Saleh, di bawah naungan pemerintah Hindia Belanda, tinggal di Eropa, di mana ia menerima pendidikan seni. Setelah kembali ke tanah airnya, dia memutuskan untuk mempraktekkan apa yang telah dia pelajari di Eropa dan dengan demikian berkontribusi pada modernisasi Jawa. Untuk gambaran yang direncanakannya, Raden Saleh memilih plot dari sejarah Jawa, yaitu penyerahan pemimpin pemberontakan Jawa dari Diponegoro kepada pasukan kolonial di bawah komando Letnan Jenderal Hendrik Mercus de Kock yang terjadi pada tahun 1830.</p><p>Diketahui keluarga Saleh mendukung Diponegoro, banyak kerabatnya ikut serta dalam pemberontakan. Menurut kritikus, sehubungan dengan ini, Saleh ingin menampilkan versinya sendiri, non-kolonial — berbeda dengan karya oleh seniman Belanda Nicolaas Pieneman dalam lukisan berjudul Penyerahan Pangeran Diponegoro kepada Jenderal De Kock (1830-1835).</p><p>Dalam lukisan kedua seniman itu, Diponegoro berdiri di sebelah de Kock di tangga sebuah rumah kolonial, dikelilingi oleh perwira Belanda dan orang Jawa yang dilucuti. Namun Saleh mengisi karyanya dengan suasana kesedihan, menggambarkan Diponegoro dan de Kock sejajar dengan latar fajar hari baru, sehingga mengisyaratkan, menurut para kritikus, pembebasan masa depan Jawa dari kolonialisme.</p><p>Saleh melukis lukisan itu pada tahun 1856-1857, setelah itu ia secara pribadi menyerahkannya kepada Raja Willem III dari Belanda. Pada tahun-tahun berikutnya, kanvas ini disimpan di Istana Het Loo, Den Haag. Pada tahun 1978, lukisan itu disumbangkan kepada pemerintah Indonesia yang sudah merdeka, setelah itu dipamerkan di Museum Nasional Indonesia dan Istana Kepresidenan di Jakarta. Karena lukisan tersebut berada dalam keadaan yang buruk, lukisan tersebut sepenuhnya direstorasi pada tahun 2013. Kini lukisan tersebut menjadi bagian dari koleksi Museum Kepresidenan.</p>',
                'sumber' => 'https://id.wikipedia.org/wiki/Penangkapan_Pangeran_Diponegoro',
                'artistId' => 1
            ],
            [
                'nama' => 'Kuda Lumping',
                'tahun' => 1950,
                'ukuran' => '106 x 150 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAgus_Djaya_Kuda_Lumping_e378417837.jpg&w=1920&q=60',
                'deskripsi' => 'Agus Djaya dikenal dengan pandangannya tentang seni rupa Timur dan berhasrat untuk menemukan ciri keindonesiaan dalam karya seni rupa. Terlihat dalam tema-tema karyanya banyak menggali akar budaya Indonesia seperti legenda, cerita rakyat, dan tari tradisional. Dalam karya "Kuda Lumping” dilukiskan seorang penari yang berdiri dalam pose menari yang terkesan dinamis, mengenakan baju loreng merah putih dan bercelana kuning menaiki kuda lumping (kuda pipih terbuat dari anyaman bambu yang diwarnai dan dihias dengan pola-pola dekoratif). Pada latar belakang tampak seorang pawang berpakaian putih biru sedang memegang Pecut. Selain itu, tampak juga penabuh gendang dan peniup terompet.',
                'sumber' => 'https://id.wikipedia.org/wiki/Penangkapan_Pangeran_Diponegoro',
                'artistId' => 2
            ],
            [
                'nama' => 'Dinamika Keruangan',
                'tahun' => 1969,
                'ukuran' => '64 x 94 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FFadjar_Sidik_Dinamika_Keruangan_2c02523cba.jpg&w=1920&q=60',
                'deskripsi' => 'Dalam lukisan “Dinamika Keruangan” ini, Fadjar Sidik menampilkan ritme-ritme bentuk dari dua gugusan elemen visual dengan dominan warna hitam dan warna kuning oker. Di sela-sela susunan bentuk terdapat bulatan-bulatan merah yang memberikan aksentuasi seluruh ritme itu, sehingga timbul klimaks ritme yang meneteskan kelegaan. Jika dalam lukisan itu terdapat bentuk bulatan dan sabit, hal itu sama sekali bukan representasi religius yang berkaitan dengan nilai simbolik bulan penuh atau bulan sabit. Demikian juga gugusan bentuk-bentuk segi empat dan geliat sulur garis hitam, bukan abstraksi bentuk ular dan serangganya yang mempunyai nilai magis simbolik.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/dinamika-keruangan',
                'artistId' => 3
            ],
            [
                'nama' => 'Garuda',
                'tahun' => 1968,
                'ukuran' => 'Kanvas',
                'mediaLukis' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAbas_Alibasyah_Garuda_cffc653694.jpg&w=1920&q=60',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAbas_Alibasyah_Garuda_cffc653694.jpg&w=1920&q=60',
                'deskripsi' => 'Dalam lukisan ini, Abas menerapkan pola dasar geometrik untuk mengabstraksikan bentuk burung garuda. Menjadi unik karena deformasi bentuk garuda telah sedemikian jauh, sehingga yang lebih penting adalah ekspresi berbagai unsur visual yang ada. Warna merah dengan gradasi ke arah violet dan oranye memberi kekuatan sebagai latar belakang yang ekspresif. Bentuk burung muncul lewat konstruksi serpihan bidang dengan warna kuning dan hijau, diikat dengan tekstur dan goresan kasar yang mencitrakan nafas primitif. Lukisan ini juga seperti karya-karya Abas dalam periode itu, dipengaruhi oleh sumbersumber visual dari berbagai patung etnis nusantara.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/garuda',
                'artistId' => 4
            ],
            [
                'nama' => 'Ibuku',
                'tahun' => 1941,
                'ukuran' => '42 x 32 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAffandi_Ibuku_82f96108c7.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini merupakan salah satu dari karya awal yang diakusisi menjadi koleksi Kementerian Pendidikan, Pengajaran, dan Kebudayaan (kini Kementerian Pendidikan dan Kebudayaan) pada tahun 1948. Affandi menampilkan kemahirannya dalam melukis potret realis di awal kariernya sebelum beralih menuju impresionisme dan ekspresionisme. Pada lukisan ini dapat kita amati sapuan kuas dan detail-detail kecil yang berhasil membentuk figur seorang ibu yang tampak berusia lanjut, menyilangkan tangan di pundaknya dengan tatapan dan raut wajah yang cenderung bersedih. Rambutnya sedikit menjuntai dan tidak tampak senyum dari bibirnya, memperlihatkan potret ini dibuat dalam pose dan sudut pandang yang natural. Affandi memiliki perhatian besar dan kecintaan kepada ibunya, ia kerap melukis sosok ibunya dalam beberpa karya lainnya seperti “Ibu di dalam Ruangan” (1949), dan “Ibu Marah” (1960).',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/ibuku',
                'artistId' => 5
            ],
            [
                'nama' => 'Berhias/Titivate',
                'tahun' => 1953,
                'ukuran' => '125 x 100 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAgus_Djaya_Potret_Diri_fde32ec0e2.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini menggambarkan figur wanita yang tampak sedang berhias sebelum memulai sebuah pertunjukan tradisional. Agus Djaya, yang juga mengetuai Persatuan Ahli-ahli Gambar Indonesia (Persagi), dikenal mendorong wacana seni rupa Timur dengan orientasi objek-objek lukisannya yang berkisar pada dunia seni pertunjukan tradisi dan arca atau relief-relief candi, seperti pada lukisan ini. Agus Djaya sendiri memulai karier melukisnya di masa perjuangan Persagi yang mencari identitas seni lukis nasional, yaitu suatu periode yang sarat dengan wacana konteks sosial. Walaupun pelukis ini tidak selalu muncul dalam wacana maupun karya tema sosial, tetapi ia tidak bisa melepaskan sama sekali dari ikatan jiwa konteks yang membentuknya itu.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/berhias',
                'artistId' => 2
            ],
            [
                'nama' => 'Istriku',
                'tahun' => 1953,
                'ukuran' => '102 x 83 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FDullah_Istriku_e135912670.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan "Istriku" ini, merupakan salah satu karya Dullah yang menunjukkan kecenderungan pada keindahan sosok-sosok wanita. Di samping perhatiannya yang kuat pada humanisme kerakyatan dan nilai-nilai lokal, Dullah memang merupakan pelukis romantis yang juga dengan setia mengabadikan nilai-nilai ideal lewat kecantikan atau juga keindahan alam seperti dalam karya-karyanya. Dullah dikenal sebagai pelukis potret yang amat menguasai teknik melukis realis.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/istriku',
                'artistId' => 6
            ],
            [
                'nama' => 'Bersimpang Jalan',
                'tahun' => 1955,
                'ukuran' => '48 x 63 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FHarijadi_Sumadidjaja_Jalan_Bersimpang_effdf23333.jpg&w=1920&q=60',
                'deskripsi' => 'Berbeda dengan karya-karya Harijadi yang dilukis dengan gaya realistik, karya “Bersimpang Jalan” ini cenderung lebih ekspresionistik. Penekanan dari goresan kuas yang lebar dan kuat, ditambah dengan pengaturan komposisi dan penempatan figur-figur, memberi kesan dramatis pada adegan yang sedang berlangsung. Tampak dua sosok dewasa berbeda jenis kelamin berjalan saling membelakangi dan masing-masing menggandeng/menuntun anak kecil. Bahkan pada sosok perempuan tersebut, selain menuntun juga sedang menggendong anak. Di belakang dua figur dewasa itu tampak dua orang anak yang saling melihat satu sama lain seakan menunjukkan keengganan untuk berpisah. Di kejauhan, batas cakrawala yang kontras antara langit yang berawan dengan hamparan tanah yang didominasi warna kecokelatan semakin menambah suasana yang kelam.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/bersimpang-jalan',
                'artistId' => 7
            ],
            [
                'nama' => 'Potret Diri',
                'tahun' => 1962,
                'ukuran' => '120 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FHarijadi_Sumadidjaja_Potret_Diri_7b92167b69.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini melanjutkan tradisi potret diri yang kerap dipraktikkan oleh pelukis Barat. Harijadi mendapatkan pendidikan melukis dari Affandi dan Sudjojono ketika bergabung dengan Keimin Bunka Shidoso pada masa pendudukan Jepang, sehingga pengetahuan mengenai lukisan potret diri didapatkan dari kedua gurunya tersebut.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/harijadi-sumadidjaja-potret-diri',
                'artistId' => 7
            ],
            [
                'nama' => 'Gerhana (Dewa Ratih)',
                'tahun' => 1965,
                'ukuran' => '88 x 58,5 cm',
                'mediaLukis' => 'Kain',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FI_Gusti_Ketut_Kobot_Gerhana_Dewa_Ratih_fd79fc4f73.jpg&w=1920&q=60',
                'deskripsi' => 'Karya ini melukiskan simbolik nilai cinta yang dimakan oleh Sang Kala (waktu). Kobot sangat piawai dalam memainkan komposisi untuk menciptakan ritme dalam lukisannya. Warnawarna yang dipakai adalah warnawarna lembut dengan figurfigur dalam gaya yang distilir. Kobot mempopulerkan gaya dekoratifnya yang sangat khas. Ciri yang selalu muncul adalah warnawarna pastel dengan figurfigur memenuhi bidang gambar, yang terdiri dari tumbuhan, bunga, binatang, burung, dan serangga.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/gerhana-dewa-ratih',
                'artistId' => 8
            ],
            [
                'nama' => 'Legenda Jayaprana',
                'tahun' => 1965,
                'ukuran' => '88 x 58,5 cm',
                'mediaLukis' => 'Kain',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FI_Ketut_Soki_Legenda_Jayaprana_fe88a3d942.jpg&w=1920&q=60',
                'deskripsi' => 'Karya ini merupakan salah satu kecenderungan karya young artist, gelombang perupa muda Bali yang belajar melukis kepada pelukis Belanda Arie Smit. Dalam gaya ini yang mejadi ciri visual adalah ungkapan dekoratif naif bentukbentuk dan warnanya cerah dan kaya. Lukisan ini menampilkan sebuah kisah klasik Jayaprana dan Layon Sari yang berada dalam tragedi cinta dan kesetiaan pada penguasa. Dalam lukisan tampak Layon Sari dalam pelukan Sang Raja, sementara Jayaprana diutus berangkat perang dan dibunuh dalam pengkhianatan raja. Di langit terlihat Ratih dan Kamanjaya dengan atribut payung kebesarannya menyaksikan tragedi cinta tersebut.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/legenda-jayaprana',
                'artistId' => 9
            ],
            [
                'nama' => 'Anak dan Burung',
                'tahun' => 1958,
                'ukuran' => '122 x 71 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FItji_Tarmidzi_Anak_Burung_201c76c349.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini merefleksikan kecintaan yang dalam seorang anak dengan peliharaannya. Itji yang dikenal sebagai pelukis penganut estetika kerakyatan yang tertarik dengan tema-tema keseharian dan human interest. Walaupun cenderung masih impresionistik, dalam perkembangannya, Itji melukis dengan teknik realis dan terlihat sangat menguasai penggunaan cahaya dan detail anatomi tubuh manusia.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/anak-dan-burung',
                'artistId' => 10
            ],
            [
                'nama' => 'Bandung',
                'tahun' => 1952,
                'ukuran' => '55 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FKartono_Yudhokusumo_Bandung_5e10400614.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini mengungkap romantisisme pelukis dalam membayangkan dunia yang utuh dan ideal. Wanita-wanita yang berkebaya yang bercengkerama dan berkasihan, menjadi bagian penting di antara pohon-pohon dan binatang dalam taman yang penuh warna. Hal menarik lainnya, pada sudut depan terlihat seorang laki-laki melukis seorang model wanita dengan pakaian lebih modern di antara kerumunan wanita lain dalam pakaian kebaya. Selain hal itu menunjukkan setting sosial yang berkaitan dengan gaya hidup, juga bisa menjelaskan romantisisme pada pelukisnya. Dalam bawah sadarnya seorang romantis selalu ingin menghadirkan dunia ideal dari kontradiksi atau berbagai kenyataan yang terpecah-pecah. Besar kemungkinan tokoh sentral dalam karya-karyanya adalah manifestasi dunia ide yang dimunculkan. Namun demikian dalam kebanyakan genre corak dekoratif, ada kesadaran bahwa alam adalah kosmos dan manusia hanya merupakan setitik bagian dari padanya, oleh karena itu, dalam lukisan ini ego sang pelukis yang begitu ideal pun hanya diletakkan dalam bagian kecil, dari sudut lukisan yang sarat dengan objek dan kaya warna.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/bandung',
                'artistId' => 11
            ],
            [
                'nama' => 'Pertemuan',
                'tahun' => 1947,
                'ukuran' => '65 x 88 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FOtto_Dja_Pertemuan_2423f089bb.jpg&w=1920&q=60',
                'deskripsi' => 'Karya lukisan ini dapat ditafsirkan dengan berbagai interpretasi. Hal itu karena secara tekstual objekobjeknya mengandung potensi narasi yang multiinterpretatif, yaitu lakilaki dan perempuan duduk di depan ranjang. Gestur tubuh pasangan ini bisa mengisyaratkan komunikasi yang berisi keintiman, bisa juga konflik, sekaligus humor. Setting ini bisa terjadi dalam kehidupan rumah tangga, dalam hubungan percintaan di luar rumah, atau bahkan dari indikator visualnya bisa mengarah pada potret sebuah bordil di tahun 1940an.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/pertemuan',
                'artistId' => 12
            ],
            [
                'nama' => 'Wayang Golek',
                'tahun' => 1954,
                'ukuran' => '50 x 98 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FOtto_Djaya_Wayang_Golek_482f2662a0.jpg&w=1920&q=60',
                'deskripsi' => 'Otto Djaya melukis dengan gaya yang berbeda dan khas dalam mengeksplorasi serta mengekspresikan kehidupan keseharian seperti tema pasar, warung, perayaan pernikahan, pertunjukan tradisonal, dan lain-lain. Lukisan Otto bersifat naratif seperti dalam karya ini yang menggambarkan suasana pertunjukan wayang golek. Terlihat seorang dalang yang sedang memainkan wayang, didampingi para penabuh gamelan dan sinden. Adegan kemeriahan itu dihadirkan Otto dengan kesan jenaka.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/wayang-golek',
                'artistId' => 12
            ],
            [
                'nama' => 'Diskusi di Sanggar Bumi Tarung',
                'tahun' => 2008,
                'ukuran' => '200 x 400 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FOtto_Djaya_Wayang_Golek_482f2662a0.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan potret kolektif ini dikerjakan pasca perhelatan Pameran Bersama Sanggar Bumi Tarung yang kedua pada 19 – 29 Juli 2008 di Galeri Nasional Indonesia. Kala itu setelah acara, Misbach Tamrin dan Amrus Natalsya singgah di Mess Galeri Nasional Indonesia, personil lainnya datang lalu bersama-sama melukis karya lukisan Diskusi di Sanggar Bumi Tarung. Sebelumnya karya serupa pernah dibuat oleh Misbach Tamrin dengan judul "Diskusi dalam Sanggar Bumi Tarung". Karya ini diyakini bernilai historis yang sangat kuat, ditandai anggota-anggota Sanggar Bumi Tarung tergambarkan sedang berdiskusi dengan rasa kekeluargaan, keakraban dan kehangatan, digarap dengan gaya realis. Terlihat detail-detail dalam lukisan yang menegaskan keberpihakan Sanggar Bumi Tarung kepada gerakan rakyat, misalnya buku Pramoedya Ananta Toer yang tergeletak di meja, lukisan celeng (babi hutan) khas Joko Pekik tergantung di dinding, dan suasana keseharian rakyat jelata yang tergambar di balik jendela. Sanggar Bumi Tarung berdiri pada Tahun 1962 dalam lingkungan Kampus ASRI Yogyakarta oleh sekelompok seniman muda ASRI. Mereka juga bagian dari Lembaga Kebudayaan Rakyat (LEKRA). Dapat dikatakan keberadaan LEKRA sejalan dengan semangat Bumi Tarung. Peristiwa 1965 membuat Sanggar Bumi Tarung berusia cukup pendek, meskipun begitu gaung karya-karya Sanggar Bumi Tarung masih tetap mengisi sejarah dan perkembangan seni rupa hingga saat ini.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/diskusi-di-sanggar-bumi-tarung',
                'artistId' => 13
            ],
            [
                'nama' => 'Kakak dan Adik',
                'tahun' => 1978,
                'ukuran' => '65 x 79 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FBasuki_Abdullah_Kakak_dan_Adik2_67a5e8b1cb.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan Basuki Abdullah dengan judul Kakak dan Adik, yang dilukis pada 1978 ini merupakan salah satu karyanya yang menunjukan kekuatan penguasaan teknik realis. Dengan sorot pencahayaan dari samping, figur kakak dan adik yang dalam gendongan terasa mengandung ritme drama kehidupan yang “berat”. Namun tatapan sang kakak berkata pengorbanan dan cinta kasih membuat langkah kedepan menjadi lebih “ringan”. Basuki Abdullah dengan penguasaannya mencipta proporsi dan anatomi, menggambarkan gerak tubuh mereka yang mengalunkan perjalanan sunyi. Suasana demikian, seperti ekspresi wajah mereka yang jernih tetapi matanya memelas menatap kosong. Apalagi dengan pakaian mereka yang bersahaja dan berwarna gelap, sosok kakak beradik ini dalam selubung keharuan. Latar belakang dengan warna cokelat gelap pada bagian atas, perlahan kebawah membawa gradasi menuju warna terang menambahkan kesan bahwa kondisi sulit yang dialami perlahan diimbangi langkah penerang (sebuah solusi). Dari berbagai fakta tekstual ini, Basuki Abdullah ingin mengungkapkan empatinya pada kasih sayang dan kemanusiaan. Dalam kenyataannya estetika Basuki Abdullah yang didukung kemampuan teknik akademis yang tinggi menjadikannya sebagai pelukis besar Indonesia.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/kakak-dan-adik',
                'artistId' => 14
            ],
            [
                'nama' => 'Dunia Anjing',
                'tahun' => 1965,
                'ukuran' => '45 x 70 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FAgus_Djaya_Dunia_Anjing2_ceb919614e.jpg&w=1920&q=60',
                'deskripsi' => 'Karya –karya Agus Djaya mengolah tema-tema dengan pesan yang keras dan mengkritik, Kuda Lumping dan Dunia Anjing termasuk karya Agus Djaya dengan visualisasi yang dapat disebut tak lazim pada saat itu. Lukisan Dunia Anjing menggambarkan situasi sosial-politik pada tahun 1965, tahun-tahun penuh guncangan. Tervisualisasikan puluhan ekor anjing dengan ragam warnanya, ada anjing merah, hitam, coklat, dan putih, diantara anjing-anjing tersebut ada tiga ekor anjing jantan yang sedang berkelahi. Anjing yang ditengah direbut oleh anjing yang dibelakang maupun di depan, nampak anjing yang di depan tersungkur. Pewarnaan di dalam lukisan ini mempergunakan warna-warna yang cukup berani dan menonjol melalui penggunaan warna merah, hitam, dan kuning. Hal itu diibaratkan seperti kehidupan kawanan anjing; berkelahi, saling mencakar, menggongong, rakut, tak jelas mana kawan, mana lawan, berebut kekuasaan dan krisis kepentingan. Di samping itu, warna, tekstur, dan goresan yang membangun lukisan ini memperlihatkan kekontrasan yang dinamis. Dibuat pada 1965, Dunia Anjing merupakan sebuah metafora simbolis tentang disintegrasi sosial-politik pada masa itu, dan bukti dari kepekaan Agus Djaja terhadap persoalan sosial. Karena perbedaan warna “bulu” (ideologi), sesama saudara saling hantam, mengakibatkan kekacauan sosial dan warisan kekerasan yang masih terasa bertahun-tahun setelahnya. Karya ini memancarkan karakter yang keras, karena sosok-sosok anjing muncul dalam dinamika gerakan dan ekspresi kemarahan. Agus Djaya adalah pelukis dari masa Persagi, yaitu suatu periode yang sarat dengan wacana konteks sosial.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/dunia-anjing',
                'artistId' => 2
            ],
            [
                'nama' => 'Kapal Tenggelam',
                'tahun' => 1840,
                'ukuran' => '74 x 97 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FRaden_Saleh_Kapal_Tenggelam2_5662698dbe.jpg&w=1920&q=60',
                'deskripsi' => 'Penggambaran badai di laut dan kapal tenggelam adalah pengalaman dasar manusia pada zaman itu, dan menjadi tema, ide seni tua dalam sejarah seni rupa di Eropa. Raden Saleh mendapat pengaruh dari seniman-seniman Belanda yang mengangkat tema maritim karna kondisi geografis dan kekayaan perdagangan jalur laut di Negeri Belanda. Kapal Tenggelam mengungkapkan gejolak jiwa yang terombang-ambing (bimbang) antara keinginan menghayati dunia ideal dan dunia nyata (realitas). Penekanan ungkapan romantisisme pada karya ini ditandai dengan cara dramatis, emosional, misterius, dan imajiner melalui penggambaran perjuangan dramatis dua kapal yang dihempas badai menghantam karang dan sinar matahari yang memantul ke ombak. Karya-karya Romantisisme seperti ini juga didasari pada kenyataan aktual. Lukisan Kapal Tenggelam Raden Saleh berkaitan juga dengan momentum Revolusi Prancis Juli 1830. Mengandung suatu makna historis bagi suatu bangsa dalam mencapai cita-cita kemerdekaan. Raden Saleh dengan ekspresi seninya menyatakan pendiriannya, sekaligus menampilkan dirinya yang antikolonial. Raden Saleh dikenal sebagai “Seniman Perintis Seni Lukis Modern” di Indonesia, karena menjadi orang Jawa pertama yang mendapatkan kesempatan untuk belajar melukis di Eropa atas beasiswa pemerintah Belanda, dan kembali ke Indonesia sebagai Master Seni Lukis terbaik yang pernah ada.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/kapal-tenggelam',
                'artistId' => 1
            ],
            [
                'nama' => 'Mbah Irosentono',
                'tahun' => 1960,
                'ukuran' => '68,5 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FTrubus_Sudarsono_Mbah_Irosentonono_882639f61a.jpg&w=1920&q=60',
                'deskripsi' => 'Karya ini menggambarkan seorang kakek yang sedang mengasah sabit. Dengan mengenakan blangkon (ikat kepala), pakaian komprang (longgar), dan berkalung sarung, sosok tua itu bekerja dalam setting halaman rumahnya yang sederhana. Seperti pelukis-pelukis lain pada masa tahun 1960-an, Trubus banyak mengungkapkan kehidupan masyarakat bawah sebagai upaya penggambaran kebenaran realitas yang didasarkan pada paradigma estetik kerakyatan. Lukisan ini mengungkapkan makna tentang kecintaan dan kesungguhan manusia dalam bekerja walaupun dalam usia senja.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/mbah-irosentono',
                'artistId' => 15
            ],
            [
                'nama' => 'Potret Adolphe Jean Philippe Hubert Desire Bosch',
                'tahun' => 1867,
                'ukuran' => '122,5 x 89,5 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FRaden_Saleh_Portrait_Adolphe_Jean_Phillipe_Hubert_Desire_Bosch_6d916f9da6.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan bergaya realis ini menampilkan kemahiran Raden Saleh dalam tradisi melukis potret. Raden Saleh yang belajar melukis potret pada Cornelis Kruseman di Belanda, kerap mendapat tugas dari Pemerintah Belanda untuk melukis potret para Gubernur Jenderal Hindia Belanda, yaitu J.van den Bosch, H.W. Daendeles, dan J.C. Baud. Ketiga lukisan tersebut menjadi penanda yang penting karya-karya potret Raden Saleh. Lukisan Raden Saleh ini mengungkapkan sosok seorang pejabat Belanda yang berdinas di Yogyakarta. Karakter yang ditampilkan merupakan ekspresi ketenangan dan kewibawaan aristokrat kolonial feodal.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/potret-adolphe-jean-philippe-hubert-desire-bosch',
                'artistId' => 1
            ],
            [
                'nama' => 'Gadis Bali',
                'tahun' => 1954,
                'ukuran' => '75 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FSapto_Hudoyo_Gadis_Bali_5edcf5d2f8.jpg&w=1920&q=60',
                'deskripsi' => 'Karya ini menampilkan sosok eksotis perempuan muda Bali dalam pakaian tradisional. Gestur tubuh yang luwes dalam duduk meliuk dan ekspresi naifnya, merupakan penanda yang kuat untuk menampilkan sifat yang alami dari sosok gadis desa tersebut. Gaya realisme yang dipakai dapat mengungkap karakter wajah, lekuk anatomi, warna kulit, dan lipatan kain dengan indah.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/gadis-bali',
                'artistId' => 16
            ],
            [
                'nama' => 'Ibu Menjahit',
                'tahun' => 1944,
                'ukuran' => '71 x 55,5 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FS_Sudjojono_Ibu_Menjahit_c11f3f1721.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan ini menampilkan figur istri Sudjojono, Mia Bustam —yang sedang mengandung anak pertama mereka, Tedjabayu— menjahit sambil duduk bersantai. Sudjojono memiliki pandangan yang humanis dengan perhatian besar pada orang-orang di dekat atau sekitarnya. Pada masa ini, Sudjojono beberapa kali melukis keluarganya dalam potret maupun aktivitas domestik lainnya.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/ibu-menjahit',
                'artistId' => 17
            ],
            [
                'nama' => 'Tjap Go Meh',
                'tahun' => 1940,
                'ukuran' => '51 x 73 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FS_Sudjojono_Tjap_Go_Meh2_e566a98dc7.jpg&w=1920&q=60',
                'deskripsi' => 'Lukisan Tjap Go Meh menggambarkan kegembiraan (euforia) masyarakat Tionghoa dalam menyambut perayaan Cap Go Meh. Lukisan ini sedikit menyimpang dari banyak lukisan pada periode waktu yang sama (realisme). Dalam karya ini Sudjojono mengindahkan proporsi-anatomi dan yang nampak adalah figur-figur yang naif. Tjap Go Meh diposisikan sebagai karya terunik dan fenomenal dari deretan konstelasi karya Sudjojono. Melalui cara Sudjojono menggambarkan, terbukti betapa Sudjojono memahami benar yang terjadi pada momen Cap Go Meh atau hari ke 15 perayaan Tahun Baru Imlek. Sudjojono merekam suasana pesta tahun baru itu dengan ironi-ironinya; tahun di sekitar perjuangan revolusi kemerdekaan (1940-an) yang serba sulit secara ekonomi, sosial, dan politik, tetapi pesta tahun baru harus tetap berlangsung. Sebuah ironi mengenai ketimpangan sosial, salah satunya terkait dengan tekanan pemerintah kolonial yang kian keras pada Bangsa Indonesia. Jiwa Sudjojono Tampak/Terlihat melalui spontanitas penggambaran elemen-elemen visual pada Tjap Go Meh, ditandai dengan kesengajaan mendeformasi orang-orang dalam arakan dan warna-warnanya yang kuat, mendukung seluruh ekspresi dalam pesta. Dalam lukisan tersebut seorang wanita berkebaya larut dalam tarian dan menggandeng seorang bertopeng, diapit oleh seorang berdasi dan seorang pemusik bertopeng buaya. Di sisi kanannya ada seorang kerdil yang berdiri tegak termangu-mangu, sedangkan di latar belakang berombak massa yang berarak dan menari dalam suasana kegembiraan. Hal tersebut merupakan implementasi dari perjuangan estetika Sudjojono yang mengandung moral etik kontekstualisme dan nasionalisme. Sudjojono dalam masa Persagi dan masa Jepang berusaha menciptakan seni lukis Indonesia pada arah baru, seperti yang sangat kuat disuarakan lewat tulisan-tulisan dan karyanya. Jiwa semangat itu adalah menolak estetika seni lukis Mooi Indie yang hanya mengungkapkan keindahan dan eksotisme saja. Dia ingin membawa nafas baru pengungkapan seni lukis yang jujur dan empati yang dalam dari realitas kehidupan masyarakat lewat gaya ekspresionisme. Dengan kapasitas kesadaran dan karya-karya yang diperjuangkan tersebut, banyak pengamat yang menempatkan Sudjojono sebagai Bapak Seni Lukis Indonesia.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/tjap-go-meh',
                'artistId' => 17
            ],
            [
                'nama' => 'Pasar',
                'tahun' => 1957,
                'ukuran' => '33 x 38 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FSuromo_D_S_Pasar_9d86b69b26.jpg&w=1920&q=60',
                'deskripsi' => 'Pada karya seni grafis ini, Suromo benar-benar menunjukan kemampuan teknik cukilan kayu yang mendekati engraving. Aspek prespektif, pencahayaan, dan detail bentuk-bentukan telah mencapai keunggulan, sehingga karya grafis yang realistik ini terasa hidup. Dalam karya ini dapat diungkapkan keramaian sekaligus suasana dan setting pasar tahun 1950-an. Dalam pasar tradisional ini ditampilkan pedagang yang masih menggelar dagangan di tanah atau dengan meja yang sederhana. Dalam keramaian juga terlihat wanita kebanyakan masih berpakaian kebaya dan kusir andong dalam pakaian tradisional Jawa. Dengan demikian, dalam karya ini, seorang wanita yang memakai rok dan bersepatu, serta anak-anak yang juga memakai rok menjadi kontras sekaligus sebagai perubahan zaman. Suromo adalah termasuk pelukis yang lahir dan tumbuh lewat “pemasakan” ide-ide Persagi untuk mengungkapkan realitas kehidupan sosial dengan cara yang impresif. Dalam karya ini, jejak manifestasi ide itu masih dapat dirasakan. Hal itu terlihat dari bagaimana ia berusaha menangkap realitas kehidupan rakyat di pasar dan mengungkapkannya lewat permainan cahaya atau warna-warna putih yang bergejolak. Tema-tema sekitar kehidupan sehari-hari dan perjuangan kemerdekaan memang banyak dibuat untuk karya grafisnya.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/pasar',
                'artistId' => 18
            ],
            [
                'nama' => 'Minta Sumbangan Gedung',
                'tahun' => 1965,
                'ukuran' => '150 x 100 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/_next/image?url=%2Fuploads%2FTatang_Ganar_Minta_Sumbangan_Gedung_ace9d949e9.jpg&w=1920&q=60',
                'deskripsi' => 'Tatang Ganar menampilkan sepotong episode kesulitan hidup masyarakat kecil dalam masalah pendidikan. Dengan kehalusan ekspresif, masingmasing figur bertatapan mengungkap problem sosial dalam keluarga. Hal itu dapat dilihat terutama lewat "dialog dalam diam" antara figur bapak yang lusuh dan ibu yang menggendong anak paling kecil. Karya ini termasuk dalam kecenderungan gaya ekspresionisme liris. Jika diamati satupersatu, bagianbagian figur itu menunjukkan penyelesaian yang unfinished, tetapi secara keseluruhan karya ini menjadi irama yang ekspresif.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/minta-sumbangan-gedung',
                'artistId' => 19
            ],
            [
                'nama' => 'Take Me Away',
                'tahun' => 2020,
                'ukuran' => '120 cm x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'http://archive.ivaa-online.org/img/artworks/big/1636698882.jpg',
                'deskripsi' => 'Take Me Away',
                'sumber' => 'http://archive.ivaa-online.org/artworks/detail/18068',
                'artistId' => 20
            ],
            [
                'nama' => 'Relaxing and Picking Flowers by The Beach',
                'tahun' => 1981,
                'ukuran' => '90 cm x 140 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'http://archive.ivaa-online.org/img/artworks/big/1628503806.jpg',
                'deskripsi' => 'Hendra Gunawan lahir tahun 1918 dan tertarik pada seni lukis sejak masih kecil. Hendra Gunawan adalah seorang pelukis yang terkenal karena menggabungkan teknik melukis Barat dan estetikatradisional Indonesia. Dalam jajaran seni rupa modern, Hendra dikenal dengan ketertarikannya pada segala hal yang dekat dengan Indonesia, dan diekpresikan dengan sempurna pada subjek perempuan yang ia lukis. Hendra seringkali menampilkan kehidupan sederhana masyarakat desa seperti perempuanyang sedang bersantai dan memetik bunga. Ia juga melukis pemandangan dengan menghadirkan subjek yang sederhana dengan realitas hidup mereka. Lewat lukisannya, Hendra memaparkan kehidupan dan budaya Indonesia sembari mengekspresikan semangat nasionalisme dan cinta tanah air melalui karya seni.',
                'sumber' => 'http://archive.ivaa-online.org/artworks/detail/18049',
                'artistId' => 21
            ],
        ]);
    }
}
