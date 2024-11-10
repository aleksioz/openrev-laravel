<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Models\Area;
use App\Models\Subarea;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'areas' => array_map(function ($area) {
                    return [
                        'id' => $area['id'],
                        'name' => $area['name'],
                        'subareas' => array_map(function ($subarea) {
                            return [
                                'id' => $subarea['id'],
                                'name' => $subarea['name'],
                            ];
                        }, Subarea::where('area_id', $area['id'])->get()->toArray())
                    ];
                }, Area::all()->toArray())
        ];
    }
}
