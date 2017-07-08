<?php namespace Truemedia\Lwap\App\Http\ViewComposers;

use Illuminate\View\View;

class LayoutComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('title', 'My website');
    }
}
