	<div {{$attributes->merge(['class' => 'border border-solid rounded-md border-blue-300 p-7 shadow-md hover:bg-blue-50 hover:shadow-lg hover:cursor-pointer mt-4'])}} href="javascript:void(0)" data-modal-target="project_card-modal" data-modal-toggle="project_card-modal" >
		{{$slot}}
	</div>
