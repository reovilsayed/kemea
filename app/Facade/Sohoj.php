<?php

namespace App\Facade;

use App\Models\Funcationality;
use App\Models\Package;
use App\Models\Plan;
use App\Models\Setting;
use Cart;
use TCG\Voyager\Facades\Voyager;

class Sohoj
{
  public function price($price)
  {

    $formatted_price = number_format($price, 2);
    return $formatted_price . " ₪";
  }
}
