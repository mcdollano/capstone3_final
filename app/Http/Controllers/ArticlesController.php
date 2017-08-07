<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Articles;
use App\Tags;
use App\Comments;
use DB;
use App\User;
use Auth;

class ArticlesController extends Controller
{
    // ADMIN DISPLAY ARTICLES 

    function showArticles(){
    	$blogs = Articles::all();
    	$tags = Tags::all();
        
    	$comments = Comments::all();

    	return view('articles', compact('blogs','tags','comments'));
    }

    // HOME DISPLAY ARTICLES 

    function showArticles2(){
        $blogs = Articles::orderBy('created_at', 'desc')->paginate(5);
        $mostreads = Articles::orderBy('article_views', 'desc')->take(10)->get();
        $tags = Tags::all();
        $comments = Comments::all();

        //* footer *//

        $business_category_home = DB::table('articles')->where('category', '=', 'Franchising' )
            ->orwhere('category', '=', 'News and Events')
            ->take(5)->get();

        $startup_category_home = Articles::where("category",'Startup' )->take(5)->get();
        $career_category_home = Articles::where("category",'Career' )->take(5)->get();
        $leadership_category_home = Articles::where("category",'Leadership' )->take(5)->get();


        return view('display_articles', compact('blogs','tags','comments', 'mostreads','business_category_home', 'startup_category_home', 'career_category_home', 'leadership_category_home'));
    }

    // VIEW ARTICLE PAGE

   function viewArticles($id){
        $blogs = Articles::find($id);
        $mostreads = Articles::orderBy('article_views', 'desc')->take(10)->where('id','!=',$id)->get();
        $tags = Tags::find($id);
        $comments = Comments::all();

        return view('view_article', compact('blogs','tags','comments','mostreads'));
    }

    function editArticle(Request $request, $blog_id){
    	$article = Articles::find($blog_id);
    	$article->title = $request->input('edit_title');
  		$article->caption =$request->input('edit_content');
        $article->save();

       	return back();
    }

    function deleteArticle(Request $request, $blog_id){
    	$delete_article = Articles::find($blog_id);
    	$delete_article->delete();

    	return back();
    }
 
    function addArticle(Request $request) {

        $new_article = new Articles();
        $new_tag = new Tags();

        $new_article->user_id = Auth::user()->id;
        $new_article->title=$request->write_title;
        $new_article->caption=$request->write_caption;
        $new_article->category=$request->write_category;

        // INSERT IMAGE TO DB 

        $image = $request->write_banner_image;
        $filename = $request->write_title . "." . $image->getClientOriginalExtension();

        $image->move('uploads/banner_image/',$filename);
        $new_article->banner_image = 'uploads/banner_image/' . $filename;

        $new_article->content=$request->write_content;
        $new_article->save();

        // ** ----  Insert Tags  --------- ** //
        $tags_array =  explode(', ', $request->write_tags);
        
        foreach ($tags_array as $tag) {
            if (Tags::where("tag_name", $tag)->count()){
                $new_tag = Tags::where("tag_name", $tag)->first();

            } else {
                $new_tag = new Tags();
                $new_tag->tag_name = $tag;
                $new_tag->save();
            }

             $new_article->addTag($new_tag->id); 

        }         
               
        return back();
    }

    function show_dashboard() {
        $blogs = Articles::all();
        $total_posts = DB::table('articles')->count('id');
        $total_users = DB::table('users')->count('id');
        $tags = Tags::all();
        $comments = Comments::all();

        return view('dashboard', compact('blogs','tags','comments', 'total_posts', 'total_users'));
    }

    function show_category_business() {

        // BUSINESS CATEGORY

        $business_category_first = Articles::where("category",'Franchising' )->first();
       
        $business_category_all = DB::table('articles')->where('category', '=', 'Franchising' )
            ->orwhere('category', '=', 'News and Events')
            ->get();

        $mostreads = Articles::orderBy('article_views', 'desc')->take(5)->get();

        return view('display_business_category', compact('business_category_first', 'business_category_all', 'mostreads'));
    }

    function show_category_startup() {

    // STARTUP CATEGORY     

        $startup_category_first = Articles::where("category",'Startup' )->first();

        $startup_category_all = Articles::where("category",'Startup' )->get();

        $mostreads = Articles::orderBy('article_views', 'desc')->take(5)->get();

        return view('display_startup_category', compact('startup_category_first', 'startup_category_all', 'mostreads'));

    }

     function show_category_career() {

    // CAREER CATEGORY     

        $career_category_first = Articles::where("category",'Career' )->first();

        $career_category_all = Articles::where("category",'Career' )->get();

        $mostreads = Articles::orderBy('article_views', 'desc')->take(5)->get();

        return view('display_career_category', compact('career_category_first', 'career_category_all', 'mostreads'));

    }

    function show_category_leadership() {

    // LEADERSHIP CATEGORY     

        $leadership_category_first = Articles::where("category",'Leadership' )->first();

        $leadership_category_all = Articles::where("category",'Leadership' )->get();

        $mostreads = Articles::orderBy('article_views', 'desc')->take(5)->get();

        return view('display_leadership_category', compact('leadership_category_first', 'leadership_category_all', 'mostreads'));

    }

    function search(Request $request) {

        $search = $request->search_bar;

        $search_article=DB::table('articles')->
            where('category', 'like', '%'. $search .'%')
            ->orwhere('title', 'like', '%'. $search .'%')
            ->orwhere('content', 'like', '%'. $search .'%')
            ->get();

        $search_count=$search_article->count();

        $mostreads = Articles::orderBy('article_views', 'desc')->take(5)->get();

        return view('search_result', compact('search_article', 'search','search_count', 'mostreads'));
        
    }






  
}
