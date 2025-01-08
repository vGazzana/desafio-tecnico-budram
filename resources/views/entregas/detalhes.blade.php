<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Entrega</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-lg xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 text-gray-900 dark:text-white">
                <h1 class="title">Detalhes da Entrega</h1>
                <p><strong>Volumes:</strong> {{ $entrega->volumes }}</p>
                <p><strong>Remetente:</strong> {{ $entrega->remetente_nome }}</p>
                <p><strong>Destinatário:</strong> {{ $entrega->destinatario_nome }}</p>
                <p><strong>Transportadora:</strong> {{ $entrega->transportadora->fantasia }}
                    (CNPJ: {{ $entrega->transportadora->cnpj }})</p>
                <h2 class="text-xl font-semibold mt-6">Rastreamento</h2>
                <ul class="divide-y dark:divide-slate-700">
                    @foreach ($entrega->rastreamentos as $rastreamento)
                        <li class="flex justify-between items-center py-2">
                            <span>{{ $rastreamento->message }}</span>
                            <span
                                class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($rastreamento->date)->format('d/m/Y - H:i:s') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
