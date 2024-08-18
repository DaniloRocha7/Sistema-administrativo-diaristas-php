<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
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
            'nome' => ['required', 'min:2', 'max:255'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_quarto' => ['required', 'numeric'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer', 'min:1', 'max:100'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer', 'min:1', 'max:100'],
            'porcentagem' => ['required', 'integer'],
            'horas_quarto' => ['required', 'integer', 'min:1', 'max:100'],
        ];
    }

    protected function formataValorMonetario(string $valor)
    {
        return str_replace(['.', ','], ['', '.'], $valor);
    }

    public function validationData()
    {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formataValorMonetario($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formataValorMonetario($dados['valor_quarto']);
        $dados['valor_sala'] = $this->formataValorMonetario($dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formataValorMonetario($dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formataValorMonetario($dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formataValorMonetario($dados['valor_quintal']);
        $dados['valor_outros'] = $this->formataValorMonetario($dados['valor_outros']);

        $this->replace($dados);

        return $dados;
    }
}
