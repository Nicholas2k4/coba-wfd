<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

Route::get('/flights', [FlightController::class,'index'])->name('flights');
Route::get('/flights/ticket/{id}', [FlightController::class, 'ticket'])->name('flights.ticket');
Route::get('/flights/book/{id}', [FlightController::class, 'book'])->name('flights.book');

Route::post('/ticket/submit', [TicketController::class, 'store'])->name('ticket.submit');
Route::put('/ticket/board/{id}', [TicketController::class, 'board'])->name('ticket.board');
Route::delete('/ticket/delete/{id}', [TicketController::class, 'delete'])->name('ticket.delete');