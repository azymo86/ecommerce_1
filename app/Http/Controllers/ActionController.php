<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ToolsController;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index()
    {
        $tools  = new ToolsController;
        $data   = $tools->sendRequest(123);

        $out  = (object)$data;

        if ($data['success'] = true) {
            // return view('cust_page.landing', ['datas'=>$data]);
            return view('cust_page.landing', ['datas'=>$out]);
        } else {
            return $data['message'];
        }
    }

    public function landing()
    {
      // image_carousel
      $imgCarousel = (object) array(
        'indicator' => true,
        'control' => false,
        'src' => array(
          '/uploads/img/carousel-3.jpg',
          '/uploads/img/carousel-1.png',
          '/uploads/img/carousel-2.jpg',
        ),
      );

      // kategori_menu
      for ($i=0; $i < 1; $i++) {
        $kategori[] = (object) array(
          'name' => 'Sayuran',
          'src' => '/uploads/img/icon_fruits.jpg',
          'href' => '#',
        );
        $kategori[] = (object) array(
          'name' => 'Buah-buahan',
          'src' => '/uploads/img/icon_donation.png',
          'href' => '#',
        );
        $kategori[] = (object) array(
          'name' => 'Perdagingan',
          'src' => '/uploads/img/icon_location.png',
          'href' => '#',
        );
        $kategori[] = (object) array(
          'name' => 'Perikanan',
          'src' => '/uploads/img/icon_donation.png',
          'href' => '#',
        );
        $kategori[] = (object) array(
          'name' => 'Rempah',
          'src' => '/uploads/img/icon_location.png',
          'href' => '#',
        );
        $kategori[] = (object) array(
          'name' => 'Protein',
          'src' => '/uploads/img/icon_fruits.jpg',
          'href' => '#',
        );
      }

      // paket_menu
      for ($i=0; $i < 1; $i++) {
        $paket[] = (object) array(
          'name' => 'Sayur Lodeh',
          'img' => '/uploads/img/prod-lodeh.jpg',
          'href' => '#',
        );
        $paket[] = (object) array(
          'name' => 'Sayur Asem',
          'img' => '/uploads/img/prod-asem.jpg',
          'href' => '#',
        );
        $paket[] = (object) array(
          'name' => 'Opor Ayam',
          'img' => '/uploads/img/prod-opor.jpg',
          'href' => '#',
        );
      }

      $out = (object) array(
        'img_carousel' => $imgCarousel,
        'kategori_menu' => (object) $kategori,
        'paket_menu' => (object) $paket,
      );

      return view('cust_page.landing', ['datas'=>$out]);
    }

    public function aboutus()
    {
      $sosmed = (object) array(
        0 => array(
          'name' => 'instagram',
          'account' => 'Blanja',
          'link' => "https://www.instagram.com/aminnur.ikhsan/",
        ),
        1 => array(
          'name' => 'facebook',
          'account' => 'Blanja',
          'link' => "https://www.instagram.com/aminnur.ikhsan/",
        ),
        2 => array(
          'name' => 'twitter',
          'account' => 'Blanja',
          'link' => "https://www.instagram.com/aminnur.ikhsan/",
        ),
        3 => array(
          'name' => 'linkedin',
          'account' => 'Blanja',
          'link' => "https://www.instagram.com/aminnur.ikhsan/",
        ),
      );

      $contact = (object) array(
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'address' => 'Jl. Lalala Blok M No. 8, Kota Raya (14045)',
        'email' => 'info@blanja.com',
        'phone' => '081227176168',
      );

      $out = (object) array(
        'success' => true,
        'contact' => $contact,
        'sosmed' => $sosmed,
      );
      dump($out);

      return view('cust_page.aboutus', ['datas'=>$out]);
    }

}
