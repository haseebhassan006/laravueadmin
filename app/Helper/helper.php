<?php

use App\Helper\SideMenu;
use App\Helper\MenuHelper;
use Illuminate\Support\Str;

function menu() {
    return MenuHelper::menuBar();
}

function sidemenu(){

    return SideMenu::sideBar();

}

function appName($appName){

    return $appName;

}

function showImage($imageName){

    return "app/user/images".$imageName;

}

function setSingleLink($title,$icon,$v_can=null,$v_route=null){
    return [
        "title"=>$title,
        "icon"=>$icon,
        "v-can"=>$v_can,
        "v-route"=>$v_route,
    ];
}

function singleFileUpload($request, $path)
{
    if ($request->hasfile('thumbnail')) {
        $name = Str::slug($request->name, '-')  . "-" . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path($path), $name);
    } else
        $name = "";
    return $name;
}

function setSubMenu($title,$icon,$route=null){
    return [
        "title"=>$title,
        "icon"=>$icon,
        "route"=>$route,
    ];
 }
