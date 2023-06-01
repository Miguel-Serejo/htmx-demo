<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $speakers = collect([
            [
                'name' => 'Nuno Maduro',
                'talks' => [
                    1, 4, 8
                ],
            ],
            [
                'name' => 'Francisco Madeira',
                'talks' => [
                    1, 4
                ],
            ],
            [
                'name' => 'Caneco',
                'talks' => [
                    2, 8
                ],
            ],
            [
                'name' => 'Lucas Giovanny',
                'talks' => [
                    2, 6
                ],
            ],
            [
                'name' => 'André Varandas',
                'talks' => [
                    3
                ],
            ],
            [
                'name' => 'João Patrício',
                'talks' => [
                    3, 6
                ],
            ],
            [
                'name' => 'Tomas Votruba',
                'talks' => [
                    4
                ],
            ],
            [
                'name' => 'Wendell Adriel',
                'talks' => [
                    5
                ],
            ],
            [
                'name' => 'Freek Van der Herten',
                'talks' => [
                    5
                ],
            ],
            [
                'name' => 'David Adão',
                'talks' => [
                    7
                ],
            ],
            [
                'name' => 'José Postiga',
                'talks' => [
                    7
                ],
            ],
            [
                'name' => 'Miguel Serejo',
                'talks' => [
                    9
                ],
                ],
            [
                'name' => 'Leo França',
                'talks' => [
                    9
                ],
                ],
        ]);
        if ($request->input('search') === null) {
            return;
        }
        $results = $speakers->filter(function ($speaker) use ($request) {
            return str_contains(strtolower($speaker['name']), strtolower($request->input('search')));
        });
        return view('demos.search', [
            'results' => $results,
            'count' => $results->count(),
            'total' => $speakers->count(),
        ]);
    }
}
