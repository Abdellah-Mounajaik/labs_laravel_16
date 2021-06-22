<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Newsletter;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
           
        $articles = Article::where('validate', 1)->where('trash', 0)->paginate(3)->fragment('articlepag');        
        $logos = Logo::all();
        $categorie = Categorie::all();
        $tag = Tag::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $commentaires = Commentaire::all();
        return view('pages.blog', compact('commentaires', 'logos', 'newsletter', 'categorie', 'tag', 'articles', 'footer'));
    }

    public function blogpost(Article $id){
        $articles = $id;
        $tags = Tag::all();
        $categories = Categorie::all();
        $commentaires = Commentaire::where('article_id', $articles->id)->where('validate', 1)->get();
        $logos = Logo::all();
        $footer = Footer::all();
        $newsletter = Newsletter::all();
        return view('pages.blogpost', compact('commentaires', 'articles','tags', 'categories', "logos", "footer", 'newsletter'));
    }

    public function categorie(Categorie $id){
        $cat = $id;
        $logos = Logo::all();
        $footer = Footer::all();
        $newsletter = Newsletter::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        $articles = Article::where('categorie_id', $cat->id)->get();
        return view('pages.categorie', compact("categories", "articles", 'tags', 'logos', 'footer', 'newsletter'));
    }

    public function tag(Tag $id){

        $categories = Categorie::all();

        $article = $id;
        $tags = Tag::all(); 
        $commentaire = Commentaire::all()->where('valide',1); 

        $logos = Logo::all();
        $articles = Article::where('validate', 1)->where('trash', 0);


        $newsletter = Newsletter::all();
        $footer = Footer::all();

        return view('pages.tag', compact('newsletter','blog',  "tags", 'categories', 'logos', 'article', 'commentaire', 'footer' ));


    }

    public function search(Request $request){
        $categorie = Categorie::all();
        $tag = Tag::all();
        // $q = $request->input();
        // $articles = Article::where('titre', 'LIKE', "%$q%")->get();
        $logos = Logo::all();
        $footer = Footer::all();
        $search = $request->search;
        $articles = Article::where('titre', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%")
                    ->get();


        return view('pages.blogrecherche', compact('categorie', 'tag', 'articles', 'logos', "footer"));
        // return redirect()->route('blog.index', compact('categories', 'tags', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
