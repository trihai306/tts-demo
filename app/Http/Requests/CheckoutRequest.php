<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'payment_method' => 'required|string',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',  // Kiểm tra id sản phẩm có tồn tại không
            'products.*.quantity' => 'required|integer|min:1',

        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'The first name is required.',
            'lastname.required' => 'The last name is required.',
            'email.required' => 'An email address is required.',
            'email.email' => 'The email must be a valid email address.',
            'phone.required' => 'A phone number is required.',
            'total_amount.required' => 'The total amount is required.',
            'status.required' => 'Order status is required.',
            'payment_method.required' => 'A payment method is required.',
            'products.required' => 'You must provide at least one product.',
            'products.*.id.exists' => 'The selected product does not exist.',
            'products.*.quantity.required' => 'Quantity is required for each product.',
            'products.*.price.required' => 'Price is required for each product.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => $validator->errors()->first() . "."
            ], 200)
        );
    }
}
