<?php

namespace App\Controllers;

use App\Models\NewsModel;

use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }
    

    public function article()
    {
        if ($this->request->getMethod() == 'post')
        {
            $post = $this->request->getPost(['newstitle', 'newslug', 'newsbody']);


            if (! $this->validate([
                'newstitle' => 'required|min_length[2]|max_length[50]',
                'newslug' => 'required',
                'newsbody' => 'required',
            ])) {
                #dd($this->validator->getErrors());
                // The validation failed.
                return view('errors/error', [
                    'errors' => $this->validator->getErrors(),
                ]);
            }

            
            dd("Success!");

            #dd($post);
            #foreach($this->request->getPost() as $key => $val)
            #    {
            #        dd($this->request->getVar('newsitem'));
            #        echo "<p>Key: ".$key. " Value:" . $val . "</p>\n";
            #    }
        }
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

}