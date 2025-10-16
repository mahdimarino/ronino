<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gsm;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Sample product data with realistic mobile/tech products
        $products = [
            [
                'title' => 'iPhone 15 Pro Max',
                'description' => 'Latest Apple iPhone with A17 Pro chip and titanium design',
                'prix' => 1299,
                'product_code' => 'IP15PM-256GB',
                'status' => 'stock',
                'tags' => 'apple,iphone,premium,5g'
            ],
            [
                'title' => 'Samsung Galaxy S24 Ultra',
                'description' => 'Flagship Samsung smartphone with S Pen and advanced AI features',
                'prix' => 1199,
                'product_code' => 'SGS24U-512GB',
                'status' => 'store',
                'tags' => 'samsung,android,flagship,spen'
            ],
            [
                'title' => 'Google Pixel 8 Pro',
                'description' => 'Google\'s premium smartphone with best-in-class camera',
                'prix' => 999,
                'product_code' => 'GP8P-128GB',
                'status' => 'stock',
                'tags' => 'google,android,camera,ai'
            ],
            [
                'title' => 'OnePlus 12',
                'description' => 'High-performance smartphone with Snapdragon 8 Gen 3',
                'prix' => 799,
                'product_code' => 'OP12-256GB',
                'status' => 'stock',
                'tags' => 'oneplus,android,performance,fast-charging'
            ],
            [
                'title' => 'Xiaomi 14 Pro',
                'description' => 'Xiaomi flagship with Leica camera partnership',
                'prix' => 899,
                'product_code' => 'XM14P-256GB',
                'status' => 'store',
                'tags' => 'xiaomi,leica,android,flagship'
            ],
            [
                'title' => 'iPhone 14',
                'description' => 'Previous generation iPhone with excellent value',
                'prix' => 699,
                'product_code' => 'IP14-128GB',
                'status' => 'stock',
                'tags' => 'apple,iphone,budget,5g'
            ],
            [
                'title' => 'Samsung Galaxy A54',
                'description' => 'Mid-range Samsung with excellent AMOLED display',
                'prix' => 449,
                'product_code' => 'SGA54-128GB',
                'status' => 'stock',
                'tags' => 'samsung,midrange,amoled,value'
            ],
            [
                'title' => 'Google Pixel 7a',
                'description' => 'Affordable Pixel with flagship-level camera',
                'prix' => 499,
                'product_code' => 'GP7A-128GB',
                'status' => 'store',
                'tags' => 'google,budget,camera,android'
            ],
            [
                'title' => 'Nothing Phone 2',
                'description' => 'Unique design with glyph interface and transparent back',
                'prix' => 599,
                'product_code' => 'NP2-256GB',
                'status' => 'stock',
                'tags' => 'nothing,unique,design,android'
            ],
            [
                'title' => 'Asus ROG Phone 8',
                'description' => 'Gaming smartphone with high refresh rate and cooling system',
                'prix' => 1099,
                'product_code' => 'AROG8-512GB',
                'status' => 'store',
                'tags' => 'asus,gaming,performance,rog'
            ],
            [
                'title' => 'iPhone 13 Mini',
                'description' => 'Compact iPhone with powerful performance',
                'prix' => 599,
                'product_code' => 'IP13MINI-128GB',
                'status' => 'stock',
                'tags' => 'apple,compact,iphone,5g'
            ],
            [
                'title' => 'Samsung Galaxy Z Flip5',
                'description' => 'Foldable flip smartphone with compact design',
                'prix' => 999,
                'product_code' => 'SGZFLIP5-256GB',
                'status' => 'store',
                'tags' => 'samsung,foldable,compact,premium'
            ],
            [
                'title' => 'Motorola Edge 40',
                'description' => 'Sleek design with curved display and fast charging',
                'prix' => 549,
                'product_code' => 'ME40-128GB',
                'status' => 'stock',
                'tags' => 'motorola,curved,display,fast-charge'
            ],
            [
                'title' => 'Oppo Find X6 Pro',
                'description' => 'Oppo flagship with Hasselblad camera system',
                'prix' => 949,
                'product_code' => 'OFX6P-256GB',
                'status' => 'store',
                'tags' => 'oppo,hasselblad,camera,flagship'
            ],
            [
                'title' => 'Vivo X100 Pro',
                'description' => 'Vivo flagship with Zeiss optics and Dimensity chip',
                'prix' => 899,
                'product_code' => 'VX100P-256GB',
                'status' => 'stock',
                'tags' => 'vivo,zeiss,camera,performance'
            ],
            [
                'title' => 'iPhone SE 2022',
                'description' => 'Budget iPhone with A15 chip and Touch ID',
                'prix' => 429,
                'product_code' => 'IPSE3-64GB',
                'status' => 'stock',
                'tags' => 'apple,budget,compact,touchid'
            ],
            [
                'title' => 'Samsung Galaxy S23 FE',
                'description' => 'Fan edition of Samsung flagship with excellent features',
                'prix' => 599,
                'product_code' => 'SGS23FE-128GB',
                'status' => 'store',
                'tags' => 'samsung,fan-edition,value,flagship'
            ],
            [
                'title' => 'Google Pixel Fold',
                'description' => 'Google\'s first foldable smartphone',
                'prix' => 1799,
                'product_code' => 'GPF-256GB',
                'status' => 'stock',
                'tags' => 'google,foldable,premium,android'
            ],
            [
                'title' => 'OnePlus Nord 3',
                'description' => 'Mid-range OnePlus with flagship-level performance',
                'prix' => 499,
                'product_code' => 'OPN3-128GB',
                'status' => 'stock',
                'tags' => 'oneplus,midrange,performance,value'
            ],
            [
                'title' => 'Xiaomi Redmi Note 13 Pro',
                'description' => 'Popular mid-ranger with 200MP camera',
                'prix' => 399,
                'product_code' => 'XRN13P-128GB',
                'status' => 'store',
                'tags' => 'xiaomi,redmi,midrange,camera'
            ],
            [
                'title' => 'iPhone 15 Plus',
                'description' => 'Large display iPhone with all-day battery',
                'prix' => 899,
                'product_code' => 'IP15PLUS-128GB',
                'status' => 'stock',
                'tags' => 'apple,large,battery,iphone'
            ],
            [
                'title' => 'Samsung Galaxy A34',
                'description' => 'Budget Samsung with IP67 rating and good cameras',
                'prix' => 349,
                'product_code' => 'SGA34-128GB',
                'status' => 'store',
                'tags' => 'samsung,budget,waterproof,value'
            ],
            [
                'title' => 'Nothing Phone 2a',
                'description' => 'Budget version of Nothing Phone with unique design',
                'prix' => 349,
                'product_code' => 'NP2A-128GB',
                'status' => 'stock',
                'tags' => 'nothing,budget,design,android'
            ],
            [
                'title' => 'Asus Zenfone 10',
                'description' => 'Compact flagship with powerful specs',
                'prix' => 699,
                'product_code' => 'AZ10-128GB',
                'status' => 'store',
                'tags' => 'asus,compact,flagship,performance'
            ],
            [
                'title' => 'Motorola Razr 40 Ultra',
                'description' => 'Foldable flip phone with large cover display',
                'prix' => 999,
                'product_code' => 'MR40U-256GB',
                'status' => 'stock',
                'tags' => 'motorola,foldable,retro,premium'
            ],
            [
                'title' => 'Oppo Reno 10 Pro',
                'description' => 'Sleek design with periscope telephoto camera',
                'prix' => 599,
                'product_code' => 'OR10P-256GB',
                'status' => 'store',
                'tags' => 'oppo,sleek,camera,design'
            ],
            [
                'title' => 'Vivo V29 Pro',
                'description' => 'Focus on portrait photography and sleek design',
                'prix' => 549,
                'product_code' => 'VV29P-128GB',
                'status' => 'stock',
                'tags' => 'vivo,portrait,camera,design'
            ],
            [
                'title' => 'Realme GT 3',
                'description' => 'Performance-focused with 240W fast charging',
                'prix' => 649,
                'product_code' => 'RGT3-256GB',
                'status' => 'store',
                'tags' => 'realme,performance,fast-charge,gaming'
            ],
            [
                'title' => 'Tecno Camon 20 Pro',
                'description' => 'Budget smartphone with emphasis on camera quality',
                'prix' => 299,
                'product_code' => 'TC20P-128GB',
                'status' => 'stock',
                'tags' => 'tecno,budget,camera,value'
            ],
            [
                'title' => 'Infinix Zero 30',
                'description' => 'Affordable smartphone with 4K selfie camera',
                'prix' => 329,
                'product_code' => 'IZ30-256GB',
                'status' => 'store',
                'tags' => 'infinix,budget,selfie,camera'
            ]
        ];

        // Get categories and GSMs
        $categories = Category::all();
        $gsms = Gsm::all();

        if ($categories->isEmpty() || $gsms->isEmpty()) {
            $this->command->error('Please seed categories and GSMs first!');
            return;
        }

        // Sample image URLs (you can replace these with actual product image URLs)
        $sampleImageUrls = [
            'https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?w=500',
            'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500',
            'https://images.unsplash.com/photo-1583394838336-acd977736f90?w=500',
        ];

        foreach ($products as $productData) {
            // Create product
            $product = Product::create([
                'title' => $productData['title'],
                'description' => $productData['description'],
                'prix' => $productData['prix'],
                'product_code' => $productData['product_code'],
                'category_id' => $categories->random()->id,
                'gsm_id' => $gsms->random()->id,
                'status' => $productData['status'],
                'tags' => $productData['tags'],
            ]);

            $this->command->info("Created product: {$productData['title']}");

            // For demo purposes, we'll skip actual image download
            // But you can implement image download like this:
            
            try {
                $imageUrl = $sampleImageUrls[array_rand($sampleImageUrls)];
                $imageContent = file_get_contents($imageUrl);
                $imageName = 'product_' . $product->id . '_' . time() . '.jpg';
                $path = 'public/images/' . $imageName;
                
                Storage::put($path, $imageContent);
                
                $product->images()->create([
                    'image_path' => $path,
                ]);
            } catch (\Exception $e) {
                $this->command->error("Failed to download image for product {$product->id}: " . $e->getMessage());
            }
            
        }

        $this->command->info('Successfully seeded 30 products!');
    }
}
