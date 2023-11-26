<?php

namespace App\Http\Controllers;

class SeriesController {
    public function listSeries()
    {
        $series = [
            'punisher',
            'Lost',
            'Grey\'s Anatomy',
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        echo $html;
    }

}
