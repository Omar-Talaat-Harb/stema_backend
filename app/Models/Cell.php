<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;
    protected $fillable=[
        'approved_status',
        'quality_of_collection_bags_cleanness',
        'num_of_needles',
        'satellite_bag',
        'clots',
        'net_weight',
        'volume',
        'prewbcsx109l',
        'pre_%cd+45/34',
        'pre_viability_of_tnc',
        'post_wbcsx109/l',
        'result',
        'sample_type',
        'sample_sent_date',
        'pre_vaiblity_teqniqe',
        'pre_vaiblity_results',
        'pre_count_of_viable_cell',
        'pre_dilution_factor',
        'pre_average_viable_cd34/cd45_positive_cell_percentage',
        'pre_average_viable_absolute_cd34_positive_cell_count',
        'pre_average_viable_cd34_positive_cell_percentage',
        'pre_count_of_cd34_positive_cell_preprocessing',
        'post_vaiblity_teqniqe',
        'post_vaiblity_results',
        'post_count_of_viable_cell',
        'post_dilution_factor',
        'post_average_viable_cd34/cd45_positive_cell_percentage',
        'post_average_viable_absolute_cd34_positive_cell_count',
        'post_average_viable_cd34_positive_cell_percentage',
        'post_count_of_cd34_positive_cell_preprocessing',
        'test_performed_by',
        'start_freezing_time',
        'end_freezing_time',
        'injection_start_time',
        'injection_end_time',
        'start_temperature',
        'end_point_temperature',
        'doner_id',
    ];

    // protected $casts = [
    //     'start_freezing_time' => 'date:hh:mm',
    //     'end_freezing_time' => 'date:hh:mm',
    //     'injection_start_time' => 'date:hh:mm',
    //     'injection_end_time' => 'date:hh:mm',
    // ];

    public function getStartFreezingTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getEndFreezingTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getInjectionStartTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }

    public function getInjectionEndTimeAttribute($value){
        $time = explode(':',$value);
        if($time[0] > '12'){
            return $time[0] % 12 . ':' . $time[1] . ' pm';
        } else {
            return $time[0] . ':' . $time[1] . ' am';
        }
    }
}
