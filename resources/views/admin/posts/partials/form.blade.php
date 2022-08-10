<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la publicación ...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
 {!! Form::label('slug', 'Slug:') !!}
 {!! Form::text('slug', null,['class' => 'form-control', 'placeholder' => 'link creado', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
 {!! Form::label('category_id', 'Categoria') !!}
 {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
 <p class="font-weight bold">Etiquetas</p>

@foreach ($tags as $tag)

    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{ $tag->name }}
    </label>

@endforeach

@error('tags')
    <br>
    <small class="text-danger">{{ $message }}</small>
@enderror
</div>

<div class="form-group">

<p class="font-weight bold">Estado</p>

<label>
    {!! Form::radio('status', 1, true) !!}
    Borrador
</label>

<label>
    {!! Form::radio('status', 2) !!}
    Publicado
</label>

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
         @isset ($post->image)
         <img id="picture" src="{{Storage::url($post->image->url)}}">
        @else
        <img id="picture" src="https://i0.wp.com/delajusticia.com/wp-content/uploads/2015/12/pensando.png?ssl=1" alt="">
         @endisset
        </div>
    </div>

<div class="col">
    <div class="form-group">
        {!! Form::label('file', 'Imagen que se mostrara en su publicacion') !!}
        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
    
        @error('file')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    
    </div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quam dolor laboriosam nesciunt vel cupiditate iusto mollitia sint recusandae, dicta aliquam repellat nostrum quia commodi necessitatibus sequi illum eius maxime?</p>

    </div>
    </div>

    <div class="form-group">
        {!! Form::label('extract', 'Texto superior:') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>

    <div class="form-group">
    {!! Form::label('body', 'Texto inferior:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    </div>
