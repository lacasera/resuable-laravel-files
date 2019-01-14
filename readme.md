```
This is a collection of resuable Laravel components
```

| File | Type | Description | Usage |
|------|------|-------------|-------|
|RequiredQueryParams.php| Middleware | Middleware to validate all Query Parameters | Add it to the appropriate middleware array |
|BaseJsonRequest.php|Request Validator| Validates JSON Requests  | Create a form request that extends BaseJsonRequest|


##### Example for BaseJsonRequest.php
```php
namespace App\Http\Request;

CreateUserRequest extends BaseJsonRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

        ];
    }

    public function messages()
    {
        return [

        ];
    }

}


