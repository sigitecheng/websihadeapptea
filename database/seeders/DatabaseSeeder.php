<?php

namespace Database\Seeders;

use App\Models\Beranda;
use App\Models\Berkas;
use App\Models\User;
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
            'gambar' => 'profil/slide1.jpg'    
        ]);
        
        Beranda::create([
            'judul'  => 'At Sihade Organic Farm, visitors can experience the joy of farm life through various educational programs and hands-on activities. The farm offers workshops on organic gardening, composting, and permaculture, allowing individuals and families to learn sustainable practices that can be applied at home. Additionally, guided tours provide insight into the daily operations of the farm, showcasing the importance of responsible farming and the connection between food production and community well-being.',
            'gambar' => 'profil/slide2.jpg'    
        ]);
        
        Beranda::create([
            'judul'  => '
            The farm also emphasizes the significance of farm-to-table initiatives by selling fresh, organic produce directly to consumers.
            By participating in local farmers markets and creating a subscription-based vegetable box service, Sihade Organic Farm strengthens the local food system and promotes healthy eating habits. 
            This direct connection between producers and consumers fosters a sense of community, encouraging people to make informed choices about their food and support sustainable agriculture.
            ' ,
            'gambar' => 'profil/slide3.jpg'    
        ]);
        
        Berkas::create([
            'brosur' => 'berkas/brosursihade.pdf',    
            'daftarmerk' => 'berkas/daftarmerk.pdf',    
            'nib' => 'berkas/nib.pdf',    
            'suratsihade' => 'berkas/suratsihade.pdf',    
        ]);
      
    }



}
