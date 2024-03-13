<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produit = new Produit();
        $produit->nom = "T-shirt cafe";
        $produit->prix_ht = 25;
        $produit->description = "T-shirt avec du cafe";
        $produit->photo = "tshirt-cafe.png";
        $produit->save();

        $produit1 = new Produit();
        $produit1->nom = "T-shirt padre";
        $produit1->prix_ht = 40.5;
        $produit1->description = "T-shirt avec padre";
        $produit1->photo = "tshirt-lepadre.png";
        $produit1->save();

        $produit2 = new Produit();
        $produit2->nom = "caleçon";
        $produit2->prix_ht = 23;
        $produit2->description = "caleçon upcyclé";
        $produit2->photo = "calecon-upcycle.png";
        $produit2->save();


        $produit3 = new Produit();
        $produit3->nom = "chausette-ukr";
        $produit3->prix_ht = 13;
        $produit3->description = "chausette stand up for ukr";
        $produit3->photo = "chausette-ukr.png";
        $produit3->save();
    }
}
