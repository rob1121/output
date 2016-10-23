<?php namespace App\Output\Presenter;


trait PackagePresenter
{
    public function getOutputLotQuantityCountAttribute()
    {
        $sum_of_lot_quantity = $this->outputs->sum("lot_quantity");
        return $sum_of_lot_quantity;
    }

    public function getOutputUnitQuantityCountAttribute()
    {
        $sum_of_unit_quantity = $this->outputs->sum("unit_quantity");
        return $sum_of_unit_quantity;
    }

    public function getDeltaOfLotQuantityAttribute()
    {
        $delta_of_lot_quantity = $this->commit->lot_quantity - $this->output_lot_quantity_count;
        return $delta_of_lot_quantity;
    }

    public function getDeltaOfUnitQuantityAttribute()
    {
        $delta_of_unit_quantity = $this->commit->unit_quantity - $this->output_unit_quantity_count;
        return $delta_of_unit_quantity;
    }

    public function getHighlightReachedCommitAttribute()
    {
        return $this->delta_of_lot_quantity < 0 && $this->delta_of_unit_quantity < 0 ? "text-success strong" : "";
    }
}