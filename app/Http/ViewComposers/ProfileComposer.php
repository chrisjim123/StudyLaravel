 <?php
namespace App\Http\ViewComposers;

use illuminate\View\View;

 Class ProfileComposer
 {
 	public function compose(View $view)
 	{
 		$view->with('married', random_int(0, 1));
 	}	
 }