<?php

namespace MP\RestApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MPRestApiBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSOAuthServerBundle';
    }
}
