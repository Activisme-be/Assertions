<?php

namespace ActivismeBE\Assertions;

/**
 * Trait ValidationHelperTrait
 *
 * @package ActivismeBE\Assertions
 */
trait ValidationHelperTrait
{
    /**
     * Custom assertion to validate POST metho routes.
     *
     * @param  string $endpoint     The route where the validation happens on.
     * @param  string $attribute    The name attribute name.
     * @param  array  $data         The data in array form that needs to be validated.
     * @return void
     */
    protected function postValidationTest(string $endpoint, string $attribute, array $data = []): void
    {
        return $this->validationTest('POST', $endpoint, $attribute, $data);
    }

    /**
     * Custom assetrion to validate PUT method routes.
     *
     * @param  string $endpoint     The route where the validation happens on.
     * @param  string $attribute    The name attribute name.
     * @param  array  $data         The data in array form that needs to be validated.
     * @return void
     */
    protected function putValidationTest(string $endpoint, string $attribute, array $data = []): void
    {
        return $this->validationTest('PUT', $endpoint, $attribute, $data);
    }

    /**
     * Custom assertion to validate DELETE method routes.
     *
     * @param  string $endpoint     The route where the validation happens on.
     * @param  string $attribute    The name attribute name.
     * @param  array  $data         The data in array form that needs to be validated.
     * @return void
     */
    public function deleteValidationTest(string $endpoint, string $attribute, array $data = []): void
    {
        return $this->validationTest('DELETE', $endpoint, $attribute, $data);
    }

    /**
     * Custom assertion to validate PATCH method routes.
     *
     * @param  string $endpoint     The route where the validation happens on.
     * @param  string $attribute    The name attribute name.
     * @param  array  $data         The data in array form that needs to be validated.
     * @return void
     */
    protected function patchValidationTest(string $endpoint, string $attribute, array $data = []): void
    {
        return $this->validationTest('PATCH', $endpoint, $attribute, $data);
    }

    /**
     * Configurable method to perform validation tests.
     *
     * @param  string $method       The method name for the validation assertion.
     * @param  string $endpoint     The route where the validation happens on.
     * @param  string $attribute    The name attribute name.
     * @param  array  $data         The data in array form that needs to be validated.
     * @return void
     */
    protected function validationTest(string $method, string $endpoint, string $attribute, array $data)
    {
        return $this->call($method, $endpoint, $data)->assertSessionHasErrors($attribute);
    }
}
