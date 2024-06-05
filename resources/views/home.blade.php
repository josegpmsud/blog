<x-app-layout>
    <h1>Bienvenido Esta es la pagina principal</h1> 
    <div>
        <x-alert type="info">
            
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>
        <x-alert type="danger">
            
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>
        <x-alert type="success">
            
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>
        <x-alert type="warning">
            
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>
        <x-alert type="dark">
            
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>

        <x-alert>Mensaje general</x-alert>

        <x-alert/>

        
        
    </div> 
    
</x-app-layout>