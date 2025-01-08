<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="title">Resultados da Pesquisa</h1>
                <ul class="divide-y divide-gray-200">
                    @foreach ($entregas as $entrega)
                        <li
                            class="py-4 px-6 flex justify-between items-center rounded-lg dark:border  dark:border-gray-700">
                            <div>
                                <p class="text-lg font-medium text-gray-900 dark:text-white">
                                    {{ $entrega->destinatario_nome }}</p>
                                <p class="text-gray-500 dark:text-gray-300">{{ $entrega->volumes }} volumes</p>
                            </div>
                            <a href="{{ route('detalhes', $entrega->id) }}" class="primary_button">
                                Ver Detalhes
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
