@component('mail::message')

Hello, Hospital

Here are the deatils of the patient </br>
for the treatment plan

<ul style="list-style-type:none;">
        <li><b>Patient Name:</b> {{$data->patient_name}}</li>
        <li><b>Email:</b> {{$data->normal_user_email}}</li>
        <li><b>Gender:</b> {{$data->gender}}</li>
        <li><b>DOB:</b> {{$data->dob}}</li>
        <li><b>Country:</b> {{$data->country}}</li>
        @if ($data->height)
        <li><b>Height(cms):</b> {{$data->height}}</li>
        @endif
        @if ($data->weight)
        <li><b>Weight(kg):</b> {{$data->weight}}</li>
        @endif
        @if ($data->body_structure)
        <li><b>Body Structure:</b> {{$data->body_structure}}</li>
        @endif
        <li><b>Present Complaints:</b> {{$data->complaints_history}}</li>
        @if ($data->investigation_details)
        <li><b>Investigations Details:</b> {{$data->investigation_details}}</li>
        @endif
        @if ($data->treatment_details)
        <li><b>Treatment Details:</b> {{$data->treatment_details}}</li>
        @endif
        @if ($data->current_medication)
        <li><b>Current Medication:</b> {{$data->current_medication}}</li>
        @endif
        @if ($data->allergy_detail)
        <li><b>Allergy Details:</b> {{$data->allergy_detail}}</li>
        @endif
        @if ($data->appetite!=null)
        <li><b>Appetite:</b> {{$data->appetite}}</li>
        @endif
        @if ($data->bowel_habits!=null)
        <li><b>Bowel Habits:</b> {{$data->bowel_habits}}</li>
        @endif
        @if ($data->urine_quantity!=null)
        <li><b>Urine Quantity:</b> {{$data->urine_quantity}}</li>
        @endif
        @if ($data->sleep!=null)
        <li><b>Sleep:</b> {{$data->sleep}}</li>
        @endif
        <li><b>Treatment Type:</b> {{$data->treatment_type}}</li>
</ul>
    
@endcomponent