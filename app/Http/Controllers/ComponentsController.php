<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function header(Request $request) {
        return view('admin.header');
    }

    public function nav(Request $request) {
        return view('admin.nav');
    }

    public function banner(Request $request) {
        return view('admin.banner');
    }

    public function welcome(Request $request) {
        return view('admin.welcome-home');
    }

    public function story(Request $request) {
        return view('admin.story');
    }

    public function about(Request $request) {
        return view('admin.about');
    }

    public function causes(Request $request) {
        return view('admin.causes');
    }

    public function customers(Request $request) {
        return view('admin.customers');
    }

    public function contact(Request $request) {
        return view('admin.contact');
    }

    public function colors(Request $request) {
        return view('admin.colors');
    }

    public function goals(Request $request) {
        return view('admin.goals');
    }

    public function courses(Request $request) {
        return view('admin.courses');
    }

    public function coursesAdd(Request $request) {
        return view('admin.courses-add');
    }

    public function coursesEdit(Request $request) {
        return view('admin.courses-edit' ,[
            'id' => $request->id
        ]);
    }

    public function clint(Request $request) {
        return view('admin.clint');
    }

    public function clintAdd(Request $request) {
        return view('admin.clint-add');
    }

    public function clintEdit(Request $request) {
        return view('admin.clint-edit' ,[
            'id' => $request->id
        ]);
    }

    public function users(Request $request) {
        return view('admin.users');
    }

    public function usersAdd(Request $request) {
        return view('admin.users-add');
    }

    public function usersEdit(Request $request) {
        return view('admin.users-edit' ,[
            'id' => $request->id
        ]);
    }
}
