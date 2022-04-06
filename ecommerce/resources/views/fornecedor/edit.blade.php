<x-app-layout>
    <x-slot name="header">
        Editar Fornecedor
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.update',$fornecedor->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div>
                            <x-label>Informe o cnpj:</x-label>
                            <x-input name="cnpj" value="{{$fornecedor->cnpj}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div>
                            <x-label>Informe o nome fantasia:</x-label>
                            <x-input name="nomeFantasia" value="{{$fornecedor->nomeFantasia}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div>
                            <x-label>Informe a razão social:</x-label>
                            <x-input name="razaoSocial" value="{{$fornecedor->razaoSocial}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div>
                            <x-label>Informe o telefone:</x-label>
                            <x-input name="numTel" value="{{$fornecedor->numTel}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div>
                            <x-label>Informe o endereço:</x-label>
                            <x-input name="endereco" value="{{$fornecedor->endereco}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div>
                            <x-label>Informe o email:</x-label>
                            <x-input name="email" value="{{$fornecedor->email}}"
                                     class="block mt-1 w-full"></x-input>
                        </div>
                        <div class="mt-5">
                            <x-button>Alterar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>

