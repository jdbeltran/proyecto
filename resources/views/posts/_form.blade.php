@csrf
<label for="" class="uppercase text-gray-700 text-cs">Titulo</label>
<span class="texrt-xs text-red-600"> @error('title') {{$message}} @enderror</span>
<input type="text" name="title" class="rounded boredr-gray-200 w-full mb-4" 
value="{{old('title',$post->title)}}">

<label for="" class="uppercase text-gray-700 text-cs">Slug</label>
<span class="texrt-xs text-red-600"> @error('slug') {{$message}} @enderror</span>
<input type="text" name="slug" class="rounded boredr-gray-200 w-full mb-4" 
value="{{old('slug',$post->slug)}}">


<label for="" class="uppercase text-gray-700 text-cs">Contenido</label>
<span class="texrt-xs text-red-600"> @error('body') {{$message}} @enderror</span>
<textarea  name="body" class="rounded boredr-gray-200 w-full mb-4" rows="5">{{old('body',$post->body)}}</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index')}}" class="text-indigo-600"> Volver</a>

    <input type="submit" value="Guardar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>