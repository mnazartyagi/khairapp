<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<div style="text-align:center">
    <h3>Patient Treatment Request</h3>
    <br>
</div>
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
        @if ($data->hospital_name)
        <li><b>Preferred Hospital:</b> {{$data->hospital_name}}</li>
        @endif
        <li><b>Treatment Type:</b> {{$data->treatment_type}}</li>
        @if ($data->accomodation)
        <li><b>Liesure Tour Accomodation:</b> {{$data->accomodation}}</li>
        @endif
        @if ($data->no_of_adult)
        <li><b>No of Adults:</b> {{$data->no_of_adult}}</li>
        @endif
        @if ($data->no_of_child)
        <li><b>No of Children:</b> {{$data->no_of_child}}</li>
        @endif
        @if ($data->no_of_days)
        <li><b>No of Nights:</b> {{$data->no_of_days}}</li>
        @endif
        @if ($data->chef_type)
        <li><b>Personal Chef Type:</b> {{$data->chef_type}}</li>
        @endif
        @if ($data->bystander_type)
        <li><b>Bystander Type:</b> {{$data->bystander_type}}</li>
        @endif
        @if ($data->interpreter=='1')
        <li><b>Interpreter:</b> Yes</li>
        @endif
</ul>