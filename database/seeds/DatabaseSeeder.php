<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(\App\User::class,1)->create(
            [
            'name' => 'alex',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),

            ]
        );

        factory(App\User::class,50)->create()
        ->each(function(\App\User $u){

            factory(\App\Employee::class ,1)->create(['users_id'=>$u->id]);

        });

        factory(App\User::class,50)->create()
        ->each(function(\App\User $u){

            factory(\App\Customer::class ,1)->create(['users_id'=>$u->id]);

        });

        factory(App\Wholeseller::class,20)->create();

        factory(App\Brand::class,5)->create();

        factory(App\Category::class,30)->create();

        factory(App\Material::class,30)->create();

        factory(App\TypeClothe::class,30)->create();

        factory(App\Color::class,30)->create();

        factory(App\Size::class,30)->create();

        factory(App\ClotheModel::class,30)->create();

        factory(App\ClotheMaterial::class,30)->create();

        factory(App\ModelPicture::class,20)->create();

        factory(App\ModelOffert::class,30)->create();

        factory(App\Clothe::class,30)->create();

        factory(App\ClothePicture::class,30)->create();

        factory(App\Travel::class,30)->create();

        factory(App\ContactType::class,30)->create();

        factory(App\Contact::class,30)->create();

        factory(App\Purchase::class,30)->create();

        factory(App\PurchaseDetail::class,30)->create();

        factory(App\SaleStatus::class,30)->create();

        factory(App\Sale::class,30)->create();

        factory(App\SaleDetail::class,30)->create();

        factory(App\Banner::class,10)->create();

        factory(App\Slide::class,10)->create();

        factory(App\Like::class,30)->create();

    }

}
