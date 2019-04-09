<?php
namespace app;
use vendor\GoodRoom;

    class Room extends GoodRoom
    {
        public $color = 'red';

        public function setColor($newColor)
        {
            $this->color = $newColor;
        }
        public function getWindows()
        {
            return $this->windows;
        }
    }
