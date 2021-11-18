<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'croissant',
            'slug' => 'croissant',
            'details' => 'french bun and milk powder',
            'price' => 100,
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'black forest',
            'slug' => 'black forest',
            'details' => 'Authentic flavor',
            'price' => 400,
            'description' => ' be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'white forest',
            'slug' => 'white forest',
            'details' => 'belgian marble cake',
            'price' => 400,
            'description' => 'e distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'donut',
            'slug' => 'donut',
            'details' => 'fluffy on topped with choco syrup',
            'price' => 80,
            'description' => 'the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'brown bread',
            'slug' => 'brown bread',
            'details' => '1 kg home made brown bread',
            'price' => 120,
            'description' => 'r will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(2);
        Product::create([
            'name' => 'white milk bread',
            'slug' => 'white milk bread',
            'details' => '1 kg home made white bread',
            'price' => 100,
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(2);
        Product::create([
            'name' => 'lava cake',
            'slug' => 'lava cake',
            'details' => 'Hot lava cake with frosting Ice-cream',
            'price' => 500,
            'description' => 'ted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'cream roll',
            'slug' => 'cream roll',
            'details' => 'cheese cream roll',
            'price' => 250,
            'description' => 'ent of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'pancake',
            'slug' => 'pancake',
            'details' => 'pancake with maple syrup',
            'price' => 300,
            'description' => 'der will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'gajar halwa',
            'slug' => 'gajar halwa',
            'details' => 'premium halwa rich with flavor',
            'price' => 300,
            'description' => 'readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(5);
        Product::create([
            'name' => 'kalo jam',
            'slug' => 'kalo jam',
            'details' => 'premium sweets rich with flavor',
            'price' => 400,
            'description' => 'readabl when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'gulab jamun',
            'slug' => 'gulab jamun',
            'details' => 'premium sweets rich with indian flavor',
            'price' => 500,
            'description' => ' The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'belgian marble cake',
            'slug' => 'belgian marble cake',
            'details' => 'imported from belgium',
            'price' => 1100,
            'description' => 'out. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'swiss roll',
            'slug' => 'swiss roll',
            'details' => 'packed with cream and crusts',
            'price' => 100,
            'description' => 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'chocolate bread',
            'slug' => 'chocolate bread',
            'details' => 'bread with little bit of sugar, lots of chocolate',
            'price' => 700,
            'description' => 'readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(2);
        Product::create([
            'name' => 'cheese cake',
            'slug' => 'cheese cake',
            'details' => 'with cheese imported from australia',
            'price' => 1200,
            'description' => 'readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'bun',
            'slug' => 'bun',
            'details' => 'fluffy bun bread',
            'price' => 100,
            'description' => 'readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  making it look like readable English'
        ])->categories()->attach(2);
        Product::create([
            'name' => 'brownie',
            'slug' => 'brownie',
            'details' => 'chocolate-ee',
            'price' => 300,
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'suji halwa',
            'slug' => 'suji halwa',
            'details' => 'made with ghee',
            'price' => 300,
            'description' => 'sages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(5);
        Product::create([
            'name' => 'jalebi',
            'slug' => 'jalebi',
            'details' => 'topped with rabri',
            'price' => 500,
            'description' => 'but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'sugar curd',
            'slug' => 'sugar curd',
            'details' => 'from bogura',
            'price' => 800,
            'description' => ' but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'sour curd',
            'slug' => 'sour curd',
            'details' => 'special sour curd of puran-dhaka',
            'price' => 600,
            'description' => 'm available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'rosh malai',
            'slug' => 'rosh malai',
            'details' => 'authentic rosh-malai from cumilla',
            'price' => 900,
            'description' => 'have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'shandesh',
            'slug' => 'shandesh',
            'details' => 'special shandesh from mymensingh',
            'price' => 700,
            'description' => 'e majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'balish mishti',
            'slug' => 'balish mishti',
            'details' => 'authentic from Tangail',
            'price' => 800,
            'description' => 'majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'red velvet cake',
            'slug' => 'red velvet cake',
            'details' => 'specially made with care',
            'price' => 900,
            'description' => 'but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'butterscotch cake',
            'slug' => 'butterscotch cake',
            'details' => 'made with indian butterscotch flavor',
            'price' => 700,
            'description' => 'but the majority have suffered alteration in some form, by injected humour, or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(1);
        Product::create([
            'name' => 'dry cake',
            'slug' => 'dry cake',
            'details' => 'made with care',
            'price' => 400,
            'description' => ' or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(4);
        Product::create([
            'name' => 'kacha golla',
            'slug' => 'kacha golla',
            'details' => 'fresh from muktagacha',
            'price' => 700,
            'description' => ' or randomised words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);
        Product::create([
            'name' => 'sponge mishti',
            'slug' => 'sponge mishti',
            'details' => 'soft as you like',
            'price' => 500,
            'description' => 'words which do look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be sure there is anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.'
        ])->categories()->attach(3);

        

    }
}
