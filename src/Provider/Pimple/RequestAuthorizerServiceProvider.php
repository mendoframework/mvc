<?php

/*
 * Mendo Framework
 *
 * (c) Mathieu Decaffmeyer <mdecaffmeyer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mendo\Mvc\Provider\Pimple;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Mendo\Mvc\Request\Authorizer;

/**
 * @author Mathieu Decaffmeyer <mdecaffmeyer@gmail.com>
 */
class RequestAuthorizerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['request.authorizer'] = function ($c) {
            return new Authorizer($c['auth'], $c['acl.routes']);
        };
    }
}
