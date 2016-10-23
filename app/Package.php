<?php namespace App;

use App\Output\Presenter\PackagePresenter;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use PackagePresenter;

    protected $fillable = [
        "package", "line"
    ];

    protected $appends = [
      "output_lot_quantity_count", "output_unit_quantity_count", "delta_of_lot_quantity", "delta_of_unit_quantity", "highlight_reached_commit"
    ];

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }

    public function commit()
    {
        return $this->hasOne(Commit::class);
    }
}
