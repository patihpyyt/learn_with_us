<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiCalculation extends Model
{
    use HasFactory;

 
    protected $table = 'ai_calculations';

   
   protected $fillable = [
    'user_id',
    'chat_session_id',
    'input_data',
    'ai_prompt',
    'ai_response',
];

   
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
