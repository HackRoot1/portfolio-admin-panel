<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

abstract class Controller
{
    public function __call(string $method, array $parameters)
    {
        $httpVerb = request()->method();

        if (in_array($method, ['index', 'create', 'edit', 'show'], true) && in_array($httpVerb, ['GET', 'HEAD'], true)) {
            $controllerClass = class_basename(static::class);
            $resource = Str::snake(str_replace('Controller', '', $controllerClass));
            $viewMethod = $method === 'show' ? 'view' : $method;
            $viewName = "admin.{$resource}.{$viewMethod}";

            if (View::exists($viewName)) {
                $viewData = [];
                if (in_array($method, ['edit', 'show'], true) && isset($parameters[0])) {
                    $viewData[$resource] = $parameters[0];
                }

                return view($viewName, $viewData);
            }

            return view('admin.blank-page');
        }

        abort(501, 'This route is not implemented yet.');
    }
}
