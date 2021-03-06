<input type="hidden" name="id" value="{{ $patient->id }}">

{{ csrf_field() }}

<div class="box">
    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey">Names / Gender</label>
        </div>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="text" name="last_name" value="{{ old('last_name', $patient->last_name) }}" placeholder="The Patient's last name" autofocus>
                    {!! icon('fas fa-user', 'is-small is-left') !!}
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'last_name'])
            </div>

            <div class="field">
                <p class="control has-icons-left is-expanded">
                    <input class="input" type="text" name="name" value="{{ old('name', $patient->name) }}" placeholder="The Patient's name">
                    {!! icon('fas fa-user', 'is-small is-left') !!}
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'name'])
            </div>

            <div class="field is-narrow">
                <p class="control">
                    <vue-select
                        name="gender"
                        :items="{{ $genders }}"
                        data-selected="{{ old('gender', $patient->gender) }}"
                    >
                    </vue-select>
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'gender'])
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey">Address</label>
        </div>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="text" name="address" value="{{ old('address', $patient->address) }}" placeholder="The Patient's Address">
                    {!! icon('fas fa-address-card', 'is-small is-left') !!}
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'address'])
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey">Phone</label>
        </div>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="tel" name="phone" value="{{ old('phone', $patient->phone) }}" placeholder="The Patient's Phone Number">
                    {!! icon('fas fa-phone', 'is-small is-left') !!}
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'phone'])
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey">Identification</label>
        </div>

        <div class="field-body">

            <div class="field is-narrow">
                <p class="control">
                    <vue-select
                        name="doc_type_id"
                        :items="{{ $doc_types }}"
                        data-selected="{{ old('doc_type_id', $patient->doc_type_id) }}"
                    >
                    </vue-select>
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'doc_type_id'])
            </div>

            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" type="text" name="dni" value="{{ old('dni', $patient->dni) }}" placeholder="The Patient's ID Number">
                    {!! icon('fas fa-id-badge', 'is-small is-left') !!}
                </p>

                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'dni'])
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey">Birth Date</label>
        </div>

        <div class="field-body">
            <datepicker field-name="birth_date" data-date="{{ old('birth_date', $patient->birth_date) }}">
                @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'birth_date'])
            </datepicker>
        </div>
    </div>

    {{-- adds spacing, do NOT remove --}}
    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey"></label>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey"></label>
        </div>

        <div class="field-body">
            <div class="field">
                <div class="field is-narrow">
                    <p class="control">
                        <label class="label has-text-weight-bold has-text-grey">Medical Insurance</label>
                        <p class="control">
                            <vue-select
                                name="medical_insurance_id"
                                :items="{{ $medical_insurances }}"
                                data-selected="{{ old('medical_insurance_id', $patient->medical_insurance_id) }}"
                            >
                            </vue-select>
                        </p>
                    </p>

                    @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'medical_insurance_id'])
                </div>
            </div>

            <div class="field">
                <div class="field is-narrow">
                    <p class="control">
                        <label class="label has-text-weight-bold has-text-grey">Home Type</label>

                        <vue-select
                            name="home_type_id"
                            :items="{{ $home_types }}"
                            data-selected="{{ old('home_type_id', $patient->home_type_id) }}"
                        >
                        </vue-select>
                    </p>

                    @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'home_type_id'])
                </div>
            </div>

            <div class="field">
                <div class="field is-narrow">
                    <p class="control">
                        <label class="label has-text-weight-bold has-text-grey">Water Type</label>

                        <vue-select
                            name="water_type_id"
                            :items="{{ $water_types }}"
                            data-selected="{{ old('water_type_id', $patient->water_type_id) }}"
                        >
                        </vue-select>
                    </p>

                    @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'water_type_id'])
                </div>
            </div>

            <div class="field">

                <div class="field is-narrow">
                    <p class="control">
                        <label class="label has-text-weight-bold has-text-grey">Heating Type</label>

                        <vue-select
                            name="heating_type_id"
                            :items="{{ $heating_types }}"
                            data-selected="{{ old('heating_type_id', $patient->heating_type_id) }}"
                        >
                        </vue-select>
                    </p>

                    @include('layouts._field_errors', ['errors,' => 'errors', 'field' => 'heating_type_id'])
                </div>
            </div>
        </div>
    </div>

    {{-- adds spacing, do NOT remove --}}
    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey"></label>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label">
            <label class="field-label has-text-weight-bold has-text-grey"></label>
        </div>

        <div class="field-body">

            <div class="field">
                @component('components.inputs.checkbox', ['name' => 'has_pet', 'value' => old('has_pet', $patient->has_pet)])
                     Has Pets?
                @endcomponent
            </div>

            <div class="field">
                @component('components.inputs.checkbox', ['name' => 'has_electricity', 'value' => old('has_electricity', $patient->has_electricity)])
                    Has Electricity?
                @endcomponent
            </div>

            <div class="field">
                @component('components.inputs.checkbox', ['name' => 'has_refrigerator', 'value' => old('has_refrigerator', $patient->has_refrigerator)])
                     Has Refrigerator?
                @endcomponent
            </div>
        </div>
    </div>
</div>

<div class="box">
    <div class="field">
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-primary">
                    {{ $submitButtonText }}
                </button>
            </div>

            <div class="control">
                {!! link_to('Cancel', 'patients.index', [], 'button is-danger is-outlined') !!}
            </div>
        </div>
    </div>
</div>
