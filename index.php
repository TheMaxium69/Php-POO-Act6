<?php

class Guerrier{
    public function attaquer(){
        return "Le guerrier donne un coup de point";
    }
}


class Archer extends Guerrier{
    public function attaquer(){
        return "L'archer tire une fleche a distance";
    }
}

class Magicien extends Guerrier{
    public function attaquer(){
        return "Le magicien lance une boule de feu";
    }
}

$legolas = new Archer();
$gandalf = new Magicien();

echo $legolas->attaquer() . "<br>";
echo $gandalf->attaquer() . "<br>";
