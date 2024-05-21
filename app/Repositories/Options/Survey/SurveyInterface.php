<?php namespace App\Repositories\Options\Survey;

use App\Helpers\DataResponse;
use App\Models\Survey;
interface SurveyInterface {
    public function index():array;
    public function create():array;
    public function show($key);
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
    public function storeAnswer($key,$answer);
    public function storeReason($request);
}