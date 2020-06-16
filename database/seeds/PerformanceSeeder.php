<?php

use App\Performance;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Performance::truncate();
        Performance::create(array('title' => 'Weapon Of Annie','description' => 'The nonchalant life of a woman might turn out differently as a neighbor enters her life.
The neighbor claims the woman is in for a treat this afternoon. Supposedly this strange person has discovered a way to unlock the hidden potentials of the brain and will show the whole town this afternoon, its not an event you want to miss. Believing both the situation and this neighbor, the woman oddly enthusiastically agrees to the proposal, surely this was the right choice to make, all of this has to have some truth to it.
But what if this neighbor speaks only lies. Or what if everything told is completely true. How could an ordinary woman end up in a situation like this. Time will tell.',
            'ticket_price' => 17.25));
        Performance::create(array('title' => 'Pilots Dream','description' =>
            'When a pilot from Krakow decides to to sell his soul to the devil, not everybody is supportive. However, his fortunes improve when his arch enemy reads an online guide. Eventually, the pilot realises that he has always been a worthwhile person and does not need to change.',
            'ticket_price' => 10.50));
        Performance::create(array('title' => 'Tower And a Watch','description' => 'The key to enternal life is making people think you are trusting.',
            'ticket_price' => 15.25));
        Performance::create(array('title' => 'Kitchen Story','description' => 'There are only three things in life that truly matter: cherry pie, breakfast and family. ',
            'ticket_price' => 18.00));
        Performance::create(array('title' => 'Prince of Ghauls','description' => 'The hero is a prince from Hamburg who has a particular interest in breakfast. The nemesis is a prince who smells really bad. The nemesis gets the upper hand by playing a dirty trick. ',
            'ticket_price' => 18.00));
        Performance::create(array('title' => 'Zombie World','description' => 'In a world where zombies are rude and reckless, one heiress has no choice but to release a pop song using a drawer full of old letters. Finally, the heiress has a meaningful chat with the zombies and they come to an amicable agreement.',
            'ticket_price' => 13.75));
     
        ;
    }
}
