<div class="card-header">{{ $student->nim }}</div>
<div class="card-body">
Name : {{ $student->name }} <br>
Class : {{ $student->kelas->class_name }} <br>
Department : {{ $student->department }} <br>
Phone Number : {{ $student->phone_number }} <br>
Created at : {{ $student->created_at }} <br>
Updated at : {{ $student->updated_at }} <br>
</div>
</div>