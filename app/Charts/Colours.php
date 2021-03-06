<?php

namespace App\Charts;

class Colours
{
    public static function all()
    {
        return [
          "Aqua",
          "Aquamarine",
          "Bisque",
          "Blue",
          "BlueViolet",
          "Brown",
          "BurlyWood",
          "CadetBlue",
          "Chartreuse",
          "Chocolate",
          "Coral",
          "CornflowerBlue",
          "Crimson",
          "Cyan",
          "DarkBlue",
          "DarkCyan",
          "DarkGoldenRod",
          "DarkGreen",
          "DarkKhaki",
          "DarkMagenta",
          "DarkOliveGreen",
          "Darkorange",
          "DarkOrchid",
          "DarkRed",
          "DarkSalmon",
          "DarkSeaGreen",
          "DarkSlateBlue",
          "DarkSlateGrey",
          "DarkTurquoise",
          "DarkViolet",
          "DeepPink",
          "DeepSkyBlue",
          "DodgerBlue",
          "FireBrick",
          "ForestGreen",
          "Fuchsia",
          "Gold",
          "GoldenRod",
          "Green",
          "GreenYellow",
          "HoneyDew",
          "HotPink",
          "IndianRed",
          "Indigo",
          "LawnGreen",
          "LightBlue",
          "LightCoral",
          "LightCyan",
          "LightGreen",
          "LightPink",
          "LightSalmon",
          "LightSeaGreen",
          "LightSkyBlue",
          "LightSteelBlue",
          "Lime",
          "LimeGreen",
          "Maroon",
          "MediumAquaMarine",
          "MediumBlue",
          "MediumOrchid",
          "MediumPurple",
          "MediumSeaGreen",
          "MediumSlateBlue",
          "MediumSpringGreen",
          "MediumTurquoise",
          "MediumVioletRed",
          "MidnightBlue",
          "Navy",
          "Olive",
          "OliveDrab",
          "Orange",
          "OrangeRed",
          "Orchid",
          "PaleGreen",
          "PaleTurquoise",
          "PaleVioletRed",
          "PeachPuff",
          "Peru",
          "Pink",
          "Plum",
          "PowderBlue",
          "Purple",
          "Red",
          "RosyBrown",
          "RoyalBlue",
          "SaddleBrown",
          "Salmon",
          "SandyBrown",
          "SeaGreen",
          "Sienna",
          "SkyBlue",
          "SlateBlue",
          "SlateGray",
          "SlateGrey",
          "SpringGreen",
          "SteelBlue",
          "Tan",
          "Teal",
          "Tomato",
          "Turquoise",
          "Violet",
          "Wheat",
          "Yellow",
          "YellowGreen",
      ];
    }

    public static function random()
    {
        $index = array_rand(static::all());

        return static::all()[$index];
    }
}
