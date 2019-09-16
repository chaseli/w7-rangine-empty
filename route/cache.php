<?php

//如果group设置了middleware，则该分组下的所有路由将拥有该middleware
irouter()->middleware('TestMiddleware')->name('cache')->group('/cache', function (\W7\Core\Route\Route $route) {
//	如果路由定义了name，则按照该路由定义的name，即route-name
	$route->name('cache-get')->get('', [\W7\App\Controller\CacheController::class, 'get']);
	$route->name('cache-set')->post('', [\W7\App\Controller\CacheController::class, 'set']);
	$route->delete('', [\W7\App\Controller\CacheController::class, 'destroy']);
});