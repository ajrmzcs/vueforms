@extends ('layouts.app')



@section('content')
<div class="container padding-top">

    <h2 class="subtitle  is-2">My Projects</h2>

    @include ('projects.list')

    <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

        <div class="field">

            <label for="name" class="label">Project Name:</label>
            <div class="control">
                <input type="text" id="name" name="name" class="input is-primary" v-model="form.name">
                <p class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></p>
            </div>

        </div>

        <div class="field">

            <label for="description" class="label">Description:</label>
            <div class="control">
                <input type="text" id="description" name="description" class="input is-primary" v-model="form.description">
                <p class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></p>
            </div>

        </div>

        <div class="field">

            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>

        </div>

    </form>
</div>
@endsection