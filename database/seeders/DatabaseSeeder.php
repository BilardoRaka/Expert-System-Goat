<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Logika;
use App\Models\Feedback;
use App\Models\Riwayat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'Muhammad Bukhori',
            'username' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' //password
        ]);

        Penyakit::create([
            'id' => 'P001',
            'penyakit' => 'Cacingan',
            'solusi' => '
            <ol>
            <li>Sanitasi kandang dan lingkungan harus terjaga dengan baik.</li>
            <li>Sebaiknya dihindari penggembalaan atau pengambilan rumput dekat air sawah atau sungai. </li>
            <li>Saat merumput jangan pagi hari, sebaiknya antara jam12.00 15.00, dengan cara memotong rumput pada bagian atas. Apabila digembalakan sebaiknya berpindah-pindah.</li>
            <li>Kambing yang terinfeksi cacing sebaiknya dipisah di kandang karantina atau dipisah dari ternak yang sehat.</li>
            <li>Memberikan obat yang mengandung sulfa Ivermectin</li> 
            <li>Secara tradisional dapat diobati dengan lembar daun pepaya yang telah digiling kemudian ditambah 1 sendok teh garam dapur lalu dicampurkan dalam 1 gelas air. Campuran ini diminumkan untuk 1 ekor kambing setiap hari. Pemberian 2 kali seminggu selama 1 bulan. </li> 
            <li>Getah pepaya muda dicampur air dengan perbandingan 15 hingga terbentuk suspensi, kemudian diminumkan. Dosis pemberian 1,2 g/ Kg berat badan. </li> 
            <li>Lima lembar daun tembakau dilumatkan dicampur dengan air, kemudian saring dan diminumkan pada ternak. </li>            
            </ol>'
        ]);

        Penyakit::create([
            'id' => 'P002',
            'penyakit' => 'Kudis / Scabies',
            'solusi' => '
            <ol>
                <li>Sanitasi kandang harus dilakukan secara rutin, apabila kandang telah dipakai ternak yang sakit harus disemprot dengan disinfektan.</li> 
                <li>Ternak dimandikan secara rutin dengan sabun dan digosok sampai bersih.</li> 
                <li>Ternak yang sehat dihindarkan kontak langsung dengan ternak yang terinfeksi.</li> 
                <li>Pemasaran ternak kambing, pembelian dan penjualan harus menggunakan alat transportasi khusus, agar ternak tetap sehat selama dalam perjalanan.</li>            
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P003',
            'penyakit' => 'Mastitis',
            'solusi' => '
            <ol>
                <li>Sanitasi kandang dan lingkungan terjaga dengan baik, kandang tetap kering dan bersih.</li> 
                <li>Ambing atau puting jangan sampai terluka, karena dapat sebagai pemicu mastitis.</li> 
                <li>Sebelum dan sesudah memerah cuci dan bersihkan ambing serta puting, sebagai anti septik (pencegah infeksi) puting susu dapat dicelupkan ke dalam air rebusan daun sirih sebelum dan sesudah diperah secara rutin.</li>
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P004',
            'penyakit' => 'Perut Kembung',
            'solusi' => '
            <ol>
                <li>Hindari pemberian hijauan terlalu muda atau hijauan yang diambil pagi masih berembun.</li> 
                <li>Hindari pemberian berlebihan pakan dari golongan leguminosa dan atau konsentrat yang terlalu halus.</li> 
                <li>Berikan makanan hijauan yang sudah kering atau telah dilakukan.</li> 
                <li>Sebagai tindakan pencegahan rumput atau pakan dapat diperciki minyak kelapa.</li>            
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P005',
            'penyakit' => 'Diare / Mencret',
            'solusi' => '
            <ol>
                <li>Jangan memberikan pakan daun kacang-kacangan atau daun terlalu muda secara berlebihan. </li> 
                <li>Ternak kambing yang sakit dipisahkan kekandang karantina.</li> 
                <li>Saat pembelian ternak hati-hati, sebaiknya tidak membeli ternak yang terserang mencret agar tidak menular pada ternak yang sehat. </li> 
                <li>Jaga sanitasi kandang dan kebersihan peralatan makan dan minum. Sisa pakan dalam palungan pakan dibersihkan secara teratur sampai bersih, agar tidak terdapat jamur. </li>            
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P006',
            'penyakit' => 'Sakit Mata',
            'solusi' => '
            <ol>
                <li>Perbaikan sanitasi lingkungan kandang. </li> 
                <li>Pisahkan ternak yang sakit dari kelompoknya. </li> 
                <li>Hijauan dipotong-potong sebelum diberikan agar tidak membahayakan. </li> 
                <li>Setiap hari mata ditetesi dengan air daun sirih. </li>            
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P007',
            'penyakit' => 'Orf',
            'solusi' => '
            <ol>
                <li>Menjaga kondisi tubuh ternak tetap sehat. </li> 
                <li>Vaksinasi Orf. </li>   
                <li>Apabila membeli ternak dari luar harus bebas Orf. </li>            
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P008',
            'penyakit' => 'Kuku busuk',
            'solusi' => '
                <ol>
                <li>Kebersihan kandang harus terjaga tetap kering dan bersih. Kandang kotor dan becek merupakan tempat subur untuk berkembangnya kuman. </li>
                <li>Pemotongan kuku dilakukan secara rutin minimal 3 bulan sekali. </li> 
                <li>Hati-hati benda-benda tajam agar tidak melukai kaki ternak. </li>
            </ol>
            '
        ]);

        Penyakit::create([
            'id' => 'P009',
            'penyakit' => 'Keracunan Sianida',
            'solusi' => '
            <ol>
                <li>Daun ubi kayu atau tanaman sejenis, sebelum diberikan dicacah dan dikeringkan dengan sinar matahari langsung, sebelum diberikan ternak. </li>
                <li>1 gelas minyak kelapa diminumkan + air kelapa sebanyak-banyaknya. </li>  
                <li>Air kelapa + asam jawa + garam dapur secukupnya + diminum. </li>            
            </ol>
            '
        ]);

        Gejala::create([
            'id' => 'G001',
            'gejala' => 'Kelihatan kurus, lemah, dan pucat',
            'ya' => 'G002',
            'tidak' => 'G010'
        ]);
        Gejala::create([
            'id' => 'G002',
            'gejala' => 'Bulunya agak berdiri atau kusam',
            'ya' => 'G003',
            'tidak' => 'G007'
        ]);
        Gejala::create([
            'id' => 'G003',
            'gejala' => 'Nafsu makan menurun sering mencret',
            'ya' => 'G004-1',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G004-1',
            'gejala' => 'Perut membuncit',
            'ya' => 'G005',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G005',
            'gejala' => 'Selaput mata pucat',
            'ya' => 'G006',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G006',
            'gejala' => 'Kotoran banyak mengandung telur cacing',
            'ya' => 'P001',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G007',
            'gejala' => 'Kulit terdapat bercak merah dan berbisul kecil-kecil',
            'ya' => 'G008',
            'tidak' => 'G017'
        ]);
        Gejala::create([
            'id' => 'G008',
            'gejala' => 'Rambut rontok',
            'ya' => 'G009',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G009',
            'gejala' => 'Kambing menggosok-gosokkan tubuhnya',
            'ya' => 'P002',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G010',
            'gejala' => 'Ambing bengkak dan keras berwarna kemerahan dan terasa panas',
            'ya' => 'G011',
            'tidak' => 'G004-2'
        ]);
        Gejala::create([
            'id' => 'G011',
            'gejala' => 'Air susu tidak normal, berwarna coklat, kuning tua atau kemerahan, lebih kental atau lebih encer daripada yang normal',
            'ya' => 'G012',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G012',
            'gejala' => 'Enggan menyusui anaknya dan sering berbaring lama',
            'ya' => 'G013',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G013',
            'gejala' => 'Produksi susu menurun',
            'ya' => 'P003',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G004-2',
            'gejala' => 'Perut membuncit',
            'ya' => 'G014',
            'tidak' => 'G018'
        ]);
        Gejala::create([
            'id' => 'G014',
            'gejala' => 'Hewan gelisah dan sulit bernafas',
            'ya' => 'G015-1',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G015-1',
            'gejala' => 'Napas pendek dan cepat serta tidak mau makan',
            'ya' => 'G016',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G016',
            'gejala' => 'Punggung kelihatan membungkuk',
            'ya' => 'P004',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G017',
            'gejala' => 'Tinja encer dan berwarna hijau muda, kuning kehijauan,hijau kehitam-hitaman dan bahkan hitam kemerahan',
            'ya' => 'P005',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G018',
            'gejala' => 'Mata selalu berair, tertutup, sering berkedip, mengeluarkan cairan berwarna hijau',
            'ya' => 'G019',
            'tidak' => 'G020'
        ]);
        Gejala::create([
            'id' => 'G019',
            'gejala' => 'Bengkak sekitar mata, berwarna merah, menjadi keruh, timbul borok pada selaput bening',
            'ya' => 'P006',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G020',
            'gejala' => 'Adanya benjolan keropeng pada daerah sekitar mulut',
            'ya' => 'P007',
            'tidak' => 'G021'
        ]);
        Gejala::create([
            'id' => 'G021',
            'gejala' => 'Sela kuku membengkak kemudian pecah',
            'ya' => 'G022',
            'tidak' => 'G015-2'
        ]);
        Gejala::create([
            'id' => 'G022',
            'gejala' => 'Sebagian kaki atau seluruhnya lumpuh',
            'ya' => 'G023',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G023',
            'gejala' => 'Kaki sangat berbau dan pincang',
            'ya' => 'P008',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G015-2',
            'gejala' => 'Napas pendek dan cepat serta tidak mau makan',
            'ya' => 'G024',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G024',
            'gejala' => 'Otot-otot gemetar / limbung',
            'ya' => 'G025',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G025',
            'gejala' => 'Meronta-ronta, jatuh dengan nafas terengah-engah dan diikuti kekejangan',
            'ya' => 'G026',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G026',
            'gejala' => 'Pupil mata melebar',
            'ya' => 'G027',
            'tidak' => 'XXX'
        ]);
        Gejala::create([
            'id' => 'G027',
            'gejala' => 'Pengeluaran air liur, mulut berbusa dan ternak mengeluarkan kotoran dan kencing',
            'ya' => 'P009',
            'tidak' => 'XXX'
        ]);

        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G001'
        ]);
        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G002'
        ]);
        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G003'
        ]);
        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G004-2'
        ]);
        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G005'
        ]);
        Logika::create([
            'penyakit_id' => 'P001',
            'gejala_id' => 'G006'
        ]);
        Logika::create([
            'penyakit_id' => 'P002',
            'gejala_id' => 'G001'
        ]);
        Logika::create([
            'penyakit_id' => 'P002',
            'gejala_id' => 'G007'
        ]);
        Logika::create([
            'penyakit_id' => 'P002',
            'gejala_id' => 'G008'
        ]);
        Logika::create([
            'penyakit_id' => 'P002',
            'gejala_id' => 'G009'
        ]);
        Logika::create([
            'penyakit_id' => 'P003',
            'gejala_id' => 'G010'
        ]);
        Logika::create([
            'penyakit_id' => 'P003',
            'gejala_id' => 'G011'
        ]);
        Logika::create([
            'penyakit_id' => 'P003',
            'gejala_id' => 'G012'
        ]);
        Logika::create([
            'penyakit_id' => 'P003',
            'gejala_id' => 'G013'
        ]);
        Logika::create([
            'penyakit_id' => 'P004',
            'gejala_id' => 'G004-2'
        ]);
        Logika::create([
            'penyakit_id' => 'P004',
            'gejala_id' => 'G014'
        ]);
        Logika::create([
            'penyakit_id' => 'P004',
            'gejala_id' => 'G015-2'
        ]);
        Logika::create([
            'penyakit_id' => 'P004',
            'gejala_id' => 'G016'
        ]);
        Logika::create([
            'penyakit_id' => 'P005',
            'gejala_id' => 'G001'
        ]);
        Logika::create([
            'penyakit_id' => 'P005',
            'gejala_id' => 'G017'
        ]);
        Logika::create([
            'penyakit_id' => 'P006',
            'gejala_id' => 'G018'
        ]);
        Logika::create([
            'penyakit_id' => 'P006',
            'gejala_id' => 'G019'
        ]);
        Logika::create([
            'penyakit_id' => 'P007',
            'gejala_id' => 'G020'
        ]);
        Logika::create([
            'penyakit_id' => 'P008',
            'gejala_id' => 'G021'
        ]);
        Logika::create([
            'penyakit_id' => 'P008',
            'gejala_id' => 'G022'
        ]);
        Logika::create([
            'penyakit_id' => 'P008',
            'gejala_id' => 'G023'
        ]);
        Logika::create([
            'penyakit_id' => 'P009',
            'gejala_id' => 'G015-2'
        ]);
        Logika::create([
            'penyakit_id' => 'P009',
            'gejala_id' => 'G024'
        ]);
        Logika::create([
            'penyakit_id' => 'P009',
            'gejala_id' => 'G025'
        ]);
        Logika::create([
            'penyakit_id' => 'P009',
            'gejala_id' => 'G026'
        ]);
        Logika::create([
            'penyakit_id' => 'P009',
            'gejala_id' => 'G027'
        ]);

        // Riwayat::factory(5)->create();
        // Feedback::factory(25)->create();
    }
}
