@extends('layouts.app')

<x-app-layout>
  <ul>
    @foreach ($users as $user)
    <li>{{$user->name}}</li>
    @endforeach
  </ul>
</x-app-layout>