<?php

namespace Database\Seeders;

use App\Models\Aboutsihade;
use App\Models\Beranda;
use App\Models\Berkas;
use App\Models\Contactus;
use App\Models\Faq;
use App\Models\Informasiperusahaan;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Whysihade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            // 'username' => 'Sigit',
            // 'statusadmin_id' => '1',
            // 'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        User::create([
            'name'  => 'Admin Sipjaki',
            // 'username' => 'sipjakikbb',
            // 'statusadmin_id' => '1',
            // 'avatar' => 'user/avatar/foto2.png',
            'email' => 'sipjakikbb@gmail.com',
            'password' => bcrypt('adminsihade')
        ]);
        
        
        
        Beranda::create([
            'judul'  => 'Sihade Organic Farm is dedicated to promoting sustainable agriculture and healthy living. Located in the heart of nature, the farm utilizes organic farming practices that prioritize soil health, biodiversity, and ecological balance. By avoiding synthetic pesticides and fertilizers, Sihade ensures that the produce is not only free from harmful chemicals but also rich in nutrients. This commitment to organic farming helps support local ecosystems and fosters a healthier environment for future generations',
            'gambar' => 'profil/slide1.jpeg'    
        ]);
        
        Beranda::create([
            'judul'  => 'At Sihade Organic Farm, visitors can experience the joy of farm life through various educational programs and hands-on activities. The farm offers workshops on organic gardening, composting, and permaculture, allowing individuals and families to learn sustainable practices that can be applied at home. Additionally, guided tours provide insight into the daily operations of the farm, showcasing the importance of responsible farming and the connection between food production and community well-being.',
            'gambar' => 'profil/slide2.jpeg'    
        ]);
        
        Beranda::create([
            'judul'  => '
            The farm also emphasizes the significance of farm-to-table initiatives by selling fresh, organic produce directly to consumers.
            By participating in local farmers markets and creating a subscription-based vegetable box service, Sihade Organic Farm strengthens the local food system and promotes healthy eating habits. 
            This direct connection between producers and consumers fosters a sense of community, encouraging people to make informed choices about their food and support sustainable agriculture.
            ' ,
            'gambar' => 'profil/slide3.jpeg'    
        ]);
        
        Berkas::create([
            'brosur' => 'berkas/brosursihade.pdf',    
            'daftarmerk' => 'berkas/daftarmerk.pdf',    
            'nib' => 'berkas/nib.pdf',    
            'suratsihade' => 'berkas/suratsihade.pdf',    
        ]);
        
        Aboutsihade::create([
            'judul' => 'Sihade Organic Farm connects aspiring farmers and environmentally conscious consumers to promote sustainable agriculture and healthy living.',    
            'point1' => 'Committed to sustainable farming practices',    
            'point2' => 'Provides fresh, organic produce directly from the farm',    
            'point3' => 'Supports local farmers through education and training',    
            'point4' => 'Promotes healthy living through organic food choices',    
            'point5' => 'Engages with the community for a better agricultural future',    
            'point6' => 'Offers workshops on organic farming techniques',    
            'point7' => 'Creates partnerships for eco-friendly initiatives',    
            'point8' => 'Fosters a love for nature and environmental stewardship',    
            'point9' => 'Delivers a variety of seasonal fruits and vegetables',    
            'keterangan' => 'Sihade Organic Farm is a company dedicated to producing high-quality organic agricultural products, with a strong commitment to sustainability and environmental health. Nestled in the beauty of nature, we employ eco-friendly farming methods that are free from pesticides and harmful chemicals. By combining traditional techniques with modern innovations, we strive not only to cultivate fresh, delicious vegetables and fruits but also to support the local ecosystem and enhance the well-being of the surrounding community. Through education and training, we invite local farmers to join our vision, working together to create a healthier and more sustainable farming environment. At Sihade Organic Farm, we believe that every small step towards organic farming is a significant leap towards a better future for generations to come.',    
        ]);
        
        
        Whysihade::create([
            'pertanyaan1' => 'Promote Organic Practices',    
            'jawaban1' => 'Educating the community on the benefits of organic farming and sustainable agriculture practices.',    
        
            'pertanyaan2' => 'Support Local Farmers',    
            'jawaban2' => 'Providing resources and training to empower local farmers in adopting organic methods.',    
        
            'pertanyaan3' => 'Community Engagement',    
            'jawaban3' => 'Organizing workshops and events to connect with the community and promote healthy living.',    
        
            'pertanyaan4' => 'Fresh Produce Delivery',    
            'jawaban4' => 'Offering a convenient delivery service for fresh, organic fruits and vegetables straight from the farm.',    
        
        ]);
        
        Testimoni::create([
            'komentar' => 'Sihade Organic Farm offers high-quality products that are always fresh and organic.',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Rina Ayu, S.Kom.',
            'jabatan' => 'Purchasing Manager',
            'perusahaan' => 'Healthy Foods Inc.',
        ]);
        
        Testimoni::create([
            'komentar' => 'The quality of vegetables from Sihade is truly exceptional. We are very satisfied!',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Andi Prasetyo',
            'jabatan' => 'Head Chef',
            'perusahaan' => 'Healthy Restaurant',
        ]);
        
        Testimoni::create([
            'komentar' => 'Sihade’s organic products have greatly helped us implement a healthy diet for our family.',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Maya Lestari, M.M.',
            'jabatan' => 'Nutritionist',
            'perusahaan' => 'Community Health Clinic',
        ]);
        
        Testimoni::create([
            'komentar' => 'Sihade Organic Farm is committed to sustainability and quality, which we truly appreciate.',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Budi Santoso',
            'jabatan' => 'CEO',
            'perusahaan' => 'Eco-Friendly Solutions Inc.',
        ]);
        
        Testimoni::create([
            'komentar' => 'We always choose Sihade for our organic vegetable needs. It’s very satisfying!',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Dina Rahmawati',
            'jabatan' => 'Owner',
            'perusahaan' => 'Organic Healthy Store',
        ]);
        
        Testimoni::create([
            'komentar' => 'Sihade Organic Farm provides fast and friendly service. The products are always fresh!',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Eko Wibowo',
            'jabatan' => 'Operations Manager',
            'perusahaan' => 'Healthy Catering',
        ]);
        
        Testimoni::create([
            'komentar' => 'We highly recommend Sihade for anyone looking for high-quality organic products.',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Lina Sari',
            'jabatan' => 'Food Blogger',
            'perusahaan' => 'Healthy Food Blog',
        ]);
        
        Testimoni::create([
            'komentar' => 'With products from Sihade, we feel better and healthier. Thank you!',
            'foto' => 'testimoni/fototestimoni.jpg',
            'namalengkap' => 'Fajar Setiawan',
            'jabatan' => 'Entrepreneur',
            'perusahaan' => 'Healthy Nutrition Inc.',
        ]);
        
        Faq::create([
            'pertanyaan1' => 'What types of organic products do you offer?',
            'jawaban1' => 'What types of organic products do you offer?',
           
            'pertanyaan2' => 'How can I purchase products from Sihade Organic Farm?',
            'jawaban2' => 'You can conveniently purchase our products through our website, where you can browse our full range of offerings. Additionally, you can visit our farm directly for a more personal experience. For our local customers, we also offer home delivery services to ensure you receive fresh organic produce right at your doorstep.',
           
            'pertanyaan3' => 'Are your products certified organic?',
            'jawaban3' => 'Yes, all our products are certified organic by recognized certification bodies. We adhere to strict guidelines and practices that prohibit the use of synthetic pesticides or fertilizers, ensuring that our produce is not only safe but also promotes sustainable farming practices that protect the environment.',
           
            'pertanyaan4' => 'How can I learn more about organic farming practices?',
            'jawaban4' => 'We offer various workshops and educational resources on organic farming practices to help individuals understand the benefits and techniques of sustainable agriculture. Visit our website regularly for updates on upcoming events, workshops, and available materials to enhance your knowledge of organic farming.',
           
            'pertanyaan5' => 'Can I visit Sihade Organic Farm?',
            'jawaban5' => 'Yes, we warmly welcome visitors to Sihade Organic Farm! It’s a wonderful opportunity to see our farming practices in action and learn more about organic agriculture. Please check our website for visiting hours and any special events we may have, including guided tours and workshops that provide insight into our farming methods and products.',
        ]);
            
        Informasiperusahaan::create([
            'alamat' => 'Jln. Pelesiran No. 20E Desa/Kelurahan lebak Siliwangi Kecamatan Coblong, Kota Bandung Jawa Barat 40132 Indonesia', 
            'telepon1' => '0811237916', 
            'telepon2' => '081321455855', 
            'email1' => 'sihadenew@gmail.com', 
            'email2' => 'sihadeproduk@gmail.com', 
            'jamkerjamulai' => '9', 
            'jamkerjaselesai' => '16', 
        ]);

        Contactus::factory(13)->create();
      
    }



}
