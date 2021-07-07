<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class NewsController extends Controller
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request): \Illuminate\View\View
    {
        return view('news.list', [
            'news' => $request->has('search') && !empty($request->input('search'))
                ? $this->newsRepository->search($request->input('search'))
                : $this->newsRepository->getRecents()
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function view(string $id): \Illuminate\View\View
    {
        return view('news.view', [
            'new' => $this->newsRepository->find($id)
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:news|max:255',
            'author' => 'required|max:255',
            'short_description' => 'required|max:255',
            'description' => 'required',
        ]);
        try {
            $this->newsRepository->create($request->all());
            return redirect()->route('news.list');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * @return \Illuminate\View\View
     */
    public function registerForm(): \Illuminate\View\View
    {
        return view('news.register');
    }
}
