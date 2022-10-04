@extends('admin.master')
@section('title')
    Manage Applicant
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>SL no</th>
                        <th>Teacher ID</th>
                        <th>S. Name</th>
                        <th>S. Email</th>
                        <th>S. Phone No</th>
                        <th>Course</th>
                        <th>Code</th>
                        <th>Fee</th>
                        <th>Confirmation</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($applicants as $applicant)
                        @if($applicant->teacher_id == Session::get('teacherId'))
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $applicant->teacher_id }}</td>
                            <td>{{ $applicant->student_name }}</td>
                            <td>{{ $applicant->student_email }}</td>
                            <td>{{ $applicant->student_phone }}</td>
                            <td>{{ $applicant->course_name }}</td>
                            <td>{{ $applicant->course_code }}</td>
                            <td>{{ $applicant->course_fee }}</td>
                            <td>{{ $applicant->confirmation }}</td>

{{--                            <td>--}}
{{--                                <a href="{{ route('teacher-edit', ['id' => $teacher->id]) }}" class="btn btn-primary float-end">Edit</a>--}}
{{--                                <a href="" class="float-end">--}}
{{--                                    <form action="{{ route('teacher-delete') }}" method="post" id="delete">--}}
{{--                                        @csrf--}}
{{--                                        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">--}}
{{--                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?')">--}}
{{--                                    </form>--}}
{{--                                </a>--}}
{{--                            </td>--}}
                        </tr>
                    @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
