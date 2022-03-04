<?php

namespace Database\Seeders;

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
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            SubSubCategorySeeder::class,
            ProductSeeder::class,
        ]);
        $this->call(AdminsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(MoneyHistsTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(ShipDistrictsTableSeeder::class);
        $this->call(ShipDivisionsTableSeeder::class);
        $this->call(ShipStatesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(SubSubCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
    }
}
