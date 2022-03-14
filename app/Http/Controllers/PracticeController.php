<?php

namespace App\Http\Controllers;

use App\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
    public function index(Practice $practice)
    {
        return $practice->get();
    }
}
