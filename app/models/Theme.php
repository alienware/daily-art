<?php

class Theme extends Eloquent {
	public $guarded = array();

	public function art()
	{
		return $this->hasMany('Art');
	}
	

	public static function today()
	{
		$theme = Theme::where('date', '>=', date('Y-m-d'))->where('date', '<=', date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d')))))->first();
		return $theme;
	}

	public static function oldCount($date)
	{
		if(empty($date))
		{
			$date = \Carbon\Carbon::today();
			$theme = Theme::where('date', '<=', \Carbon\Carbon::today())->get();
		}else
			$theme = Theme::where('date', '<=', \Carbon\Carbon::today())->where('date', '>=', $date)->get();
		return count($theme);
	}
}
