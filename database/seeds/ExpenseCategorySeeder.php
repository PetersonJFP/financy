<?php

use Illuminate\Database\Seeder;
use App\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Alimentação', 'Transporte', 'Farmácia', 'Despesas Fixas', 'Pecuária', 'Estudo', 'Lazer'];
        foreach ($categories as $category) {
            $cat = new ExpenseCategory();
            $cat->name = $category;
            $cat->save();
        }
    }
}
