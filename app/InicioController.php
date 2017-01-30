<?php

namespace App\Http\Controllers;


use Artesaos\SEOTools\Facades\SEOMeta;
use SEO;
use Illuminate\Http\Request;
use App\Http\Requests;

class InicioController extends Controller
{
    public function index(){
        SEO::setDescription('Proteina, creatina y glutamina de muy alta calidad productos “Bulk”, suplementos tipo industrial de grado farmacéutico USP (United States Pharmacopeia)');
        SEO::setCanonical('https://pure-bulk.com');
        SEO::addImages(['url' => 'http://image.url.com/cover.jpg']);
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::opengraph()->setUrl('http://pure-bulk.com');
        SEO::twitter()->setSite('@Pure_Bulk');
        SEOMeta::addKeyword(['proteina', 'glutamina', 'creatina', 'protein', 'glutamine', 'creatine']);
       
        return view('app.inicio');
    }
    
}
