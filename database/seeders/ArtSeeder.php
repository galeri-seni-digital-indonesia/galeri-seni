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
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Agus-Djaya-1913-1994-Kuda-Lumping.webp?imwidth=1920',
                'deskripsi' => 'Agus Djaya dikenal dengan pandangannya tentang seni rupa Timur dan berhasrat untuk menemukan ciri keindonesiaan dalam karya seni rupa. Terlihat dalam tema-tema karyanya banyak menggali akar budaya Indonesia seperti legenda, cerita rakyat, dan tari tradisional. Dalam karya "Kuda Lumping” dilukiskan seorang penari yang berdiri dalam pose menari yang terkesan dinamis, mengenakan baju loreng merah putih dan bercelana kuning menaiki kuda lumping (kuda pipih terbuat dari anyaman bambu yang diwarnai dan dihias dengan pola-pola dekoratif). Pada latar belakang tampak seorang pawang berpakaian putih biru sedang memegang Pecut. Selain itu, tampak juga penabuh gendang dan peniup terompet.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/agus-djaya-1913-1994-kuda-lumping',
                'artistId' => 2
            ],
            [
                'nama' => 'Dinamika Keruangan',
                'tahun' => 1969,
                'ukuran' => '64 x 94 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://cdn.idntimes.com/content-images/post/20230131/detail-k5jdedirn2-fadjar-sidik-dinamika-keruangan-bigjpg-b8aec63ac3b303a6e52c18f458d1c1a7.jpg',
                'deskripsi' => 'Dalam lukisan “Dinamika Keruangan” ini, Fadjar Sidik menampilkan ritme-ritme bentuk dari dua gugusan elemen visual dengan dominan warna hitam dan warna kuning oker. Di sela-sela susunan bentuk terdapat bulatan-bulatan merah yang memberikan aksentuasi seluruh ritme itu, sehingga timbul klimaks ritme yang meneteskan kelegaan. Jika dalam lukisan itu terdapat bentuk bulatan dan sabit, hal itu sama sekali bukan representasi religius yang berkaitan dengan nilai simbolik bulan penuh atau bulan sabit. Demikian juga gugusan bentuk-bentuk segi empat dan geliat sulur garis hitam, bukan abstraksi bentuk ular dan serangganya yang mempunyai nilai magis simbolik.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/dinamika-keruangan',
                'artistId' => 3
            ],
            [
                'nama' => 'Kota Baru. Sukarnopura',
                'tahun' => 1963,
                'ukuran' => '66 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Itji-Tarmizi-Kota-Baru-Sukarnopura.webp?imwidth=1920',
                'deskripsi' => 'Digambarkan Kota Baru (nama kedua Sukarnopura, saat ini Papua, berlokasi dekat dengan teluk laut dan dikelilingi oleh tanaman hijau. Di bagian kiri lukisan terdapat sebuah rumah dengan atap genteng berwarna merah jingga. Di bagian tengah lukisan, di antara pepohonan dan semak-semak hijau pada daratan yang lebih rendah, terdapat rumah-rumah dan jalan yang tampak dilalui orang-orang. Pada latar belakang ada teluk biru yang dikelilingi oleh bukit-bukit biru tua yang lembut, batu karang yang tinggi di sebelah kanan, dan langit biru berawan.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/itji-tarmizi-1939-2001-kota-baru-sukarnopura',
                'artistId' => 10
            ],
            [
                'nama' => 'Ibuku',
                'tahun' => 1941,
                'ukuran' => '42 x 32 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://hypeabis.id/assets/content/20230109223623_1358751425.jpg',
                'deskripsi' => 'Lukisan ini merupakan salah satu dari karya awal yang diakusisi menjadi koleksi Kementerian Pendidikan, Pengajaran, dan Kebudayaan (kini Kementerian Pendidikan dan Kebudayaan) pada tahun 1948. Affandi menampilkan kemahirannya dalam melukis potret realis di awal kariernya sebelum beralih menuju impresionisme dan ekspresionisme. Pada lukisan ini dapat kita amati sapuan kuas dan detail-detail kecil yang berhasil membentuk figur seorang ibu yang tampak berusia lanjut, menyilangkan tangan di pundaknya dengan tatapan dan raut wajah yang cenderung bersedih. Rambutnya sedikit menjuntai dan tidak tampak senyum dari bibirnya, memperlihatkan potret ini dibuat dalam pose dan sudut pandang yang natural. Affandi memiliki perhatian besar dan kecintaan kepada ibunya, ia kerap melukis sosok ibunya dalam beberpa karya lainnya seperti “Ibu di dalam Ruangan” (1949), dan “Ibu Marah” (1960).',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/ibuku',
                'artistId' => 5
            ],
            [
                'nama' => 'Petani Pulang',
                'tahun' => 1965,
                'ukuran' => '92 x 148 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Tatang-Ganar-Coming-back-home-peasants.webp?imwidth=1920',
                'deskripsi' => 'Sekelompok orang berjalan dengan latar belakang langit matahari terbenam dan sawah hijau. Di tengah tampak seorang petani yang memikul dua tundun pisang di bahunya. Ia mengenakan kemeja hitam yang terbuka di bagian dada dan celana pendek hitam, dengan golok diselipkan di bagian depan ikat pinggangnya. Di depannya tampak seorang gadis remaja berpakaian biru, menggendong sekeranjang pisang di punggungnya. Tangannya memegang bunga merah. Pada lukisan bagian kanan ada seorang wanita mengikuti pria tadi, juga menggendong sekeranjang pisang di punggungnya, dan menggenggam sabit di tangan kanannya. Pada sudut kanan bawah terdapat penanda nama seniman dan tahun. Di balik kanvas lukisan terdapat label kertas dengan nama seniman dan judul lukisan: Tatang Ganar, Petani pulang.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/tatang-ganar-1936-2004-petani-pulang',
                'artistId' => 19
            ],
            [
                'nama' => 'Istriku',
                'tahun' => 1953,
                'ukuran' => '102 x 83 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Dullah-1919-1996-Istriku.webp?imwidth=1920',
                'deskripsi' => 'Lukisan "Istriku" ini, merupakan salah satu karya Dullah yang menunjukkan kecenderungan pada keindahan sosok-sosok wanita. Di samping perhatiannya yang kuat pada humanisme kerakyatan dan nilai-nilai lokal, Dullah memang merupakan pelukis romantis yang juga dengan setia mengabadikan nilai-nilai ideal lewat kecantikan atau juga keindahan alam seperti dalam karya-karyanya. Dullah dikenal sebagai pelukis potret yang amat menguasai teknik melukis realis.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/istriku',
                'artistId' => 6
            ],
            [
                'nama' => 'Bersimpang Jalan',
                'tahun' => 1955,
                'ukuran' => '48 x 63 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Hariadi-Sumadijaja-1919-1997-Bersimpang-Jalan.webp?imwidth=1920',
                'deskripsi' => 'Berbeda dengan karya-karya Harijadi yang dilukis dengan gaya realistik, karya “Bersimpang Jalan” ini cenderung lebih ekspresionistik. Penekanan dari goresan kuas yang lebar dan kuat, ditambah dengan pengaturan komposisi dan penempatan figur-figur, memberi kesan dramatis pada adegan yang sedang berlangsung. Tampak dua sosok dewasa berbeda jenis kelamin berjalan saling membelakangi dan masing-masing menggandeng/menuntun anak kecil. Bahkan pada sosok perempuan tersebut, selain menuntun juga sedang menggendong anak. Di belakang dua figur dewasa itu tampak dua orang anak yang saling melihat satu sama lain seakan menunjukkan keengganan untuk berpisah. Di kejauhan, batas cakrawala yang kontras antara langit yang berawan dengan hamparan tanah yang didominasi warna kecokelatan semakin menambah suasana yang kelam.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/bersimpang-jalan',
                'artistId' => 7
            ],
            [
                'nama' => 'Potret Diri',
                'tahun' => 1962,
                'ukuran' => '120 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Harijadi-Sumadidjaja-1919%E2%80%931997-Potret-Diri.webp?imwidth=1920',
                'deskripsi' => 'Lukisan ini melanjutkan tradisi potret diri yang kerap dipraktikkan oleh pelukis Barat. Harijadi mendapatkan pendidikan melukis dari Affandi dan Sudjojono ketika bergabung dengan Keimin Bunka Shidoso pada masa pendudukan Jepang, sehingga pengetahuan mengenai lukisan potret diri didapatkan dari kedua gurunya tersebut.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/harijadi-sumadidjaja-potret-diri',
                'artistId' => 7
            ],
            [
                'nama' => 'Gerhana (Dewa Ratih)',
                'tahun' => 1965,
                'ukuran' => '88 x 58,5 cm',
                'mediaLukis' => 'Kain',
                'gambar' => 'https://scontent-cgk1-2.xx.fbcdn.net/v/t1.6435-9/121609495_2867374126919820_3921482246625294086_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=06a7ca&_nc_eui2=AeH9WpQ0Gpqe5L83mdfEryskUMbnwGQ6E6ZQxufAZDoTpo7pkjrwQnGW92GrFwAgChBDKJ0UfSoQ8Z3YOQM4tgHc&_nc_ohc=mj4wFghdqe4Q7kNvgGDS3wR&_nc_ht=scontent-cgk1-2.xx&oh=00_AYDvhnrPz0joxc4dSH0MbWqVY5yGBkggR3_DBrVCcI-xxA&oe=66FE740D',
                'deskripsi' => 'Karya ini melukiskan simbolik nilai cinta yang dimakan oleh Sang Kala (waktu). Kobot sangat piawai dalam memainkan komposisi untuk menciptakan ritme dalam lukisannya. Warnawarna yang dipakai adalah warnawarna lembut dengan figurfigur dalam gaya yang distilir. Kobot mempopulerkan gaya dekoratifnya yang sangat khas. Ciri yang selalu muncul adalah warnawarna pastel dengan figurfigur memenuhi bidang gambar, yang terdiri dari tumbuhan, bunga, binatang, burung, dan serangga.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/gerhana-dewa-ratih',
                'artistId' => 8
            ],
            [
                'nama' => 'Piodalan',
                'tahun' => 1948,
                'ukuran' => '35 x 50 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://lh3.googleusercontent.com/ci/AL18g_TIYe6GAyQkOVA996qhl1In4iU9jFU1l5HgvcfiSMCawij7XSDzJJ-GMxwlhlIIiQnB0Qco=s1200',
                'deskripsi' => 'Odalan dengan para wanita mengambil persembahan menuju ke pura dan sembahyang.',
                'sumber' => 'https://artsandculture.google.com/asset/piodalan/0AFoVONkxr4SVw?hl=id',
                'artistId' => 9
            ],
            [
                'nama' => 'Anak dan Burung',
                'tahun' => 1958,
                'ukuran' => '122 x 71 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://www.dictio.id/uploads/db3342/original/3X/c/0/c0be692108b671188633f5f22edf182e40be82d3.jpg',
                'deskripsi' => 'Lukisan ini merefleksikan kecintaan yang dalam seorang anak dengan peliharaannya. Itji yang dikenal sebagai pelukis penganut estetika kerakyatan yang tertarik dengan tema-tema keseharian dan human interest. Walaupun cenderung masih impresionistik, dalam perkembangannya, Itji melukis dengan teknik realis dan terlihat sangat menguasai penggunaan cahaya dan detail anatomi tubuh manusia.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/anak-dan-burung',
                'artistId' => 10
            ],
            [
                'nama' => 'Bandung',
                'tahun' => 1952,
                'ukuran' => '55 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://kebudayaan.kemdikbud.go.id/galerinasional/wp-content/uploads/sites/10/2020/04/Kartono-Yudhokusumo-Bandung-696x499.jpg',
                'deskripsi' => 'Lukisan ini mengungkap romantisisme pelukis dalam membayangkan dunia yang utuh dan ideal. Wanita-wanita yang berkebaya yang bercengkerama dan berkasihan, menjadi bagian penting di antara pohon-pohon dan binatang dalam taman yang penuh warna. Hal menarik lainnya, pada sudut depan terlihat seorang laki-laki melukis seorang model wanita dengan pakaian lebih modern di antara kerumunan wanita lain dalam pakaian kebaya. Selain hal itu menunjukkan setting sosial yang berkaitan dengan gaya hidup, juga bisa menjelaskan romantisisme pada pelukisnya. Dalam bawah sadarnya seorang romantis selalu ingin menghadirkan dunia ideal dari kontradiksi atau berbagai kenyataan yang terpecah-pecah. Besar kemungkinan tokoh sentral dalam karya-karyanya adalah manifestasi dunia ide yang dimunculkan. Namun demikian dalam kebanyakan genre corak dekoratif, ada kesadaran bahwa alam adalah kosmos dan manusia hanya merupakan setitik bagian dari padanya, oleh karena itu, dalam lukisan ini ego sang pelukis yang begitu ideal pun hanya diletakkan dalam bagian kecil, dari sudut lukisan yang sarat dengan objek dan kaya warna.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/bandung',
                'artistId' => 11
            ],
            [
                'nama' => 'Menguliti Petai',
                'tahun' => 1957,
                'ukuran' => '65 x 88 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Hendra-Gunawan-1918-1983-Menguliti-Petai.webp?imwidth=1920',
                'deskripsi' => 'Lukisan Hendra Gunawan “Menguliti Petai” merupakan potret yang ekspresif tentang kehidupan rakyat. Sosok-sosok wanita yang sedang menguliti petai dan mengamati boneka diungkapkan dengan cara yang naif, sehingga nuansa keseharian dunia mereka tampak bersahaja. Warna-warna dalam karya ini seperti dibiarkan menjalin bentuk-bentuk dengan sendirinya secara intuitif. Akan tetapi, seperti karya Hendra yang lain, dalam suasana kehidupan rakyat yang berat maupun bersahaja, warna dan goresannya (mampu) memberikan irama yang hidup.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/hendra-gunawan-1918-1983-menguliti-petai',
                'artistId' => 20
            ],
            [
                'nama' => 'Wayang Golek',
                'tahun' => 1954,
                'ukuran' => '50 x 98 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Otto-Djaya-1916%E2%80%932002-Wayang-Golek.webp?imwidth=1920',
                'deskripsi' => 'Otto Djaya melukis dengan gaya yang berbeda dan khas dalam mengeksplorasi serta mengekspresikan kehidupan keseharian seperti tema pasar, warung, perayaan pernikahan, pertunjukan tradisonal, dan lain-lain. Lukisan Otto bersifat naratif seperti dalam karya ini yang menggambarkan suasana pertunjukan wayang golek. Terlihat seorang dalang yang sedang memainkan wayang, didampingi para penabuh gamelan dan sinden. Adegan kemeriahan itu dihadirkan Otto dengan kesan jenaka.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/wayang-golek',
                'artistId' => 12
            ],
            [
                'nama' => 'Keluarga Irian',
                'tahun' => 1963,
                'ukuran' => '61 x 84 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Itji-Tarmizi-A-family-from-Irian.webp?imwidth=1920',
                'deskripsi' => 'Sebuah keluarga Papua Nugini digambarkan dalam lukisan ini. Mereka berjalan di antara tumbuhan tropis yang hijau. Di bagian tengah tampak seorang wanita bertubuh besar mengenakan kaos kuning dan rok panjang, sedang membawa tas di bahunya. Di samping kirinya ada seorang pria yang menggendong seorang anak di pundaknya. Di depan kedua figur tersebut, ada seorang anak perempuan dan seorang anak laki-laki yang juga membawa barang di tangannya. Kelompok utama tersebut diikuti oleh seorang gadis yang membungkuk menahan beban tas jaring di punggungnya. Dengan kedua tangan, ia memegang tali tas yang mengait di kepalanya. Pada latar belakang digambarkan pepohonan dan semak belukar, di sela-selanya tampak permukaan air berwarna biru.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/itji-tarmizi-1939-2001-keluarga-irian',
                'artistId' => 10
            ],
            [
                'nama' => 'Kakak dan Adik',
                'tahun' => 1978,
                'ukuran' => '65 x 79 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://pbs.twimg.com/media/EPSAL4LUUAIxfjr?format=jpg&name=large',
                'deskripsi' => 'Lukisan Basuki Abdullah dengan judul Kakak dan Adik, yang dilukis pada 1978 ini merupakan salah satu karyanya yang menunjukan kekuatan penguasaan teknik realis. Dengan sorot pencahayaan dari samping, figur kakak dan adik yang dalam gendongan terasa mengandung ritme drama kehidupan yang “berat”. Namun tatapan sang kakak berkata pengorbanan dan cinta kasih membuat langkah kedepan menjadi lebih “ringan”. Basuki Abdullah dengan penguasaannya mencipta proporsi dan anatomi, menggambarkan gerak tubuh mereka yang mengalunkan perjalanan sunyi. Suasana demikian, seperti ekspresi wajah mereka yang jernih tetapi matanya memelas menatap kosong. Apalagi dengan pakaian mereka yang bersahaja dan berwarna gelap, sosok kakak beradik ini dalam selubung keharuan. Latar belakang dengan warna cokelat gelap pada bagian atas, perlahan kebawah membawa gradasi menuju warna terang menambahkan kesan bahwa kondisi sulit yang dialami perlahan diimbangi langkah penerang (sebuah solusi). Dari berbagai fakta tekstual ini, Basuki Abdullah ingin mengungkapkan empatinya pada kasih sayang dan kemanusiaan. Dalam kenyataannya estetika Basuki Abdullah yang didukung kemampuan teknik akademis yang tinggi menjadikannya sebagai pelukis besar Indonesia.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/kakak-dan-adik',
                'artistId' => 14
            ],
            [
                'nama' => 'Dunia Anjing',
                'tahun' => 1965,
                'ukuran' => '45 x 70 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Agus-Djaya-Dunia-Anjing.webp?imwidth=1920',
                'deskripsi' => 'Karya –karya Agus Djaya mengolah tema-tema dengan pesan yang keras dan mengkritik, Kuda Lumping dan Dunia Anjing termasuk karya Agus Djaya dengan visualisasi yang dapat disebut tak lazim pada saat itu. Lukisan Dunia Anjing menggambarkan situasi sosial-politik pada tahun 1965, tahun-tahun penuh guncangan. Tervisualisasikan puluhan ekor anjing dengan ragam warnanya, ada anjing merah, hitam, coklat, dan putih, diantara anjing-anjing tersebut ada tiga ekor anjing jantan yang sedang berkelahi. Anjing yang ditengah direbut oleh anjing yang dibelakang maupun di depan, nampak anjing yang di depan tersungkur. Pewarnaan di dalam lukisan ini mempergunakan warna-warna yang cukup berani dan menonjol melalui penggunaan warna merah, hitam, dan kuning. Hal itu diibaratkan seperti kehidupan kawanan anjing; berkelahi, saling mencakar, menggongong, rakut, tak jelas mana kawan, mana lawan, berebut kekuasaan dan krisis kepentingan. Di samping itu, warna, tekstur, dan goresan yang membangun lukisan ini memperlihatkan kekontrasan yang dinamis. Dibuat pada 1965, Dunia Anjing merupakan sebuah metafora simbolis tentang disintegrasi sosial-politik pada masa itu, dan bukti dari kepekaan Agus Djaja terhadap persoalan sosial. Karena perbedaan warna “bulu” (ideologi), sesama saudara saling hantam, mengakibatkan kekacauan sosial dan warisan kekerasan yang masih terasa bertahun-tahun setelahnya. Karya ini memancarkan karakter yang keras, karena sosok-sosok anjing muncul dalam dinamika gerakan dan ekspresi kemarahan. Agus Djaya adalah pelukis dari masa Persagi, yaitu suatu periode yang sarat dengan wacana konteks sosial.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/dunia-anjing',
                'artistId' => 2
            ],
            [
                'nama' => 'Ibu dan Anak',
                'tahun' => 1952,
                'ukuran' => '91 x 75 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Trubus-Sudarsono-Portrait-of-a-woman.webp?imwidth=1920',
                'deskripsi' => 'Seorang wanita duduk menghadap depan dengan latar belakang ungu-biru. Di pangkuannya ada seorang anak, mengenakan pakaian hijau tosca dan topi merah muda disertai tudung. Wanita itu mengenakan kebaya merah muda dan kain panjang berwarna abu-abu kehijauan. Rambut hitamnya disisir ke belakang dengan sanggul rendah. Pemandangan dengan pohon-pohon kering yang dahannya patah dan kerangka manusia tergeletak di akar pohon, digambarkan di belakang wanita itu.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/trubus-soedarsono-1926-1966-ibu-dan-anak',
                'artistId' => 15
            ],
            [
                'nama' => 'Mbah Irosentono',
                'tahun' => 1960,
                'ukuran' => '68,5 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Trubus-Soedarsono-1926%E2%80%931966.webp?imwidth=1920',
                'deskripsi' => 'Karya ini menggambarkan seorang kakek yang sedang mengasah sabit. Dengan mengenakan blangkon (ikat kepala), pakaian komprang (longgar), dan berkalung sarung, sosok tua itu bekerja dalam setting halaman rumahnya yang sederhana. Seperti pelukis-pelukis lain pada masa tahun 1960-an, Trubus banyak mengungkapkan kehidupan masyarakat bawah sebagai upaya penggambaran kebenaran realitas yang didasarkan pada paradigma estetik kerakyatan. Lukisan ini mengungkapkan makna tentang kecintaan dan kesungguhan manusia dalam bekerja walaupun dalam usia senja.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/mbah-irosentono',
                'artistId' => 15
            ],
            [
                'nama' => 'Perburuan Rusa',
                'tahun' => 1846,
                'ukuran' => '182.9 cm x 292 cm',
                'mediaLukis' => 'Cat Minyak',
                'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Raden_Saleh_-_hunt.jpg/1024px-Raden_Saleh_-_hunt.jpg',
                'deskripsi' => 'Lukisan dengan nama internasional “The Deer Hunt” ini terjual di Singapura seharga 1.8 miliar dolar pada tahun 1996. Karya ini merupakan salah satu lukisan paling simbolis Raden Saleh yang menggambarkan perjuangan untuk bertahan hidup.',
                'sumber' => 'https://www.goodnewsfromindonesia.id/2021/09/27/kisah-dan-makna-di-balik-5-lukisan-raden-saleh-yang-mendunia#:~:text=Seperti%20karya%20Raden%20Saleh%20pada,hewan%20yang%20liar%20dan%20dramatis',
                'artistId' => 1
            ],
            [
                'nama' => 'Gadis Bali',
                'tahun' => 1954,
                'ukuran' => '75 x 90 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://blogger.googleusercontent.com/img/a/AVvXsEhaUlYPMeHD-_wxgnm3aeS1xNS1V2XmwtnPO6da9XDyLQcbvrEf8aNcmrKHYMRdv4Qwz-z5RnLn2w1UGQUNpXmGhbh-2pCvWEYCyDe3ZiJE9vZsOUdqzfuBoVxjmVzsXGfOkgVGQ060BPvf4KVvBX3CDazu3_PYoVdoWwVF9er0JXVBDmpsG1RrvJR--Q=s832',
                'deskripsi' => 'Karya ini menampilkan sosok eksotis perempuan muda Bali dalam pakaian tradisional. Gestur tubuh yang luwes dalam duduk meliuk dan ekspresi naifnya, merupakan penanda yang kuat untuk menampilkan sifat yang alami dari sosok gadis desa tersebut. Gaya realisme yang dipakai dapat mengungkap karakter wajah, lekuk anatomi, warna kulit, dan lipatan kain dengan indah.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/gadis-bali',
                'artistId' => 16
            ],
            [
                'nama' => 'Genre Scene',
                'tahun' => 1950,
                'ukuran' => '99,5 x 136 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/A-Rustamadji-gendre-scene.webp?imwidth=1920',
                'deskripsi' => 'Dua wanita duduk berseberangan di depan sebuah meja, digambarkan berada di dalam rumah. Di sebelah kiri, seorang wanita tua mengenakan baju model kebaya kutu baru berwarna keunguan dan bawahan kain cokelat. Duduk bersila di dipan, ia meletakkan kartu di atas meja (mungkin kartu ramalan). Di sebelah kanan, seorang wanita lebih muda duduk di kursi, mengenakan kebaya kutu baru motif bunga dengan warna yang lembut dan bawahan kain batik warna putih-cokelat. Tangannya yang diangkat setinggi dada sedang menjahit ujung kain renda. Di dinding yang terang, digantung bingkai kayu berukir dengan foto seorang pria dan sebuah lampu.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/a-rustamadji-1921-2001-genre-scene',
                'artistId' => 17
            ],
            [
                'nama' => 'Pembangunan di Berlin',
                'tahun' => 1961,
                'ukuran' => '90 x 70 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/A-Rustamadji-Construction-site-in-Berlin.webp?imwidth=1920',
                'deskripsi' => 'Digambarkan sekelompok pekerja, memilah-milah puing-puing batu. Di belakang dua tukang bangunan, di bagian depan sebelah kiri tampak papan-papan ditumpuk. Di kejauhan tampak seorang pria dengan gerobak dorong. Pada latar belakang, ada bangunan-bangunan bertingkat yang salah satunya setengah hancur, dan crane yang tampak muncul dari balik atap gedung-gedung tersebut. Pada sudut kanan bawah terdapat nama, tahun, dan tempat. Di balik lukisan terdapat label kertas dengan nama seniman dan judul lukisan: A. Rustamadji, Pembangunan di Berlin. Nama seniman dan nama lukisan juga tertulis pada kanvas dengan menggunakan pensil.',
                'sumber' => 'https://gni.kemdikbud.go.id/pameran-virtual/zaman-peralihan/perupa/a-rustamadji-1932-1990-pembangunan-di-berlin',
                'artistId' => 17
            ],
            [
                'nama' => 'Pasar',
                'tahun' => 1957,
                'ukuran' => '33 x 38 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Soeromo-D.S.1919%E2%80%932003-Pasar.webp?imwidth=1920',
                'deskripsi' => 'Pada karya seni grafis ini, Suromo benar-benar menunjukan kemampuan teknik cukilan kayu yang mendekati engraving. Aspek prespektif, pencahayaan, dan detail bentuk-bentukan telah mencapai keunggulan, sehingga karya grafis yang realistik ini terasa hidup. Dalam karya ini dapat diungkapkan keramaian sekaligus suasana dan setting pasar tahun 1950-an. Dalam pasar tradisional ini ditampilkan pedagang yang masih menggelar dagangan di tanah atau dengan meja yang sederhana. Dalam keramaian juga terlihat wanita kebanyakan masih berpakaian kebaya dan kusir andong dalam pakaian tradisional Jawa. Dengan demikian, dalam karya ini, seorang wanita yang memakai rok dan bersepatu, serta anak-anak yang juga memakai rok menjadi kontras sekaligus sebagai perubahan zaman. Suromo adalah termasuk pelukis yang lahir dan tumbuh lewat “pemasakan” ide-ide Persagi untuk mengungkapkan realitas kehidupan sosial dengan cara yang impresif. Dalam karya ini, jejak manifestasi ide itu masih dapat dirasakan. Hal itu terlihat dari bagaimana ia berusaha menangkap realitas kehidupan rakyat di pasar dan mengungkapkannya lewat permainan cahaya atau warna-warna putih yang bergejolak. Tema-tema sekitar kehidupan sehari-hari dan perjuangan kemerdekaan memang banyak dibuat untuk karya grafisnya.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/pasar',
                'artistId' => 18
            ],
            [
                'nama' => 'Minta Sumbangan Gedung',
                'tahun' => 1965,
                'ukuran' => '150 x 100 cm',
                'mediaLukis' => 'Kanvas',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Tatang-Ganar-1936%E2%80%932004-Minta-Sumbangan-Gedung.webp?imwidth=1920',
                'deskripsi' => 'Tatang Ganar menampilkan sepotong episode kesulitan hidup masyarakat kecil dalam masalah pendidikan. Dengan kehalusan ekspresif, masingmasing figur bertatapan mengungkap problem sosial dalam keluarga. Hal itu dapat dilihat terutama lewat "dialog dalam diam" antara figur bapak yang lusuh dan ibu yang menggendong anak paling kecil. Karya ini termasuk dalam kecenderungan gaya ekspresionisme liris. Jika diamati satupersatu, bagianbagian figur itu menunjukkan penyelesaian yang unfinished, tetapi secara keseluruhan karya ini menjadi irama yang ekspresif.',
                'sumber' => 'https://gni.kemdikbud.go.id/koleksi/minta-sumbangan-gedung',
                'artistId' => 19
            ],
            [
                'nama' => 'Keluarga Gerilya',
                'tahun' => 1951,
                'ukuran' => '75 cm x 65 cm',
                'mediaLukis' => 'Cat Minyak',
                'gambar' => 'https://gni.kemdikbud.go.id/pameran-virtual/images/zamanperalihan/karya/Hendra-Gunawan-1918-1983-Keluarga-Gerilya.webp?imwidth=1920',
                'deskripsi' => 'Karya-karya Hendra pada tahun 1950-an banyak menggambarkan tema-tema perjuangan dan revolusi kemerdekaan. Penggambaran di masa perang cenderung didominasi oleh warna-warna tanah (cokelat, umber, merah, sienna, dll.) sehingga menghasilkan suasana yang kelam dan lebih dramatis. Seperti pada karya “Keluarga Gerilya”, digambarkan pose seorang lelaki yang sedang duduk dengan menyilangkan kaki. Terlihat ada deformasi pada bagian tangan yang saling bersilangan, menempel pada kaki (paha) sehingga menambah absurd pose sosok tersebut. Ada kemungkinan sosok itu adalah potret dirinya sendiri. Dalam catatan Agus Dermawan T., Hendra ikut dalam arus seniman-seniman yang angkat senjata yang tergabung dalam laskar Pelukis Front. Dari medan-medan pertempuran itu, ia membawa pulang puluhan sketsa kemelut perang.',
                'sumber' => 'http://archive.ivaa-online.org/artworks/detail/18049',
                'artistId' => 20
            ],
        ]);
    }
}
