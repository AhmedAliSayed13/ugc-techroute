<?php namespace App\Repositories\user\client\myorder;

interface MyOrderClientUserInterface
{
    public function index(): array;
    public function edit($id);
}