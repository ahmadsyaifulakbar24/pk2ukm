<?php

namespace App\Http\Controllers\API\Param;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictsCity\DistrictsCityResource;
use App\Http\Resources\Param\ParamResource;
use App\Models\DistrictsCity;
use App\Models\Param;
use App\Models\Province;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class GetParamController extends Controller
{
    public function province() 
    {
        $province = Province::all();
        return ResponseFormatter::success(
            $province,
            'success get data province'
        );
    }
    
    public function districts_city($province_id)
    {
        $districts_city = DistrictsCity::where('province_id', $province_id)->get();
        return ResponseFormatter::success(
            DistrictsCityResource::collection($districts_city),
            'success get data districts city'
        );

    }
    public function education()
    {
        $education = Param::where([['category_param', 'education'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($education),
            'success get education data'
        );
    }

    public function religion()
    {
        $religion = Param::where([['category_param', 'religion'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($religion),
            'success get religion data'
        );
    }

    public function business_status()
    {
        $business_status = Param::where([['category_param', 'business_status'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($business_status),
            'success get business status data'
        );
    }

    public function business_sector()
    {
        $business_sector = Param::where([['category_param', 'business_sector'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($business_sector),
            'success get business sector data'
        );
    }

    public function position_umkm()
    {
        $position_umkm = Param::where([['category_param', 'position_umkm'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($position_umkm),
            'success get position umkm data'
        );
    }

    public function type_koperasi()
    {
        $type_koperasi = Param::where([['category_param', 'type_koperasi'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($type_koperasi),
            'success get type koperasi data'
        );
    }

    public function position_koperasi()
    {
        $position_koperasi = Param::where([['category_param', 'position_koperasi'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($position_koperasi),
            'success get position koperasi data'
        );
    }

    public function training_needs()
    {
        $training_needs = Param::where([['category_param', 'training_needs'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($training_needs),
            'success get training needs data'
        );
    }

    public function training_type()
    {
        $training_type = Param::where([['category_param', 'training_type'], ['active', 1]])->orderBy('order', 'asc')->get();
        return ResponseFormatter::success(
            ParamResource::collection($training_type),
            'success get training type data'
        );
    }
}
