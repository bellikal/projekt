@props(['id' => '' , 'label' => false , 'disabled' => false, 'required' => NULL , 'name' => '', 'description' => ''])

<div class="w-full">
    <div class="relative w-full">
        @if($label)
            <label for="{{$id}}" class="text-sm text-slate-500">
                {{$label}}
                @if($required)
                    <span class="text-red-500">*</span>
                @endif
            </label>
        @endif
        <input id="{{$id}}"
               name="{{$name}}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }} {!! $attributes->merge(['class' => 'border-slate-300 w-full py-2 focus:border-blue focus:ring-blue-500 rounded-sm shadow-sm']) !!}>

            @if($description)
                <p class="text-sm text-slate-500 mt-1">{{ $description }}</p>
            @endif
        @if($errors->has($name))
            <ul class="text-sm mt-1 text-red-600 space-y-1">
                @foreach ($errors->get($name) as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
