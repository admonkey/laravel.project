<?php

namespace App\Http\Controllers;

use DB;

use App\Card;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{

  public function index()
  {
          //$cards = DB::table('cards')->get();
          //$cards = \App\Card::all();
          $cards = Card::all();
          return view('cards.index', compact('cards'));
  }

//   //public function show($card)
//   public function show($id)
//   {
//           //return $card;
//           $card = Card::find($id);
//           //return $card;
//           return view('cards.show', compact('card'));
//   }

  // * type hinted *
  public function show(Card $card)
  {
          //return $card;
          return view('cards.show', compact('card'));
  }

}
