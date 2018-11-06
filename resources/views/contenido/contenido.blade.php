    @extends('principal')
    @section('contenido')

    @if(Auth::check())
            @if (Auth::user()->idrol == 1)

            <template v-if="menu==1">
                <user></user>
            </template>

            <template v-if="menu==2">
                <rol></rol>
            </template>

            <template v-if="menu==3">
                <ambiental></ambiental>
            </template>
            <template v-if="menu==4">
                <abc></abc>
            </template>
            <template v-if="menu==5">
                <laboral></laboral>
            </template>

            @elseif (Auth::user()->idrol == 2)
            <template v-if="menu==3">
                <laboral></laboral>
            </template>

            @elseif (Auth::user()->idrol == 3)
            <template v-if="menu==4">
                <abc></abc>
            </template>

            @elseif (Auth::user()->idrol == 4)
            <template v-if="menu==3">
                <ambiental></ambiental>
            </template>

            @elseif (Auth::user()->idrol == 5)
            <template v-if="menu==3">
                <ambiental></ambiental>
            </template>
            <template v-if="menu==4">
                <abc></abc>
            </template>
            <template v-if="menu==5">
                <laboral></laboral>
            </template>
            @else

            @endif

    @endif
       
        
    @endsection