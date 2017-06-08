<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 14:41
 */
namespace App\Http\ViewComposers;

use App\Repositories\MenuRepository;
use Illuminate\View\View;

class MenuComposer
{

    protected $menuRepository;

    /**
     * Create a new profile composer.
     *
     * @internal param UserRepository $users
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $menu= $this->menuRepository->selectAll();
        $view->with('menus', $menu);
    }
}