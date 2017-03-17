<?php

namespace App\Http\Requests;

use Illuminate\Http\Request as IlluminateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;

class Request
{
    /**
     * @var IlluminateRequest
     */
    public $request;

    /**
     * @var array
     */
    protected $rules = [];


    /**
     * Request constructor.
     * @param IlluminateRequest $request
     * @param array $rules
     */
    public function __construct(IlluminateRequest $request, $rules = [])
    {
        $this->request = $request;
        $this->rules = array_merge($this->rules, $rules);
        $this->validate($this->request, $this->rules());
        $this->getParamsFromRequest($this->request);
    }

    /**
     * Validate the given request with the given rules.
     *
     * @param  IlluminateRequest $request
     * @param  array $rules
     * @param  array $messages
     * @param  array $customAttributes
     * @return void
     */
    public function validate(IlluminateRequest $request, array $rules, array $messages = [], array $customAttributes = [])
    {

        $validator = $this->getValidationFactory()->make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
    }

    /**
     * Throw the failed validation exception.
     *
     * @param  IlluminateRequest $request
     * @param  \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     * @throws ValidationException
     */
    protected function throwValidationException(IlluminateRequest $request, $validator)
    {
        throw new ValidationException($validator, $this->buildFailedValidationResponse(
            $request, $this->formatValidationErrors($validator)
        ));
    }


    /**
     * {@inheritdoc}
     */
    protected function buildFailedValidationResponse(IlluminateRequest $request, array $errors)
    {
        return new JsonResponse($errors, 422);
    }

    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->getMessages();
    }

    /**
     * Get a validation factory instance.
     *
     * @return \Illuminate\Contracts\Validation\Factory
     */
    protected function getValidationFactory()
    {
        return app('validator');
    }

    /**
     * @param IlluminateRequest $request
     * @return null
     */
    public function getParamsFromRequest(IlluminateRequest $request)
    {
        return null;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return $this->rules;
    }

    /**
     * @param string $method
     * @param array $args
     * @return mixed|void
     */
    public function __call($method, $args)
    {
        if(method_exists($this->request, $method))
        {
            return call_user_func_array([$this->request, $method], $args);
        }

        throw new \BadMethodCallException();
    }
}