<?php

class Articles extends Controller
{
    public function index()
    {
        $this->loadModel("Article");
        $articles = $this->Article->getAll();
        $this->render('index', ['articles' => $articles]);
    }
}