@extends('layouts.master')

@section('content')

    <p class="title is-3 has-text-grey"> {{ $patient->full_name }} </p>

    {!! link_to_with_icon('fas fa-arrow-left fa-2x', 'patients.index', [], 'Back to Patients', 'has-text-info') !!}

    @component('components.patients.details', ['patient' => $patient]) @endcomponent

    <div class="box">
        <p> <strong>Home Type:</strong> {{ $patient->homeType->value() }} </p>
        <p> <strong>Water Type:</strong> {{ $patient->waterType->value() }} </p>
        <p> <strong>Heating Type:</strong> {{ $patient->heatingType->value() }} </p>
        <p> <strong>Has Pets?:</strong> @include('layouts._check', ['value' => $patient->has_pet]) </p>
        <p> <strong>Has Electricity?:</strong> @include('layouts._check', ['value' => $patient->has_electricity]) </p>
        <p> <strong>Has Refrigerator?:</strong> @include('layouts._check', ['value' => $patient->has_refrigerator]) </p>
    </div>

    <div class="box">
        <div class="field is-grouped is-grouped-centered">
            @can ('view', \App\MedicalRecord::class)
                <p class="control">
                    {!! link_to_with_icon('fas fa-clock fa-2x', 'patients.medical_records.index', $patient->id, 'View Medical Records', 'has-text-info') !!}
                </p>
            @endcan

            @can ('update', $patient)
                <p class="control">
                    {!! link_to_with_icon('fas fa-edit fa-2x', 'patients.edit', $patient, 'Edit Patient') !!}
                </p>
            @endcan

            @can ('delete', $patient)
                <p class="control">
                    {!! delete_link_with_icon('fas fa-trash-alt fa-2x', 'patients.destroy', $patient, 'Delete Patient', 'has-text-danger') !!}
                </p>
            @endcan
        </div>
    </div>

@endsection
