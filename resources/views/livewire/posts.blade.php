<div>
	@if(session()->has('message'))
		<div class="alet alet-success">
			{{ session('message') }}
		</div>
	@endif

	@if($updateMode)
		@include('livewire.update')
	@else
		@include('livewire.create')
	@endif

	<table class="table table-bordered mt-5">
		<thead>
			<tr>
				<td>No.</td>
				<td>Title</td>
				<td>Body</td>
				<td width="150px">Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
                <tr>
                 	<td>{{ $post->id }}</td>
                 	<td>{{ $post->title }}</td>
                 	<td>{{ $post->body }}</td>
                 	<td>
                 		<button wire:click="edit({{ $post->id}})" class="btn btn-primary btn-sm">Edit</button>
                 		<button wire:click="delete({{ $post->id}})" class="btn btn-primary btn-sm">Delete</button>
                 	</td>
                </tr> 
			@endforeach
		</tbody>
	</table>
</div>
