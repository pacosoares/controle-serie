<x-layout title="Create a new series">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
        <input class="form-control"  type="text" name="nome" id="nome" value="{{ old('nome') }}">
          
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</x-layout>