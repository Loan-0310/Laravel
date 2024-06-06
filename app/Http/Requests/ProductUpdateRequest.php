<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:product',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required'. $this->id
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Sản phẩm không được để trống. Vui lòng điền tên sản phẩm.',
            'name.unique' => 'Sản phẩm đã tồn tại. Hãy thử đặt tên sản phẩm khác.',
            'price.required' => 'Giá sản phẩm không được để trống. Vui lòng điền giá sản phẩm.',
            'image.required' => 'Ảnh của sản phẩm không được để trống. Vui lòng nhập ảnh của sản phẩm.',
            'description.required' => 'Nhận xét của sản phẩm không được để trống. Vui lòng điền nhận xét của sản phẩm.'
        ];
    }
}
