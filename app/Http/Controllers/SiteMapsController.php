<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Sitemap;

class SiteMapsController extends Controller
{
    //

    public function index()
    {
      # code...
      Sitemap::addSitemap(route('index'));
      Sitemap::addSitemap(route('blog'));
      Sitemap::addSitemap(route('diseños'));
      Sitemap::addSitemap(route('servicios'));
      return Sitemap::xml();

    }
}
