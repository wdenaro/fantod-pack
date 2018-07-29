<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{


    public function showCard($id = null)
    {
        //  Call function to build the Multi-Dimmensional Array of Card data
            $cards = $this->getAllCards();

            if (!isset($id)) {
                /*  If the route did not provide a specific ID, then we pick a random
                    card from the $cards Array. */
                    $index = mt_rand(1, $cards->count()) -1;

            } else {
                /*  Otherwise, call function to determine position of specific card in
                    the $cards array. Will return NULL if valid card is not was not found
                    within data. */
                    $index = $this->getPosition($id, $cards); 
            }

        if (is_null($index)) {
            //  If specific card ID was not found, send user to an 'Oops' view.
                return view ('oops', compact('id'));

        } else {
            /*  If specific card ID -or- a random index was chosen, we move forward building
                data variables for a specific card. */
                $title = $cards[$index]->title;
                $id = $cards[$index]->id;
                $src = $cards[$index]->image_name;
            
            DB::update("UPDATE `fantodPack_cards` SET `feature` = NULL");
            DB::update("UPDATE `fantodPack_cards` SET `feature` = 1 WHERE `id` = $id");

            /*  This includes making an additional DB call, to get the terms that belong to
                this specific card. */
                $terms = DB::table('fantodPack_terms')
                    ->where('parent_id', $id)
                    ->get();

            /*  Once we have all the data for a specific card, send it all to the view
                that can display the card. Bob's your uncle!*/
                return view('cards', compact('title', 'id', 'src', 'terms'));
        }
    }

    
    protected function getAllCards()
    {
        //  Returns an Array of Key->Value pairs for each card found in the database.
            $cards = DB::table('fantodPack_cards')
                ->whereNotNull('image_name')
                ->get();
        
            return $cards;
    }


    protected function getPosition($id, $cards)
    {
        /*  Returns the index (position) of a specific card ID, -or- if the card ID is not
            valid, will return NULL. */
            $index = NULL;
            $length = count($cards);

            for ($n = 0; $n < $length; $n++) {
                if ($cards[$n]->id == $id) {
                    $index = $n;
                    break 1;
                }
            }

            return $index;
    }


}
