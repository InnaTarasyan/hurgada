<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
	/** @use HasFactory<\\Database\\Factories\\FavoriteFactory> */
	use HasFactory;

	protected $fillable = [ 'user_id', 'favoritable_id', 'favoritable_type' ];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function favoritable(): MorphTo
	{
		return $this->morphTo();
	}
}
