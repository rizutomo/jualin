<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use ReCaptcha\ReCaptcha;
use Exception;

class Captcha implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            $recaptcha = new ReCaptcha(env('CAPTCHA_SECRET'));
            $response = $recaptcha->verify($value, $_SERVER['REMOTE_ADDR']);
            return $response->isSuccess();
        } catch (Exception $e) {
            // Handle the exception, log the error, or return an appropriate response.
            return false; // Example: Return false for validation failure.
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The reCAPTCHA verification failed.';
    }
}
