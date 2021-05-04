<?php
  require_once('models/publisher.php');

  class publisherController extends Controller {

    public function index() {  
     # return view('publishers/index',
     # ['publisher'=>publisher::all(),
     # 'title'=>'Publisher List']);
     $publisher = DB::table('publisher')->get();
      return view('publishers/index', ['title'=>'Publisher List','publisher' => $publisher]);
    }
    public function show($id) {
      $publisher = DB::table('publisher')->find($id);
      return view('publishers/show',
       ['publisher'=>$publisher,
      'title'=>'Publisher Detail',
      'show'=>true,'create'=>false,'edit'=>false]);
    }
    public function create() {
      $publisher = ['publisher'=>'','country'=>'',
                 'founded'=>'','genere'=>''];
      return view('publishers/show',
        ['title'=>'Publisher Create',
        'publisher'=>$publisher,
        'show'=>false,'create'=>true,'edit'=>false]);
    }  

    public function store() {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,'founded'=>$founded,
               'genere'=>$genere];
      DB::table('publisher')->insert($item);
      return redirect('/publisher');
    }  

    public function edit($id) {
      $publisher = DB::table('publisher')->find($id);
      return view('publishers/show',
        ['publisher'=>$publisher,
         'title'=>'Publisher Edit','show'=>false,'create'=>false,'edit'=>true]);
    }  

    public function update($_,$id) {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,'founded'=>$founded,
               'genere'=>$genere];
      DB::table('publisher')->update($id,$item);
      return redirect('/publisher');
    }  

    public function destroy($id) {  
      DB::table('publisher')->delete($id);
      return redirect('/publisher');
    }
  }
?>