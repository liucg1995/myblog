<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 14:41
 */
namespace App\Http\ViewComposers;

use App\Repositories\LinkRepository;
use Illuminate\View\View;

class LinkComposer
{

    protected $linkRepository;

    /**
     * Create a new profile composer.
     *
     * @internal param UserRepository $users
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(LinkRepository $linkRepository)
    {
        $this->linkRepository = $linkRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $link= $this->linkRepository->selectAll();
        $view->with('links', $link);
    }
}