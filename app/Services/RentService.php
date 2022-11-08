<?php
namespace App\Services;

use App\Http\Requests\Rent\RentRequest;
use App\Models\AvailableCar;
use App\Models\CurrentCarRent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class RentService
{
    /**
     * Get list of availableCar
     * @return mixed
     */
    public function index(): Collection
    {
        return AvailableCar::where(['is_block' => 0])->get();
    }

    public function rent(RentRequest $request)
    {
        CurrentCarRent::create([
            'user_id' => $request->user()->id,
            'car_id' => $request->car_id
        ]);

        //disable car
        AvailableCar::where(['id' => $request->car_id])->update(['is_block' => 1]);

        return true;
    }

    public function finish()
    {

    }
}
