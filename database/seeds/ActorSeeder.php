<?php

use App\Actor;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Actor::truncate();
        Actor::create(array('name' => 'Alise','surname' => 'Kalnina','favourite_saying' => 'The man who alters his way of thinking to suit others is a fool.'));
        Actor::create(array('name' => 'Gregs','surname' => 'Holkombs','favourite_saying' => 'Without deviation from the norm, progress is not possible.'));
        Actor::create(array('name' => 'Anna','surname' => 'Goisa','favourite_saying' => 'Heard melodies are sweet, but those unheard, are sweeter.'));
        Actor::create(array('name' => 'Nikolass','surname' => 'Tailers','favourite_saying' => 'Truth is neither ojectivity nor the balanced view; truth is a selfless subjectivity.'));
        Actor::create(array('name' => 'Rudolfs','surname' => 'Berzins','favourite_saying' => 'To stay or to go, it amounted to the same thing.'));
        Actor::create(array('name' => 'Lauris','surname' => 'Brikmanis','favourite_saying' => 'Nothing is necessitated whose opposite is possible.'));
        Actor::create(array('name' => 'Arnis','surname' => 'Lielkalns','favourite_saying' => 'Let no one delay the study of philosophy while young nor weary of it when old.'));
        Actor::create(array('name' => 'Robina','surname' => 'Kampena','favourite_saying' => 'In football everything is complicated by the presence of the opposite team.'));
       
    }
}
