<?php
namespace classes;
require_once "classes/Point.php";
use classes\Point;

class Board
{
    private array $boardState;
    public function __construct(){
        $this->boardState = [];
        for($i = 1; $i <= 24; $i++){
            $this->boardState["$i"]=new Point();
        }
        //make initial position
        //1 - two reds
        $this->boardState["1"]->content[]=true;
        $this->boardState["1"]->content[]=true;
        //6 -  5 whites
        $this->boardState["6"]->content[]=false;
        $this->boardState["6"]->content[]=false;
        $this->boardState["6"]->content[]=false;
        $this->boardState["6"]->content[]=false;
        $this->boardState["6"]->content[]=false;
        // 8 - 3 whites
        $this->boardState["8"]->content[]=false;
        $this->boardState["8"]->content[]=false;
        $this->boardState["8"]->content[]=false;
        //12 - 5 reds
        $this->boardState["12"]->content[]=true;
        $this->boardState["12"]->content[]=true;
        $this->boardState["12"]->content[]=true;
        $this->boardState["12"]->content[]=true;
        $this->boardState["12"]->content[]=true;
        //13 - 5 w
        $this->boardState["13"]->content[]=false;
        $this->boardState["13"]->content[]=false;
        $this->boardState["13"]->content[]=false;
        $this->boardState["13"]->content[]=false;
        $this->boardState["13"]->content[]=false;
        //17 - 3 r
        $this->boardState["17"]->content[]=true;
        $this->boardState["17"]->content[]=true;
        $this->boardState["17"]->content[]=true;
        //19 - 5 r
        $this->boardState["19"]->content[]=true;
        $this->boardState["19"]->content[]=true;
        $this->boardState["19"]->content[]=true;
        $this->boardState["19"]->content[]=true;
        $this->boardState["19"]->content[]=true;
        //24 - 2 w
        $this->boardState["24"]->content[]=false;
        $this->boardState["24"]->content[]=false;
    }

    private function DrawBoard(){
        for ($i = 1; $i <= 6; $i++){
            $color = ($i % 2 == 0)?
                "green" :
                "darkgreen";
            echo
            <<<HTML
<div class="triangle-up" style="grid-area: t{$i}; transform: rotate(180deg); border-bottom: 15vw solid $color">            
</div>
<div class="triangle-up" style="grid-area: b{$i}; border-bottom: 15vw solid $color">            
</div>
HTML;

        }
    }
    public function MakeBoardHtml(){
        echo <<<HTML
        <div class="board" id="outer">
        HTML;
        $this->DrawBoard();
        echo "</div>";
        echo <<<HTML
        <div class="board" id="home">
        HTML;
        $this->DrawBoard();
        echo "</div>";
    }
}