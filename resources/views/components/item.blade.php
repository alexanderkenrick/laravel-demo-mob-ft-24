<div class="max-w-xl flex flex-col items-start h-8 border-0 border-b-2 border-b-blue-800 mt-3">
    <h3>{{$member->name}} - {{$member->jurusan->name}} ({{$member->phone}})

    </h3>
    <img src="{{asset($member->image_path)}}" style="width: 100px; height: 100px">
</div>
