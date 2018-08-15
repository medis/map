<?php

namespace medis\geomap;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class GeoController extends Controller
{
    public function add(string $address)
    {
        return view('geomap::map');
//        $key = 'clubs';
//        $lat = 51.393341;//51.471801;
//        $lon = -0.304079;//-0.244052;
//        $member = 'place2';
//        Redis::geoadd($key, $lon, $lat, $member);
        return [$key, $lat, $lon];
    }

    public function delete($id)
    {
        return [Redis::geodist('clubs', 'place1', 'place2', 'km')];
    }

}
