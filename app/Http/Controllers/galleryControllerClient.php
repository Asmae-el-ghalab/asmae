<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryControllerClient extends Controller
{
    public function index(Request $request)
    {
        $gender = $request->query('gender', 'all');

        $images = [
            // Images pour femmes
            ['url' => 'images/bride.jpeg', 'gender' => 'women', 'title' => 'Soin visage premium'],
            ['url' => 'images/les ciles V.jpeg', 'gender' => 'women', 'title' => 'Maquillage professionnel'],
            ['url' => 'images/nails-canvas.jpeg', 'gender' => 'women', 'title' => 'Soin anti-âge'],
            ['url' => 'images/nails-canvas2.jpeg', 'gender' => 'women', 'title' => 'Épilation parfaite'],
            ['url' => 'images/NNN.jpg', 'gender' => 'women', 'title' => 'Manucure élégante'],
            ['url' => 'images/hijab.jpg', 'gender' => 'women', 'title' => 'Soin hydratant intense'],
            ['url' => 'images/women7.jpg', 'gender' => 'women', 'title' => 'Coiffure de soirée'],
            ['url' => 'images/LL.jpg', 'gender' => 'women', 'title' => 'Coiffure de soirée'],
            ['url' => 'images/women8.jpg', 'gender' => 'women', 'title' => 'Massage relaxant'],
            ['url' => 'images/A1.jpg', 'gender' => 'women', 'title' => 'Beauté des mains'],
            ['url' => 'images/women10.jpg', 'gender' => 'women', 'title' => 'Soin éclat du visage'],
            ['url' => 'images/A6.jpg', 'gender' => 'women', 'title' => 'Style cheveux moderne'],
            ['url' => 'images/WWW.jpg', 'gender' => 'women', 'title' => 'Maquillage de mariage'],
            ['url' => 'images/women13.jpg', 'gender' => 'women', 'title' => 'Soin corps intégral'],
            ['url' => 'images/women14.jpg', 'gender' => 'women', 'title' => 'Épilation brésilienne'],
            ['url' => 'images/women15.jpg', 'gender' => 'women', 'title' => 'Beauté des pieds'],
            ['url' => 'images/A9.jpg', 'gender' => 'women', 'title' => 'Soin capillaire luxe'],
            ['url' => 'images/women17.jpg', 'gender' => 'women', 'title' => 'Mascara semi-permanent'],
            ['url' => 'images/women18.jpg', 'gender' => 'women', 'title' => 'Soin contour des yeux'],
            ['url' => 'images/A5.jpg', 'gender' => 'women', 'title' => ''],
            ['url' => 'images/A7.jpg', 'gender' => 'women', 'title' => ''],
            ['url' => 'images/A4.jpg', 'gender' => 'women', 'title' => ''],
            ['url' => 'images/A2.jpg', 'gender' => 'women', 'title' => ''],
            ['url' => 'images/A10.jpg', 'gender' => 'women', 'title' => ''],
                 ['url' => 'images/BBB.jpg', 'gender' => 'women', 'title' => ''],
                      ['url' => 'images/CCC.jpg', 'gender' => 'women', 'title' => ''],
                           ['url' => 'images/MMM.jpg', 'gender' => 'women', 'title' => ''],
            // Images pour hommes
           
          
            ['url' => 'images/men4.jpg', 'gender' => 'men', 'title' => 'Massage facial'],
            ['url' => 'images/men5.jpg', 'gender' => 'men', 'title' => 'Soin anti-fatigue'],
            ['url' => 'images/men6.jpg', 'gender' => 'men', 'title' => 'Épilation torse'],
           
            ['url' => 'images/men8.jpg', 'gender' => 'men', 'title' => 'Soin purifiant'],
            ['url' => 'images/men9.jpg', 'gender' => 'men', 'title' => 'Coupe classique'],
            ['url' => 'images/men10.jpg', 'gender' => 'men', 'title' => 'Modelage barbe'],
            ['url' => 'images/men11.jpg', 'gender' => 'men', 'title' => 'Soin mains homme'],
            ['url' => 'images/men12.jpg', 'gender' => 'men', 'title' => 'Massage relaxant'],
            ['url' => 'images/men13.jpg', 'gender' => 'men', 'title' => 'Tatouage éphémère'],
            ['url' => 'images/men14.jpg', 'gender' => 'men', 'title' => 'Soin cheveux secs'],
            ['url' => 'images/men15.jpg', 'gender' => 'men', 'title' => 'Dégradé professionnel'],
            ['url' => 'images/men16.jpg', 'gender' => 'men', 'title' => 'Soin après-rasage'],
       
                 ['url' => 'images/MEN61.jpeg', 'gender' => 'men', 'title' => ''],
                      ['url' => 'images/MEN62.jpeg', 'gender' => 'men', 'title' => ''],
                           ['url' => 'images/MEN63.jpeg', 'gender' => 'men', 'title' => ''],
                                ['url' => 'images/MEN64.jpg', 'gender' => 'men', 'title' => ''],
                 ['url' => 'images/MEN65.jpg', 'gender' => 'men', 'title' => ''], 
                   ['url' => 'images/MEN69.jpg', 'gender' => 'men', 'title' => ''],  
                     ['url' => 'images/MEN66.jpg', 'gender' => 'men', 'title' => ''],  
                       ['url' => 'images/MEN71.jpg', 'gender' => 'men', 'title' => ''],  
                         ['url' => 'images/MEN68.jpg', 'gender' => 'men', 'title' => ''],  
                           ['url' => 'images/MEN70.jpg', 'gender' => 'men', 'title' => ''],  
                             ['url' => 'images/MEN67.jpg', 'gender' => 'men', 'title' => ''],  
                               ['url' => 'images/MEN72.jpg', 'gender' => 'men', 'title' => ''],  
                                                     
        ];

        // Filtrage par genre si nécessaire
        if ($gender != 'all') {
            $images = array_filter($images, function ($img) use ($gender) {
                return $img['gender'] === $gender;
            });
        }

        return view('client.gallery.gallery', [
            'images' => $images,
            'gender' => $gender
        ]);
    }
}