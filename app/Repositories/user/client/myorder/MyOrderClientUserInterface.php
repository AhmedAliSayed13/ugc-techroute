<?php namespace App\Repositories\user\client\myorder;

interface MyOrderClientUserInterface
{
    public function index(): array;
    public function edit($id);
    public function show($id): array;
    public function orderRequestsReview($id): array;
}
