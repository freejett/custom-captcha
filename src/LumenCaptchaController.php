<?php

namespace FreeJett\Captcha;

use Exception;
use Laravel\Lumen\Routing\Controller;

/**
 * Class CaptchaController
 * @package FreeJett\Captcha
 */
class LumenCaptchaController extends Controller
{
    /**
     * get CAPTCHA
     *
     * @param Captcha $captcha
     * @param string $config
     * @return array|mixed
     * @throws Exception
     */
    public function getCaptcha(Captcha $captcha, $config = 'default')
    {
        return $captcha->create($config);
    }
}
