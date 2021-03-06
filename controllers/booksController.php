<?php
  require_once('models/book.php');

  class booksController extends Controller {

    public function index() {  
      #return view('book/index' ,
       # ['books'=>book::all(),
      # 'title'=>'Book List']
    #  );
    $book = DB::table('book')->get();
      return view('book/index', ['title'=>'Books List','books' => $book]);
    }

    public function show($id) {
      $bok = DB::table('book')->find($id);
      return view('book/show',
        ['book'=>$bok,
         'title'=>'Book Detail',
         'show'=>true,'create'=>false,'edit'=>false]);
    }
    public function create() {
      $book = ['title'=>'','edition'=>'',
                 'copyright'=>'','language'=>'','pages'=>'','author'=>'',
                 'author_id'=>'','publisher'=>'','publisher_id'=>''];
      return view('book/show',
        ['title'=>'Book Create','book'=>$book,
        'show'=>false,'create'=>true,'edit'=>false]);
    }  

    public function store() {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $author_id = Input::get('author_id');
      $publisher = Input::get('publisher');
      $publisher_id = Input::get('publisher_id');  
      $item = ['title'=>$title,'edition'=>$edition,'copyright'=>$copyright,
               'language'=>$language,'pages'=>$pages,'author'=>$author,'author_id'=>$author_id,'publisher'=>$publisher,'publisher_id'=>$publisher_id];
      DB::table('book')->insert($item);
      return redirect('/book');
    }  

    public function edit($id) {
      $book = DB::table('book')->find($id);
      return view('book/show',
        ['book'=>$book,
         'title'=>'Book Edit',
         'show'=>false,'create'=>false,'edit'=>true]);
    }  

    public function update($_,$id) {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $author_id = Input::get('author_id');
      $publisher = Input::get('publisher');
      $publisher_id = Input::get('publisher_id');  
      $item = ['title'=>$title,'edition'=>$edition,'copyright'=>$copyright,
               'language'=>$language,'pages'=>$pages,'author'=>$author,'author_id'=>$author_id,'publisher'=>$publisher,'publisher_id'=>$publisher_id];
      
      DB::table('book')->update($id,$item);
      return redirect('/book');
    }  

    public function destroy($id) {  
      DB::table('book')->delete($id);
      return redirect('/book');
    }


  }
?>