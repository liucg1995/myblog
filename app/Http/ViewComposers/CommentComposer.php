<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/19
 * Time: 14:41
 */
namespace App\Http\ViewComposers;

use App\Http\Repositories\CategoryRepository;
use App\Repositories\CommentRepository;
use Illuminate\View\View;

class CommentComposer
{

    protected $commentpostsRepository;

    /**
     * Create a new profile composer.
     *
     * @internal param UserRepository $users
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CommentRepository $commentpostsRepository)
    {
        $this->commentpostsRepository = $commentpostsRepository;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $commentposts = $this->commentpostsRepository->commentposts();
        $view->with('commentposts', $commentposts);
    }
}