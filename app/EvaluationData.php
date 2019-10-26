<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationData extends Model
{
    // evaluation_data & trainer_evaluation relation
    public function evaluations() {
        return $this->hasMany('App\TrainerEvaluation');
    }
}
