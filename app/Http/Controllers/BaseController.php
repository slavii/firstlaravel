<?php

namespace App\Http\Controllers;

use App\Services\BodyService;
use App\Services\CarMakeService;
use App\Services\CarModelService;
use App\Services\CarService;
use App\Services\ColorService;
use App\Services\ConditionService;
use App\Services\DoorService;
use App\Services\EquipmentService;
use App\Services\FuelService;
use App\Services\GearService;
use App\Services\ImageService;
use App\Services\RegionService;
use App\Validators\CarValidator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $carMakeService;
    protected $carModelService;
    protected $fuelService;
    protected $gearService;
    protected $conditionService;
    protected $bodyService;
    protected $colorService;
    protected $regionService;
    protected $equipmentService;
    protected $doorService;
    protected $carService;
    protected $imageService;

    protected $carValidator;

    public function __construct(CarMakeService $cms,
                                CarModelService $cmos,
                                FuelService $fs,
                                GearService $gs,
                                ConditionService $cs,
                                BodyService $bs,
                                ColorService $cols,
                                RegionService $rs,
                                EquipmentService $es,
                                DoorService $ds,
                                CarService $carserv,
                                ImageService $is,
                                CarValidator $carVal)
    {
        $this->carMakeService = $cms;
        $this->carModelService = $cmos;
        $this->fuelService = $fs;
        $this->gearService = $gs;
        $this->conditionService = $cs;
        $this->bodyService = $bs;
        $this->colorService = $cols;
        $this->regionService = $rs;
        $this->equipmentService = $es;
        $this->doorService = $ds;
        $this->carService = $carserv;
        $this->imageService = $is;
        $this->carValidator = $carVal;
    }
}